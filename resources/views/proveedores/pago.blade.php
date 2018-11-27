@extends('layouts.panel_form')
@section('title', 'Agregar nueva compra - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nueva compra</h3>
@endsection
@section('contenido')
<form action="{{ route('pago.store') }}" method="POST" id="form_compra" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4 class="text-center">Datos Proveedor</h4>
          </div>
          <div class="x_content">
            <div class="container-fluid">
              <input type="hidden" name="id" id="id" value="">
              <div class="form-group text-center col-xs-12">
                <button type="button" class="boton boton-confirmar" id="boton_buscar_proveedor">Buscar proveedor</button>
              </div>
              <div class="form-group col-xs-12 col-md-12">
                <label class="control-label col-xs-2" for="proveedor">Proveedor:
                </label>
                <div class="col-xs-8">
                  <input type="text" id="proveedor" readonly="" name="proveedor" class="form-control">
                </div>
              </div>
              <div class="form-group col-xs-12 col-md-12">
                <label class="control-label col-xs-2" for="cuit">Cuit:
                </label>
                <div class="col-xs-8">
                  <input type="text" id="cuit" name="cuit" readonly="" class="form-control">
                </div>
              </div>
              <div class="form-group col-xs-12">
                <label class="col-xs-2 control-label" for="deuda">Deuda:</label>
                <div class=" col-xs-4 input-group" style="padding-left: 10px;">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="deuda" class="form-control" readonly="" id="deuda" value="">
                </div>
              </div>
              <div class="form-group col-xs-12 ">
                <label class="col-xs-2 control-label" for="pago">Utd. paga:</label>
                <div class=" col-xs-4 input-group" style="padding-left: 10px;">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="pago" class="form-control" id="pago" value="">
                </div>
              </div>
              <div class="form-group text-center col-xs-12">
                <button type="submit" class="boton boton-confirmar" id="boton_cancelar_pago">Guardar pago</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.dialogs.buscar_proveedor')
  </form>
  @endsection
@section('js')
  <script src="{{ asset('js/pago.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection