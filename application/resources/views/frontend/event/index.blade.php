@extends('frontend._layout')

@section('title')
Event
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
		    padding-bottom: 120px;
		}
	}
</style>
@endsection

@section('content')
<div class="container-fluid header-block" id="home" style="background-image:url({!! asset('amadeo/img/banner-event.jpg') !!});">
</div>
<div class="container-fluid padding-zero">                  
	<ol class="breadcrumb2 base-color">
		<li><a href="{!! route('home') !!}">Home</a></li>
		<li class="active">Event</li>        
	</ol>
</div>
<div class="panel-block">
	<div class="container" id="our-event">
	    <div class="text-center">
	        <h2 class="line-title">
	            Our Event
	        </h2>
	        <h3>
	            Welcome to Kingdom Financial
	        </h3>
	        <p>
	        	Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat. Lorem mollis consequat vix id, ad quando officiis pri, ei est tempor alterum assentior. Possit iriure equidem no mel, quo ei animal admodum. Mei tritani apeirian adversarium te, cum at commune placerat, ut qui dicunt pertinacia. Vide splendide ad mel, sit id persius meliore. Eu vel oportere prodesset, vim erant dictas ex. An has vide minim hendrerit. An vis quando ignota, nam ne timeam feugait delicata, usu erat justo id. Ne novum legimus conceptam mel, fugit appetere antiopam te cum. His an laudem quidam, vero sonet periculis vim ei, pri an dolor populo. Pri tollit deseruisse id.
	        </p>
	    </div>
	    <div class="row event-content">
	    	<div class="col-md-6">
				<div class="event-thumbnail" style="background-image: url({!! asset('amadeo/img/our-event-img-1.png') !!});">
					
				</div>
				<div class="event-info">
					<h4>KFC</h4>
					<p>Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat.</p>
					<a href="{!! route('event.detail', ['slug' => 'kfc']) !!}">View Event</a>
				</div>    		
	    	</div>
	    	<div class="col-md-6">
				<div class="event-thumbnail" style="background-image: url({!! asset('amadeo/img/our-event-img-2.png') !!});">
					
				</div>
				<div class="event-info">
					<h4>Fire</h4>
					<p>Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat.</p>
					<a href="{!! route('event.detail', ['slug' => 'fire']) !!}">View Event</a>
				</div>    		
	    	</div>
	    </div>
	    <div class="row">
			<div class="col-md-12 text-center">
				<a href="#" class="more-link">More Event<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
			</div>
		</div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
