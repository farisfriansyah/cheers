<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CheersProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
            'includes.header',
            'includes.footer',
            'welcome',
            'sustainability',
            'campaign',
            'brand-story',
            'cheers-alkaline','cheers-natural',
            'includes.alkalineheader','includes.naturalheader',
            'event.index','event.view',
            'blog.index','blog.view','blog.search'],
            'App\Http\ViewComposers\MenuComposer'
        );
    }
}
