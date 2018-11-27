@extends('layouts.panel_form')
@section('title', 'Agregar nuevo producto - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nuevo producto</h3>
@endsection
@section('contenido_panel')
  <form action="{{ route('productos.store') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Codigo:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="codigo" name="codigo" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="producto">Producto<span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="producto" name="producto" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">Stock:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="stock" name="stock" required="required" class="form-control col-md-7 col-xs-12" value="1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock_minimo">Stock mínimo:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="stock_minimo" name="stock_minimo" class="form-control col-md-7 col-xs-12" value="0">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarco">Marca <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="marca" class="form-control col-md-7 col-xs-12">
          @foreach($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_compra">Precio compra:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio_compra" name="precio_compra" class="form-control col-md-7 col-xs-12" value="0">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio_venta">Precio final: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio_venta" name="precio_venta" required="required" class="form-control col-md-7 col-xs-12" value="0">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iva">IVA <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="iva" class="form-control col-md-7 col-xs-12">
          @foreach($iva as $alicuota)
            @if($alicuota->id == 5)
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
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
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
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="boton boton-confirmar">Guardar</button>
      </div>
    </div>
  </form>
@endsection