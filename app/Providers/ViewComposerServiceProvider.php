<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Compose the navigation view.
     */
    private function composeNavigation()
    {
        view()->composer('partials.sideNav', 'App\Http\Composers\NavigationComposer');
//        view()->composer('partials.sideNav', function ($view) {
//            $view->with('latest', Article::latest()->first());
//        });
    }
}
