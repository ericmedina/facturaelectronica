@extends('layouts.panel_form')
@section('title', 'Agregar nueva compra - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nueva compra</h3>
@endsection
@section('contenido')
<form action="{{ route('compras.store') }}" method="POST" id="form_compra" class="form-horizontal form-label-left">
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
              <div class="form-group col-xs-12 col-md-5">
                <label class="control-label col-xs-3" for="proveedor">Proveedor:
                </label>
                <div class="col-xs-9">
                  <input type="text" id="proveedor" readonly="" name="proveedor" class="form-control">
                </div>
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label col-xs-2" for="cuit">Cuit:
                </label>
                <div class="col-xs-10">
                  <input type="text" id="cuit" name="cuit" readonly="" class="form-control">
                </div>
              </div>
              <div class="form-group col-md-3 col-xs-12">
                <button type="button" class="boton boton-confirmar" id="boton_buscar_proveedor">Buscar proveedor</button>
              </div>
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
            <div class="container-fluid">
              <div class="form-group col-md-4 col-xs-12">
                <label class="control-label col-xs-2" for="fecha">Fecha:
                </label>
                <div class="col-xs-10">
                  <input type="date" id="fecha" name="fecha" class="form-control" value="{{$fecha}}">
                </div>
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label col-xs-3" for="tipo_comprobante">Tipo:
                </label>
                <div class="col-xs-9">
                  <select name="tipo_comprobante" class="form-control"  id="tipo_comprobante">
                    <option value="A">Factura A</option>
                    <option value="B">Factura B</option>
                    <option value="C">Factura C</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label col-xs-2" for="num_comprobante">N°:
                </label>
                <div class="col-xs-10">
                  <input type="text" id="num_comprobante" name="num_comprobante" class="form-control" value="00000001">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4 class="text-center">Productos compra</h4>
          </div>
          <div class="x_content">
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
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="button" class="boton boton-confirmar" id="buscar_producto_compra" >Agregar producto</button>
            </div>
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
        <h3 class="col-xs-12 label-control" for="total">Utd. paga:</h3>
        <div class="col-xs-offset-2 col-xs-8 input-group">
          <span class="input-group-addon">$</span>
          <input type="text" name="pagado" class="form-control" id="pagado" value="0">
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" class="boton boton-confirmar boton-margenes"  id="btn-guardar-compra">Guardar compra</button>
      </div>
  </div>
  @include('layouts.dialogs.agregar_compras')
  @include('layouts.dialogs.buscar_proveedor')
  </form>
  @endsection
@section('js')
  <script src="{{ asset('js/compras.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection