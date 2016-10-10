<?php
/**
 * This file is part of Jrean\UserVerification package.
 *
 * (c) Jean Ragouin <go@askjong.com> <www.askjong.com>
 */
namespace Formandsystem\Content;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // routes
        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        // views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'formandsystem-content');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        // // configurations
        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/user-verification.php', 'user-verification'
        // );
    }
}
