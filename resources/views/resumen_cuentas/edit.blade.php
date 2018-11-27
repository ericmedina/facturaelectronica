@extends('layouts.main')
@section('title', 'Generar comprobante - PampaDev')
@section('contenido')
<h1 class="text-center">Generar comprobantes</h1>
@include('flash::message')
<form action="/resumen_cuenta" method="POST" accept-charset="utf-8" name="form_comprobante" id="form_comprobante" class="form-inline form-label-left">
  {{ csrf_field() }}
  <!-- Clientes -->

  @include('flash::message')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h4 class="text-center">Datos cliente</h4>
        </div>
        <div class="x_content">

          <input type="hidden" name="cliente_id" id="cliente_id" value="{{ $cliente->id }}">
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4 label-control" for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control col-xs-8" id="nombre" value="{{$cliente->nombre}}" readonly="">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="cuit">CUIT:</label>
            <input type="text" class="form-control col-xs-8" id="cuit" name="cuit" value="{{$cliente->cuit}}" readonly="">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="resp_iva">Resp. IVA:</label>
            <input type="text" class="form-control col-xs-8" id="resp_iva" name="resp_iva" value="{{$cliente->responsabilidades_iva->nombre}}" readonly="">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="direccion">Dirección:</label>
            <input type="text" class="form-control col-xs-8" id="direccion" name="direccion" value="{{$cliente->direccion}}" readonly="">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="localidad">Localidad:</label>
            <input type="text" class="form-control col-xs-8" id="localidad" name="localidad" value="{{$cliente->localidad}}" readonly="">
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
            <select name="tipo_comprobante" class="form-control col-xs-8"  id="tipo_comprobante" readonly>
              <option value="RC">Resumen de cuenta</option>
            </select>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4 label-control" for="num_comprobante">N°:</label>
            <input type="text" name="num_comprobante" class="form-control col-xs-8" id="num_comprobante" value="00000001" readonly>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="fecha">Fecha:</label>
            <input type="date" class="form-control col-xs-8" id="fecha" name="fecha" value="{{$fecha}}">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-xs-4" for="forma_pago">Forma pago:</label>
            <select name="forma_pago" class="form-control col-xs-8" id="forma_pago" readonly>
              <option value="contado">Contado</option>
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
        <div class="x_content">
          <table id="tabla-detalle" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Comprobante</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($ventas as $venta)
                <tr>
                  <td class="hide">{{$venta->id}}</td>
                  <td>{{$venta->fecha}}</td>
                  <td>{{ $venta->tipo_comprobante.str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
                  <td>${{$venta->total}}</td>
                  <td class="text-center"><button type="button" class="boton boton-cancelar boton-borrar-detalle">Borrar</button></td>
                </tr>
              @endforeach
            </tbody>
          </table>
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
          <div class="col-md-6 col-sm-6 col-xs-12 form-item-totales">
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
    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
      <button type="button" class="boton boton-opciones boton-margenes" id="btn-observaciones" >Agregar observaciones</button>
    </div>
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" class="boton boton-confirmar boton-margenes"  id="btn-generar-comprobante">Cobrar cuenta corriente</button>
      </div>
  </div>

  @include('layouts.dialogs.observaciones')
  @include('layouts.dialogs.assoc')
</form>
@include('layouts.dialogs.waiting_comprobante')
@include('layouts.dialogs.rechazado')
@include('layouts.dialogs.aprobado')
@endsection
@section('js')
  <script src="{{ asset('js/resumen_cuenta.js') }}" type="text/javascript"></script>
@endsection