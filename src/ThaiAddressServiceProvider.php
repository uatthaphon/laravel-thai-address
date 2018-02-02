<?php

namespace Uatthaphon\ThaiAddress;

use Illuminate\Support\ServiceProvider;

class ThaiAddressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/database/seeds' => database_path('seeds')
        ], 'seeds');

        $this->publishes([
            __DIR__ . '/database/csv' => database_path('csv')
        ], 'csv');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ThaiAddress'];
    }
}
