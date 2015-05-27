<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="pt-BR" >
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laplata - @yield('title')</title>
        
        <link rel="stylesheet" href="css/normalize.css">
  		<link rel="stylesheet" href="css/foundation.min.css">
  		<link rel="stylesheet" href="css/foundation-icons.css">
  		<link rel="stylesheet" href="css/style.css">
  		
  		<script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
    	@yield('header')

        <div class="row">
			<div class="large-12 columns">
            	@yield('content')
            </div>
        </div>
        
        @yield('footer')
        
        <script src="js/vendor/jquery.js"></script>
  		<script src="js/foundation.min.js"></script>
  		<script>
    		$(document).foundation();
  		</script>
    </body>
</html>
