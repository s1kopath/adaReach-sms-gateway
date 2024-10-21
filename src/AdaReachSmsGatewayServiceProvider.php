<?php
// src/AdaReachSmsGatewayServiceProvider.php

namespace S1kopath\AdaReachSmsGateway;

use Illuminate\Support\ServiceProvider;

class AdaReachSmsGatewayServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind your HelloWorld class into the service container
        $this->app->singleton(HelloWorld::class, function () {
            return new HelloWorld();
        });
    }

    public function boot()
    {
        // You can load routes, migrations, etc. here
    }
}
