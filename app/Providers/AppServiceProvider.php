<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
        DB::listen(function($query){
	       echo $query->sql . "<br/>";
        });
    }

    /**
     * Bootstrap any application services.
     * 引导任何应用程序服务。
     * @return void
     */
    public function boot()
    {

    }
}
