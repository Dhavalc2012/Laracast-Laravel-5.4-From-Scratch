<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;
use App;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar',function($view){
        $view->with('archives',Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(Stripe::class,function($app){
            return  new Stripe(config('services.stripe.secret'));
        });
    }
}
