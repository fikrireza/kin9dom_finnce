@extends('frontend._layout')

@if($meta != null)
@section('meta')
<meta property="og:title" content="{{ isset($meta->meta_title) == true ? $meta->meta_title : '' }}" />
<meta property="og:description " content="{{ isset($meta->meta_description) == true ? $meta->meta_description : '' }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ isset($meta->meta_keyword) == true ? $meta->meta_keyword : '' }}">
<meta property="og:url" content="{{ isset($meta->meta_url) == true ? $meta->meta_url : '' }}" />
<meta property="og:image" content="{{ isset($meta->meta_image) == true ? asset($meta->meta_image) : '' }}" />
@endsection
@endif

@section('title')
Gallery
@endsection

@section('script')
<script type="text/javascript">
	$(function() {
		var startPage = 2;
		$(".more-link").click(function(){
		    $.ajax({url: "{{ route('gallery.more') }}/" + startPage, success: function(result){
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

	.gallery-album
	{
	    width: 100%;
        height: 290px;
	    margin-bottom: 10px;
	}

	.gallery-info
	{
		color: #fff;
		position: relative;
	}

	.gallery-info > .gallery-box
	{
		background-color: rgba(242, 198, 133, 0.75);
	    width: 100%;
	    height: 100%;
	    padding: 10px;
	    position: absolute;
	    top: 0px;
	    left: 0px;
	}

	.gallery-box > div
	{
		width: 100%;
		height: 100%;
		border: thin solid white;
	}

	.gallery-info > h4
	{
		margin: 0px;
		width: 100%;
		font-family: 'Helvetica LT Std';
	    transform: translateY(55px);
	    font-weight: 900;
	    padding: 0px 20px;
	}

	.gallery-info > .date
	{
		margin: 0px;
		font-size: 14px;
		width: 100%;
		font-family: 'Helvetica LT Std';
		transform: translateY(55px);
		font-weight: 900;
		opacity: 0;
	}

	.gallery-info > .description
	{
		margin: 0px;
		font-size: 23px;
		width: 100%;
		transform: translateY(40px);
	    padding: 0px 20px;
	    line-height: 18px;
	    opacity: 1;
	    display: none;
	}

	.gallery-info > .view-more
	{
		margin: 0px;
		font-size: 18px;
		width: 100%;
		font-family: 'Helvetica LT Std';
		transform: translateY(77px);
		display: block;
		color: white;
		font-weight: bold;
	}

	.gallery-info > .view-more > img
	{
		height: 20px;
		margin-bottom: 5px;
	}

	@media (min-width:992px) 
	{ 
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		.gallery-album
		{
			width: 375px;
		}

		.gallery-content
		{
			/*margin-bottom: 120px;*/
		}

		.gallery-info > .gallery-box
		{
			background-color: rgba(242, 198, 133, 0.75);
		    width: 160px;
		    height: 160px;
		    padding: 10px;
		    position: absolute;
		    top: -80px;
		    left: -80px;
		    transform: translate(165px, 123px) rotate(45deg);
		    transition: all 1s;
		}

		.gallery-info:hover > .gallery-box
		{
		    width: 330px;
		    height: 245px;
		    top: 0px;
		    left: 0px;
		    transform: translate(0px, 0px) rotate(0deg);
		}

		.gallery-box > div
		{
			width: 100%;
			height: 100%;
			border: thin solid white;
		}

		.gallery-info > h4
		{
			margin: 0px;
			width: 100%;
			font-family: 'Helvetica LT Std';
		    transform: translateY(108px);
		    font-weight: 900;
		    transition: all 1s;
		}

		.gallery-info:hover > h4
		{
		    transform: translateY(55px);
		}

		.gallery-info > .date
		{
			margin: 0px;
			font-size: 14px;
			width: 100%;
			font-family: 'Helvetica LT Std';
			transform: translateY(105px);
			font-weight: 900;
			opacity: 1;
			transition: all 1s;
		}

		.gallery-info:hover > .date
		{
		    transform: translateY(55px);
		    opacity: 0;
		    
		}

		.gallery-info > .description
		{
			margin: 0px;
			font-size: 23px;
			width: 100%;
			transform: translateY(100px);
		    padding: 0px 40px;
		    line-height: 18px;
		    opacity: 0;
		    display: inherit;
		    transition: all 1s;
		}

		.gallery-info:hover > .description
		{
		    transform: translateY(40px);
		    opacity: 1;
		}

		.gallery-info > .view-more
		{
			margin: 0px;
			font-size: 18px;
			width: 100%;
			font-family: 'Helvetica LT Std';
			transform: translateY(100px);
			display: block;
			color: white;
			font-weight: bold;
			opacity: 0;
			transition: all 1s;
		}

		.gallery-info:hover > .view-more
		{
			transform: translateY(45px);
			opacity: 1;
		}
	}
</style>
@endsection

@section('content')
@foreach ($imageContent as $list)
	@if ($list->for == 'gallery.header')
		<div class="container-fluid header-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach
<div class="base-color"> 
	<div class="container">
		<ol class="breadcrumb2 margin-zero">
			<li><a href="{!! route('home') !!}">Home</a></li>
			<li class="active">Gallery</li>          
		</ol>
	</div>                 
</div>
<div class="panel-block">
	<div class="container" id="gallery">
		<div class="text-center">
			@foreach ($content as $list)
				@if ($list->for == 'gallery')
			        <h2 class="line-title">
						{!! $list->title !!}
					</h2>
					<h3>
						{!! $list->subtitle !!}
					</h3>
					{!! $list->description !!}
	        		@break
				@endif
			@endforeach
		</div>
		<div class="row append">
			@foreach ($gallery as $list)
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset($list->image) !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>{!! $list->name !!}</h4>
							<p class="date">{!! date('d F Y', strtotime($list->date)) !!}</p>
							<div class="description">
								{!! $list->short_description !!}
							</div>
							<a href="{!! route('gallery.detail', ['slug' => $list->slug]) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row gallery-content">
			<div class="col-md-12 text-center">
				<a href="#" class="more-link" onclick="return false">More Gallery<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
			</div>
		</div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
