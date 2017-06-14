<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;

use App\Website;
use App\Event;
use App\Partner;
use App\Social;
use App\ArticleCategory;

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
            $website = Website::first();

            // For Navbar
            $navCategory = ArticleCategory::take(4)->orderBy('id', 'DESC')->orderBy('priority', 'DESC')->where('flag_publish', 1)->get();
            $navEvent = Event::take(4)->orderBy('date', 'DESC')->where('flag_publish', 1)->get();

            // For Footer
            $partner = Partner::where('flag_publish', 1)->get();
            $social  = Social::where('flag_publish', 1)->get();

            $category = ArticleCategory::where('flag_publish', 1)->orderBy('id', 'DESC')->orderBy('priority', 'DESC')->get();

            view()->share('website', $website);
            view()->share('category', $category);
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
