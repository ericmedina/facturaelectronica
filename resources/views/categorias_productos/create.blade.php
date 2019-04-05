@extends('layouts.panel_form')
@section('title', 'Agregar categoría de producto - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Nueva categoría de producto</h2>
@endsection
@section('contenido_panel')
  <form action="{{ route('categoriaproducto.store') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoría <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="categoria" name="categoria" required="required" class="form-control col-md-7 col-xs-12">
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