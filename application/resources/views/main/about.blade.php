@extends('main._layout')

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
		    padding-bottom: 120px;
		}

		.image-about
		{
            width: 100%;
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
<div class="container-fluid header-block" id="home" style="background-image:url({!! asset('img/banner-about.jpg') !!});">
</div>
<div class="container-fluid padding-zero">                  
	<ol class="breadcrumb2 base-color">
		<li><a href="{!! url('home') !!}">Home</a></li>
		<li class="active">About Us</li>        
	</ol>
</div>
<div class="panel-block">
	<div class="container" id="about-us">
	    <div class="text-center">
	        <h2>
	            About Us
	        </h2>
	        <h3>
	            Welcome to Kingdom Financial
	        </h3>
	    </div>
	    <div class="row about-content">
	    	<div class="col-md-6 col-md-push-6">
	        	<div class="image-border image-about">
	        		<div style="background-image: url('{!! asset('img/about-us2-img.jpg') !!}');">
	        			<div>
	        				
	        			</div>
	        		</div>
	        	</div>
	        </div>

	        <div class="col-md-6 col-md-pull-6" style="text-align: justify; font-size: 17px;">
	            <h4 class="arcordion">
	            	<div class="btn-expand active hidden-xs hidden-sm">
	            		<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-caret-down fa-stack-1x"></i>
						</span>
	            	</div>
	            	History
	            </h4>
	            <div class="content-expand base-color-lighter active">
	            	<p>
	            		Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.
	            	</p>
	            	<p>
	            		An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.
	            	</p>
	            </div>
	            <h4 class="arcordion">
	            	<div class="btn-expand hidden-xs hidden-sm">
	            		<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-caret-down fa-stack-1x"></i>
						</span>
	            	</div>
	            	Visi
	            </h4>
	            <div class="content-expand base-color-lighter">
	            	<p>
	            		Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.
	            	</p>
	            	<p>
	            		An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.
	            	</p>
	            </div>
	            <h4 class="arcordion">
	            	<div class="btn-expand hidden-xs hidden-sm">
	            		<span class="fa-stack">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-caret-down fa-stack-1x"></i>
						</span>
	            	</div>
	            	Misi
	            </h4>
	            <div class="content-expand base-color-lighter">
	            	<p>
	            		Lorem ipsum dolor sit amet, cu has audiam legendos accusata, accusata atomorum vim at, nec simul quodsi reprehendunt te. No cum facete dictas, alia paulo duo at. Ex utamur numquam delectus per, in nec vero timeam docendi, zril fabellas incorrupte ad pri. Summo appareat ea est, has nullam conclusionemque no, vis sale bonorum consequuntur an. Ea ceteros civibus sed, duo in commodo debitis. Has an primis ancillae, ei sonet meliore definiebas eam.
	            	</p>
	            	<p>
	            		An sumo laboramus mel, te primis pertinax eos, duo eros ullum falli id. Mea eu ornatus scaevola, solet mollis vis ea. Eu has diam disputationi, vix ei eirmod inimicus persequeris. Ea ius quis ponderum, eum ut agam doctus senserit, latine iuvaret lucilius ex eam. Ea sed percipitur honestatis, postea copiosae conclusionemque at mea.
	            	</p>
	            </div>
	        </div>
	        
	    </div>
	</div>
	@include('main._include.article-panel')
</div>
	

@endsection
