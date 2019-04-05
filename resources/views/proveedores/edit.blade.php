@extends('layouts.panel_form')
@section('title', "Editar $proveedor->nombre - PampaDev")
@section('titulo_panel')
  <h2 class="text-center">Editar {{$proveedor->nombre}}</h2>
@endsection
@section('contenido_panel')
  <form action="{{ url('/proveedor/'.$proveedor->id) }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{ $proveedor->nombre }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">Cuit:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="cuit" name="cuit" class="form-control col-md-7 col-xs-12" value="{{ $proveedor->cuit }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" value="{{ $proveedor->telefono }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="{{ $proveedor->email }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observaciones">Observaciones:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="observaciones" name="observaciones" class="form-control col-md-7 col-xs-12" value="{{ $proveedor->observaciones }}">
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