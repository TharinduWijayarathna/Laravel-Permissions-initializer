<?php

// src/PermissionServiceProvider.php
namespace Tharindu\LaravelPermissionUI;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Register package services and dependencies
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\GenerateRoleBasedPermissions::class,
                Commands\SetUserPermissions::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravelpermissionui');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravelpermissionui'),
        ], 'views');
    }
}
