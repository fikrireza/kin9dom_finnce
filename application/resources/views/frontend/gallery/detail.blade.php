@extends('frontend._layout')

@section('title')
Gallery
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

	.gallery-image
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

		.gallery-image
		{
	        height: 600px;
		}

		.gallery-content
		{
			margin-bottom: 120px;
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
		<li class="active">Gallery</li>        
	</ol>
</div>
<div class="panel-block">
	<div class="container-fluid" id="about-us">
		<div class="text-center">
			<h2 class="line-title">
				Gallery
			</h2>
			<h3>
				Welcome to Kingdom Financial
			</h3>
		</div>
		<div class="row extend-background">
			<div class="col-md-12 ">
				<div class="image-border gallery-image center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-1.png') !!}');">
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
			<div class="row gallery-content">
				<h1 class="text-center">Smart Insurance</h1>
				<p class="indent-paragraf">
					Lorem ipsum dolor sit amet, ea sit dolorum legimus vulputate, dolorum placerat mandamus vis ne. Eu est case commodo. Elitr epicurei sea ea. Per id suas commune atomorum, has id sint democritum deterruisset. Est eu tacimates efficiendi scribentur, ad populo legimus salutandi est, ad legimus perfecto suscipiantur vis.
				</p>
				<p class="indent-paragraf">
					Ei labore aperiri eam, veri disputationi per ad. Quod latine ut sit, nonumy evertitur his ad. Usu modo mucius ad, pertinax suscipiantur ut vix. Duo nisl utroque torquatos ei, ei his ipsum latine deseruisse. Quod magna recusabo quo ex. Tempor appellantur at vis, at vis liber aliquid evertitur. Id qui eirmod menandri dissentias, nec iuvaret iracundia id, sed ex cetero omittam.
				</p>
			</div>
		</div>
		
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
