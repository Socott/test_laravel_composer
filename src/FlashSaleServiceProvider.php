<?php


namespace Scott\Flashsale;


use Illuminate\Support\ServiceProvider;

class FlashSaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('flashsale', function () {
            return new FlashSale;
        });
    }
}