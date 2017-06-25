<?php


namespace Faker;


use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('faker', function ($app) {
            return Factory::create();
        });
    }
}
