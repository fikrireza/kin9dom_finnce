@extends('main._layout')

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
		padding: 0px 45px;
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

		.event-content > div > .event-hover > div > .event-line
		{
			width: 0px;
			-webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    		transition: width 2s;
		}

		.event-content > div:hover > .event-hover > div > .event-line
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
		    height: 145px;
		    padding: 15px;
		    border: none;
			overflow: hidden;
		    box-shadow: 3px 7px 20px rgba(0, 0, 0, 0.51);
		}

		

	}
</style>
@endsection

@section('content')
<div class="container-fluid header-block panel-block" id="home" style="background-image:url({!! asset('img/banner.jpg') !!});">
	@include('main._include.article-panel')
</div>

<div class="container" id="about-us">
    <div class="text-center">
        <h2>
            About Us
        </h2>
        <h3>
            Welcome to Kingdom Financial
        </h3>
    </div>
    <div class="row about-content" style="margin-top: 25px;">
        <div class="col-md-6" style="text-align: justify; font-size: 17px;">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
            </p>
            <p>
                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page Maker including. versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
            </p>
        </div>
        <div class="col-md-6">
        	<div class="image-border image-about">
        		<div style="background-image: url('{!! asset('img/about-us-img.jpg') !!}');">
        			<div>
        				
        			</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<div class="container-fluid base-color" id="our-event">
    <div class="container text-center">
        <h2>
            Our Event
        </h2>
        <h3>
            Lorem ipsum dolor sit amet, utinam iriure eam ex, has ei audire volutpat. Lorem mollis consequat vix id, ad quando officiis pri, ei est tempor alterum assentior. Possit iriure equidem no mel, quo ei animal admodum. Mei tritani apeirian adversarium te, cum at commune placerat, ut qui dicunt pertinacia. Vide splendide ad mel, sit id persius meliore. Eu vel oportere prodesset, vim erant dictas ex. An has vide minim hendrerit. An vis quando ignota, nam ne timeam feugait delicata, usu erat justo id. Ne novum legimus conceptam mel, fugit appetere antiopam te cum. His an laudem quidam, vero sonet periculis vim ei, pri an dolor populo. Pri tollit deseruisse id.
        </h3>
    </div>
    <div class="row event-content">
        <!-- dynamic data -->
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-1.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Surabaya
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-2.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Jakarta
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-3.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Bandung
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-4.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Semarang
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-5.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Yogyakarta
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6" style="background-image: url({!! asset('img/our-event-img-6.png') !!})">
            <div class="event-hover">
                <div>
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                    Denpasar
                    <img class="event-line" src="{!! asset('img/line.png') !!}"/>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="button-link" href="#more">
            More
        </a>
    </div>
</div>
<div class="container" id="article">
    <div class="text-center">
        <h2>
            Article
        </h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="article-block">
                <div class="article-img" style="background-image: url({!! asset('img/article-1.png') !!})">
                    <div class="article-hover">
                        + View Article
                    </div>
                    <div class="article-more">
                        <img src="{!! asset('img/more-img.png') !!}" style="width: 45px;"/>
                    </div>
                </div>
                <div class="article-description">
                    <h4>
                        8 Resiko Asuransi Pendidikan
                    </h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="article-block">
                <div class="article-img" style="background-image: url({!! asset('img/article-2.png') !!})">
                    <div class="article-hover">
                        + View Article
                    </div>
                    <div class="article-more">
                        <img src="{!! asset('img/more-img.png') !!}" style="width: 45px;"/>
                    </div>
                </div>
                <div class="article-description">
                    <h4>
                        Tips Mencari Asuransi
                    </h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="article-block">
                <div class="article-img" style="background-image: url({!! asset('img/article-3.png') !!})">
                    <div class="article-hover">
                        + View Article
                    </div>
                    <div class="article-more">
                        <img src="{!! asset('img/more-img.png') !!}" style="width: 45px;"/>
                    </div>
                </div>
                <div class="article-description">
                    <h4>
                        Kenali Modus Penipuan Investasi
                    </h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="button-link" href="#more">
            More
        </a>
    </div>
</div>
@endsection
