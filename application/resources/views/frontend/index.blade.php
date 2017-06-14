@extends('frontend._layout')

@if($meta != null)
@section('meta')
<meta property="og:title" content="{{ $meta->meta_title }}" />
<meta property="og:description " content="{{ $meta->meta_description }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ $meta->meta_keyword }}">
<meta property="og:url" content="{{ $meta->meta_url }}" />
<meta property="og:image" content="{{ asset($meta->meta_image) }}" />
@endsection
@endif

@section('title')
Home
@endsection

@section('script')
<script type="text/javascript">
	
</script>
@endsection

@section('style')
<style type="text/css">
	.header-block
	{
		min-height: 100%;
		padding: 0px;
	}

	.image-about
	{
		width: 100%;
		height: 270px;
	}

	#about-us
	{
		margin-top: 30px;
		margin-bottom: 30px;
		
	}

	.about-content > div > p
	{
		text-indent: 50px;
	}

	.event-content > div
	{
		height: 100px;
		background-size: cover;
		background-position: center center;
		padding: 0px;
		
	}

	.event-line
	{
		height: 1px;
		width: 50px;
		padding: 0px 7px;
	}

	.event-hover
	{
		display: block;
		background-color: rgba(255, 255, 255, 0.4);
		height: 100%;
		text-align: center;
		font-size: 45px;
		font-weight: bold;
		position: relative;
	}

	.event-hover > div
	{
		position: absolute;
		width: 100%;
		top: 33px;
		font-size: 24px;
	}

	.event-hover > div > a
	{
		color: #fff;
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

	.article-hover a
	{
		color: white;
	}

	.article-block > .article-img > .article-more
	{
		display: none;
	}


	@media (min-width:992px) 
	{ 
		/*header block*/
		.header-block
		{
			position: relative;
		}

		/*about block*/
		#about-us
		{
			margin-top: 0px;
			padding: 0px 45px;
		}

		.about-content > div
		{
			padding: 0px 40px;
		}

		.image-about
		{
			height: 325px;
		}

		/*event block*/
		.event-content > div
		{
			height: 290px;
			background-size: 100%;
			-webkit-transition: background-size 1s; /* For Safari 3.1 to 6.0 */
			transition: background-size 1s;
		}

		.event-content > div:hover
		{
			background-size: 110%;
		}

		.event-hover > div
		{
			top: 120px;
			font-size: 40px;
		}

		.event-hover > div
		{
			top: 120px;
			font-size: 40px;
		}


		.event-content > div > .event-hover
		{
			opacity: 0;
			-webkit-transition: opacity 1s; /* For Safari 3.1 to 6.0 */
			transition: opacity 1s;
		}

		.event-content > div:hover > .event-hover
		{
			opacity: 1;
			display: block;
		}

		.event-content > div > .event-hover > .event-line:before,
		.event-content > div > .event-hover > .event-line:after
		{
			content: '';
			display: inline-block;
			border-bottom: 2px solid white;
			width: 0px;
			position: relative;
			top: -8px;
			-webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
			transition: width 2s;
		}

		.event-content > div:hover > .event-hover > .event-line:before,
		.event-content > div:hover > .event-hover > .event-line:after
		{
			width: 105px;
		}

		
		/*article block*/
		.article-block
		{
			padding: 0px;
		}

		.article-block > .article-img
		{
			height: 245px;
			background-size: 100%;
			-webkit-transition: background-size 1s; /* For Safari 3.1 to 6.0 */
			transition: background-size 1s;
		}

		.article-block:hover > .article-img
		{
			background-size: 110%;
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
	@if ($list->for == 'home.header')
		<div class="container-fluid header-block panel-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach

@include('frontend._include.article-panel')

@foreach ($content as $list)
	@if ($list->for == 'about')
		<div class="container" id="about-us">
			<div class="text-center">
				<h2 class="line-title">
					{!! $list->title !!}
				</h2>
				<h3>
					{!! $list->subtitle !!}
				</h3>
			</div>
			<div class="row about-content" style="margin-top: 25px;">
				<div class="col-md-6" style="text-align: justify; font-size: 17px;">
					{!! $list->description !!}
				</div>
				<div class="col-md-6">
					@foreach ($imageContent as $list)
						@if ($list->for == 'home.about')
							<div class="image-border image-about">
								<div style="background-image: url('{!! asset($list->image) !!}');">
									<div>
										
									</div>
								</div>
							</div>
							@break
						@endif
					@endforeach
				</div>
			</div>
		</div>

		@break
	@endif
@endforeach

@foreach ($content as $list)
	@if ($list->for == 'event')
		<div class="container-fluid base-color" id="our-event">
			<div class="container text-center">
				<h2>
					{!! $list->title !!}
				</h2>
				<h3>
					{!! $list->subtitle !!}
				</h3>
				{!! $list->description !!}
			</div>
			<div class="row event-content">
				@foreach ($event as $list)
					@php $eventImage   = App\EventImage::where('id_event', $list->id )->orderBy('priority', 'DESC')->first(); @endphp
					<div class="col-md-4 col-xs-6" style="background-image: url({{ asset($eventImage['image']) }})">
						<div class="event-hover">
							<div class="event-line">
								<a href="{{ route('event.detail', ['slug' => $list->slug ]) }}">{!! $list->name !!}</a>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
			<div class="text-center">
				<a class="button-link" href="{{ route('event') }}">
					More
				</a>
			</div>
		</div>
		@break
	@endif
@endforeach


@foreach ($content as $list)
	@if ($list->for == 'article')
		<div class="container" id="article">
			<div class="text-center">
				<h2>
					{!! $list->title !!}
				</h2>
				<h3>
					{!! $list->subtitle !!}
				</h3>
				{!! $list->description !!}
			</div>
			<div class="row">
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
			<div class="text-center">
				<a class="button-link" href="{!! route('article') !!}">
					More
				</a>
			</div>
		</div>
		@break
	@endif
@endforeach

		
@endsection
