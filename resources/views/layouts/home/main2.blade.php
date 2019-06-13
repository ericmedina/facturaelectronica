<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>@yield('title', 'PampaDev - Soluciones informáticas')</title>
    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nos dedicamos al desarrollo y diseño de paginas web empresariales, aplicaciones moviles, sistemas de gestion y facturacion electrónica. Armamos tu vidriera en la web, desarrollando paginas desde cero y utilizando herramientas como redes sociales.">
    <meta name="keywords" content="Páginas web, Diseño paginas web, Desarrollo paginas web, Desarrollo sistemas de gestion, programas para pymes, facturacion electronica, redes sociales, software, programas, santa rosa, la pampa, argentina">
    <meta name="robots" content="index, follow">
    <meta name="author" content="pampadev.com.ar">
    <meta name="owner" content="Pampadev">
    @yield('head','')

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="{{asset('estilo_nuevo/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('estilo_nuevo/css/da-slider.css')}}" />
    <!-- Owl Carousel Assets -->
    <link href="{{asset('estilo_nuevo/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('estilo_nuevo/css/styles.css')}}" />
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('estilo_nuevo/css/estilo_personalizado.css')}}" rel="stylesheet">
    <link href="{{asset('estilo_nuevo/css/margenes_boostrap.css')}}" rel="stylesheet">
    <script src="{{asset('estilo_nuevo/js/modernizr-latest.js')}}"></script>
</head>

<body>
    <header class="header">
        <section id="section-top" class="section section-top">
            <div class="container">
                <div class="row">
                    <div class="region region-top-first col-xs-12 col-sm-8 col-md-7 col-lg-7">
                        <div class="block-contents ">

                            <div class="content">
                                <ul>
                                    <li><a href="#"><span data-toggle="tooltip" data-placement="bottom" class="superhero-tooltip" data-original-title="Facebook"><i class="fa fa-facebook"><span></span></i></span></a></li>
                                    <li><a href="#"><span data-toggle="tooltip" data-placement="bottom" class="superhero-tooltip" data-original-title="Twitter"><i class="fa fa-instagram"><span></span></i></span></a></li>
                                    <li><a href="#"><span data-toggle="tooltip" data-placement="bottom" class="superhero-tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"><span></span></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="clear: both" class="clear-fix"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header col-lg-4" style="padding-right: 0;">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="" class="logo"><b><img class="col-lg-12 col-xs-8" style="padding-left: 0;" src="{{asset('images/logotipo_fondo_blanco.png')}}"></b></a>
                    </div>
                    <!--/.navbar-header-->
                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="mainNav">
                            <li class="active hover-menu"><a href="{{url('/')}}" class="scroll-link">Home</a></li>                        
                            <li class="dropdown">
                                  <a class="dropdown-toggle hover-menu" href="" data-toggle="dropdown" role="button" aria-expanded="true" class="scroll-link">Servicios <span class="caret"></span></a>
                                  <ul class="dropdown-menu borde-menu">
                                    <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" class="scroll-link" href="{{url('sistemas-personalizados')}}">Software a medida</a></li>
                                    <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" class="scroll-link" href="{{url('paginas-web')}}">Páginas web</a></li>
                                    <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" class="scroll-link" href="{{url('ecommerce')}}">E-commerce</a></li>
                                    <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" class="scroll-link" href="{{url('marketing-digital')}}">Marketing digital</a></li>
                                    <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" class="scroll-link" href="{{url('facturacion-electronica')}}">Facturación Electrónica</a></li>
                                  </ul>
                            </li>
                            <li class="hover-menu"><a href="#services" class="scroll-link">Noticias</a></li>
                            <li class="hover-menu"><a href="#portfolio" class="scroll-link">Contacto</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" href="#collapseSistemas" role="button" aria-expanded="false" aria-controls="collapseSistemas" class="scroll-link hover-menu">GeonDev <span class="caret"></span></a>
                               <ul class="dropdown-menu borde-menu">
                                  <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" href="{{url('login')}}">Iniciar sesión</a></li>
                                  <li class="hover-menu"><a class="dropdown-item pb-4 pt-4 pl-5 pr-5" href="{{url('register')}}">Registrarse</a></li>
                               </ul>
                            </li>                      
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
            </div>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    @yield('contenido', '')
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2019 | All Rights Reserved - <a href="https://webthemez.com/tag/free" target="_blank">PampaDev</a> Soluciones informaticas.        
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    
    <script src="{{asset('estilo_nuevo/js/jquery-1.8.2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/jquery.isotope.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/jquery.nav.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/jquery.cslider.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/contact/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('estilo_nuevo/contact/contact_me.js')}}"></script>
    <script src="{{asset('estilo_nuevo/js/custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('estilo_nuevo/js/owl-carousel/owl.carousel.js')}}"></script>
    
    @yield('js')

</body>
</html>
