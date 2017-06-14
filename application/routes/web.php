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
	
// Page Home
Route::get('/', 'HomeController@index')->name('home');

// Page About
Route::get('/about', 'HomeController@about')->name('about');

// Page Event
Route::get('/event', 'HomeController@event')->name('event');
Route::get('/event/{slug}', 'HomeController@eventDetail')->name('event.detail');
Route::get('/eventMore/{page?}', 'HomeController@eventMore')->name('event.more');

// Page Gallery
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/gallery/{slug}', 'HomeController@galleryDetail')->name('gallery.detail');
Route::get('/galleryMore/{page?}', 'HomeController@galleryMore')->name('gallery.more');

// Page Article
Route::get('/article', 'HomeController@article')->name('article');
Route::get('/article/{category}', 'HomeController@articleCategory')->name('article.category');
Route::get('/articleMore/{page?}', 'HomeController@articleMore')->name('article.more');
Route::get('/article/{category}/{slug}', 'HomeController@articleDetail')->name('article.detail');
Route::get('/articleMore/{category}/{page?}', 'HomeController@articleCategoryMore')->name('article.category.more');

// Post Contact
Route::post('/contact/store', 'Backend\InboxController@store')->name('contact.store');
Route::get('/contact/success', 'HomeController@success')->name('contact.success');

// Admin Login & Register
Route::get('/admin', 'Backend\AuthController@showLogin')->name('admin');
Route::post('/admin', 'Backend\AuthController@login')->name('admin.login');
Route::get('/admin/logout', 'Backend\AuthController@logout')->name('admin.logout');
Route::get('/admin/register', 'Backend\AuthController@formRegister')->name('admin.register');
Route::post('/admin/register', 'Backend\AuthController@register')->name('admin.register.save');

// Admin
Route::get('/admin/home', 'Backend\DashboardController@index')->name('admin.home');

// Admin Page
Route::get('/admin/page', 'Backend\PageController@index')->name('admin.page');
Route::get('/admin/page/{id}/update', 'Backend\PageController@edit')->name('admin.page.edit');
Route::post('/admin/page/{id}/update', 'Backend\PageController@update')->name('admin.page.update');
Route::get('/admin/imagecontent', 'Backend\PageController@indexImage')->name('admin.pageImage');
Route::get('/admin/imagecontent/{id}/update', 'Backend\PageController@editImage')->name('admin.pageImage.edit');
Route::post('/admin/imagecontent/{id}/update', 'Backend\PageController@updateImage')->name('admin.pageImage.update');

// Admin Article
Route::get('/admin/article', 'Backend\ArticleController@index')->name('admin.article');
Route::get('/admin/article/create', 'Backend\ArticleController@create')->name('admin.article.create');
Route::post('/admin/article/create', 'Backend\ArticleController@store')->name('admin.article.store');
Route::get('/admin/article/{id}/update', 'Backend\ArticleController@edit')->name('admin.article.edit');
Route::post('/admin/article/{id}/update', 'Backend\ArticleController@update')->name('admin.article.update');
Route::get('/admin/article/{id}/delete', 'Backend\ArticleController@delete')->name('admin.article.delete');
Route::post('/admin/article/action', 'Backend\ArticleController@action')->name('admin.article.action');
Route::get('/admin/article/{id}/publish/{action}', 'Backend\ArticleController@publish')->name('admin.article.publish');

// Admin Article Category
Route::get('/admin/article/category', 'Backend\ArticleController@category')->name('admin.article.category');
Route::get('/admin/article/category/create', 'Backend\ArticleController@createCategory')->name('admin.article.createCategory');
Route::post('/admin/article/category/create', 'Backend\ArticleController@storeCategory')->name('admin.article.storeCategory');
Route::get('/admin/article/category/{id}/update', 'Backend\ArticleController@editCategory')->name('admin.article.editCategory');
Route::post('/admin/article/category/{id}/update', 'Backend\ArticleController@updateCategory')->name('admin.article.updateCategory');
Route::get('/admin/article/category/{id}/delete', 'Backend\ArticleController@deleteCategory')->name('admin.article.deleteCategory');
Route::post('/admin/article/category/action', 'Backend\ArticleController@actionCategory')->name('admin.article.actionCategory');
Route::get('/admin/article/category/{id}/publish/{action}', 'Backend\ArticleController@publishCategory')->name('admin.article.publishCategory');

// Admin Event
Route::get('/admin/event', 'Backend\EventController@index')->name('admin.event');
Route::get('/admin/event/create', 'Backend\EventController@create')->name('admin.event.create');
Route::post('/admin/event/create', 'Backend\EventController@store')->name('admin.event.store');
Route::get('/admin/event/{id}/update', 'Backend\EventController@edit')->name('admin.event.edit');
Route::post('/admin/event/{id}/update', 'Backend\EventController@update')->name('admin.event.update');
Route::get('/admin/event/{id}/delete', 'Backend\EventController@delete')->name('admin.event.delete');
Route::post('/admin/event/action', 'Backend\EventController@action')->name('admin.event.action');
Route::get('/admin/event/{id}/publish/{action}', 'Backend\EventController@publish')->name('admin.event.publish');

