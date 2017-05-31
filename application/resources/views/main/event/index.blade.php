@extends('main._layout')

@section('title')
Event
@endsection

@section('script')
<script type="text/javascript" src="{!! asset('assets/slick-1.6.0/slick.min.js') !!}"></script>
<script type="text/javascript">
	$(function() {
		$('.image-carousel').slick({
			arrows: false,
			autoplay: true,
		});

		$('.image-carousel').on('afterChange', function(slick, currentSlide){
			// console.log(currentSlide.currentSlide);
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
<link rel="stylesheet" type="text/css" href="{!! asset('assets/slick-1.6.0/slick.css') !!}"/>
<style type="text/css">
    .header-block
	{
		min-height: 100%;
		padding: 0px;
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
		    padding-bottom: 120px;
		}

		.image-thumbnail
		{
			height: 500px;
		}
	}
</style>
@endsection

@section('content')
<div class="container-fluid header-block" id="home" style="background-image:url({!! asset('img/banner-event.jpg') !!});">
</div>
<div class="container-fluid padding-zero">                  
	<ol class="breadcrumb2 base-color">
		<li><a href="{!! url('home') !!}">Home</a></li>
		<li><a href="{!! url('event') !!}">Event</a></li>
		<li class="active">{Name Event}</li>       
	</ol>
</div>
<div class="panel-block">
	<div class="container-fluid" id="our-event">
	    <div class="text-center">
	        <h2>
	            Our Event
	        </h2>
	        <h3>
	            Welcome to Kingdom Financial
	        </h3>
	    </div>
	    <div class="row base-color-lighter">
			<div class="col-md-7">
				<div class="image-carousel">
					<div class="image-border image-thumbnail">
		        		<div style="background-image: url('{!! asset('img/our-event-img-1.png') !!}');">
		        			<div>
		        				
		        			</div>
		        		</div>
		        	</div>
		        	<div class="image-border image-thumbnail">
		        		<div style="background-image: url('{!! asset('img/our-event-img-2.png') !!}');">
		        			<div>
		        				
		        			</div>
		        		</div>
		        	</div>
		        	<div class="image-border image-thumbnail">
		        		<div style="background-image: url('{!! asset('img/our-event-img-3.png') !!}');">
		        			<div>
		        				
		        			</div>
		        		</div>
		        	</div>
				</div>
				<div class="dots-carousel">
					<div class="active" goto-slide="0">
						
					</div>
					<div class="" goto-slide="1">
						
					</div>
					<div class="" goto-slide="2">
						
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<table class="event-detail">
					<tr>
						<td width="5%">&nbsp;</td>
						<td width="95%">
							<h4 class="event-title">
								Muda Kaya Raya
							</h4>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<table width="100%" style="font-family: 'Helvetica LT Std';">
								<tr>
									<td class="no-border" width="20%" valign="top"><b>Tanggal</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">1 Januari 2014</span></td>
								</tr>
								<tr>
									<td class="no-border" valign="top"><b>Jam</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">07.00 - 10.00</span></td>
								</tr>
								<tr>
									<td class="no-border" valign="top"><b>Lokasi</b></td>
									<td class="no-border" valign="top"><b>:</b> <span class="event-info">Pekan Raya Jakarta</span></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<p>
								Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat. Lorem mollis consequat vix id, ad quando officiis pri, ei est tempor alterum assentior. Possit iriure equidem no mel, quo ei animal admodum. Mei tritani apeirian adversarium te, cum at commune placerat, ut qui dicunt pertinacia. Vide splendide ad mel, sit id persius meliore. Eu vel oportere prodesset, vim erant dictas ex. An has vide minim hendrerit. An vis quando ignota, nam ne timeam feugait delicata, usu erat justo id. Ne novum legimus conceptam mel, fugit appetere antiopam te cum. His an laudem quidam, vero sonet periculis vim ei, pri an dolor populo. Pri tollit deseruisse id.
							</p>
							<div class="text-center">
								<a href="#" class="btn-link base-color-darker">
									Register Event
								</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	@include('main._include.article-panel')
</div>
	

@endsection
