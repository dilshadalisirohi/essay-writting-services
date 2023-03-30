<?php

namespace App\Services\CaptchaService;

use App\Services\CaptchaService\Contracts\CaptchaServiceInterface;
use Illuminate\Support\ServiceProvider;

class CapthaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CaptchaServiceInterface::class, CaptchaService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
