@extends('layouts.panel_form')
@section('title', 'Editar producto - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_naranja sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Editar {{ $producto->producto }}</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ url('productos/'.$producto->id) }}" method="POST" class="form-horizontal form-label-left bordes_imput margin-bottom-10" id="form_editar_productos">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Codigo:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="codigo" name="codigo" class="form-control col-md-7 col-xs-12" value="{{ $producto->codigo }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="producto">Producto<span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="producto" name="producto" required="required" class="form-control col-md-7 col-xs-12" value="{{ $producto->producto }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">Stock:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="stock" name="stock" required="required" class="form-control col-md-7 col-xs-12" value="{{ $producto->stock }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock_minimo">Stock mínimo:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="stock_minimo" name="stock_minimo" class="form-control col-md-7 col-xs-12" value="{{ $producto->stock_minimo }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarco">Marca <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="marca" class="form-control col-md-7 col-xs-12">
          @foreach($marcas as $marca)
            @if($marca->id == $producto->marca_id)
              <option selected="" value="{{ $marca->id }}">{{ $marca->marca }}</option>
            @else
              <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_compra">Precio compra:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio_compra" name="precio_compra" class="form-control col-md-7 col-xs-12" value="{{ $producto->precio_compra }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_venta">Precio final: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio_venta" name="precio_venta" required="required" class="form-control col-md-7 col-xs-12" value="{{ $producto->precio_venta }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iva">IVA <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="iva" class="form-control col-md-7 col-xs-12">
          @foreach($iva as $alicuota)
            @if($alicuota->id == $producto->iva_id)
              <option selected="" value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
            @else
              <option value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="categoria_producto" class="form-control col-md-7 col-xs-12">
          @foreach($categorias as $categoria)
            @if($categoria->id == $producto->categoria_id)
              <option selected="" value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @else
              <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">Proveedor <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="proveedor" class="form-control col-md-7 col-xs-12">
          @foreach($proveedores as $proveedor)
            @if($proveedor->id == $producto->proveedor_id)
              <option selected="" value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @else
              <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="ln_solid pc"></div>
{{--  guardo por las dudas, despues borrar    
     <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="boton boton-confirmar">Guardar</button>
      </div>
    </div> --}}
  </form>
@endsection
@section('botones')
        <div class="panel-buttons">
            <div class="col-lg-4 col-md-3 col-xs-12 text-center">
              <div class="sombra_gris solo_pc_sombra_gris">                    
                <div class="small-box boton_naranja botones_cuadrados boton-confirmar editar_producto">
                  <div class="inner">
                    <h3>Guardar cambios<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon-grande">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection

@section('js')
  <script type="text/javascript">
    $(".editar_producto").on("click", function(){
        $("#form_editar_productos").submit();
    });

  </script>
@endsection