<!DOCTYPE html>
<html lang="en" class="theme-color-07cb79 theme-skin-light cssall cssgradients rgba opacity supports textshadow cssanimations bgrepeatround bgrepeatspace boxshadow csstransforms csstransforms3d csstransitions desktop">
  <head>
    @include('layouts.head')
  </head>

  <body class="home header-has-img">
    <div class="wrapper">
	    @include('layouts.menu')

	    <div class="content">
            <div class="container">
	    		@yield('content')
	    	</div><!-- .container -->
        </div><!-- .content -->

	    
	    @include('layouts.footer')
    <div class="wrapper"><!-- .wrapper -->

    <a class="btn-scroll-top" href="#" style="display: none;"><i class="rsicon rsicon-arrow-up"></i></a>
    <div id="overlay"></div>
    
  </body>

</html>
