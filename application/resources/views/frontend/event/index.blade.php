@extends('frontend._layout')

@section('meta')
<meta property="og:title" content="{{ $meta->meta_title }}" />
<meta property="og:description " content="{{ $meta->meta_description }}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="{{ $meta->meta_keyword }}">
<meta property="og:url" content="{{ $meta->meta_url }}" />
<meta property="og:image" content="{{ asset($meta->meta_image) }}" />
@endsection

@section('title')
Event
@endsection

@section('script')
<script type="text/javascript">
	$(function() {
		var startPage = 2;
		$(".more-link").click(function(){
		    $.ajax({url: "{{ route('event.more') }}/" + startPage, success: function(result){
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

	.event-content
	{
		margin-top: 25px;
	}

	.event-content div
	{
		margin-bottom: 20px;
	}

	.event-thumbnail
	{
		background-position: center center;
		background-size: cover;
		background-color: white;
		float: left;
		width: 40%;
		height: 300px;
	}

	.event-info
	{
		float: left;
		width: 60%;
		height: 300px;
	    padding: 10px;
	    text-align: center;
	    position: relative;
	}

	.event-info h4
	{
		font-size: 35px;
    	padding-bottom: 20px;
	}

	.event-info p
	{
		min-height: 145px;
	}

	.event-info a
	{
		font-size: 24px;
		bottom: 0px;
		font-family: 'Helvetica LT Std';
	}


	.event-content div:nth-child(odd) .event-info
	{
		background-color: #f2c685;
	}

	.event-content div:nth-child(odd) .event-info h4
	{
		color: #fff;
		border-bottom: 2px solid #fff;
	}

	.event-content div:nth-child(odd) .event-info a
	{
		color: #fff;
	}

	.event-content div:nth-child(even) .event-info
	{
		background-color: #fbefde;
	}

	.event-content div:nth-child(even) .event-info h4
	{
		color: #e0a96b;
		border-bottom: 2px solid #e0a96b;
	}

	.event-content div:nth-child(even) .event-info a
	{
		color: #e0a96b;
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
			<li class="active">Event</li>          
		</ol>
	</div>                 
</div>

<div class="panel-block">
	<div class="container" id="our-event">
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
	    <div class="row event-content append">
	    	@foreach ($event as $list)
		    	<div class="col-md-6">
		    		@php $eventImage   = App\EventImage::where('id_event', $list->id )->orderBy('priority', 'DESC')->first(); @endphp
					<div class="event-thumbnail" style="background-image: url({{ asset($eventImage['image']) }});">
						
					</div>
					<div class="event-info">
						<h4>{!! $list->name !!}</h4>
						{!! $list->short_description !!}
						<a href="{!! route('event.detail', ['slug' => $list->slug]) !!}">View Event</a>
					</div>    		
		    	</div>
	    	@endforeach
	    </div>
	    <div class="row">
			<div class="col-md-12 text-center">
				<a href="#" class="more-link" onclick="return false">More Event<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
			</div>
		</div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
