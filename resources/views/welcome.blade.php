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

</head>
<body>
    <img class="img_nube" src="{{asset('images/home/fondo_nube_gris.svg')}}" alt="">
    <img class="img_forma_azul" src="{{asset('images/home/fondo_nube_azul.svg')}}" alt="">
    <nav>
      <div class="navbar container">
        <a href="" class="brand" title=""><img src="{{asset('images/Iconos pampadev/brand.png')}}" alt=""></a>
        <ul class="menu">
          <li><a href="">Home</a></li>
          <li><a href="">Nosotros</a></li>
          <li><a href="">Servicios</a></li>
          <li><a href="">Noticias</a></li>
          <li><a href="">Contacto</a></li>
          <li><a href=""><img src="{{asset('images/Iconos pampadev/Icono fondo blanco.png')}}" alt=""></a></li>
        </ul>
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
              <img id="" src="{{asset('images/sistemas/paso1.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso2.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso3.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso4.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso5.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso6.svg')}}" alt="">
              <img id="" src="{{asset('images/sistemas/paso7.svg')}}" alt="">
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
          <img src="{{asset('images/home/facturacion_electronica.svg')}}" style="position: absolute;" alt="">
          <div class="img-servicios">
              {{-- <img class="svg-facturacion paso1" id="" src="{{asset('images/facturacion/paso1.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso4" id="" src="{{asset('images/facturacion/paso4.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso5" id="" src="{{asset('images/facturacion/paso5.svg')}}" alt=""> --}}
              <img class="svg-facturacion paso2" id="" src="{{asset('images/facturacion/paso2.svg')}}" alt="">
              {{-- <img class="svg-facturacion paso3" id="" src="{{asset('images/facturacion/paso3.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso10" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso11" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso12" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso13" id="" src="{{asset('images/facturacion/paso3_1.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso6" id="" src="{{asset('images/facturacion/paso6.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso7" id="" src="{{asset('images/facturacion/paso7.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso8" id="" src="{{asset('images/facturacion/paso8.svg')}}" alt=""> --}}
              {{-- <img class="svg-facturacion paso9" id="" src="{{asset('images/facturacion/paso9.svg')}}" alt=""> --}}
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
      <hr>
      <section class="contacto mb-4">
        <h1 class="titulo-noticias">Contacto</h1>
      </section>
    </div>





    {{-- <style type="text/css">
        .paginas_web{
            position: relative;
            left: 100px;
            top: 200px;
            width: 379px;
        }

        #fondo_gris {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: fade 2s 1 forwards; /* Safari 4+ */
            -moz-animation:    fade 2s 1 forwards; /* Fx 5+ */
            -o-animation:      fade 2s 1 forwards; /* Opera 12+ */
            animation:         fade 2s 1 forwards; /* IE 10+, Fx 29+ */
        }
        @-webkit-keyframes fade {
          0%   { opacity: 0; }
          100% { opacity: 1; }
        }
        @-moz-keyframes fade {
          0%   { opacity: 0; }
          100% { opacity: 1; }
        }
        @-o-keyframes fade {
          0%   { opacity: 0; }
          100% { opacity: 1; }
        }
        @keyframes fade {
          0%   { opacity: 0; }
          100% { opacity: 1; }
        }
        #computadoras {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: scale .5s .5s 1 forwards; /* Safari 4+ */
            -moz-animation:    scale .5s .5s 1 forwards; /* Fx 5+ */
            -o-animation:      scale .5s .5s 1 forwards; /* Opera 12+ */
            animation:         scale .5s .5s 1 forwards; /* IE 10+, Fx 29+ */
        }

        #ventana {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: scale .3s .7s 1 forwards; /* Safari 4+ */
            -moz-animation:    scale .3s .7s 1 forwards; /* Fx 5+ */
            -o-animation:      scale .3s .7s 1 forwards; /* Opera 12+ */
            animation:         scale .3s .7s 1 forwards; /* IE 10+, Fx 29+ */
        }
        #nubes {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: scale .3s 1s 1 forwards; /* Safari 4+ */
            -moz-animation:    scale .3s 1s 1 forwards; /* Fx 5+ */
            -o-animation:      scale .3s 1s 1 forwards; /* Opera 12+ */
            animation:         scale .3s 1s 1 forwards; /* IE 10+, Fx 29+ */
        }
        #cables {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: scale .3s 1.2s 1 forwards; /* Safari 4+ */
            -moz-animation:    scale .3s 1.2s 1 forwards; /* Fx 5+ */
            -o-animation:      scale .3s 1.2s 1 forwards; /* Opera 12+ */
            animation:         scale .3s 1.2s 1 forwards; /* IE 10+, Fx 29+ */
        }
        #libreta {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            -webkit-animation: scale .3s 1.4s 1 forwards; /* Safari 4+ */
            -moz-animation:    scale .3s 1.4s 1 forwards; /* Fx 5+ */
            -o-animation:      scale .3s 1.4s 1 forwards; /* Opera 12+ */
            animation:         scale .3s 1.4s 1 forwards; /* IE 10+, Fx 29+ */
        }
        #engranaje1{
            position: absolute;
            height: 50px;
            top: 45px;
            right: 10px;
            opacity: 0;
            -webkit-animation: engranaje .3s 2s 1 forwards; /* Safari 4+ */
            -moz-animation:    engranaje .3s 2s 1 forwards; /* Fx 5+ */
            -o-animation:      engranaje .3s 2s 1 forwards; /* Opera 12+ */
            animation:         engranaje .3s 2s 1 forwards; /* IE 10+, Fx 29+ */
        }
        #engranaje2{
            position: absolute;
            height: 35px;
            top: 20px;
            right: 75px;
            opacity: 0;
            -webkit-animation: engranaje .3s 1.6s 1 forwards; /* Safari 4+ */
            -moz-animation:    engranaje .3s 1.6s 1 forwards; /* Fx 5+ */
            -o-animation:      engranaje .3s 1.6s 1 forwards; /* Opera 12+ */
            animation:         engranaje .3s 1.6s 1 forwards; /* IE 10+, Fx 29+ */
        }

        @-webkit-keyframes scale {
          0%   { opacity: 0;  transform: scale(0)}
          100% { opacity: 1; transform: scale(1) }
        }
        @-moz-keyframes scale {
          0%   { opacity: 0; transform: scale(0)}
          100% { opacity: 1; transform: scale(1)}
        }
        @-o-keyframes scale {
          0%   { opacity: 0; transform: scale(0)}
          100% { opacity: 1; transform: scale(1)}
        }
        @keyframes scale {
          0%   { opacity: 0; transform: scale(0)}
          100% { opacity: 1; transform: scale(1)}
        }
        @-webkit-keyframes engranaje {
          0%   { opacity: 0;  -webkit-transform: rotate(0deg) }
          100% {opacity: 1; -webkit-transform: rotate(360deg)}
        }
        @-moz-keyframes engranaje {
          0%   { opacity: 0; -moz-transform: rotate(0deg)}
          100% {opacity: 1; -moz-transform: rotate(360deg)}
        }
        @-o-keyframes engranaje {
          0%   { opacity: 0; -o-transform: rotate(0deg)}
          100% {opacity: 1; -o-transform: rotate(360deg)}
        }
        @keyframes engranaje {
          0%   { opacity: 0; transform: rotate(0deg)}
          100% {opacity: 1; transform: rotate(360deg)}
        }
    </style>
    <div class="paginas_web">
        <img id="fondo_gris" src="{{asset('images/1x/svgfondo.svg')}}" alt="">
        <img id="cables" src="{{asset('images/1x/svgcables.svg')}}" alt="">
        <img id="computadoras" src="{{asset('images/1x/svgcomputadora.svg')}}" alt="">
        <img id="ventana" src="{{asset('images/1x/svgVentana.svg')}}" alt="">
        <img id="libreta" src="{{asset('images/1x/svglibreta.svg')}}" alt="">
        <img id="engranaje1" src="{{asset('images/1x/svgengranaje1.svg')}}" alt="">
        <img id="engranaje2" src="{{asset('images/1x/svgengranaje2.svg')}}" alt="">
        <img id="nubes" src="{{asset('images/1x/svgnubes.svg')}}" alt="">
    </div> --}}
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script  src="{{asset('js/jquery.min.js')}}"></script>
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109285614-1"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4R_duN92jPo5Z4hFRvxxXsAvhlDNvRL0 &signed_in=true"></script>-->    
    {{-- <script async type="text/javascript">
        window.addEventListener('load', function(){
            registerServiceWorker();
        });
        function registerServiceWorker() {
          return navigator.serviceWorker.register('/service-worker.js')
            .then(function(registration) {
              console.log('Service worker successfully registered.');
              initialiseServiceWorker();
              _registration = registration;
              return registration;
            })
            .catch(function(err) {
              console.error('Unable to register service worker.', err);
            });
        }
        function initialiseServiceWorker () {
          if (!('showNotification' in ServiceWorkerRegistration.prototype)) {
            console.log('Notifications aren\'t supported.')
            return
          }
          if (Notification.permission === 'denied') {
            console.log('The user has blocked notifications.')
            return
          }
          if (!('PushManager' in window)) {
            console.log('Push messaging isn\'t supported.')
            return
          }
          navigator.serviceWorker.ready.then(registration => {
            registration.pushManager.getSubscription()
              .then(subscription => {
                if (!subscription) {
                  return
                }
                //this.sendSubscriptionToBackEnd(subscription)
                this.isPushEnabled = true
              })
              .catch(e => {
                console.log('Error during getSubscription()', e)
              })
          })
        }
    </script> --}}
   <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109285614-1');

      function showMenu(){
        if($('.collapsed-menu').css('top') == "-500px"){
            $('.collapsed-menu').animate({
                'top': 0
              }, 800, function() {
                // Animation complete.
              });
        }else{
            $('.collapsed-menu').animate({
                'top': -500
              }, 800, function() {
                // Animation complete.
              });
        }
      }
        /*if ("geolocation" in navigator){ //check geolocation available 
        //try to get user current location using getCurrentPosition() method
            navigator.geolocation.getCurrentPosition(function(position){ 
                    console.log("Found your location nLat : "+position.coords.latitude+" nLang :"+ position.coords.longitude);
                     var latlng = {
                        lat: parseFloat(position.coords.latitude),
                        lng: parseFloat(position.coords.longitude)
                      };
                    var geocoder = new google.maps.Geocoder;
                    geocoder.geocode({
                        'location':latlng
                         // ej. "-34.653015, -58.674850"
                      }, function(results, status) {
                          // si la solicitud fue exitosa
                          if (status === google.maps.GeocoderStatus.OK) {
                            // si encontró algún resultado.
                            if (results[1]) {

                              console.log(results[1].address_components[2].long_name);
                            }
                          }
                    });
                });
        }else{
            console.log("Browser doesn't support geolocation!");
        }*/
    </script>-->
</body>
</html>