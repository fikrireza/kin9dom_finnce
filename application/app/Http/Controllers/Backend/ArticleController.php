<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Article;
use App\ArticleCategory;
use File;

use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	// Article function
	public function index()
	{
		$index = Article::join('amd_article_category', 'amd_article.id_article_category', '=', 'amd_article_category.id')
			->select(DB::raw('amd_article.*, amd_article_category.id as id_category, amd_article_category.name as category'))
			->get();

    	return view('backend.article.index')->with(compact('index'));
	}

	public function create()
    {
    	$category = ArticleCategory::all();

    	return view('backend.article.create')->with(compact('category'));
    }

	public function store(Request $request)
    {
    	$this->validate($request, [
            'id_article_category' => 'required',
            'name'                => 'required',
            'slug'                => 'required|unique:amd_article,slug',
            'image'               => 'image',
            'priority'            => 'integer',
            'meta_image'          => 'meta_image',
        ]);


    	$index = new Article;

    	$index->id_article_category = $request->id_article_category;
        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if ($request->hasFile('image')) {

            $pathSource = 'amadeo/source/article/';
            $image      = $request->file('image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                if($index->image != '')
                {
                    File::delete($index->image);
                }
                $index->image = $pathSource . $filename;
            }
        }
        $index->priority            = $request->priority;

        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if ($request->hasFile('meta_image')) {

            $pathSource = 'amadeo/source/article/meta/';
            $image      = $request->file('meta_image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                if($index->meta_image != '')
                {
                    File::delete($index->meta_image);
                }
                $index->meta_image = $pathSource . $filename;
            }
        }
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.article');
    }

	public function edit($id)
    {
    	$index = Article::find($id);
    	$category = ArticleCategory::all();

    	return view('backend.article.edit')->with(compact('index', 'category'));
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
            'id_article_category' => 'required',
            'name'                => 'required',
            'slug'                => 'required|unique:amd_article,slug,'.$id,
            'image'               => 'image',
            'priority'            => 'integer',
            'meta_image'          => 'meta_image',
        ]);

    	$index = Article::find($id);

    	$index->id_article_category = $request->id_article_category;
        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if (isset($request->remove_image))
        {
            if($index->image != '')
            {
                File::delete($index->image);
                $index->image = '';
            }
        }
        else
        {
            if ($request->hasFile('image')) {
    
                $pathSource = 'amadeo/source/imageContent/';
                $image      = $request->file('image');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->image != '')
                    {
                        File::delete($index->image);
                    }
                    $index->image = $pathSource . $filename;
                }
            }
        }
        $index->priority            = $request->priority;

        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if (isset($request->remove_meta_image))
        {
            if($index->meta_image != '')
            {
                File::delete($index->meta_image);
                $index->meta_image = '';
            }
        }
        else
        {
            if ($request->hasFile('meta_image')) {
    
                $pathSource = 'amadeo/source/article/meta/';
                $image      = $request->file('meta_image');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->meta_image != '')
                    {
                        File::delete($index->meta_image);
                    }
                    $index->meta_image = $pathSource . $filename;
                }
            }
        }
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.article');
    }

    public function delete($id)
    {
    	Article::destroy($id);

    	return redirect()->route('admin.article');
    }

    public function action(Request $request)
    {
    	if($request->action == 'delete')
    	{
    		Article::destroy($request->id);
    	}
    	else if($request->action == 'enable')
    	{
    		$index = Article::whereIn('id', $request->id)->update(['flag_publish' => 1]);
    	}
    	else if($request->action == 'disable')
    	{
    		$index = Article::whereIn('id', $request->id)->update(['flag_publish' => 0]);
    	}
    	
    	return redirect()->route('admin.article');
    }

    // Category function
	public function category()
	{
		$index = ArticleCategory::all();

    	return view('backend.article.category')->with(compact('index'));
	}

	public function createCategory()
    {

    	return view('backend.article.createCategory');
    }

	public function storeCategory(Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_article_category,slug',
            'image'      => 'image',
            'logo'       => 'image',
            'meta_image' => 'image',
        ]);

    	$index = new ArticleCategory;

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if ($request->hasFile('image')) {

            $pathSource = 'amadeo/source/category/image/';
            $image      = $request->file('image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                if($index->image != '')
                {
                    File::delete($index->image);
                }
                $index->image = $pathSource . $filename;
            }
        }
        if ($request->hasFile('logo')) {

            $pathSource = 'amadeo/source/category/logo/';
            $image      = $request->file('logo');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                if($index->logo != '')
                {
                    File::delete($index->logo);
                }
                $index->logo = $pathSource . $filename;
            }
        }
        $index->priority            = $request->priority;

        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if ($request->hasFile('meta_image')) {

            $pathSource = 'amadeo/source/article/meta/';
            $image      = $request->file('meta_image');
            $filename   = time() . '-' . $image->getClientOriginalName();
            if($image->move($pathSource, $filename))
            {
                if($index->meta_image != '')
                {
                    File::delete($index->meta_image);
                }
                $index->meta_image = $pathSource . $filename;
            }
        }
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.article.category');
    }

	public function editCategory($id)
    {
    	$index = ArticleCategory::find($id);

    	return view('backend.article.editCategory')->with(compact('index'));
    }

    public function updateCategory($id, Request $request)
    {
    	$this->validate($request, [
            'name'       => 'required',
            'slug'       => 'required|unique:amd_article_category,slug,'.$id,
            'image'      => 'image',
            'logo'       => 'image',
            'meta_image' => 'image',
        ]);

    	$index = ArticleCategory::find($id);

        $index->name                = $request->name;
        $index->slug                = $request->slug;
        $index->description         = $request->description;
        $index->short_description   = $request->short_description;
        if (isset($request->remove_image))
        {
            if($index->image != '')
            {
                File::delete($index->image);
                $index->image = '';
            }
        }
        else
        {
            if ($request->hasFile('image')) {
    
                $pathSource = 'amadeo/source/imageContent/';
                $image      = $request->file('image');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->image != '')
                    {
                        File::delete($index->image);
                    }
                    $index->image = $pathSource . $filename;
                }
            }
        }
        if (isset($request->remove_logo))
        {
            if($index->logo != '')
            {
                File::delete($index->logo);
                $index->logo = '';
            }
        }
        else
        {
            if ($request->hasFile('logo')) {
    
                $pathSource = 'amadeo/source/imageContent/';
                $image      = $request->file('logo');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->logo != '')
                    {
                        File::delete($index->logo);
                    }
                    $index->logo = $pathSource . $filename;
                }
            }
        }
        $index->priority            = $request->priority;

        $index->meta_title          = $request->meta_title;
        $index->meta_description    = $request->meta_description;
        if (isset($request->remove_meta_image))
        {
            if($index->meta_image != '')
            {
                File::delete($index->meta_image);
                $index->meta_image = '';
            }
        }
        else
        {
            if ($request->hasFile('meta_image')) {
    
                $pathSource = 'amadeo/source/imageContent/';
                $image      = $request->file('meta_image');
                $filename   = time() . '-' . $image->getClientOriginalName();
                if($image->move($pathSource, $filename))
                {
                    if($index->meta_image != '')
                    {
                        File::delete($index->meta_image);
                    }
                    $index->meta_image = $pathSource . $filename;
                }
            }
        }
        $index->meta_url            = $request->meta_url;
        $index->meta_keyword        = $request->meta_keyword;

        $index->flag_publish        = $request->flag_publish;
        $index->actor               = Auth::id();

        $index->save();

    	return redirect()->route('admin.article.category');
    }

    public function deleteCategory($id)
    {
    	ArticleCategory::destroy($id);

    	return redirect()->route('admin.article.category');
    }

    public function actionCategory(Request $request)
    {
    	if($request->id != '')
    	{
	    	if($request->action == 'delete')
	    	{
	    		ArticleCategory::destroy($request->id);
	    	}
	    	else if($request->action == 'enable')
	    	{
	    		$index = ArticleCategory::whereIn('id', $request->id)->update(['flag_publish' => 1]);
	    	}
	    	else if($request->action == 'disable')
	    	{
	    		$index = ArticleCategory::whereIn('id', $request->id)->update(['flag_publish' => 0]);
	    	}
	    }
    	
    	return redirect()->route('admin.article.category');
    }
}
