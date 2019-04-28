@extends('layouts.main')
@section('title', 'Generar comprobante - PampaDev')
@section('css')
  <style type="text/css">
    .autocomplete {
      /*the container must be positioned relative:*/
      position: absolute;
      display: inline-block;
    }
    .autocomplete *{
      box-sizing: border-box;
    }
    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
    }
    .autocomplete-items > div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff;
      border-bottom: 1px solid #d4d4d4;
    }
    .autocomplete-items > div:hover {
      /*when hovering an item:*/
      background-color: #e9e9e9;
    }
    .autocomplete-active {
      /*when navigating through the items using the arrow keys:*/
      background-color: DodgerBlue !important;
      color: #ffffff;
    }
  </style>
@endsection
@section('contenido')
<div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Generar comprobantes</h2>
</div>
@include('flash::message')
<form action="/comprobantes" autocomplete="off" method="POST" accept-charset="utf-8" name="form_comprobante" id="form_comprobante" class="form-inline form-label-left">
  {{ csrf_field() }}
  <input type="hidden" name="cae" id="cae" value="">
  <input type="hidden" name="vencimiento" id="vencimiento" value="">
  <!-- Clientes -->

  @include('flash::message')
  <div class="row bordes_imput ocultar_labels">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel p-botones sombra_gris solo_pc_sombra_gris">
        <div class="x_title">
          <h4 class="text-center">Datos cliente</h4>
        </div>
        <div class="x_content">
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12 label-control" for="nombre">Nombre:</label>
            <div class=" col-md-8 col-xs-12 h-35" style="padding-left: 0px;">
              <div class="autocomplete">
                <input type="text" name="nombre" class="form-control col-xs-12" id="nombre" placeholder="Ej: Juan Perez Perez">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="cuit">CUIT:</label>
            <input type="text" class="form-control col-md-8 col-xs-12" id="cuit" name="cuit" placeholder="Ej: 20333445552">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="resp_iva">Resp. IVA:</label>
            <select name="resp_iva" class="form-control col-md-8 col-xs-12" id="resp_iva">
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
            <label class="col-md-4 col-xs-12" for="direccion">Dirección:</label>
            <input type="text" class="form-control col-md-8 col-xs-12" id="direccion" name="direccion" placeholder="Ej: Jose Andres">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="localidad">Localidad:</label>
            <input type="text" class="form-control col-md-8 col-xs-12" id="localidad" name="localidad" placeholder="Ej: Santa Rosa, La Pampa">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel sombra_gris solo_pc_sombra_gris">
        <div class="x_title">
          <h4 class="text-center">Datos comprobante</h4>
        </div>
        <div class="x_content bordes_imput">
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="tipo_comprobante">Comprobante:</label>
            <select name="tipo_comprobante" class="form-control col-md-8 col-xs-12"  id="tipo_comprobante">
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
            <label class="col-md-4 col-xs-12 label-control" for="num_comprobante">N°:</label>
            <input type="text" name="num_comprobante" class="form-control col-md-8 col-xs-12" id="num_comprobante" value="00000001">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="fecha">Fecha:</label>
            <input type="date" class="form-control col-md-8 col-xs-12" id="fecha" name="fecha" value="{{$fecha}}" style="line-height: 1;">
            <input type="date"  class="form-control col-xs-8 hide" id="vencimiento" name="vencimiento" value="{{$vencimiento}}">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-item">
            <label class="col-md-4 col-xs-12" for="forma_pago">Forma pago:</label>
            <select name="forma_pago" class="form-control col-md-8 col-xs-12" id="forma_pago">
              <option value="contado">Contado</option>
              <option value="debito">Débito</option>
              <option value="credito">Crédito</option>
              <option value="cuenta_corriente">Cuenta corriente</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel sombra_gris solo_pc_sombra_gris">
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
          
          @if(Auth::user()->contrato->licencia->nombre == 'Basico')
            <div class="col-xs-12 text-center">
                  <button type="button" class=" col-xs-12 col-md-offset-4 col-md-4 boton boton-confirmar" id="boton-modal-descripcion" >Insertar descripción</button>
              </div>
          @else
            @if(Auth::user()->tipo_actividad == "productos y servicios")
              <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                  <button type="button" class="boton boton-confirmar" id="boton-modal-producto" >Insertar producto</button>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                  <button type="button" class="boton boton-confirmar" id="boton-modal-servicio" >Insertar servicio</button>
              </div>
            @elseif(Auth::user()->tipo_actividad == "productos")
              <div class="col-xs-12 text-center">
                <button type="button" class="boton boton-confirmar col-xs-12 col-md-offset-4 col-md-4" id="boton-modal-producto" >Insertar producto</button>
            </div>
            @elseif(Auth::user()->tipo_actividad == "servicios")
              <div class="col-xs-12 text-center">
                <button type="button" class="boton boton-confirmar col-xs-12 col-md-offset-4 col-md-4" id="boton-modal-servicio" >Insertar servicio</button>
              </div>
            @endif
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="x_panel sombra_gris solo_pc_sombra_gris">
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
{{--     <div class="col-md-4 col-sm-12 col-xs-12 text-center">
      <button type="button" class="boton boton-confirmar boton-margenes" id="btn-observaciones" >Agregar observaciones</button>
    </div> --}}

    <div class="col-xs-12 col-lg-4">
      <div class="x_panel sombra_gris solo_pc_sombra_gris">
          <label class="col-lg-12 col-md-4 col-xs-12 label-control" for="total">Si lo desea puede agregar observaciones:</label>
          <textarea placeholder="Escriba aqui..." style="height: 100px;width: 100%;resize: none;" class="form-control" id="txtObservaciones" name="txtObservaciones"></textarea>
      </div>
    </div>

    @if(Auth::user()->fiscal->certificado == null)
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" disabled="" class="boton boton-opciones disabled boton-margenes" id="btn-generar-comprobante">Generar comprobante</button>
      </div>
    @else
      {{-- 
      <div class="col-md-4 col-sm-12 col-xs-12 text-center">
        <button type="button" class="boton boton-opciones boton-margenes"  id="btn-generar-comprobante">Generar comprobante</button>
      </div> 
      --}}
        <div class="panel-buttons">
            <div class="col-lg-4 col-md-3 col-xs-12 text-center">
              <div class="sombra_gris solo_pc_sombra_gris">                    
                <div class="small-box boton_verde botones_cuadrados boton_generar_comprobante" id="btn-generar-comprobante">
                  <div class="inner">
                    <h3>Generar comprobante<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon-grande">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @endif
  </div>

  @include('layouts.dialogs.observaciones')
  @include('layouts.dialogs.assoc')
