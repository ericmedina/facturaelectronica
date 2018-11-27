@extends('layouts.panel_form')
@section('title', 'Agregar nueva marca - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nueva marca</h3>
@endsection
@section('contenido_panel')
  <form action="{{ url('/marcas/'.$marca->id) }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">Marca <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="marca" name="marca" required="required" class="form-control col-md-7 col-xs-12" value="{{ $marca->marca }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarco">Remarco <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="remarco" name="remarco" required="required" class="form-control col-md-7 col-xs-12" value="{{ $marca->remarco }}">
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