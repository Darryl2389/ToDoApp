<?php
# @Author: Darryl Sullivan
# @Date:   2019-09-24T15:33:15+01:00
# @Last modified by:   Darryl Sullivan
# @Last modified time: 2019-10-01T13:49:41+01:00




namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
      Schema::defaultStringLength(191);
    }
}
