<?php

namespace Netpeople\ViewComposer\Providers;

use Netpeople\ViewComposer\Console\Commands\ComposerMakeCommand;
use Illuminate\Support\ServiceProvider as BaseProvider;

class ViewComposerServiceProvider extends BaseProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ComposerMakeCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../../config/view-composers.php' => config_path('view-composers.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $composers = config('view-composers');

        foreach ($composers as $composer => $views) {
            $this->app->make('view')->composer($views, $composer);
        }
    }
}
