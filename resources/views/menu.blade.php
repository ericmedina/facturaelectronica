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
    <style type="text/css" media="screen">
      nav{
        position: fixed;
        height: 40px;
        width: 40px;
        border-radius: 50px;
        background-color: var(--celeste);
        bottom: 30px;
        right: 20px;
        z-index: 9999;
        padding: 0;
        transition: all .5s;
        box-shadow: 0px 0px 3px rgba(0,0,0,0.2);
      }
      nav.navigation{
        height: 100%;
        width: 100%;
        bottom: 0;
        right: 0;
        border-radius: 0px;
        background-color: white;
      }
      .mobile-navbar{
        height: 40px;
        width: 40px;
      }
      .navigation .mobile-navbar{
        height: 100%;
        width: 100%;
        overflow: hidden;
      }
      .mobile-menu{
        display: none;
      }
      .navigation .mobile-menu{
        display: block;
        width: 80%;
        margin-left: 10%;
      }
      .mobile-menu .brand{
        width: 100%;
      }
      .mobile-menu .brand img{
        width: 80%;
        margin-left: 10%;
        height: auto;
      }
      .mobile-menu .menu{
        margin-top: 20px;
        width: 80%;
        margin-left: 10%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding-left: 0;
      }
      .mobile-menu .menu li a{
        font-size: 1.8em;
        padding-left: 0;
      }
      #collapseServicios, #collapseSistemas{
      }
      #collapseServicios a, #collapseSistemas a{
        font-size: 1.4em;
        padding-left: 10px;
      }
      #burgerBtn {
        border-top: 2px solid white;
        left: 10px;
        height: 16px;
        width: 20px;
        top: 13px;
        box-sizing: border-box;
        position: absolute;
        z-index: 30;
        cursor: pointer;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -khtml-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
      }
      #burgerBtn:before {
        content: "";
        display: block;
        position: absolute;
        height: 2px;
        width: 20px;
        left: 0;
        background: white;
        top: 5px;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -khtml-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
      }
      #burgerBtn:after {
        content: "";
        display: block;
        position: absolute;
        height: 2px;
        width: 20px;
        left: 0;
        background: white;
        bottom: 0;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        -khtml-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
      }
      .navigation #burgerBtn {
        border-color: transparent;
        position: relative;
        top: 10px;
        right: 10px;
      }
      .navigation #burgerBtn:before {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -khtml-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        background: var(--celeste);
      }
      .navigation #burgerBtn:after {
        -webkit-transform: rotate(135deg);
        -moz-transform: rotate(135deg);
        -khtml-transform: rotate(135deg);
        -o-transform: rotate(135deg);
        transform: rotate(135deg);
        bottom: 7px;        
        background: var(--celeste);
      }
    </style>

