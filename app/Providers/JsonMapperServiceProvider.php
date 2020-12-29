<?php


namespace App\Providers;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use JsonMapper;
use Laravel\Lumen\Application;

/**
 * Class JsonMapperServiceProvider
 * @package App\Providers
 */
class JsonMapperServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(
            JsonMapper::class, function (Application $application) {
            $jsonMapper = new JsonMapper();

            $jsonMapper->bIgnoreVisibility = true;
            $jsonMapper->bExceptionOnMissingData = true;
            $jsonMapper->bRemoveUndefinedAttributes = true;
            $jsonMapper->bStrictObjectTypeChecking = true;
            $jsonMapper->bEnforceMapType = false;
            $jsonMapper->setLogger(Log::getFacadeRoot());

            return $jsonMapper;
        });
    }

}
