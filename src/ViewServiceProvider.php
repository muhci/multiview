<?php

namespace Muhci\Multiview;

use Illuminate\View\ViewServiceProvider as BaseViewServiceProvider;

class ViewServiceProvider extends BaseViewServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function registerViewFinder()
    {
        $this->app->bind('view.finder', function($app) {
            return new FileViewFinder($app['files'], $app['config']['view']);
        });
    }
}
