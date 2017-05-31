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
