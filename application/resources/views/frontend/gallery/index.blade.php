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

	.gallery-album
	{
	    width: 375px;
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
	    padding: 0px 40px;
	    line-height: 18px;
	    opacity: 1;
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

		.gallery-content
		{
			margin-bottom: 120px;
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
			transform: translateY(77px);
			opacity: 1;
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
	<div class="container" id="gallery">
		<div class="text-center">
			<h2 class="line-title">
				Gallery
			</h2>
			<h3>
				Welcome to Kingdom Financial
			</h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-1.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-2.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-3.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 center-block">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-4.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-5.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-6.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 center-block">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-1.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-2.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="gallery-album image-border center-block">
					<div style="background-image: url('{!! asset('amadeo/img/our-event-img-3.png') !!}');">
						<div class="text-center gallery-info">
							<div class="gallery-box">
								<div>
									
								</div>
							</div>
							<h4>Smart Insurance</h4>
							<p class="date">20 Oktober 2014</p>
							<p class="description">Lorem ipsum dolor sit amet, ex eos suscipit iudicabit.</p>
							<a href="{!! route('gallery.detail', ['slug' => 'smart']) !!}" class="view-more">
								<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
								View Detail
							</a>
						</div>
					</div>
				</div>
			</div>   
		</div>
		<div class="row gallery-content">
			<div class="col-md-12 text-center">
				<a href="#" class="more-link">More Gallery<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
			</div>
		</div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
