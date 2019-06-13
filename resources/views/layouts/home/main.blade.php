<!DOCTYPE html>
<html lang="es">
<head>
   {{--  http://www.themezaa.com/html/pofo/home-classic-one-page.html --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nos dedicamos al diseño de paginas web empresariales, desarrollo sistemas de gestion y facturacion electrónica.">
    <meta name="keywords" content="Páginas web, Diseño paginas web, Desarrollo paginas web, Desarrollo sistemas de gestion, programas para pymes, facturacion electronica">
    <meta name="robots" content="index, follow">
    <meta name="author" content="pampadev.com.ar">
    <meta name="owner" content="Pampadev">

    <title>Pampadev - Soluciones informáticas</title>  
    <link rel="manifest" href="/manifest.json">                      
    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />
    <!-- Bootstrap -->
    <link async href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet"> 
    <link async href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}?version=2.1">
    <link rel="stylesheet" href="{{asset('/css/keyframes.css')}}?version=2.1">
    <link rel="stylesheet" href="{{asset('/css/animacion_facturacionelectronica.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animacion_paginasweb.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animacion_ecommerce.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animacion_marketing.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animacion_sistemas.css')}}">

</head>
<body >
    <img class="img_nube" src="{{asset('images/home/fondo_nube_gris.svg')}}" alt="">
    <img class="img_forma_azul" src="{{asset('images/home/fondo_nube_azul.svg')}}" alt="">
    <nav class="">
      <div class="navbar">
        <div class="container">
          <a href="{{url('/')}}" class="brand" title=""><img src="{{asset('images/Iconos pampadev/brand.png')}}" alt=""></a>
          <ul class="menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" id="dropdownServicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                <div class="dropdown-menu" aria-labelledby="dropdownServicios">
                  <a class="dropdown-item" href="{{url('sistemas-personalizados')}}">Software a medida</a>
                  <a class="dropdown-item" href="{{url('paginas-web')}}">Páginas web</a>
                  <a class="dropdown-item" href="{{url('ecommerce')}}">E-commerce</a>
                  <a class="dropdown-item" href="{{url('marketing-digital')}}">Marketing digital</a>
                </div>
            </li>
            <li><a href="{{url('/#noticias')}}">Noticias</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle texto-celeste" href="#" id="dropdownServicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GeonDev</a>
                <div class="dropdown-menu" aria-labelledby="dropdownServicios">
                  <a class="dropdown-item" href="{{url('login')}}">Iniciar sesión</a>
                  <a class="dropdown-item" href="{{url('register')}}">Registrarse</a>
                </div>
            </li>
            <li><a href="{{url('/')}}"><img src="{{asset('images/Iconos pampadev/Icono fondo blanco.png')}}" alt=""></a></li>
          </ul>
        </div>
      </div>
      <div class="mobile-navbar">
        <div id="burgerBtn"></div>
        <div class="mobile-menu">
          <a href="{{url('/')}}" class="brand" title=""><img src="{{asset('images/Iconos pampadev/brand.png')}}" alt=""></a>
          <ul class="menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="">
                <a data-toggle="collapse" href="#collapseServicios" role="button" aria-expanded="false" aria-controls="collapseServicios">Servicios</a>
                <div class="collapse" id="collapseServicios">
                  <a class="" href="{{url('sistemas-personalizados')}}">Software a medida</a>
                  <a class="" href="{{url('paginas-web')}}">Páginas web</a>
                  <a class="" href="{{url('ecommerce')}}">E-commerce</a>
                  <a class="" href="{{url('marketing-digital')}}">Marketing digital</a>
                </div>
            </li>
            <li><a href="{{url('/#noticias')}}">Noticias</a></li>
            <li><a href="#contacto">Contacto</a></li>
            <li class="dropdown">
                <a data-toggle="collapse" href="#collapseSistemas" role="button" aria-expanded="false" aria-controls="collapseSistemas">Sistema</a>
                <div class="collapse" id="collapseSistemas">
                  <a class="" href="{{url('login')}}">Iniciar sesión</a>
                  <a class="" href="{{url('register')}}">Registrarse</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('contenido', '')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(window).scroll(function (event) {
          var scroll = $(window).scrollTop();
          if(scroll > 28){
            $('.navbar').addClass('navbar-fixed');
          }else if(scroll < 28){
            $('.navbar').removeClass('navbar-fixed');
          }
      });
      $('.dropdown').on('show.bs.dropdown', function(){
          if(!$('.navbar').hasClass('navbar-fixed')){
            $('nav').addClass('navbar-fixed');
            $('body').css('padding-top', '116px');
          }
      });
      $('.dropdown').on('hide.bs.dropdown', function(){
            if(!$('.navbar').hasClass('navbar-fixed')){
              $('nav').removeClass('navbar-fixed');
              $('body').css('padding-top', '0px');
            }
      });
      $('#burgerBtn').on('click', function(){
        $('nav').toggleClass('navigation');
      })
    </script>
    @yield('js')
</body>
</html>