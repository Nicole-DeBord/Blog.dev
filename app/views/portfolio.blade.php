@extends('layouts.master')


@section('title')
	Portfolio
@stop



@section('resources')
	<script src="./js/jquery.min.js"></script>

	<!-- Carousel fullscreen magic -->
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />

	<!-- JQuery Carousel Fullscreen CSS File -->	
	<link rel="stylesheet" href="./css/jquery.carousel.fullscreen.css" />
@stop


@section('styling')
	<style type="text/css">
		body {
		/*    padding-top: 70px;*/
			background-color: #1A1A1F;
			color: #FFF;
			opacity: 0.9;
		}

		#round-images {
			text-align: center;
		}

		#carousel-image {
			display: block;
			width: 100%;
			height: 500px;
		}

		.img-circle {
			border-radius: 50%;
			height: 250px;
			width: 250px;
		}

		#projects-head {
			padding: 20px;
		}

		h3 {
			padding: 35px;
		}

		a {
			color: #FFFFFF;
			text-decoration: none;
		}
	</style>
@stop


@section('carousel')
<!-- This is a typical Twitter Bootstrap Carousel -->

	<!-- Carousel -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
<!-- 		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol> -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
				<img id="carousel-image" src="./img/space.jpg" alt="beautiful star nebulae" />

				<div class="container">
					<div class="carousel-caption">
						<h1>Nicole DeBord</h1>
						<p class="lead">Junior Web Developer / Space Enthusiast</p>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="./img/space3.jpg" alt="beautiful star nebulae" />

				<div class="container">
					<div class="carousel-caption">
						<h1>Bootstrap Carousel Fullscreen</h1>
						<p class="lead">Slide two please?</p>
					</div>
				</div>

			</div>
		</div>

		<!-- Controls -->
<!-- 		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a> -->
	</div>
@stop



@section('recentprojects')

	<h1 id="projects-head">Recent Projects</h1>

	<div id="round-images">
    	<div class="col-md-4">

    		<img src="./img/parks.png" alt="star nebula" class="img-circle img-responsive center-block">
			<a href="{{{ action('HomeController@getParks') }}}"><h3>US National Parks List + MySQL</h3></a>

    	</div>

		
		<div class="col-md-4">

	   		<img src="./img/pony_whack.jpg" alt="star nebula" class="img-circle img-responsive center-block">
			<h3>Whack-A-Pony Game + JavaScript</h3>

    	</div>


    	<div class="col-md-4">

	   		<img src="./img/adbook.png" alt="star nebula" class="img-circle img-responsive center-block">
			<h3>Address Book Application + MySQL</h3>

    	</div>



    	<!-- <div class="col-md-4">

	   		<img src="./img/parks.png" alt="star nebula" class="img-circle img-responsive center-block">
	   		<h3>Laravel Blog + MVC Architecture Model</h3> -->

    	</div>
	</div>

@stop


@section('navbar')
	Portfolio
@stop


{{-- @section('content')
	<h1>This is my portfolio.</h1>
@stop --}}


@section('currentLink')
	<a href="{{{ action('HomeController@getPortfolio') }}}">Portfolio!</a>
@stop

@section('link')
	<a href="{{{ action('HomeController@getResume') }}}">Resume!</a>
@stop

@section('paramLink')
	<a href="{{{ action('HomeController@sayHello', array('name' => 'Nicole', 'age' => '26')) }}}">sayHello!</a>
@stop
	