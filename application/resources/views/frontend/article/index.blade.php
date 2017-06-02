@extends('frontend._layout')

@section('title')
Article
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

	.frame-border
	{
		border: 35px solid transparent;
	    padding: 15px;
		-webkit-border-image: url('amadeo/img/border.png') 75 round; /* Safari 3.1-5 */
	    -o-border-image: url('amadeo/img/border.png') 75 round; /* Opera 11-12.1 */
	    border-image: url('amadeo/img/border.png') 75 round;
	}


	@media (min-width:992px) 
	{
		/*header block*/
		.header-block
		{
			min-height: 50%;
			position: relative;
		}

		#article
		{
		    padding-bottom: 120px;
		}

		.more-width
		{
			width: 1250px;
		}

		.article-block
		{
			padding: 0px;
			margin-bottom: 20px;
		}

		.article-block > .article-img
		{
			height: 245px;
			background-size: 120%;
			-webkit-transition: background-size 1s; /* For Safari 3.1 to 6.0 */
    		transition: background-size 1s;
		}

		.article-block:hover > .article-img
		{
			background-size: 130%;
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
            background-color: white;
		    box-shadow: 3px 7px 20px rgba(0, 0, 0, 0.51);
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
		<li class="active">Article</li>        
	</ol>
</div>
<div class="panel-block">
	<div class="container more-width" id="article">
	    <div class="text-center">
	        <h2 class="line-title">
	            Our Event
	        </h2>
	        <h3>
	            Welcome to Kingdom Financial
	        </h3>
	    </div>
	    <div class="row frame-border">
	    	<div class="col-md-4">
	            <div class="article-block">
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-1.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-2.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-3.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	        <div class="col-md-4">
	            <div class="article-block">
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-1.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-2.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-3.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	        <div class="col-md-4">
	            <div class="article-block">
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-1.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-2.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	                <div class="article-img" style="background-image: url({!! asset('amadeo/img/article-3.png') !!})">
	                    <div class="article-hover">
	                        + View Article
	                    </div>
	                    <div class="article-more">
	                        <img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/>
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
	    <div class="row">
			<div class="col-md-12 text-center">
				<a href="#" class="more-link">More Article<br><img src="{!! asset('amadeo/img/more.png') !!}"></a>
			</div>
		</div>
	</div>
	@include('frontend._include.article-panel')
</div>
	

@endsection
