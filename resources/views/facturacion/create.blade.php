@extends('layouts.main')
@section('title', 'Generar comprobante - PampaDev')
@section('contenido')
<h1 class="text-center">Generar comprobantes</h1>
@include('flash::message')
<form action="/comprobantes" method="POST" accept-charset="utf-8" name="form_comprobante" id="form_comprobante" class="form-inline form-label-left">
  {{ csrf_field() }}
  <input type="hidden" name="cae" id="cae" value="">
  <input type="hidden" name="vencimiento" id="vencimiento" value="">
  <!-- Clientes -->

  @include('flash::message')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h4 class="text-center">Datos cliente</h4>
        </div>
        <div class="x_content">
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4 label-control" for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control col-xs-8" id="nombre">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="cuit">CUIT:</label>
            <input type="text" class="form-control col-xs-8" id="cuit" name="cuit">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="resp_iva">Resp. IVA:</label>
            <select name="resp_iva" class="form-control col-xs-8" style="width: 66.66666667%!important;" id="resp_iva">
              @foreach ($responsabilidades_iva as $responsabilidad_iva)
                @if($responsabilidad_iva->nombre == "Consumidor Final")
                  <option  value="{{$responsabilidad_iva->nombre}}" selected>{{$responsabilidad_iva->nombre}}</option>
                @else
                  <option  value="{{$responsabilidad_iva->nombre}}">{{$responsabilidad_iva->nombre}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="direccion">Dirección:</label>
            <input type="text" class="form-control col-xs-8" id="direccion" name="direccion">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="localidad">Localidad:</label>
            <input type="text" class="form-control col-xs-8" id="localidad" name="localidad">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item text-center">
              <button type="button" class="boton boton-confirmar " id="boton-buscar-cliente">Buscar cliente</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h4 class="text-center">Datos comprobante</h4>
        </div>
        <div class="x_content">
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="tipo_comprobante">Comprobante:</label>
            <select name="tipo_comprobante" class="form-control col-xs-8"  id="tipo_comprobante">
              @if (Auth::user()->responsabilidad_iva_id == 1)
                <option value="A">Factura A</option>
                <option selected="" value="B">Factura B</option>
                <option value="NCA">Crédito A</option>
                <option value="NCB">Crédito B</option>
              @elseif(Auth::user()->responsabilidad_iva_id == 2)
                <option value="C">Factura C</option>
                <option value="NCC">Crédito C</option>
              @endif
              <option value="P">Presupuesto</option>
              <option value="R">Remito</option>
            </select>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4 label-control" for="num_comprobante">N°:</label>
            <input type="text" name="num_comprobante" class="form-control col-xs-8" id="num_comprobante" value="00000001">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="fecha">Fecha:</label>
            <input type="date" class="form-control col-xs-8" id="fecha" name="fecha" value="{{$fecha}}">
            <input type="date"  class="form-control col-xs-8 hide" id="vencimiento" name="vencimiento" value="{{$vencimiento}}">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="forma_pago">Forma pago:</label>
            <select name="forma_pago" class="form-control col-xs-8" id="forma_pago">
              <option value="contado">Contado</option>
              <option value="cuenta_corriente">Cuenta corriente</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h4 class="text-center">Detalles comprobante</h4>
        </div>
        <div id="card" class="x_content">
          <table id="tabla-detalle" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Cantidad</th>
                <th>Detalle</th>
                <th>Importe</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
          @if(Auth::user()->tipo_actividad == "productos y servicios")
            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                <button type="button" class="boton boton-confirmar" id="boton-modal-producto" >Agregar producto</button>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                <button type="button" class="boton boton-confirmar" id="boton-modal-servicio" >Agregar servicio</button>
            </div>
          @elseif(Auth::user()->tipo_actividad == "productos")
            <div class="col-xs-12 text-center">
              <button type="button" class="boton boton-confirmar" id="boton-modal-producto" >Agregar producto</button>
          </div>
          @elseif(Auth::user()->tipo_actividad == "servicios")
            <div class="col-xs-12 text-center">
              <button type="button" class="boton boton-confirmar" id="boton-modal-servicio" >Agregar servicio</button>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h4 class="text-center">Totales</h4>
        </div>
        <div class="x_content">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <table id="tabla-iva" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Alic.</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item-totales">
            <div class="form-group col-xs-12">
              <label class="col-xs-4 label-control" for="subtotal">Subtotal:</label>
              <div class=" col-xs-8 input-group">
                <span class="input-group-addon">$</span>
                <input type="text" name="subtotal" class="form-control" id="subtotal" value="0">
              </div>
            </div>
            <div class="form-group col-xs-12">
              <label class="col-xs-4 label-control" for="importe_iva">Imp. IVA:</label>
              <div class=" col-xs-8 input-group">
                <span class="input-group-addon">$</span>
                <input type="text" name="importe_iva" class="form-control" id="importe_iva" value="0">
              </div>
            </div>
            <div class="form-group col-xs-12">
              <label class="col-xs-4 label-control" for="total">Total:</label>
              <div class=" col-xs-8 input-group">
                <span class="input-group-addon">$</span>
                <input type="text" name="total" class="form-control" id="total" value="0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" name="detalle" id="detalle" value="">
    <input type="hidden" name="alicuotas" id="alicuotas" value="">
    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
      <button type="button" class="boton boton-opciones boton-margenes" id="btn-observaciones" >Agregar observaciones</button>
    </div>
    @if(Auth::user()->fiscal->certificado == null)
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" disabled="" class="boton boton-confirmar disabled boton-margenes" id="btn-generar-comprobante">Generar comprobante</button>
      </div>
    @else
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" class="boton boton-confirmar boton-margenes"  id="btn-generar-comprobante">Generar comprobante</button>
      </div>
    @endif
  </div>

  @include('layouts.dialogs.observaciones')
  @include('layouts.dialogs.assoc')
</form>
@include('layouts.dialogs.agregar_producto')
@include('layouts.dialogs.agregar_servicio')
@include('layouts.dialogs.buscar_cliente')
@include('layouts.dialogs.waiting_comprobante')
@include('layouts.dialogs.rechazado')
@include('layouts.dialogs.aprobado')
@endsection
@section('js')
  <script src="{{ asset('js/facturacion.js') }}?version=1" type="text/javascript"></script>
@endsection