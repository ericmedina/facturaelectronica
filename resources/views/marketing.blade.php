@extends('layouts.home.main')
@section('contenido')
  <div class="container">
    <section class="row">
      <div class="col-6 texto-servicio derecha mt-5">  
        <h2 class="slogan-servicio">Marketing <br> digital</h2>
        <p class="resumen-servicio mt-2">
            Es muy importante saber cómo invertir correctamente en el posicionamiento de tu
            marca, tanto en redes sociales como en buscadores. Desde PampaDev implementamos estrategias digitales para posicionar tu empresa utilizando los recursos que nos brindan las tecnologías web.
        </p>
      </div>
      <div class="col-6">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/marketing_digital.svg')}}" alt="" >
          </div>
      </div>
    </section>
       <style type="text/css">
    </style>
    <section class="mt-5">
      <div  class="datos-servicio">
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">
              <p class="titulo_recuadro">Visibilidad</p>
              <p class="desarrollo_recuadro">para tu empresa.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">
              <p class="titulo_recuadro">Resultados</p>
              <p class="desarrollo_recuadro">son visualizados en tiempo real</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">                
              <p class="titulo_recuadro">No existe</p>
              <p class="desarrollo_recuadro">una limitación geográfica</p>              
            </div>
        </div>
      </div>
      <div class="datos-servicio mt-3">
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">
              <p class="titulo_recuadro">Menor costo</p>
              <p class="desarrollo_recuadro">comparado con los canales de marketing tradicional.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">
              <p class="titulo_recuadro">Captación</p>
              <p class="desarrollo_recuadro">de nuevos clientes y fidelización de los mismos. </p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">                
              <p  class="titulo_recuadro">Gran capacidad</p>
              <p class="desarrollo_recuadro">de medición y análisis de todos  los aspectos de la campaña.</p>              
            </div>
        </div>   
      </div>
    </section>
    <section class="datos-servicio mt-5">
        <div class="cuadro-servicio columnas-2">
              <div class="border-naranja cuadro-xl">
                <p class="titulo_recuadro">Posicionamiento SEO</span> 
                </p>
                <p class="desarrollo_recuadro">Es fundamental aparecer en los primeros
                    puestos en los resultados de una búsqueda. 
                    Si pensamos como consumidores
                    ¿Alguna vez pasamos a la segunda página
                    de una búsqueda? Por lo tanto el posicionamiento
                    aumenta la probabilidad de que
                    los usuarios visiten
                    nuestro sitio.</p>
              </div>
        </div>
        <div class="cuadro-servicio columnas-2">
            <div class=" border-naranja cuadro-xl">                
              <p class="titulo_recuadro">Social media</p>
              <p class="desarrollo_recuadro">En las redes sociales no se vende, pero
                  lo cierto es que a través de éstas, se
                  logra empatizar con las personas que se 
                  encuentran al otro lado, generando así
                  un acercamiento con nuestros clientes.</p>              
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