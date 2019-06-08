@extends('layouts.panel_form')
@section('title', 'Agregar nueva compra - PampaDev')
@section('titulo_panel')

@endsection
@section('contenido')
<div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
  <h2 class="text-center">Nueva compra</h2>
</div>
<form action="{{ route('compras.store') }}" method="POST" id="form_compra" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 bordes_imput">
        <div class="x_panel p-botones sombra_gris">
          <div class="x_title">
            <h4 class="text-center">Datos Proveedor</h4>
          </div>
          <div class="x_content">
            <div class="">
              <input type="hidden" name="id" id="id" value="">
              <div class="form-group col-xs-12 col-md-5 form-item">
                <label class="label-control col-md-3 col-xs-12" for="proveedor">Proveedor:
                </label>                
                  <input type="text" id="proveedor" readonly="" name="proveedor" class="col-md-9 col-xs-12 form-control" placeholder="EJ: Carlos Juarez">
              </div>
              <div class="form-group col-xs-12 col-md-4 form-item">
                <label class="control-label col-md-2 col-xs-12" for="cuit">Cuit:
                </label>               
                  <input type="text" id="cuit" name="cuit" readonly="" class="col-md-10 col-xs-12 form-control" placeholder="Ej: 20322223452">
              </div>
{{--           BOTON BUSCAR PROVEDOR CAMBIAR AL QUE ESTA EN VENTAS QUE BUSCA AUTOMATICAMENTE
              <div class="form-group col-md-3 col-xs-12 form-item">
                <button type="button" class=" col-xs-12 boton boton-confirmar" id="boton_buscar_proveedor">Buscar proveedor <i class="fa fa-search size-17"></i></button>
              </div> 
--}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 bordes_imput">
        <div class="x_panel p-botones sombra_gris">
          <div class="x_title">
            <h4 class="text-center">Datos comprobante</h4>
          </div>
          <div class="x_content">
            <div class="">
              <div class="form-group col-md-4 col-xs-12 form-item">
                <label class="control-label col-md-2 col-xs-12" for="fecha">Fecha:
                </label>                
                  <input type="date" id="fecha" name="fecha" class="col-md-10 col-xs-12 form-control" value="{{$fecha}}">
              </div>
              <div class="form-group col-xs-12 col-md-4 form-item">
                <label class="control-label col-md-3 col-xs-12" for="tipo_comprobante">Tipo:
                </label>                
                  <select name="tipo_comprobante" class="form-control col-md-8 col-xs-12"  id="tipo_comprobante">
                    <option value="A">Factura A</option>
                    <option value="B">Factura B</option>
                    <option value="C">Factura C</option>
                  </select>               
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label col-md-2 col-xs-12" for="num_comprobante">N°:
                </label>               
                  <input type="text" id="num_comprobante" name="num_comprobante" class="form-control col-md-10 col-xs-12" value="00000001">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel p-botones sombra_gris">
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
                <button type="button" class="boton boton-confirmar" id="buscar_producto_compra" >Agregar producto <i class="fa fa-plus-circle size-17"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="x_panel p-botones sombra_gris">
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
                <label class="col-md-4 col-xs-12 label-control" for="subtotal">Subtotal:</label>
                <div class=" col-md-8 col-xs-12 input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="subtotal" class="form-control" id="subtotal" value="0">
                </div>
              </div>
              <div class="form-group col-xs-12">
                <label class="col-md-4 col-xs-12 label-control" for="importe_iva">Imp. IVA:</label>
                <div class=" col-md-8 col-xs-12 input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" name="importe_iva" class="form-control" id="importe_iva" value="0">
                </div>
              </div>
              <div class="form-group col-xs-12">
                <label class="col-md-4 col-xs-12 label-control" for="total">Total:</label>
                <div class=" col-md-8 col-xs-12 input-group">
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
        <div class="x_panel p-botones sombra_gris">        
          <h3 class="col-xs-12 label-control" for="total">Utd. paga:</h3>
          <div class="col-xs-offset-2 col-xs-8 input-group">
            <span class="input-group-addon">$</span>
            <input type="text" name="pagado" class="form-control" id="pagado" value="0">
          </div>
        </div>
      </div>
{{--       BOTONNNNN ORISHIINALLLLL
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" class="boton boton-confirmar boton-margenes guardar_compra"  id="btn-guardar-compra">Guardar compra</button>
      </div> 
--}}
          <div class="panel-buttons">
            <div class="col-lg-4 col-md-3 col-xs-12 text-center">
              <div class="sombra_gris solo_pc_sombra_gris">                    
                <div class="small-box boton_verde botones_cuadrados boton_guardar_compra" id="btn-guardar-compra">
                  <div class="inner">
                    <h3>Guardar compra<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon-grande">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>


  </div>
  @include('layouts.dialogs.agregar_compras')
  @include('layouts.dialogs.buscar_proveedor')
  @include('layouts.dialogs.message')
  </form>
  @endsection
@section('js')
  <script src="{{ asset('js/compras.js') }}" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  

  </script>

@endsection