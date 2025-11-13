<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-file-upload')->only('index');
        $this->middleware('permission:create-file-upload')->only('store');
        $this->middleware('permission:delete-file-upload')->only('destroy');
    }

    public function index()
    {
        $uploadedFiles = $this->getUploadedFiles();
        return view('admin.file-upload.index', compact('uploadedFiles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // 10MB max
        ]);

        try {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            
            // Sanitize filename
            $fileName = basename($fileName);
            
            // Check if file already exists
            if (file_exists(base_path($fileName))) {
                return redirect()->back()->with('error', 'File already exists in root directory: ' . $fileName);
            }

            // Check if root directory is writable
            if (!is_writable(base_path())) {
                return redirect()->back()->with('error', 'Root directory is not writable. Check permissions.');
            }

            // Move file to root directory
            if ($file->move(base_path(), $fileName)) {
                // Verify file was uploaded successfully
                if (file_exists(base_path($fileName))) {
                    \Log::info('File uploaded successfully', [
                        'file' => $fileName,
                        'size' => $file->getSize(),
                        'user' => auth()->id()
                    ]);
                    
                    return redirect()->route('admin.file-upload.index')
                        ->with('success', 'File "' . $fileName . '" uploaded successfully to root directory.');
                } else {
                    return redirect()->back()->with('error', 'File upload failed. File not found after upload.');
                }
            } else {
                return redirect()->back()->with('error', 'Failed to move uploaded file to root directory.');
            }
        } catch (\Exception $e) {
            \Log::error('File upload error: ' . $e->getMessage(), [
                'file' => $fileName ?? 'unknown',
                'user' => auth()->id()
            ]);
            
            return redirect()->back()->with('error', 'Error uploading file: ' . $e->getMessage());
        }
    }

    public function destroy($fileName)
    {
        try {
            // Sanitize filename to prevent directory traversal
            $fileName = basename($fileName);
            $filePath = base_path($fileName);
            
            // Check if file exists
            if (!file_exists($filePath)) {
                return redirect()->back()->with('error', 'File not found: ' . $fileName);
            }

            // Check if it's actually a file (not a directory)
            if (!is_file($filePath)) {
                return redirect()->back()->with('error', 'Cannot delete directories. Only files are allowed.');
            }

            // Don't allow deletion of critical files
            $criticalFiles = ['composer.json', 'composer.lock', 'package.json', 'artisan', 'index.php', '.env', '.gitignore', 'server.php','package-lock.json','webpack.mix.js'];
            if (in_array($fileName, $criticalFiles)) {
                return redirect()->back()->with('error', 'Cannot delete critical system files: ' . $fileName);
            }

            // Check file permissions
            if (!is_writable($filePath)) {
                return redirect()->back()->with('error', 'File is not writable. Check permissions: ' . $fileName);
            }

            // Attempt to delete the file
            if (unlink($filePath)) {
                // Verify file was actually deleted
                if (!file_exists($filePath)) {
                    return redirect()->route('admin.file-upload.index')
                        ->with('success', 'File "' . $fileName . '" deleted successfully.');
                } else {
                    return redirect()->back()->with('error', 'File deletion failed. File still exists: ' . $fileName);
                }
            } else {
                return redirect()->back()->with('error', 'Failed to delete file: ' . $fileName);
            }

        } catch (\Exception $e) {
            \Log::error('File deletion error: ' . $e->getMessage(), [
                'file' => $fileName,
                'path' => $filePath ?? 'unknown',
                'user' => auth()->id()
            ]);
            
            return redirect()->back()->with('error', 'Error deleting file: ' . $e->getMessage());
        }
    }

    public function download($fileName)
    {
        $filePath = base_path($fileName);
        
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found.');
        }

        // Set proper headers for download
        return response()->download($filePath, $fileName, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            'Cache-Control' => 'no-cache, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0'
        ]);
    }

    private function getUploadedFiles()
    {
        $files = [];
        $rootPath = base_path();
        
        try {
            // Check if root directory exists and is readable
            if (!is_dir($rootPath) || !is_readable($rootPath)) {
                \Log::error('Root directory not accessible', ['path' => $rootPath]);
                return $files;
            }
            
            // Get all files in root directory
            $rootFiles = File::files($rootPath);
            
            foreach ($rootFiles as $file) {
                try {
                    $fileName = $file->getFilename();
                    
                    // Skip hidden files and system files
                    $criticalFiles = ['composer.json', 'composer.lock', 'package.json', 'artisan', 'index.php', '.env', '.gitignore', '.env.example', 'server.php','package-lock.json','webpack.mix.js'];
                    if (Str::startsWith($fileName, '.') || in_array($fileName, $criticalFiles)) {
                        continue;
                    }
                    
                    // Check if file is still accessible
                    if (!is_readable($file->getPathname())) {
                        continue;
                    }
                    
                    $files[] = [
                        'name' => $fileName,
                        'size' => $this->formatFileSize($file->getSize()),
                        'modified' => date('Y-m-d H:i:s', $file->getMTime()),
                        'extension' => $file->getExtension(),
                    ];
                } catch (\Exception $e) {
                    \Log::warning('Error processing file in listing', [
                        'file' => $file->getFilename() ?? 'unknown',
                        'error' => $e->getMessage()
                    ]);
                    continue;
                }
            }
            
            // Sort files by name
            usort($files, function($a, $b) {
                return strcasecmp($a['name'], $b['name']);
            });
            
        } catch (\Exception $e) {
            \Log::error('Error getting uploaded files: ' . $e->getMessage());
        }
        
        return $files;
    }

    private function formatFileSize($bytes)
    {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }
} 