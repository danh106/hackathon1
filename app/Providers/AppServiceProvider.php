<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menu=Menu::where('isactive',true);
        View::share('menu', $menu);
        $slider=Slider::where('isactive',true)->get();
        View::share('slider', $slider);
    }
}
