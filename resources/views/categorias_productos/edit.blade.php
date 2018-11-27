@extends('layouts.panel_form')
@section('title', "Editar categoria de producto - PampaDev")
@section('titulo_panel')
  <h3 class="text-center">Editar {{ $categoria->categoria }}</h3>
@endsection
@section('contenido_panel')
  <form action="{{ url('/categoriaproducto/'.$categoria->id) }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoría <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="categoria" name="categoria" required="required" class="form-control col-md-7 col-xs-12" value="{{ $categoria->categoria }}">
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