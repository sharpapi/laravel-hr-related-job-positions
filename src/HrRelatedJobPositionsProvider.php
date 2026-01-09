<?php

declare(strict_types=1);

namespace SharpAPI\HrRelatedJobPositions;

use Illuminate\Support\ServiceProvider;

/**
 * @api
 */
class HrRelatedJobPositionsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sharpapi-hr-related-job-positions.php' => config_path('sharpapi-hr-related-job-positions.php'),
            ], 'sharpapi-hr-related-job-positions');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Merge the package configuration with the app configuration.
        $this->mergeConfigFrom(
            __DIR__.'/../config/sharpapi-hr-related-job-positions.php', 'sharpapi-hr-related-job-positions'
        );
    }
}