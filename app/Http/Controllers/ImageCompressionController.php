<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ImageCompressionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display image compression dashboard
     */
    public function index()
    {
        $presets = ImageService::getCompressionPresets();
        $storageStats = $this->getStorageStats();
        
        return view('admin.image-compression.index', compact('presets', 'storageStats'));
    }

    /**
     * Compress a single image
     */
    public function compressImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
            'preset' => 'required|string|in:high,medium,low,thumbnail,avatar,logo',
            'convert_to_webp' => 'boolean',
            'quality' => 'integer|min:1|max:100',
            'max_width' => 'integer|min:1|max:5000',
            'max_height' => 'integer|min:1|max:5000',
        ]);

        try {
            $file = $request->file('image');
            $preset = $request->input('preset', 'medium');
            
            // Build options
            $options = [
                'preset' => $preset,
                'convert_to_webp' => $request->boolean('convert_to_webp', false),
            ];

            // Override preset with custom values if provided
            if ($request->filled('quality')) {
                $options['quality'] = $request->input('quality');
            }
            if ($request->filled('max_width')) {
                $options['max_width'] = $request->input('max_width');
            }
            if ($request->filled('max_height')) {
                $options['max_height'] = $request->input('max_height');
            }

            // Compress image
            $compressedPath = ImageService::compressAndUpload($file, 'compressed', $options);
            
            // Get compression stats
            $stats = ImageService::getCompressionStats($file, $compressedPath);
            
            // Log compression
            Log::info('Manual image compression completed', [
                'preset' => $preset,
                'original_size' => $stats['original_size'],
                'compressed_size' => $stats['compressed_size'],
                'compression_ratio' => $stats['compression_ratio'],
                'user' => auth()->id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Image compressed successfully',
                'data' => [
                    'compressed_path' => $compressedPath,
                    'compressed_url' => Storage::disk('public')->url($compressedPath),
                    'stats' => $stats,
                ],
            ]);

        } catch (\Exception $e) {
            Log::error('Image compression failed', [
                'error' => $e->getMessage(),
                'user' => auth()->id(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Image compression failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Batch compress images in a directory
     */
    public function batchCompress(Request $request)
    {
        $request->validate([
            'directory' => 'required|string',
            'preset' => 'required|string|in:high,medium,low,thumbnail,avatar,logo',
            'convert_to_webp' => 'boolean',
        ]);

        try {
            $directory = $request->input('directory');
            $preset = $request->input('preset', 'medium');
            
            $options = [
                'preset' => $preset,
                'convert_to_webp' => $request->boolean('convert_to_webp', false),
            ];

            // Check if directory exists
            if (!Storage::disk('public')->exists($directory)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Directory not found: ' . $directory,
                ], 404);
            }

            // Batch compress images
            $results = ImageService::batchCompressImages($directory, $options);
            
            // Calculate summary
            $successCount = count(array_filter($results, fn($r) => $r['success']));
            $failedCount = count($results) - $successCount;
            
            $totalOriginalSize = 0;
            $totalCompressedSize = 0;
            
            foreach ($results as $result) {
                if ($result['success']) {
                    $totalOriginalSize += $result['stats']['original_size'];
                    $totalCompressedSize += $result['stats']['compressed_size'];
                }
            }
            
            $totalSaved = $totalOriginalSize - $totalCompressedSize;
            $compressionRatio = $totalOriginalSize > 0 ? (($totalOriginalSize - $totalCompressedSize) / $totalOriginalSize) * 100 : 0;

            // Log batch compression
            Log::info('Batch image compression completed', [
                'directory' => $directory,
                'preset' => $preset,
                'total_files' => count($results),
                'success_count' => $successCount,
                'failed_count' => $failedCount,
                'total_original_size' => $totalOriginalSize,
                'total_compressed_size' => $totalCompressedSize,
                'total_saved_bytes' => $totalSaved,
                'compression_ratio' => round($compressionRatio, 2),
                'user' => auth()->id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => "Batch compression completed. {$successCount} files processed successfully.",
                'data' => [
                    'results' => $results,
                    'summary' => [
                        'total_files' => count($results),
                        'success_count' => $successCount,
                        'failed_count' => $failedCount,
                        'total_original_size' => $totalOriginalSize,
                        'total_compressed_size' => $totalCompressedSize,
                        'total_saved_bytes' => $totalSaved,
                        'compression_ratio' => round($compressionRatio, 2),
                    ],
                ],
            ]);

        } catch (\Exception $e) {
            Log::error('Batch image compression failed', [
                'error' => $e->getMessage(),
                'user' => auth()->id(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Batch compression failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get compression presets
     */
    public function getPresets()
    {
        $presets = ImageService::getCompressionPresets();
        
        return response()->json([
            'success' => true,
            'data' => $presets,
        ]);
    }

    /**
     * Get storage statistics via API
     */
    public function getStorageStatsApi()
    {
        $stats = $this->getStorageStats();
        
        return response()->json([
            'success' => true,
            'data' => $stats,
        ]);
    }

    /**
     * Test compression with different settings
     */
    public function testCompression(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:10240',
        ]);

        try {
            $file = $request->file('image');
            $presets = ImageService::getCompressionPresets();
            $results = [];

            foreach ($presets as $presetName => $presetOptions) {
                try {
                    $options = array_merge($presetOptions, [
                        'filename' => 'test_' . $presetName . '_' . time() . '.' . ($presetOptions['convert_to_webp'] ? 'webp' : $file->getClientOriginalExtension()),
                    ]);

                    $compressedPath = ImageService::compressAndUpload($file, 'test', $options);
                    $stats = ImageService::getCompressionStats($file, $compressedPath);

                    $results[$presetName] = [
                        'success' => true,
                        'compressed_path' => $compressedPath,
                        'compressed_url' => Storage::disk('public')->url($compressedPath),
                        'stats' => $stats,
                        'options' => $presetOptions,
                    ];

                    // Clean up test file
                    Storage::disk('public')->delete($compressedPath);

                } catch (\Exception $e) {
                    $results[$presetName] = [
                        'success' => false,
                        'error' => $e->getMessage(),
                        'options' => $presetOptions,
                    ];
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Compression test completed',
                'data' => $results,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Compression test failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get storage statistics
     */
    private function getStorageStats()
    {
        $totalSize = 0;
        $fileCount = 0;
        $imageCount = 0;
        $imageSize = 0;

        try {
            $files = Storage::disk('public')->allFiles();
            
            foreach ($files as $file) {
                $size = Storage::disk('public')->size($file);
                $totalSize += $size;
                $fileCount++;

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $imageCount++;
                    $imageSize += $size;
                }
            }

            return [
                'total_files' => $fileCount,
                'total_size' => $totalSize,
                'total_size_formatted' => $this->formatBytes($totalSize),
                'image_files' => $imageCount,
                'image_size' => $imageSize,
                'image_size_formatted' => $this->formatBytes($imageSize),
                'image_percentage' => $fileCount > 0 ? round(($imageCount / $fileCount) * 100, 2) : 0,
                'image_size_percentage' => $totalSize > 0 ? round(($imageSize / $totalSize) * 100, 2) : 0,
            ];

        } catch (\Exception $e) {
            Log::error('Failed to get storage stats', ['error' => $e->getMessage()]);
            
            return [
                'total_files' => 0,
                'total_size' => 0,
                'total_size_formatted' => '0 B',
                'image_files' => 0,
                'image_size' => 0,
                'image_size_formatted' => '0 B',
                'image_percentage' => 0,
                'image_size_percentage' => 0,
            ];
        }
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