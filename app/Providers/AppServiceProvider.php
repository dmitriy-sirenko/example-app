<?php

namespace App\Providers;

use App\Contracts\Loyalty\LoyaltyService;
use App\Services\BLoyaltyService;
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
        $this->app->bind(LoyaltyService::class, function($app) {
            return new BLoyaltyService();
        });
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
