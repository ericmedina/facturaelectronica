@extends('layouts.home.main')
@section('contenido')
  <div class="container">
    <section class="row">
      <div class="col-12 d-block d-sm-none d-lg-none">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/paginas_web.svg')}}" alt="" >
          </div>
      </div>
      <div class="col-12 col-lg-6 texto-servicio derecha mt-5 pt-5">  
        <h2 class="slogan-servicio">Diseño de <br> paginas web</h2>
        <p class="resumen-servicio mt-2">
            Programamos y diseñamos sitios web autoadministrables y adaptables a cualquier computadora o Smartphone. Nuestro principal objetivo es realizar páginas web escalables para la empresa y que brinden una excelente experiencia de usuario a los clientes.
        </p>
      </div>
      <div class="col-6 d-none d-lg-block">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/paginas_web.svg')}}" alt="" >
          </div>
      </div>
    </section>
       <style type="text/css">
    </style>
    <section class="mt-5">
      <div  class="datos-servicio pt-5">
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">
              <p class="titulo_recuadro">Nuevos mercados</p>
              <p class="desarrollo_recuadro">con una audiencia global.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">
              <p class="titulo_recuadro">Bajo costo </p>
              <p class="desarrollo_recuadro">para realizar publicidades.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-chico fondo-celeste">                
              <p class="titulo_recuadro">Sé recomendado </p>
              <p class="desarrollo_recuadro">por tus clientes con un solo click.</p>              
            </div>
        </div>
      </div>
      <div class="datos-servicio mt-3">
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">
              <p class="titulo_recuadro">Mayor</p>
              <p class="desarrollo_recuadro">visibilidad y accesibilidad 24 horas al día.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">
              <p class="titulo_recuadro">Aumentá</p>
              <p class="desarrollo_recuadro">la visibilidad de tu marca y productos o servicios.</p>
            </div>
        </div>
        <div class="cuadro-servicio columnas-3">
            <div class="cuadro-grande fondo-celeste">                
              <p  class="titulo_recuadro">Imagen</p>
              <p class="desarrollo_recuadro">profesional y moderna de la empresa.</p>              
            </div>
        </div>   
      </div>
    </section>
    <section class="mt-5 ">
      <div class="datos-servicio">
        <div class="cuadro-servicio columnas-2 ">
              <div class="border-naranja cuadro-xl">
                <p class="titulo_recuadro">Diseño web Responsive</span> 
                </p>
                <p class="desarrollo_recuadro">Creamos las páginas web para que puedan verse de manera óptima no sólo en cualquier PC, sino también desde cualquier dispositivo móvil como celulares y tablets. Lo que permite atraer más clientes debido a la comodidad que ésto conlleva.</p>
              </div>
        </div>
        <div class="cuadro-servicio columnas-2 ">
            <div class=" border-naranja cuadro-xl">                
              <p class="titulo_recuadro">Optimizado para Buscadores</p>
              <p class="desarrollo_recuadro">Nuestro objetivo de realizar una página vistosa y optimizada no solo incluye a las personas que ingresen, también a los motores de búsqueda, como Google. Logrando así que la página obtenga una mejor posición en los resultados de búsquedas relacionadas.</p>              
            </div>
        </div>
      </div>
      <div class="datos-servicio">
         <div class="cuadro-servicio columnas-2">
            <div class=" border-naranja cuadro-xl">                
              <p class="titulo_recuadro">Diseño Gráﬁco</p>
              <p class="desarrollo_recuadro">Si lo requieres te ayudamos a crear o mejorar tu imagen institucional para lograr que la página luzca realmente como una sucursal online de tu empresa.</p>              
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