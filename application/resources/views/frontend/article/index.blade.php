@extends('frontend._layout')

@section('meta')
<meta property="og:title" content="{{ isset($meta->meta_title) == true ? $meta->meta_title : '' }}" />
<meta property="og:description " content="{{ isset($meta->meta_description) == true ? $meta->meta_description : '' }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ isset($meta->meta_keyword) == true ? $meta->meta_keyword : '' }}">
<meta property="og:url" content="{{ isset($meta->meta_url) == true ? $meta->meta_url : '' }}" />
<meta property="og:image" content="{{ isset($meta->meta_image) == true ? asset($meta->meta_image) : '' }}" />
@endsection

@section('title')
Article
@endsection

@section('script')
<script type="text/javascript">
	$(function() {
		var startPage = 2;
		$(".more-link").click(function(){
		    $.ajax({url: "{{ route('article.more') }}/" + startPage, success: function(result){
		        if(result == '')
		        {
		        	$(".more-link").remove();
		        }
		        else
		        {
		        	$(".append").append(result);
			        startPage++;
		        }
		    }});
		});
	});
    
</script>
@endsection

@section('style')
<style type="text/css">
    .header-block
	{
		min-height: 100%;
		padding: 0px;
	}

	.article-block > .article-img
	{
		width: 100%;
		height: 120px;
		background-size: cover;
		background-position: center center;
		padding: 0px;
		position: relative;
	}

	.article-block > .article-img > .article-hover
	{
		display: block;
		width: 100%;
	    height: 100%;
	    color: white;
	    background-color: rgba(242, 198, 133, 0.7);
	    font-size: 30px;
	    text-align: center;
	    padding-top: 43px;
	}

	.article-block > .article-img > .article-more
	{
		display: none;
	}

	.frame-border
	{
		border: 35px solid transparent;
	    padding: 15px;
		-webkit-border-image: url('amadeo/img/border.png') 75 round; /* Safari 3.1-5 */
	    -o-border-image: url('amadeo/img/border.png') 75 round; /* Opera 11-12.1 */
	    border-image: url('amadeo/img/border.png') 75 round;
	}

	.article-hover a
	{
		color: white;
	}


	@media (min-width:992px) 
	{
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		#article
		{
		    /*padding-bottom: 120px;*/
		}

		.more-width
		{
			width: 1250px;
		}

		.article-block
		{
			padding: 0px;
			margin-bottom: 20px;
		}

		.article-block > .article-img
		{
			height: 245px;
			background-size: 120%;
			-webkit-transition: background-size 1s; /* For Safari 3.1 to 6.0 */
    		transition: background-size 1s;
		}

		.article-block:hover > .article-img
		{
			background-size: 130%;
		}

		.article-block > .article-img > .article-hover
		{
			opacity: 0;
		    padding-top: 100px;
		    -webkit-transition: opacity 1s; /* For Safari 3.1 to 6.0 */
    		transition: opacity 1s;
		}

		.article-block:hover > .article-img > .article-hover
		{
			opacity: 1;
		}

		.article-block > .article-img > .article-more
		{
			display: block;
			width: 100%;
			position: absolute;
			text-align: center;
    		bottom: -23px;
		}

		.article-block > .article-description
		{
			width: 100%;
		    height: 170px;
		    padding: 15px;
		    border: none;
			overflow: hidden;
            background-color: white;
		    box-shadow: 3px 7px 20px rgba(0, 0, 0, 0.51);
		}
	}
</style>
@endsection

@section('content')
@foreach ($imageContent as $list)
	@if ($list->for == 'article.header')
		<div class="container-fluid header-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach

<div class="base-color"> 
	<div class="container">
		<ol class="breadcrumb2 margin-zero">
			<li><a href="{!! route('home') !!}">Home</a></li>
			<li class="active">Article</li>            
		</ol>
	</div>                 
</div>

@foreach ($content as $list)
	@if ($list->for == 'article')
		<div class="panel-block">
			<div class="container more-width" id="article">
			    <div class="text-center">
			        <h2 class="line-title">
			            {!! $list->title !!}
			        </h2>
			        <h3>
						{!! $list->subtitle !!}
					</h3>
					{!! $list->description !!}
			    </div>
			    <div class="row frame-border append">
			    	@foreach ($article as $list)
						<div class="col-md-4">
							<div class="article-block">
								<div class="article-img" style="background-image: url({!! asset($list->image) !!})">
									<div class="article-hover">
										<a href="{{ route('article.detail', ['category' => $list->category, 'slug' => $list->slug]) }}">+ View Article</a>
									</div>
									<div class="article-more">
										<a href="{{ route('article.detail', ['category' => $list->category, 'slug' => $list->slug]) }}"><img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/></a>
									</div>
								</div>
								<div class="article-description">
									<h4>
										{!! $list->name !!}
									</h4>
									{!! $list->short_description !!}
								</div>
							</div>
						</div>
					@endforeach
			    </div>
			    <div class="row">
					<div class="col-md-12 text-center">
						<a href="#" class="more-link" onclick="return false">More Article<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
					</div>
				</div>
			</div>
		</div>

		@break
	@endif
@endforeach
@include('frontend._include.article-panel')
	

@endsection
