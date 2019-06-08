@extends('layouts.panel_form')
@section('title', 'Agregar nuevo producto - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
     <h2 class="text-center">Nuevo producto</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('productos.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput" id="form_guardar_producto">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Codigo:
      </label>      
        <input type="text" id="codigo" name="codigo" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Ej 1: 1234563 / Ej 2: Mouse">    
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="producto">Producto<span class="required">:</span>
      </label>      
        <input type="text" id="producto" name="producto" required="required" class="form-control col-md-6 col-sm-6 col-xs-12" value="{{old('producto')}}" placeholder="Ej: Mouse">
        @if ($errors->has('producto'))
            <div class="alert alert-danger mt-1">
                {{$errors->first('producto')}}
            </div>
        @endif    
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">Stock:
      </label>      
        <input type="text" id="stock" name="stock" required="required" class="form-control col-md-6 col-sm-6 col-xs-12" value="1">
        @if ($errors->has('stock'))
            <div class="alert alert-danger mt-1">
                {{$errors->first('stock')}}
            </div>
        @endif     
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock_minimo">Stock mínimo:
      </label>     
        <input type="text" id="stock_minimo" name="stock_minimo" class="form-control col-md-6 col-sm-6 col-xs-12" value="0">      
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarco">Marca <span class="required">:</span>
      </label>      
        <select name="marca" class="form-control col-md-6 col-sm-6 col-xs-12">
          @foreach($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
          @endforeach
        </select>     
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_compra">Precio compra:
      </label>      
        <input type="text" id="precio_compra" name="precio_compra" class="form-control col-md-6 col-sm-6 col-xs-12" value="0">     
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_venta">Precio final: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio_venta" name="precio_venta" required="required" class="form-control col-md-7 col-xs-12" value="0">
        @if ($errors->has('precio_venta'))
            <div class="alert alert-danger mt-1">
                {{$errors->first('precio_venta')}}
            </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iva">IVA <span class="required">:</span>
      </label>      
        <select name="iva" class="form-control col-md-6 col-sm-6 col-xs-12">
          @foreach($iva as $alicuota)
            @if($alicuota->id == 5)
              <option selected="" value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
            @else
              <option value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
            @endif
          @endforeach
        </select>     
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria <span class="required">:</span>
      </label>     
        <select name="categoria_producto" class="form-control col-md-6 col-sm-6 col-xs-12">
          @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
          @endforeach
        </select>      
    </div>
    <div class="form-group margin-bottom-10">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">Proveedor <span class="required">:</span>
      </label>      
        <select name="proveedor" class="form-control col-md-6 col-sm-6 col-xs-12">
          @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
          @endforeach
        </select>      
    </div>
    <div class="ln_solid pc"></div>
{{--     <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="boton boton-confirmar">Guardar</button>
      </div>
    </div> --}}
  </form>
  @section('botones')
        <div class="panel-buttons">
            <div class="col-lg-4 col-md-3 col-xs-12 text-center">
              <div class="sombra_gris solo_pc_sombra_gris">                    
                <div class="small-box boton_verde botones_cuadrados boton-confirmar guardar_producto">
                  <div class="inner">
                    <h3>Agregar Producto<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon-grande">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection
@endsection
@section('js')
  <script type="text/javascript">
    $(".guardar_producto").on("click", function(){
        $("#form_guardar_producto").submit();
    });

  </script>
@endsection