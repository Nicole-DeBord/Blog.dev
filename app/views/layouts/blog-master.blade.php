<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

		<link rel="stylesheet" href="/bootstrap/css/bootstrap-cosmo-theme.min.css">

		<link rel="stylesheet" href="/bootstrap/css/bootstrap-sidebar.css">

		<link rel="stylesheet" href="/css/color-box.css">

		@yield('styling')

    </head>
    <body>

	 <div class="row">

	    <div id="wrapper" class="toggle">

	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand">
	                    <a href="#">
	                        Sparkle On!
	                    </a>
	                </li>
	                <li>
	                    <a href="#">Blog</a>
	                </li>
	                <li>
	                    <a href="#">Archives</a>
	                </li>
	                <li>
	                    <a href="#">About</a>
	                </li>
	                <li>
	                    <a href="#">Portfolio</a>
	                </li>
	                <li>
	                    <a href="#">Contact</a>
	                </li>
	            </ul>
	        </div>
	    </div> -->
	<div class="row">
	    <div id="wrapper">
		    <div id="sidebar-wrapper">
		        <ul class="sidebar-nav">
		            <li class="sidebar-brand"><a href="#">Home</a></li>
		            <li><a href="#">Another link</a></li>
		            <li><a href="#">Next link</a></li>
		            <li><a href="#">Last link</a></li>
		        </ul>
		    </div>
	    <div id="page-content-wrapper">
	        <div class="page-content">
	            <div class="container">
	                <div class="row">
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
	        </div>
	    </div>
	</div>
    </body>
</html>