<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        view()->composer(['frontend.layouts.header'],function($view){
            $menuItems=Category::whereStatus(1)->pluck('title','slug')->toArray();
            $view->with(['menuItems'=>[''=>'Home'] +$menuItems]);
        });
    }
}
