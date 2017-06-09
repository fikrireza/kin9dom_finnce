@extends('frontend._layout')

@section('meta')
<meta property="og:title" content="{{ $event->meta_title }}" />
<meta property="og:description " content="{{ $event->meta_description }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ $event->meta_keyword }}">
<meta property="og:url" content="{{ $event->meta_url }}" />
<meta property="og:image" content="{{ $event->meta_image }}" />
@endsection

@section('title')
Event - {{ $event->name }}
@endsection

@section('script')
<script type="text/javascript" src="{!! asset('amadeo/assets/slick-1.6.0/slick.min.js') !!}"></script>
<script type="text/javascript">
	$(function() {
		$('.image-carousel').slick({
			arrows: false,
			autoplay: true,
		});

		$('.image-carousel').on('afterChange', function(slick, currentSlide){
			console.log(currentSlide.currentSlide);
			$('.dots-carousel div').removeClass('active');
			$('.dots-carousel div:nth-child('+ (currentSlide.currentSlide + 1) +')').addClass('active')
		});

		$('.dots-carousel div').click(function(event) {
			$('.image-carousel').slick('slickGoTo', $(this).attr('goto-slide'));
		});
	});
</script>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{!! asset('amadeo/assets/slick-1.6.0/slick.css') !!}"/>
<style type="text/css">
    .header-block
	{
		min-height: 100%;
		padding: 0px;
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

	.image-carousel
	{
		margin-top: 20px;
		text-align: center;
	}

	.image-thumbnail
	{
		width: 100%;
		height: 270px;
	}

	
	.dots-carousel
	{
		margin: 20px 0px;
		text-align: center;
	}

	.dots-carousel div
	{
		display: inline-block;
		border-radius: 10px;
		margin: 0px 2px;
		width: 15px;
		height: 15px;
		border: 3px solid gray;
		cursor: pointer;
	}

	.dots-carousel div.active
	{
		border: 3px solid #f2c685;
		background-color: #f2c685;
	}

	.event-detail
	{
		margin-top: 20px;
		border-collapse: collapse;
		width: 100%;
	}

	.event-detail tr td:nth-child(1)
	{
		border-right: thin solid #f2c685;
	}

	.event-detail tr td
	{
		border-bottom: thin solid #f2c685;
		padding: 5px;
	}

	.event-detail tr:last-child td
	{
		border-bottom: none;
	}

	.event-title
	{
		color: #e0a96b;
		font-size: 40px;
	}

	.event-info
	{
		color: red;
		font-style: italic;
	}

	.btn-link
	{
		display: inline-block;
	    border: none;
	    font-size: 20px;
	    padding: 5px 18px;
	    font-family: 'Helvetica LT Std';
	}


	@media (min-width:992px) 
	{
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		#our-event
		{
		    /*padding-bottom: 120px;*/
		}

		.image-thumbnail
		{
			height: 500px;
		}
	}
</style>
@endsection

@section('content')
@foreach ($imageContent as $list)
	@if ($list->for == 'event.header')
		<div class="container-fluid header-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach

<div class="base-color"> 
	<div class="container">
		<ol class="breadcrumb2 margin-zero">
			<li><a href="{!! route('home') !!}">Home</a></li>
			<li><a href="{!! route('event') !!}">Event</a></li>
			<li class="active">{{ $event->name }}</li>          
		</ol>
	</div>                 
</div>

<div class="panel-block">
	<div class="container-fluid" id="our-event">
	    <div class="text-center">
	        @foreach ($content as $list)
				@if ($list->for == 'event')
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
	    <div class="row base-color-lighter">
			<div class="col-md-7">
				<div class="image-carousel">
					@foreach($eventImage as $list)
						<div class="image-border image-thumbnail">
			        		<div style="background-image: url('{!! asset($list->image) !!}');">
			        			<div>
			        				
			        			</div>
			        		</div>
			        	</div>
			        @endforeach
				</div>
				<div class="dots-carousel">
					@php $count=0; @endphp
					@foreach($eventImage as $list)
						<div class="@if($count == 0) active @endif" goto-slide="{!! $count !!}">
							
						</div>
						@php $count++; @endphp
					@endforeach
				</div>
			</div>
			<div class="col-md-5">
				<table class="event-detail">
					<tr>
						<td width="5%">&nbsp;</td>
						<td width="95%">
							<h4 class="event-title">
								{{ $event->name }}
							</h4>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<table width="100%" style="font-family: 'Helvetica LT Std';">
								<tr>
									<td class="no-border" width="20%" valign="top"><b>Tanggal</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">{{ date('d F Y', strtotime($event->date)) }}</span></td>
								</tr>
								<tr>
									<td class="no-border" valign="top"><b>Jam</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">{{ $event->time }}</span></td>
								</tr>
								<tr>
									<td class="no-border" valign="top"><b>Lokasi</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">{{ $event->location }}</span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							{!! $event->description !!}
							<!-- <div class="text-center">
								<a href="#" class="btn-link base-color-darker">
									Register Event
								</a>
							</div> -->
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	@include('frontend._include.article-panel')
</div>
	

@endsection
