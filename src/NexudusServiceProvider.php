<?php

namespace Programic\Nexudus;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class NexudusServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $config = config('services.nexudus');
        $username = data_get($config, 'username');
        $password = data_get($config, 'password');
        $url = data_get($config, 'baseUrl', 'https://spaces.nexudus.com');

        Http::macro('nexudus', fn () => Http::withBasicAuth($username, $password)->baseUrl($url));
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Nexudus::class, fn () => new Nexudus());
        $this->app->alias(Nexudus::class, 'nexudus');
    }
}
