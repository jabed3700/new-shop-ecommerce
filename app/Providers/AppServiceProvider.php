<?php

namespace App\Providers;
use View;
use App\Category;
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
        // View::share('key','value');
        // View::share('userName','jabed');  // for all view share data

        // View::composer('*',function($view){
        //     $view->with('userName','Jabed Hosen');
        // });

        View::composer('includes.front.header',function($view){
            $view->with('categories',Category::where('publication_status',1)->get());
        });
    }
}
