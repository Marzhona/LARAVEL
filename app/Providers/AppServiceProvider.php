<?php

namespace App\Providers;

use App\Http\Controllers\API\PackageController;
use App\Services\ImpI\PackageServiceImpI;
use App\Services\PackageService;
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
        $this->app->bind(PackageService::class,PackageServiceImpI::class);
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
