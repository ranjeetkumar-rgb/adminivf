<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CompressImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:compress 
                            {directory? : Directory to compress images in}
                            {--preset=medium : Compression preset (high, medium, low, thumbnail, avatar, logo)}
                            {--webp : Convert to WebP format}
                            {--quality= : Custom quality (1-100)}
                            {--max-width= : Custom max width}
                            {--max-height= : Custom max height}
                            {--dry-run : Show what would be compressed without actually doing it}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Batch compress images in storage directory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $directory = $this->argument('directory');
        $preset = $this->option('preset');
        $convertToWebp = $this->option('webp');
        $dryRun = $this->option('dry-run');

        // Validate preset
        $presets = ImageService::getCompressionPresets();
        if (!isset($presets[$preset])) {
            $this->error("Invalid preset: {$preset}");
            $this->info("Available presets: " . implode(', ', array_keys($presets)));
            return 1;
        }

        // Build options
        $options = [
            'preset' => $preset,
            'convert_to_webp' => $convertToWebp,
        ];

        // Override with custom options if provided
        if ($this->option('quality')) {
            $options['quality'] = (int) $this->option('quality');
        }
        if ($this->option('max-width')) {
            $options['max_width'] = (int) $this->option('max-width');
        }
        if ($this->option('max-height')) {
            $options['max_height'] = (int) $this->option('max-height');
        }

        $this->info("Image Compression Tool");
        $this->info("====================");
        $this->info("Preset: {$preset}");
        $this->info("Convert to WebP: " . ($convertToWebp ? 'Yes' : 'No'));
        $this->info("Dry Run: " . ($dryRun ? 'Yes' : 'No'));
        $this->info("");

        if ($directory) {
            $this->compressDirectory($directory, $options, $dryRun);
        } else {
            $this->compressAllDirectories($options, $dryRun);
        }

        return 0;
    }

    /**
     * Compress images in a specific directory
     */
    private function compressDirectory(string $directory, array $options, bool $dryRun)
    {
        if (!Storage::disk('public')->exists($directory)) {
            $this->error("Directory not found: {$directory}");
            return;
        }

        $this->info("Scanning directory: {$directory}");
        
        $files = Storage::disk('public')->files($directory);
        $imageFiles = $this->filterImageFiles($files);

        if (empty($imageFiles)) {
            $this->warn("No image files found in directory: {$directory}");
            return;
        }

        $this->info("Found " . count($imageFiles) . " image files");
        $this->info("");

        if ($dryRun) {
            $this->showDryRunResults($imageFiles, $options);
        } else {
            $this->performCompression($imageFiles, $options);
        }
    }

    /**
     * Compress images in all directories
     */
    private function compressAllDirectories(array $options, bool $dryRun)
    {
        $this->info("Scanning all directories...");
        
        $allFiles = Storage::disk('public')->allFiles();
        $imageFiles = $this->filterImageFiles($allFiles);

        if (empty($imageFiles)) {
            $this->warn("No image files found in storage");
            return;
        }

        $this->info("Found " . count($imageFiles) . " image files across all directories");
        $this->info("");

        if ($dryRun) {
            $this->showDryRunResults($imageFiles, $options);
        } else {
            $this->performCompression($imageFiles, $options);
        }
    }

    /**
     * Filter image files from file list
     */
    private function filterImageFiles(array $files): array
    {
        return array_filter($files, function ($file) {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            return in_array($extension, ['jpg', 'jpeg', 'png', 'gif']);
        });
    }

    /**
     * Show dry run results
     */
    private function showDryRunResults(array $imageFiles, array $options)
    {
        $this->info("DRY RUN - No files will be modified");
        $this->info("");

        $totalSize = 0;
        $tableData = [];

        foreach ($imageFiles as $file) {
            $size = Storage::disk('public')->size($file);
            $totalSize += $size;

            $tableData[] = [
                $file,
                $this->formatBytes($size),
                $options['preset'],
                $options['convert_to_webp'] ? 'Yes' : 'No',
            ];
        }

        $this->table(
            ['File', 'Size', 'Preset', 'WebP'],
            $tableData
        );

        $this->info("Total files to process: " . count($imageFiles));
        $this->info("Total size: " . $this->formatBytes($totalSize));
        $this->info("");
        $this->info("Run without --dry-run to actually compress the images");
    }

    /**
     * Perform actual compression
     */
    private function performCompression(array $imageFiles, array $options)
    {
        $this->info("Starting compression...");
        $this->info("");

        $progressBar = $this->output->createProgressBar(count($imageFiles));
        $progressBar->start();

        $results = [];
        $totalOriginalSize = 0;
        $totalCompressedSize = 0;
        $successCount = 0;
        $failedCount = 0;

        foreach ($imageFiles as $file) {
            try {
                $originalSize = Storage::disk('public')->size($file);
                $totalOriginalSize += $originalSize;

                // Create UploadedFile instance for the existing file
                $tempPath = Storage::disk('public')->path($file);
                $uploadedFile = new \Illuminate\Http\UploadedFile($tempPath, basename($file));

                // Compress the image
                $compressedPath = ImageService::compressAndUpload($uploadedFile, dirname($file), $options);
                $compressedSize = Storage::disk('public')->size($compressedPath);
                $totalCompressedSize += $compressedSize;

                $results[] = [
                    'file' => $file,
                    'compressed_path' => $compressedPath,
                    'original_size' => $originalSize,
                    'compressed_size' => $compressedSize,
                    'success' => true,
                ];

                $successCount++;

            } catch (\Exception $e) {
                $results[] = [
                    'file' => $file,
                    'error' => $e->getMessage(),
                    'success' => false,
                ];

                $failedCount++;
                Log::error('Image compression failed', [
                    'file' => $file,
                    'error' => $e->getMessage(),
                ]);
            }

            $progressBar->advance();
        }

        $progressBar->finish();
        $this->info("");
        $this->info("");

        // Show results
        $this->showCompressionResults($results, $totalOriginalSize, $totalCompressedSize, $successCount, $failedCount);
    }

    /**
     * Show compression results
     */
    private function showCompressionResults(array $results, int $totalOriginalSize, int $totalCompressedSize, int $successCount, int $failedCount)
    {
        $totalSaved = $totalOriginalSize - $totalCompressedSize;
        $compressionRatio = $totalOriginalSize > 0 ? (($totalOriginalSize - $totalCompressedSize) / $totalOriginalSize) * 100 : 0;

        $this->info("Compression Results");
        $this->info("==================");
        $this->info("Total files processed: " . count($results));
        $this->info("Success: {$successCount}");
        $this->info("Failed: {$failedCount}");
        $this->info("Total original size: " . $this->formatBytes($totalOriginalSize));
        $this->info("Total compressed size: " . $this->formatBytes($totalCompressedSize));
        $this->info("Total space saved: " . $this->formatBytes($totalSaved));
        $this->info("Average compression ratio: " . round($compressionRatio, 2) . "%");
        $this->info("");

        if ($failedCount > 0) {
            $this->warn("Failed files:");
            foreach ($results as $result) {
                if (!$result['success']) {
                    $this->warn("  - {$result['file']}: {$result['error']}");
                }
            }
        }

        // Log the results
        Log::info('Batch image compression completed via command', [
            'total_files' => count($results),
            'success_count' => $successCount,
            'failed_count' => $failedCount,
            'total_original_size' => $totalOriginalSize,
            'total_compressed_size' => $totalCompressedSize,
            'total_saved_bytes' => $totalSaved,
            'compression_ratio' => round($compressionRatio, 2),
        ]);
    }

    /**
     * Format bytes to human readable format
     */
    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, $precision) . ' ' . $units[$i];
    }
} 