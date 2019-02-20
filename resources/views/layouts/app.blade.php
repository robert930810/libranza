<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
		    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">  

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>	
        <script type="text/javascript" src="{{ asset('js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <!--<div id="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="logo-container">
                        <img src="{{asset('images/logo_Creo.png')}}" alt="logo creo" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6 items-container">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="items-menu">
                                <a href="/">Quiénes somos</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="items-menu">
                                <a href="/">Cómo asociarse</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="items-menu">
                                <a href="/">Beneficios</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="items-menu">
                                <a href="/">Convenios</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 offset-lg-1">
                    <div class="login-boton">
                        <a href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->


       <div id="container">
            @yield('content')
        </div>
        <div id="footer">
        <footer class="page-footer font-small blue pt-4">

<div class="container-fluid text-center text-md-left">
  <div class="row">
    <div class="col-md-6 mt-md-0 mt-3">    
      <h5 class="text-uppercase">Footer Content</h5>
      <p>Here you can use rows and columns here to organize your footer content.</p>
    </div>
    <hr class="clearfix w-100 d-md-none pb-3">
    <div class="col-md-3 mb-md-0 mb-3">    
        <h5 class="text-uppercase">Links</h5>
        <ul class="list-unstyled">          
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>    
      <div class="col-md-3 mb-md-0 mb-3">    
        <h5 class="text-uppercase">Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>
      </div>
  </div>
</div>
<div class="footer-copyright text-center py-3">© 2018 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> Lagobo</a>
</div>
</footer>
        </div>
    </body>
    <script type="text/javascript">
        $('#sliderPrincipal').slick({
			autoplay: true,
			autoplaySpeed: 15000,
			nextArrow: '<i class="fa fa-chevron-left slideNext"></i>',
			prevArrow: '<i class="fa fa-chevron-right slidePrev"></i>',
			responsive: [
				{
					breakpoint: 768,
					settings: {
						arrows: false,
					}
				}
			]
		});

        
		$('#creditoLibranza-slider').slick({
			slidesToShow : 3,
			slidesToScroll : 1,
			autoplay: true,
			autoplaySpeed: 5000,
			responsive: [
				{
					breakpoint : 1300,
					settings: {
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						slidesToShow: 1,
					}
				}
			]
		});
    </script>
</html>