</form>


@if(Auth::user()->contrato->licencia->nombre == 'Basico')
  @include('layouts.dialogs.agregar_detalle')
@else
  @if(Auth::user()->tipo_actividad == "productos y servicios")
    @include('layouts.dialogs.agregar_producto')
    @include('layouts.dialogs.agregar_servicio')
  @elseif(Auth::user()->tipo_actividad == "productos")
    @include('layouts.dialogs.agregar_producto')
  @elseif(Auth::user()->tipo_actividad == "servicios")
    @include('layouts.dialogs.agregar_servicio')
  @endif
@endif
@include('layouts.dialogs.buscar_cliente')
@include('layouts.dialogs.waiting_comprobante')
@include('layouts.dialogs.rechazado')
@include('layouts.dialogs.aprobado')
@include('layouts.dialogs.mail')
@include('layouts.dialogs.agregado')
@include('layouts.dialogs.message')
@endsection
@section('js')
  <script src="{{ asset('js/check_facturacion.js') }}?version=1.1" type="text/javascript"></script>
  <script src="{{ asset('js/facturacion.js') }}?version=1.2" type="text/javascript"></script>
  <script type="text/javascript">
    @if(Auth::user()->contrato->licencia->nombre == 'Basico')
      
    @else
      @if(Auth::user()->tipo_actividad == "productos y servicios")
        input = document.getElementById('buscar_producto');
        autocomplete_producto(input);
        input = document.getElementById('buscar_servicio');
        autocomplete_servicio(input);
      @elseif(Auth::user()->tipo_actividad == "productos")
        input = document.getElementById('buscar_producto');
        autocomplete_producto(input);
      @elseif(Auth::user()->tipo_actividad == "servicios")
        input = document.getElementById('buscar_servicio');
        autocomplete_servicio(input);
      @endif
    @endif

    $(".boton_generar_comprobante").on("click", function(){
      $("#form_comprobante").submit();
    });
  </script>
@endsection