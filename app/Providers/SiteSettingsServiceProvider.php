<?php

namespace App\Providers;

use App\Models\SiteSetting;
use App\Models\Consultation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class SiteSettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            // Cache site settings for 1 hour instead of forever to allow updates
            $settings = Cache::remember('site_settings', 3600, function () {
                return SiteSetting::first();
            });

            $view->with('globalSettings', $settings);

            // Only load consultation statistics for admin views and cache for 10 minutes
            if (str_contains($view->getName(), 'admin')) {
                try {
                    $stats = Cache::remember('consultation_stats', 600, function () {
                        return [
                            'total' => Consultation::count(),
                            'new' => Consultation::where('status', 'new')->count(),
                            'contacted' => Consultation::where('status', 'contacted')->count(),
                            'consulted' => Consultation::where('status', 'consulted')->count(),
                            'cancelled' => Consultation::where('status', 'cancelled')->count(),
                            'today' => Consultation::whereDate('created_at', today())->count(),
                            'this_week' => Consultation::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
                            'this_month' => Consultation::whereMonth('created_at', now()->month)->count(),
                        ];
                    });
                } catch (\Exception $e) {
                    // If there's an error (like table doesn't exist), provide default values
                    $stats = [
                        'total' => 0,
                        'new' => 0,
                        'contacted' => 0,
                        'consulted' => 0,
                        'cancelled' => 0,
                        'today' => 0,
                        'this_week' => 0,
                        'this_month' => 0,
                    ];
                }

                $view->with('stats', $stats);
            }
        });
    }
} 