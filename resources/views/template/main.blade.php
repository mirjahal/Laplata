<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
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
    	<nav class="top-bar" data-topbar>
        	<ul class="title-area">
          		<li class="name">
            		<h1>
              			<a href="#">Laplata</a>
            		</h1>
          		</li>
          		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        	</ul>
     
			<section class="top-bar-section">
          		<ul class="left">
            		<li class="divider"></li>
            		<li><a href="#">Categoria</a></li>
            		
            		<li class="divider"></li>
            		<li class="active"><a href="#">Conta bancária</a></li>
            		
            		<li class="divider"></li>
            		<li><a href="#">Cartão</a></li>
            		<li class="divider"></li>
          		</ul>
          		      
          		<ul class="right">
            		<li class="has-dropdown">
              			<a href="#">Usuário</a>
              			<ul class="dropdown">
                			<li><a href="#">Perfil</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Sair →</a></li>
              			</ul>
            		</li>
          		</ul>
        	</section>
      	</nav>

        <div class="row">
			<div class="large-12 columns">
            	@yield('content')
            </div>
        </div>
        
        <footer class="row">
      		<div class="large-12 columns"><hr/>
          		<div class="row">
            		<div class="large-6 columns">
                		<p>Laplata</p>
            		</div>

            		<div class="large-6 columns">
                		<ul class="inline-list right">
							<li><a href="#">Categoria</a></li>
			                <li><a href="#">Conta bancária</a></li>
			                <li><a href="#">Cartão</a></li>
                		</ul>
            		</div>
          		</div>
      		</div>
		</footer>
        
        <script src="js/vendor/jquery.js"></script>
  		<script src="js/foundation.min.js"></script>
  		<script>
    		$(document).foundation();
  		</script>
    </body>
</html>