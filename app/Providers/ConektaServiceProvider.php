<?php


namespace App\Providers;


use Digitec\Conekta\ConektaService;
use Digitec\Conekta\ConektaServiceInterface;
use Digitec\Conekta\HttpClient\ConektaHttpClientInterface;
use Illuminate\Support\ServiceProvider;
use JsonMapper;
use Laravel\Lumen\Application;

/**
 * Class ConektaServiceProvider
 * @package App\Providers
 */
class ConektaServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->singleton(
            ConektaServiceInterface::class,
            function (Application $app) {
                return new ConektaService(
                    $app->make(ConektaHttpClientInterface::class),
                    env('CONEKTA_KEY_PRIVATE', ''),
                    env('CONEKTA_API_VERSION', '2.0.0'),
                    env('CONEKCTA_LOCALE', 'es'),
                    new JsonMapper()
                );
            }
        );
    }

}
