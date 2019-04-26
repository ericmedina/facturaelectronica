@extends('layouts.home.main')
@section('contenido')
    <div class="container">
      <section class="servicios row">
        <div class="col-12 d-block d-sm-none d-lg-none">
            <div class="img-servicios col-12">
              <img class="svg-sistemas" id="" src="{{asset('images/home/sistemas_medida.svg')}}" alt="sistemas a medida" >
           
            </div>
        </div>
        <div class="col-12 col-lg-6 texto-servicio derecha mt-5 pt-5 pt-lg-0 mt-lg-0">
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
        <div class="col-6 d-none d-lg-block">
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
       <div class="d-block d-sm-none d-lg-none">
          <hr>  <!-- LINEA CELESTE SE MUESTRA SOLO EN CEL  -->        
      </div>
      <section class="servicios row">
        <div class="col-md-6 d-none d-lg-block">
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
           <div class="col-12 d-block d-sm-none d-lg-none">
              <div class="img-servicios">
                  <img class="svg-sistemas" id="" src="{{asset('images/home/paginas_web.svg')}}" alt="" >
              </div>
          </div>
        <div class="col-md-6 texto-servicio izquierda pt-5 mt-5 mt-lg-0 pt-lg-0">
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
       <div class="d-block d-sm-none d-lg-none">
          <hr>  <!-- LINEA CELESTE SE MUESTRA SOLO EN CEL  -->        
      </div>
      <section class="servicios row">
        <div class="col-12 d-block d-sm-none d-lg-none mb-5">
          <div class="img-servicios">
             <img class="svg-sistemas" id="" src="{{asset('images/home/facturacion_electronica.svg')}}" alt="" >
          </div>
        </div>
        <div class="col-md-6 texto-servicio derecha">
          <h1 class="titulo-servicio">FACTURACIÓN ELECTRÓNICA</h1>
          <h2 class="slogan-servicio">Llevá tu empresa <br> donde vayas</h2>
          <p class="resumen-servicio">
              <span class="black">Desarrollamos el servicio de facturación electrónica que cumple con las exigencias impuestas por AFIP.</span> El nuevo régimen de AFIP obliga a los contribuyentes a realizar facturación electrónica, para lo cual brindamos un servició que cumple con dicho régimen integrado a la gestión de tu empresa.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
        <div class="col-md-6 d-none d-lg-block">
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
      <div class="d-block d-sm-none d-lg-none">
          <hr>  <!-- LINEA CELESTE SE MUESTRA SOLO EN CEL  -->        
      </div>
      <section class="servicios row">
        <div class="col-md-6 d-none d-lg-block">
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
        <div class="col-12 d-block d-sm-none d-lg-none">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/marketing_digital.svg')}}" alt="" >
          </div>
        </div>
        <div class="col-md-6 texto-servicio izquierda mt-5 pt-5 mt-lg-0 pt-lg-0">
          <h1 class="titulo-servicio">MARKETING DIGITAL</h1>
          <h2 class="slogan-servicio">Destacate <br> entre todos</h2>
          <p class="resumen-servicio">
            <span class="black">Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</span> El mundo actual brinda la posibilidad de llegar a potenciales clientes a través de nuevos medios. Producimos el contenido y los canales necesarios para tener una presencia global y relevante en buscadores y redes sociales.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
      </section>
        <div class="d-block d-sm-none d-lg-none">
          <hr>          
        </div>
      <section class="servicios  row">
        <div class="col-12 d-block d-sm-none d-lg-none">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/ecommerce.svg')}}" alt="" >
          </div>
        </div>
        <div class="col-md-6 texto-servicio derecha mt-5 pt-5 mt-lg-0 pt-lg-0">
          <h1 class="titulo-servicio">E-COMMERCE</h1>
          <h2 class="slogan-servicio">¿Querés vender <br> por internet?</h2>
          <p class="resumen-servicio">
              <span class="black">Para el desarrollo comercial de tu negocio y empresa generamos la tienda online que necesitás.</span> Las formas de comprar y vender cambiaron a lo largo del tiempo, en la actualidad están disponibles a solo un click. Llevamos tu negocio a la web, garantizando posicionamiento y visibilidad en potenciales clientes.
          </p>
          <a class="info-servicio" href="" title="">Más info</a>
        </div>
        <div class="col-md-6 d-none d-lg-block">
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
@endsection
@section('js')
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
    </script>
@endsection
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