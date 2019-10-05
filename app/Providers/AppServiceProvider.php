<?php

namespace App\Providers;

use App\Model\Web\Menu;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            view()->composer('web.home', function($view) {
                $view->with('menus', Menu::menus());
            });
            view()->composer('web.post', function($view) {
                $view->with('menus', Menu::menus());
            });
    }
}
