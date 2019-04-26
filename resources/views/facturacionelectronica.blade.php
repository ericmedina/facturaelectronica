@extends('layouts.home.main')
@section('contenido')
  <div class="container">
    <section class="servicios row mt-5">
      <div class="col-12 d-block d-sm-none d-lg-none mb-5">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/facturacion_electronica.svg')}}" alt="" >
          </div>
      </div>
      <div class="col-lg-6 col-12 texto-servicio derecha mt-5 pt-5">
        <h2 class="slogan-servicio">Facturación electrónica</h2>
        <p class="resumen-servicio mt-2">
            Proponemos optimizar los tiempos en la facturación y gestión administrativa de su empresa, desde donde quieras, de manera simple y a un bajo costo. Cumpliendo con el nuevo régimen de AFIP sobre la modalidad de facturación de los contribuyentes ofrece llevar un control de tu empresa en los procesos de administrativos, comercial y contable.
        </p>
      </div>
      <div class="col-6 d-none d-lg-block">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/facturacion_electronica.svg')}}" alt="" >
          </div>
      </div>
    </section>  
    <section class="mt-5">
      <div class="datos-servicio">
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Facturá </p>
            <p class="desarrollo_recuadro">de forma rápida y simple en cumplimiento con las exigencias impuestas por AFIP.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Mantené</p>
            <p class="desarrollo_recuadro">tu inventario actualizado a través de las compras y las ventas que realices.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Registrá</p>
            <p class="desarrollo_recuadro">tus compras, actualizá tu inventario automáticamente y las cuentas corrientes de tus proveedores.</p>
          </div>
        </div>
      </div>
      <div class="datos-servicio mt-3">
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Registrá</p>
            <p class="desarrollo_recuadro">los datos de tus clientes para facturarles y chequeá su historial de compras.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Podés</p>
            <p class="desarrollo_recuadro">automatizar la facturación de tus servicios mensuales y el sistema facturará por vos.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Obtené</p>
            <p class="desarrollo_recuadro">tu lista de precios, tus productos más vendidos, tus cuentas corrientes y los balances de compras y ventas.</p>
          </div>
        </div>
      </div>
    </section>
    <section style="" class="row">
          <div class="col-12 d-block d-sm-none d-lg-none">
              <div class="img-servicios">
               <img class="position-relative mr-5 col-lg-11 float-right" id="" src="{{asset('images/home/fondocontador.png')}}" alt="" >
              </div>
          </div>      
          <div class="col-12 col-lg-6 texto-servicio izquierda mb-5 mt-lg-5 pt-lg-5">
              <h2 class="slogan-servicio">Contable</h2>
                 <p class="resumen-servicio mt-2">La obtención de los datos  de facturación necesarios para la realización de las distintas DDJJ se vuelve algo tedioso. Para esto, PampaDev ofrece un sistemas totalmente gratuito para contadores, en el cual si sus clientes facturan desde el mismo puede obtener la información correspondiente de manera muy simple y sencilla.</p>
          </div>
          <div class="col-6 d-none d-lg-block">
            <div class="img-servicios">
              <img class="position-relative mr-5 col-lg-11 float-right" id="" src="{{asset('images/home/fondocontador.png')}}" alt="" >
            </div>
          </div>
    
    
    </section>
      <div class="clearfix"></div>
  </div>
  <hr class="mt-lg-0 mt-0">
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