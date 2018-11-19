<?php

namespace App\Providers;

use Schema;
use View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\FrontViewComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer(
            '*', FrontViewComposer::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
