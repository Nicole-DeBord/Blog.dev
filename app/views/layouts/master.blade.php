<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

		@yield('resources')

		@yield('styling')

    </head>

    <body>
	

	@yield('carousel')


	<!-- Navbar Begin! -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
            	@yield('navbar')
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">@yield('currentLink')</li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="http://www.makesum.com/glitterponies#9631">Ipsum</a></li>
                <li>@yield('link')</li>
                <li>@yield('paramLink')</li>
    
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


	@yield('greeting')

    <div class="container">

	@yield('recentprojects')

    @yield('entry')

    @yield('content')

    @yield('form')

    </div>
    </body>
</html>