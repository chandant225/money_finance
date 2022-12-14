<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
class MenuItemProvider extends ServiceProvider
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
        view()->composer(
            'client.layouts.header', 
            function ($view) {
                $view->with('menuItems', Service::where('menu_list', 'true')->get());
            }
        );
    }
}
