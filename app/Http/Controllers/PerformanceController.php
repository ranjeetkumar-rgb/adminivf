<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class PerformanceController extends Controller
{
    public function index()
    {
        $metrics = $this->getPerformanceMetrics();
        
        return view('admin.performance.index', compact('metrics'));
    }

    private function getPerformanceMetrics()
    {
        // Database metrics
        $dbMetrics = [
            'total_tables' => count(DB::select('SHOW TABLES')),
            'total_size' => $this->getDatabaseSize(),
            'slow_queries' => $this->getSlowQueriesCount(),
        ];

        // Cache metrics
        $cacheMetrics = [
            'cache_hits' => Cache::get('cache_hits', 0),
            'cache_misses' => Cache::get('cache_misses', 0),
            'cache_size' => $this->getCacheSize(),
        ];

        // System metrics
        $systemMetrics = [
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
            'memory_limit' => ini_get('memory_limit'),
            'max_execution_time' => ini_get('max_execution_time'),
            'upload_max_filesize' => ini_get('upload_max_filesize'),
        ];

        // Storage metrics
        $storageMetrics = [
            'storage_size' => $this->getStorageSize(),
            'log_size' => $this->getLogSize(),
        ];

        return [
            'database' => $dbMetrics,
            'cache' => $cacheMetrics,
            'system' => $systemMetrics,
            'storage' => $storageMetrics,
        ];
    }

    private function getDatabaseSize()
    {
        try {
            $result = DB::select("
                SELECT 
                    ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS 'size_mb'
                FROM information_schema.tables 
                WHERE table_schema = DATABASE()
            ");
            
            return $result[0]->size_mb ?? 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    private function getSlowQueriesCount()
    {
        // This would require MySQL slow query log to be enabled
        return 0;
    }

    private function getCacheSize()
    {
        try {
            $cachePath = storage_path('framework/cache');
            if (File::exists($cachePath)) {
                $size = File::size($cachePath);
                return round($size / 1024 / 1024, 2); // Convert to MB
            }
        } catch (\Exception $e) {
            // Ignore errors
        }
        
        return 0;
    }

    private function getStorageSize()
    {
        try {
            $storagePath = storage_path('app');
            if (File::exists($storagePath)) {
                $size = File::size($storagePath);
                return round($size / 1024 / 1024, 2); // Convert to MB
            }
        } catch (\Exception $e) {
            // Ignore errors
        }
        
        return 0;
    }

    private function getLogSize()
    {
        try {
            $logPath = storage_path('logs');
            if (File::exists($logPath)) {
                $size = File::size($logPath);
                return round($size / 1024 / 1024, 2); // Convert to MB
            }
        } catch (\Exception $e) {
            // Ignore errors
        }
        
        return 0;
    }

    public function clearCache()
    {
        try {
            \Artisan::call('cache:clear');
            \Artisan::call('view:clear');
            \Artisan::call('config:clear');
            \Artisan::call('route:clear');
            
            return response()->json([
                'success' => true,
                'message' => 'All caches cleared successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error clearing caches: ' . $e->getMessage()
            ], 500);
        }
    }

    public function optimize()
    {
        try {
            \Artisan::call('config:cache');
            \Artisan::call('route:cache');
            \Artisan::call('view:cache');
            \Artisan::call('optimize');
            
            return response()->json([
                'success' => true,
                'message' => 'Application optimized successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error optimizing application: ' . $e->getMessage()
            ], 500);
        }
    }
} 