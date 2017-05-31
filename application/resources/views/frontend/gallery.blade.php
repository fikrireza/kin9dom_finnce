@extends('frontend._layout')

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

	@media (min-width:992px) 
	{ 
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		
	}
</style>
@endsection

@section('content')
<div class="container-fluid header-block" id="home" style="background-image:url({!! asset('amadeo/img/banner-about.jpg') !!});">
</div>
<div class="container-fluid padding-zero">                  
	<ol class="breadcrumb2 base-color">
		<li><a href="{!! route('home') !!}">Home</a></li>
		<li class="active">Gallery</li>        
	</ol>
</div>
<div class="panel-block">
	<div class="container" id="about-us">
	    <div class="text-center">
	        <h2>
	            Gallery
	        </h2>
	        <h3>
	            Welcome to Kingdom Financial
	        </h3>
	    </div>
	    <div class="row about-content">	        
	    </div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
