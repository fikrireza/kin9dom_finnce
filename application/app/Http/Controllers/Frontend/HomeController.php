<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\Meta;
use App\Content;
use App\ImageContent;
use App\Event;
use App\EventImage;
use App\Gallery;
use App\Article;
use App\ArticleCategory;

class HomeController extends Controller
{
    //
    public function index(){
        $meta         = Meta::where('for', 'home')->first();
        $content      = Content::all();
        $imageContent = ImageContent::all();
        $event        = Event::orderBy('date', 'DESC')->where('flag_publish', 1)->take(6)->get();
        $article      = Article::join('amd_article_category', 'amd_article_category.id', '=', 'amd_article.id_article_category')->select(DB::raw('amd_article.*, amd_article_category.slug as category'))->where('amd_article.flag_publish', 1)->inRandomOrder()->take(3)->get();

    	return view('frontend.index')->with(compact('meta','content','imageContent','event','article'));
    }

    public function about(){
        $meta         = Meta::where('for', 'about')->first();
        $content      = Content::all();
        $imageContent = ImageContent::all();

    	return view('frontend.about.index')->with(compact('meta','content','imageContent'));
    }

    public function event(){
        $meta         = Meta::where('for', 'article')->first();
        $content      = Content::all();
        $imageContent = ImageContent::all();
        $event        = Event::orderBy('date', 'DESC')->where('flag_publish', 1)->paginate(6);

    	return view('frontend.event.index')->with(compact('meta','content','imageContent','event'));
    }

    public function eventMore($page = 1){
        $event = Event::orderBy('date', 'DESC')->where('flag_publish', 1)->skip(($page - 1) * 6)->take(6)->get();

        return view('frontend.event.more')->with(compact('event'));
    }
    
    public function eventDetail($slug){
        $content      = Content::all();
        $imageContent = ImageContent::all();
        $event        = Event::where('slug', $slug)->where('flag_publish', 1)->first();
        if($event == null){
            return view('frontend.errors.404');
        }
        $eventImage   = EventImage::where('id_event', $event->id)->where('flag_publish', 1)->orderBy('id', 'DESC')->orderBy('priority', 'DESC')->get();

    	return view('frontend.event.detail')->with(compact('content','imageContent','event','eventImage'));
    }

    public function gallery()
    {
        $meta         = Meta::where('for', 'gallery')->first();
        $content      = Content::all();
        $imageContent = ImageContent::all();
        $gallery      = Gallery::where('flag_publish', 1)->paginate(9);

        return view('frontend.gallery.index')->with(compact('meta','content','imageContent','gallery'));
    }

    public function galleryMore($page = 1)
    {
        $gallery      = Gallery::where('flag_publish', 1)->skip(($page - 1) * 9)->take(9)->get();

        return view('frontend.gallery.more')->with(compact('gallery'));
    }

    public function galleryDetail($slug)
    {
        $content      = Content::all();
        $imageContent = ImageContent::all();
        $gallery      = Gallery::where('slug', $slug)->where('flag_publish', 1)->first();


        return view('frontend.gallery.detail')->with(compact('content','imageContent','gallery'));
    }

    public function article()
    {
        $meta    = Meta::where('for', 'article')->first();
        $content = Content::all();
        $imageContent = ImageContent::all();
        $article = Article::join('amd_article_category', 'amd_article_category.id', '=', 'amd_article.id_article_category')->select(DB::raw('amd_article.*, amd_article_category.slug as category'))->where('amd_article.flag_publish', 1)->orderBy('id', 'DESC')->paginate(12);

        return view('frontend.article.index')->with(compact('meta','content','imageContent','article'));
    }

    public function articleMore($page = 1)
    {
        $article = Article::join('amd_article_category', 'amd_article_category.id', '=', 'amd_article.id_article_category')->select(DB::raw('amd_article.*, amd_article_category.slug as category'))->where('amd_article.flag_publish', 1)->orderBy('id', 'DESC')->skip(($page - 1) * 12)->take(12)->get();

        return view('frontend.article.more')->with(compact('article'));
    }

    public function articleCategory($category)
    {
        $content  = Content::all();
        $imageContent = ImageContent::all();
        $categoryI = ArticleCategory::where('slug', $category)->where('flag_publish', 1)->first();
        $article  = Article::join('amd_article_category', 'amd_article_category.id', '=', 'amd_article.id_article_category')->select(DB::raw('amd_article.*, amd_article_category.slug as category'))->where('id_article_category', $categoryI->id)->where('amd_article.flag_publish', 1)->paginate(12);

        return view('frontend.article.category')->with(compact('content','imageContent','categoryI','article'));
    }

    public function articleCategoryMore($category, $page = 1)
    {
        $categoryI = ArticleCategory::where('slug', $category)->where('flag_publish', 1)->first();
        $article  = Article::join('amd_article_category', 'amd_article_category.id', '=', 'amd_article.id_article_category')->select(DB::raw('amd_article.*, amd_article_category.slug as category'))->where('id_article_category', $categoryI->id)->where('amd_article.flag_publish', 1)->skip(($page - 1) * 12)->take(12)->get();

        return view('frontend.article.more')->with(compact('article'));
    }

    public function articleDetail($category, $slug)
    {
        $content  = Content::all();
        $imageContent = ImageContent::all();
        $categoryI = ArticleCategory::where('slug', $category)->where('flag_publish', 1)->first();
        $article  = Article::where('slug', $slug)->where('flag_publish', 1)->first();

        return view('frontend.article.detail')->with(compact('content','imageContent','categoryI','article'));
    }

    public function success()
    {
        return view('frontend.success');
    }
}
