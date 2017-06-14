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

use App;
use DB;

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
            // For Name Website
            $website = App\Website::first();

            // For Navbar
            $navCategory = App\ArticleCategory::take(4)->orderBy('id', 'DESC')->orderBy('priority', 'DESC')->where('flag_publish', 1)->get();
            $navEvent = App\Event::take(4)->orderBy('date', 'DESC')->where('flag_publish', 1)->get();

            // For Footer
            $partner = App\Partner::where('flag_publish', 1)->get();
            $social  = App\Social::where('flag_publish', 1)->get();

            view()->share('website', $website);
            view()->share('navCategory', $navCategory);
            view()->share('navEvent', $navEvent);
            view()->share('partner', $partner);
            view()->share('social', $social);
        }

        if(Request::is('admin/*')){
            // Notifikasi New Inbox
            $getNotifInbox = App\Contact::where('read', 0)->orderBy('created_at', 'desc')->get();
            view()->share('getNotifInbox', $getNotifInbox);
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
