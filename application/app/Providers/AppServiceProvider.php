<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;

use Route;
use Request;

use App\Website;
use App\Partner;
use App\Social;

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

        Validator::extend('oldpassword', function ($attribute, $value, $parameters) {
            return Hash::check($value, Auth::user()->password);
        });

        if(!Request::is('admin/*')){

            $website    = Website::first();
            view()->share('website', $website);

            $partner = Partner::all();
            view()->share('partner', $partner);

            $social  = Social::all();
            view()->share('social', $social);
        }
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
