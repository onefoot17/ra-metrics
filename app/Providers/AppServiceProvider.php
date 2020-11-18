<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Services
         */
        $this->app->bind('App\Services\Plants\Contracts\PlantServiceInterface', 'App\Services\Plants\PlantService');

        /**
         * Repositories
         */
        $this->app->bind('App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface', 'App\Repositories\Plants\PlantParentSpecieRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