// Admin Gallery
Route::get('/admin/gallery', 'Backend\GalleryController@index')->name('admin.gallery');
Route::get('/admin/gallery/create', 'Backend\GalleryController@create')->name('admin.gallery.create');
Route::post('/admin/gallery/create', 'Backend\GalleryController@store')->name('admin.gallery.store');
Route::get('/admin/gallery/{id}/update', 'Backend\GalleryController@edit')->name('admin.gallery.edit');
Route::post('/admin/gallery/{id}/update', 'Backend\GalleryController@update')->name('admin.gallery.update');
Route::get('/admin/gallery/{id}/delete', 'Backend\GalleryController@delete')->name('admin.gallery.delete');
Route::post('/admin/gallery/action', 'Backend\GalleryController@action')->name('admin.gallery.action');
Route::get('/admin/gallery/{id}/publish/{action}', 'Backend\GalleryController@publish')->name('admin.gallery.publish');

// Admin Meta
Route::get('/admin/meta', 'Backend\MetaController@index')->name('admin.meta');
Route::get('/admin/meta/{id}/update', 'Backend\MetaController@edit')->name('admin.meta.edit');
Route::post('/admin/meta/{id}/update', 'Backend\MetaController@update')->name('admin.meta.update');

// Admin User
Route::get('/admin/user', 'Backend\UserController@index')->name('admin.user');
Route::get('/admin/user/create', 'Backend\UserController@create')->name('admin.user.create');
Route::post('/admin/user/create', 'Backend\UserController@store')->name('admin.user.store');
Route::get('/admin/user/{id}/update', 'Backend\UserController@edit')->name('admin.user.edit');
Route::post('/admin/user/{id}/update', 'Backend\UserController@update')->name('admin.user.update');
Route::get('/admin/user/{id}/delete', 'Backend\UserController@delete')->name('admin.user.delete');
Route::post('/admin/user/action', 'Backend\UserController@action')->name('admin.user.action');
Route::get('/admin/user/{id}/status/{action}', 'Backend\UserController@status')->name('admin.user.status');

// Admin Inbox
Route::get('/admin/inbox', 'Backend\InboxController@index')->name('admin.inbox');
Route::get('/admin/inbox/{id}/view', 'Backend\InboxController@view')->name('admin.inbox.view');
Route::get('/admin/inbox/{id}/delete', 'Backend\InboxController@delete')->name('admin.inbox.delete');
Route::post('/admin/inbox/action', 'Backend\InboxController@action')->name('admin.inbox.action');

// Admin Website
Route::get('/admin/website', 'Backend\WebsiteController@index')->name('admin.website');
Route::post('/admin/website/create', 'Backend\WebsiteController@store')->name('admin.website.store');

// Admin Partner
Route::get('/admin/partner', 'Backend\PartnerController@index')->name('admin.partner');
Route::get('/admin/partner/create', 'Backend\PartnerController@create')->name('admin.partner.create');
Route::post('/admin/partner/create', 'Backend\PartnerController@store')->name('admin.partner.store');
Route::get('/admin/partner/{id}/update', 'Backend\PartnerController@edit')->name('admin.partner.edit');
Route::post('/admin/partner/{id}/update', 'Backend\PartnerController@update')->name('admin.partner.update');
Route::get('/admin/partner/{id}/delete', 'Backend\PartnerController@delete')->name('admin.partner.delete');
Route::post('/admin/partner/action', 'Backend\PartnerController@action')->name('admin.partner.action');
Route::get('/admin/partner/{id}/publish/{action}', 'Backend\PartnerController@publish')->name('admin.partner.publish');

// Admin Social
Route::get('/admin/social', 'Backend\SocialController@index')->name('admin.social');
Route::get('/admin/social/create', 'Backend\SocialController@create')->name('admin.social.create');
Route::post('/admin/social/create', 'Backend\SocialController@store')->name('admin.social.store');
Route::get('/admin/social/{id}/update', 'Backend\SocialController@edit')->name('admin.social.edit');
Route::post('/admin/social/{id}/update', 'Backend\SocialController@update')->name('admin.social.update');
Route::get('/admin/social/{id}/delete', 'Backend\SocialController@delete')->name('admin.social.delete');
Route::post('/admin/social/action', 'Backend\SocialController@action')->name('admin.social.action');
Route::get('/admin/social/{id}/publish/{action}', 'Backend\SocialController@publish')->name('admin.social.publish');
