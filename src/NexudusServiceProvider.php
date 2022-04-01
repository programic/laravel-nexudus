<?php

namespace Programic\Nexudus;

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
        $attempts = data_get($config, 'attempts', 3);
        $sleep = data_get($config, 'sleep', 100);
        $url = data_get($config, 'baseUrl', 'https://spaces.nexudus.com');

        Http::macro('nexudus', fn () => Http::withBasicAuth($username, $password)
            ->retry($attempts, $sleep)->baseUrl($url));
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
