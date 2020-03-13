<?php


namespace Scott\Flashsale\Providers;

use Illuminate\Support\ServiceProvider;
use Scott\Flashsale\Http\Controllers\FlashSaleController;

class FlashSaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('flashsale', function () {
            return new FlashSaleController;
        });
    }
}