<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// the code below was added and may not work
// i also jumped into the php.ini file in the C drive
// and changed the sdo_mysql.dll file
// if errors come up then add a semi colon to the front
// of that file name and it'll be back how it was 
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // this code was added in order to fix a length
        // error thrown when the migration is ran
        Schema::defaultStringLength(191);
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
