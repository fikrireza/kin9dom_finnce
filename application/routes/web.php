<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/event', 'HomeController@event')->name('event');
Route::get('/event/{slug}', 'HomeController@eventDetail')->name('event.detail');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/gallery/{slug}', 'HomeController@galleryDetail')->name('gallery.detail');
Route::get('/article', 'HomeController@article')->name('article');
Route::get('/article/{category}', 'HomeController@articleCategory')->name('article.category');
Route::get('/article/{category}/{slug}', 'HomeController@articleDetail')->name('article.detail');

Route::get('/admin', 'AuthController@showLogin')->name('admin');
Route::post('/admin', 'AuthController@login')->name('admin.login');

Route::get('/admin/home', 'DashboardController@index')->name('admin.home');
