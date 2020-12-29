<?php


namespace App\Providers;


use Conekta\Conekta;
use Digitec\Conekta\HttpClient\ConektaHttpClientFactory;
use Digitec\Conekta\HttpClient\ConektaHttpClientInterface;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application;

/**
 * Class ConektaHttpClientServiceProvider
 * @package App\Providers
 */
class ConektaHttpClientServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(
            ConektaHttpClientInterface::class,
            function (Application $app) {
                return ConektaHttpClientFactory::getClient(
                    env('CONEKTA_API_VERSION', Conekta::$apiVersion),
                    env('CONEKTA_KEY_PRIVATE', '')
                );
            }
        );
    }
}
