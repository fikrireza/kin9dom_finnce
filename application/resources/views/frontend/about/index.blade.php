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
About
@endsection

@section('script')
<script type="text/javascript">
    $(function(){
    	$('.btn-expand').click(function(event) {
    		if($(this).hasClass('active'))
    		{
    			$('.btn-expand').removeClass('active');
    			$('.content-expand').removeClass('active');
    		}
    		else
    		{
    			$('.btn-expand').removeClass('active');
    			$('.content-expand').removeClass('active');

    			$(this).addClass('active');
    			$(this).parent().next().addClass('active');
    		}
    		
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

	.image-about
	{
		width: 100%;
		height: 270px;
	}

	.arcordion
	{
	    border-bottom: thin solid #f2c685;
	    color: #f2c685;
	    text-align: right;
	    position: relative;
        font-weight: bold;
	    font-size: 28px;
	}

	.content-expand
	{
		padding: 20px 20px;
	}

	.about-content
	{
		margin-top: 25px;
	}
	
	@media (min-width:992px) 
	{ 
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		#about-us
		{
		    /*padding-bottom: 120px;*/
		}

		.image-about
		{
            height: 325px;
		}
		
		.arcordion
		{
		    border-bottom: thin solid #f2c685;
		    color: #f2c685;
		    text-align: right;
		    position: relative;
            margin: 20px 0px;
		    margin-left: 36px;
		    font-weight: bold;
		    font-size: 28px;
		}

		.arcordion:first-child
		{
			margin-top: 0px;
		}

		.btn-expand
		{
			position: absolute;
		    top: 14px;
			left: -36px;
			font-size: 17px;
			cursor: pointer;
			-ms-transform: rotate(0deg); /* IE 9 */
		    -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
		    transform: rotate(0deg);
		    -webkit-transition: transform 0.5s linear; /* Safari 3.1 to 6.0 */
		    transition: transform 0.5s linear;
		}

		.btn-expand.active
		{
			-ms-transform: rotate(180deg); /* IE 9 */
		    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
		    transform: rotate(180deg);
		}

		.content-expand
		{
			margin-left: 36px;
			padding: 0px 20px;
			overflow: hidden;
			max-height: 0px;
			-webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */
		    transition: all 0.5s;
		}

		.content-expand.active
		{
			max-height: 520px;
			padding: 20px 20px;
		}
	}
</style>
@endsection

@section('content')
@foreach ($imageContent as $list)
	@if ($list->for == 'about.header')
		<div class="container-fluid header-block panel-block" id="home" style="background-image:url({!! asset($list->image) !!});">
		</div>
		@break
	@endif
@endforeach
<div class="base-color"> 
	<div class="container">
		<ol class="breadcrumb2 margin-zero">
			<li><a href="{!! route('home') !!}">Home</a></li>
			<li class="active">About Us</li>        
		</ol>
	</div>                 
</div>
<div class="panel-block">
	<div class="container" id="about-us">
	    <div class="text-center">
	    	@foreach ($content as $list)
				@if ($list->for == 'about')
			        <h2 class="line-title">
						{!! $list->title !!}
					</h2>
					<h3>
						{!! $list->subtitle !!}
					</h3>
	        		@break
				@endif
			@endforeach
	    </div>
	    <div class="row about-content">
	    	<div class="col-md-6 col-md-push-6">
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

	        <div class="col-md-6 col-md-pull-6" style="text-align: justify; font-size: 17px;">
	            @foreach ($content as $list)
						@if ($list->for == 'about.history')
			            <h4 class="arcordion">
			            	<div class="btn-expand active hidden-xs hidden-sm">
			            		<span class="fa-stack">
									<i class="fa fa-circle-thin fa-stack-2x"></i>
									<i class="fa fa-caret-down fa-stack-1x"></i>
								</span>
			            	</div>
			            	{!! $list->title !!}
			            </h4>
			            <div class="content-expand base-color-lighter active">
			            	{!! $list->description !!}
			            </div>
		            	@break
					@endif
				@endforeach
				@foreach ($content as $list)
						@if ($list->for == 'about.visi')
			            <h4 class="arcordion">
			            	<div class="btn-expand hidden-xs hidden-sm">
			            		<span class="fa-stack">
									<i class="fa fa-circle-thin fa-stack-2x"></i>
									<i class="fa fa-caret-down fa-stack-1x"></i>
								</span>
			            	</div>
			            	{!! $list->title !!}
			            </h4>
			            <div class="content-expand base-color-lighter">
			            	{!! $list->description !!}
			            </div>
		            	@break
					@endif
				@endforeach
				@foreach ($content as $list)
						@if ($list->for == 'about.misi')
			            <h4 class="arcordion">
			            	<div class="btn-expand hidden-xs hidden-sm">
			            		<span class="fa-stack">
									<i class="fa fa-circle-thin fa-stack-2x"></i>
									<i class="fa fa-caret-down fa-stack-1x"></i>
								</span>
			            	</div>
			            	{!! $list->title !!}
			            </h4>
			            <div class="content-expand base-color-lighter">
			            	{!! $list->description !!}
			            </div>
		            	@break
					@endif
				@endforeach
	        </div>
	        
	    </div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
