<?php

namespace App\Providers;

use App\Exceptions\WebExceptionsHandler;
use App\Http\Services\Interfaces\SmsServiceInterface;
use App\Http\Services\SmsService;
use Illuminate\Contracts\Debug\ExceptionHandler;
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
        $this->app->bind(
            ExceptionHandler::class,
            WebExceptionsHandler::class
        );

        $this->app->bind(SmsServiceInterface::class, SmsService::class);
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
