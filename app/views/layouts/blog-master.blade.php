<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

		<link rel="stylesheet" href="/bootstrap/css/bootstrap-cosmo-theme.min.css">

		<link rel="stylesheet" href="/css/color-box-vertical.css">

		<!-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> -->

		@yield('css')

		<style>

		.container {

			margin-left: 0;
		}
		#color-box {
			
			padding: 20px;

		}
		</style>
		
    </head>
    <body>

	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="#">Blag</a>
	    	</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		       
		        <ul class="nav navbar-nav">
		        	<li class="active"><a href="{{{ action('PostsController@index') }}}">Home<span class="sr-only">(current)</span></a></li>
		        	<li><a href="#">Archives</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Other Projects</a></li>
					<li><a href="#">Contact</a></li>

		        	@if (Auth::check())
					
					<li><a href="{{{ action('PostsController@create') }}}">New Entry</a></li>

					@endif	
	
<!-- 		        	<li class="dropdown">
		          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">:( User Console<span class="caret"></span></a>

		          		<ul class="dropdown-menu" role="menu">
				            <li><a href="{{{ action('PostsController@create') }}}">New Entry</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
		          		</ul>
		       		 </li> -->

		    	</ul>

		    	<form class="navbar-form navbar-left" method="GET" role="search" action="{{{ action('PostsController@index') }}}">
		    	<div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" name="search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      	</form>

		      	<ul class="nav navbar-nav navbar-right">


			        @if (Auth::check())

					<li><a href="{{{ action('HomeController@doLogout') }}}">Log Out</a></li>
					
			        <li class="dropdown">
	         		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Console<span class="caret"></span></a>
	         		 	<ul class="dropdown-menu" role="menu">
				            <li><a href="{{{ action('PostsController@create') }}}">New Entry</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Separated link</a></li>
	          			</ul>
	        		</li>

	        		@else

			        <li><a href="{{{ action('PostsController@create') }}}">Log In</a></li>

					@endif

	     	 	</ul>
	   		</div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>


    <div class="container">
        <div class="row">

			<div class="col-md-2" id="color-box">

	            <div class="red"></div>
		
				<div class="orange"></div>
			
				<div class="yellow"></div>

				<div class="green"></div>
				
				<div class="blue"></div>
				
				<div class="violet"></div>
          
			</div>    




            <div class="col-md-10">
                <!-- content of page -->
            @if (Session::has('saveMessage'))
				<div class="alert alert-success">{{{ Session::get('saveMessage') }}}</div>
			@endif


		    @if (Session::has('errorMessage'))
		    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		    @endif


			@yield('greeting')

		    @yield('entry')

		    @yield('content')

			@yield('form')


			</div>
        </div>
    </div>

	<!-- jQuery -->
    <script src="/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>