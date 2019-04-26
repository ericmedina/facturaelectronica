@extends('layouts.home.main')
@section('contenido')
  <div class="container">
    <section class="row mt-5">
      <div class="col-12 d-block d-sm-none d-lg-none">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/ecommerce.svg')}}" alt="" >
          </div>
      </div>
      <div class="col-12 col-lg-6 texto-servicio derecha mt-5 pt-5">  
        <h2 class="slogan-servicio">E-commerce</h2>
        <p class="resumen-servicio mt-2">
            Consiste en la distribución, venta, compra y marketing de productos o servicios a través de internet. Esto fue posible gracias al avance de la tecnología y a que las empresas busquen estar a la vanguardia y puedan ofrecer lo que hoy en días sus clientes demandan.
        </p>
      </div>
      <div class="col-6 d-none d-lg-block">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/ecommerce.svg')}}" alt="" >
          </div>
      </div>
    </section>
    <section class="mt-5">
      <div  class="datos-servicio pt-5">
        <div class="cuadro-servicio columnas-2">
            <div class="cuadro-chico fondo-naranja">
              <p class="titulo_recuadro">Vendé al mundo</p>
              <p class="desarrollo_recuadro">Que los límites geográﬁcos no sean los tuyos.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-2">
            <div class="cuadro-chico fondo-naranja">
              <p class="titulo_recuadro">Tu negocio en internet</p>
              <p class="desarrollo_recuadro">para realizar publicidades.</p>
            </div>
        </div>        
      </div>
      <div class="datos-servicio mt-3">
        <div class="cuadro-servicio columnas-2">
            <div class="cuadro-chico fondo-naranja">                
              <p class="titulo_recuadro">Facilitá el acceso</p>
              <p class="desarrollo_recuadro">del cliente a tus productos.</p>              
            </div>
        </div>       
        <div class="cuadro-servicio columnas-2">
            <div class="cuadro-chico fondo-naranja">
              <p class="titulo_recuadro">La demanda online</p>
              <p class="desarrollo_recuadro">se encuentra en crecimiento exponencial, no te quedes afuera. </p>
            </div>
        </div>
      </div>
    </section>
 
    <section class="mt-5">
      <div class="datos-servicio ">
        <div class="cuadro-servicio columnas-2">
              <div class="border-celeste cuadro-xl">
                <p class="titulo_recuadro">Ofrecé las diferentes y novedosas alternativas de pago a tus clientes.</span> 
                </p>
                <p class="desarrollo_recuadro"></p>
              </div>
        </div>
        <div class="cuadro-servicio columnas-2">
            <div class=" border-celeste cuadro-xl">                
              <p class="titulo_recuadro">La vidrera de tu local en la web</p>
              <p class="desarrollo_recuadro">Desarrollamos una página de ventas novedosa, con el diseño a medida de tu empresa, respetado la imagen institucional de la misma. Acompañado de las estrategias de Marketing Digital actuales.</p>              
            </div>
        </div>
      </div>
      <div class="datos-servicio">
         <div class="cuadro-servicio columnas-2">
            <div class=" border-celeste cuadro-xl">                
              <p class="titulo_recuadro">Catálogo</p>
              <p class="desarrollo_recuadro">Hoy en día tener tu catalogo en línea es una necesidad. Acerca tus productos a todos los canales digitales, como Facebook, twiteer, instagram. A tan solo un click poder mostrar todos tus productos o servicios.</p>              
            </div>
        </div>
        <div class="cuadro-servicio columnas-2">
            <div class=" border-celeste cuadro-xl">                
              <p class="titulo_recuadro">Responsive</p>
              <p class="desarrollo_recuadro">Con el avance de la tecnología debemos estar preparados para acceder desde cualquier dispositivo, tanto computadoras de escritorios como notebook o dispositivos móviles. Lleva tu empresa en el bolsillo.</p>              
            </div>
        </div>
      </div>
    </section>
  </div>
  <hr>
      <section class="contacto pb-5" style="">
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