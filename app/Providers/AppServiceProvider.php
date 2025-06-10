<?php

namespace App\Providers;

use App\Logic\AuthLogic;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Singleton登録
        $this->app->singleton(AuthLogic::class,function ($app){
            return new AuthLogic();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