</head>
<body>
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
    
    <div class="container">
      <section class="servicios row">
        <div class="col-6 texto-servicio derecha">
          <h1 class="titulo-servicio">SISTEMAS A MEDIDA</h1>
          <h2 class="slogan-servicio">Soluciones personalizadas</h2>
          <p class="resumen-servicio">
              <span class="black">Interpretamos las ideas del cliente y desarrollamos
              un producto acorde a sus necesidades.</span> Diseñamos 
              una solución para cada empresa con tecnologías
              que son tendencia en el mundo. La actualidad 
              atravesada por la inmediatez requiere de sistemas
              portables y adaptables a cada plataforma. 
              Nosotros lo hacemos posible.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
        <div class="col-6">
            <div class="img-servicios">
             <img class="svg-sistemas paso1 animacion" id="" src="{{asset('images/sistemas/paso1.svg')}}" alt="" >
              <img class="svg-sistemas paso2 animacion" id="" src="{{asset('images/sistemas/paso2.svg')}}" alt=""> 
              <img class="svg-sistemas paso3 animacion" id="" src="{{asset('images/sistemas/paso3.svg')}}" alt="">
              <img class="svg-sistemas paso4 animacion" id="" src="{{asset('images/sistemas/paso4.svg')}}" alt="">
              <img class="svg-sistemas paso5 animacion" id="" src="{{asset('images/sistemas/paso5.svg')}}" alt="">
              <img class="svg-sistemas paso6 animacion" id="" src="{{asset('images/sistemas/paso6.svg')}}" alt="">
              <img class="svg-sistemas paso7 animacion" id="" src="{{asset('images/sistemas/paso7.svg')}}" alt="">
            </div>
        </div>
      </section>
      <section class="servicios row">
        <div class="col-md-6">
          <div class="img-servicios">
              <img id="fondo_gris" src="{{asset('images/web/svgfondo.svg')}}" alt="">
              <img id="cables" src="{{asset('images/web/svgcables.svg')}}" alt="">
              <img id="computadoras" src="{{asset('images/web/svgcomputadora.svg')}}" alt="">
              <img id="ventana" src="{{asset('images/web/svgVentana.svg')}}" alt="">
              <img id="libreta" src="{{asset('images/web/svglibreta.svg')}}" alt="">
              <img id="engranaje1" src="{{asset('images/web/svgengranaje1.svg')}}" alt="">
              <img id="engranaje2" src="{{asset('images/web/svgengranaje2.svg')}}" alt="">
              <img id="nubes" src="{{asset('images/web/svgnubes.svg')}}" alt="">
          </div>
        </div>
        <div class="col-md-6 texto-servicio izquierda">
          <h1 class="titulo-servicio">PÁGINAS WEB</h1>
          <h2 class="slogan-servicio">Tu ventana <br> al mundo</h2>
          <p class="resumen-servicio">
            <span class="black">Creamos e impulsamos sitios web basados en la
            originalidad y creatividad.</span> Desarrollamos
            atractivos y novedosos diseños web para
            empresas, organizaciones, autónomos y PyMes.
            Nuestros diseños son interactivos y se adecúan a
            cualquier dispositivo. Lo que no se comunica no
            existe, estar en línea signiﬁca expandir tu negocio.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
      </section>
      <section class="servicios row">
        <div class="col-md-6 texto-servicio derecha">
          <h1 class="titulo-servicio">FACTURACIÓN ELECTRÓNICA</h1>
          <h2 class="slogan-servicio">Llevá tu empresa <br> donde vayas</h2>
          <p class="resumen-servicio">
              <span class="black">Desarrollamos el servicio de facturación electrónica que cumple con las exigencias impuestas por AFIP.</span> El nuevo régimen de AFIP obliga a los contribuyentes a realizar facturación electrónica, para lo cual brindamos un servició que cumple con dicho régimen integrado a la gestión de tu empresa.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
        <div class="col-md-6">
          <div class="img-servicios">
              <img class="svg-facturacion paso1" id="" src="{{asset('images/facturacion/paso1.svg')}}" alt="">
              <img class="svg-facturacion paso4" id="" src="{{asset('images/facturacion/paso4.svg')}}" alt="">
              <img class="svg-facturacion paso5" id="" src="{{asset('images/facturacion/paso5.svg')}}" alt="">
              <img class="svg-facturacion paso2" id="" src="{{asset('images/facturacion/paso2.svg')}}" alt="">
              <img class="svg-facturacion paso3" id="" src="{{asset('images/facturacion/paso3.svg')}}" alt="">
              <img class="svg-facturacion paso10" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt="">
              <img class="svg-facturacion paso11" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt="">
              <img class="svg-facturacion paso12" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt="">
              <img class="svg-facturacion paso13" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt="">
              <img class="svg-facturacion paso6" id="" src="{{asset('images/facturacion/paso6.svg')}}" alt="">
              <img class="svg-facturacion paso7" id="" src="{{asset('images/facturacion/paso7.svg')}}" alt="">
              <img class="svg-facturacion paso8" id="" src="{{asset('images/facturacion/paso8.svg')}}" alt="">
              <img class="svg-facturacion paso9" id="" src="{{asset('images/facturacion/paso9.svg')}}" alt="">
            </div>
        </div>
      </section>
      <section class="servicios row">
        <div class="col-md-6">
          <div class="img-servicios">
              <img class="svg-marketing paso1" id="" src="{{asset('images/marketing/paso1.svg')}}" alt="">
              <img class="svg-marketing paso2" id="" src="{{asset('images/marketing/paso2.svg')}}" alt="">
              <img class="svg-marketing paso3" id="" src="{{asset('images/marketing/paso3.svg')}}" alt="">
              <img class="svg-marketing paso4" id="" src="{{asset('images/marketing/paso4.svg')}}" alt="">
              <img class="svg-marketing paso5" id="" src="{{asset('images/marketing/paso5.svg')}}" alt="">
              <img class="svg-marketing paso6" id="" src="{{asset('images/marketing/paso6.svg')}}" alt="">
              <img class="svg-marketing paso7" id="" src="{{asset('images/marketing/paso7.svg')}}" alt="">
              <img class="svg-marketing paso8" id="" src="{{asset('images/marketing/paso8.svg')}}" alt="">
              <img class="svg-marketing paso9" id="" src="{{asset('images/marketing/paso9.svg')}}" alt="">
            </div>
        </div>
        <div class="col-md-6 texto-servicio izquierda">
          <h1 class="titulo-servicio">MARKETING DIGITAL</h1>
          <h2 class="slogan-servicio">Destacate <br> entre todos</h2>
          <p class="resumen-servicio">
            <span class="black">Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</span> El mundo actual brinda la posibilidad de llegar a potenciales clientes a través de nuevos medios. Producimos el contenido y los canales necesarios para tener una presencia global y relevante en buscadores y redes sociales.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
      </section>
      <section class="servicios  row">
        <div class="col-md-6 texto-servicio derecha">
          <h1 class="titulo-servicio">E-COMMERCE</h1>
          <h2 class="slogan-servicio">¿Querés vender <br> por internet?</h2>
          <p class="resumen-servicio">
              <span class="black">Para el desarrollo comercial de tu negocio y empresa generamos la tienda online que necesitás.</span> Las formas de comprar y vender cambiaron a lo largo del tiempo, en la actualidad están disponibles a solo un click. Llevamos tu negocio a la web, garantizando posicionamiento y visibilidad en potenciales clientes.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
        <div class="col-md-6">
          <div class="img-servicios">
              <img class="svg-ecommerce paso1" id="" src="{{asset('images/ecommerce/paso1.svg')}}" alt="">
              <img class="svg-ecommerce paso2" id="" src="{{asset('images/ecommerce/paso2.svg')}}" alt="">
              <img class="svg-ecommerce paso3" id="" src="{{asset('images/ecommerce/paso3.svg')}}" alt="">
              <img class="svg-ecommerce paso4" id="" src="{{asset('images/ecommerce/paso4.svg')}}" alt="">
              <img class="svg-ecommerce paso5" id="" src="{{asset('images/ecommerce/paso5.svg')}}" alt="">
              <img class="svg-ecommerce paso6" id="" src="{{asset('images/ecommerce/paso6.svg')}}" alt="">
              <img class="svg-ecommerce paso7" id="" src="{{asset('images/ecommerce/paso7.svg')}}" alt="">
              <img class="svg-ecommerce paso8" id="" src="{{asset('images/ecommerce/paso8.svg')}}" alt="">
              <img class="svg-ecommerce paso9" id="" src="{{asset('images/ecommerce/paso9.svg')}}" alt="">
          </div>
        </div>
      </section>
      <hr>
      <section class="noticias">
        <h1 class="titulo-noticias">Noticias</h1>
        <div class="container row">
          <div class="col-md-3 noticia">
            <div class="img-noticia">
              
            </div>
            <h2 class="titulo-noticia">Noticia el titulo</h2>
            <p class="resumen-noticia">lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>
            <a href="" title="" class="boton-noticias">+</a>
          </div>
          <div class="col-md-3 noticia">
            <div class="img-noticia">
              
            </div>
            <h2 class="titulo-noticia">Noticia el titulo</h2>
            <p class="resumen-noticia">lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>
            <a href="" title="" class="boton-noticias">+</a>
          </div>
          <div class="col-md-3 noticia">
            <div class="img-noticia">
              
            </div>
            <h2 class="titulo-noticia">Noticia el titulo</h2>
            <p class="resumen-noticia">lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>
            <a href="" title="" class="boton-noticias">+</a>
          </div>
          <div class="col-md-3 noticia">
            <div class="img-noticia">
              
            </div>
            <h2 class="titulo-noticia">Noticia el titulo</h2>
            <p class="resumen-noticia">lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.</p>
            <a href="" title="" class="boton-noticias">+</a>
          </div>
        </div>
      </section>
    </div>
    <hr>
    <section id="contacto" class="contacto pb-5" style="">
      <div class="container">
        <h1 class="titulo-servicio">¿TENÉS ALGUNA DUDA O CONSULTA?</h1>
        <h2 class="slogan-servicio">Conectate con nosotros</h2>
        <form action="{{ url('/consulta') }}" method="get" class="form-horizontal" accept-charset="utf-8">
          <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre/Razón social">
          <select class="form-control round" name="categoria">
            <option value="" selected="">Categoría a la que se dedica</option>
          </select>
          <input class="form-control" type="text" name="telefono" value="" placeholder="Teléfono">
          <input class="form-control" type="text" name="email" value="" placeholder="E-mail">
          <textarea rows="5" class="form-control" name="consulta" placeholder="Ingrese su consulta.."></textarea>
          <div class="g-recaptcha" data-sitekey="6LdAe50UAAAAACup8Ycv_VfHOoWlyXVyESMsQmsO"></div>
          <button class="float-right boton celeste" type="submit">Enviar</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </section>
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
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4R_duN92jPo5Z4hFRvxxXsAvhlDNvRL0 "></script>  
    <script type="text/javascript">
      $(window).scroll( function(){
          /* Check the location of each desired element */
          $('.img-servicios').each( function(i){
              var bottom_of_object = $(this).offset().top+80;
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              /* If the object is completely visible in the window, fade it in */
              if( bottom_of_window > bottom_of_object ){
                  $(this).children('img').addClass('animacion');
              }
          }); 
      });
      $('#burgerBtn').on('click', function(){
        $('nav').toggleClass('navigation');
      })
    </script>
</body>
</html>