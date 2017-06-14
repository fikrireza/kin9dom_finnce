@extends('frontend._layout')

@section('meta')
<meta property="og:title" content="{{ $article->meta_title }}" />
<meta property="og:description " content="{{ $article->meta_description }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ $article->meta_keyword }}">
<meta property="og:url" content="{{ $article->meta_url }}" />
<meta property="og:image" content="{{ asset($article->meta_image) }}" />
@endsection

@section('title')
{!! $categoryI->name !!} - {!! $article->name !!}
@endsection

@section('script')

@endsection

@section('style')
<style type="text/css">
	.header-block
	{
		min-height: 100%;
		padding: 0px;
	}

	.article-image
	{
	    width: 80%;
        height: 290px;
	}

	.extend-background
	{
		position: relative;
	}

	.extend-background .background
	{
	    position: absolute;
	    width: 100%;
	    height: 200px;
	    bottom: 0px;
	    z-index: -1;
	}

	@media (min-width:992px) 
	{ 
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		.article-image
		{
	        height: 600px;
		}

		.article-content
		{
			/*margin-bottom: 120px;*/
		}
	}
</style>
@endsection

@section('content')
@foreach ($imageContent as $list)
	@if ($list->for == 'article.header')
		<div class="container-fluid header-block panel-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach

<div class="base-color"> 
	<div class="container">
		<ol class="breadcrumb2 margin-zero">
			<li><a href="{!! route('home') !!}">Home</a></li>
			<li><a href="{!! route('article') !!}">Article</a></li>
			<li><a href="{!! route('article.category', ['category' => $categoryI->slug]) !!}">{!! $categoryI->name !!}</a></li>
			<li class="active">{!! $article->name !!}</li>          
		</ol>
	</div>                 
</div>

@foreach ($content as $list)
	@if ($list->for == 'article')
		<div class="panel-block">
			<div class="container-fluid" id="about-us">
				<div class="text-center">
					<div class="text-center">
				        <h2 class="line-title">
				            {!! $list->title !!}
				        </h2>
				        <h3>
							{!! $list->subtitle !!}
						</h3>
						{!! $list->description !!}
				    </div>
				</div>
				<div class="row extend-background">
					<div class="col-md-12">
						<div class="image-border article-image center-block">
							<div style="background-image: url('{!! asset($article->image) !!}');">
								<div>
								</div>
							</div>
						</div>
					</div>
					<div class="background base-color-lighter">
						
					</div>
				</div>
			</div>
			<div class="container-fluid base-color-lighter">
				<div class="container">
					<div class="row article-content">
						<h1 class="text-center">{!! $article->name !!}</h1>
						{!! $article->description !!}
					</div>
				</div>
				
			</div>
			
		</div>
		@break
	@endif
@endforeach
@include('frontend._include.article-panel')

@endsection
