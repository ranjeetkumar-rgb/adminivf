<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class OptimizeApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:optimize {--clear : Clear all caches first}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize the application for better performance';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting application optimization...');

        if ($this->option('clear')) {
            $this->info('Clearing all caches...');
            
            // Clear all caches
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            Cache::flush();
            
            $this->info('All caches cleared successfully.');
        }

        $this->info('Caching configuration...');
        Artisan::call('config:cache');
        
        $this->info('Caching routes...');
        Artisan::call('route:cache');
        
        $this->info('Caching views...');
        Artisan::call('view:cache');
        
        $this->info('Running full optimization...');
        Artisan::call('optimize');
        
        $this->info('Application optimization completed successfully!');
        
        // Display optimization tips
        $this->newLine();
        $this->info('Performance Tips:');
        $this->line('1. Ensure your database is properly indexed');
        $this->line('2. Use Redis for caching if available');
        $this->line('3. Optimize images and use CDN for static assets');
        $this->line('4. Monitor slow queries in logs');
        $this->line('5. Consider using queue workers for heavy tasks');
        
        return 0;
    }
} 