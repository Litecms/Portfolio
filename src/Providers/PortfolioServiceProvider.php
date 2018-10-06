<?php

namespace Litecms\Portfolio\Providers;

use Illuminate\Support\ServiceProvider;

class PortfolioServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'portfolio');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'portfolio');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.portfolio');

        // Bind facade
        $this->app->bind('litecms.portfolio', function ($app) {
            return $this->app->make('Litecms\Portfolio\Portfolio');
        });

        // Bind Portfolio to repository
        $this->app->bind(
            'Litecms\Portfolio\Interfaces\PortfolioRepositoryInterface',
            \Litecms\Portfolio\Repositories\Eloquent\PortfolioRepository::class
        );
        // Bind Category to repository
        $this->app->bind(
            'Litecms\Portfolio\Interfaces\CategoryRepositoryInterface',
            \Litecms\Portfolio\Repositories\Eloquent\CategoryRepository::class
        );

        $this->app->register(\Litecms\Portfolio\Providers\AuthServiceProvider::class);

        $this->app->register(\Litecms\Portfolio\Providers\RouteServiceProvider::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.portfolio'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/portfolio.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/portfolio')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/portfolio')], 'lang');

// Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');
        
        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
