@extends('layouts.panel_form')
@section('title', 'Mi perfil - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Cambiar contraseña</h3>
@endsection
@section('contenido_panel')
  <form action="{{ url('/empresas/password') }}" method="POST" name="form_password" id="form_password" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    @include('flash::message')
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseña_actual">Contraseña actual <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password" id="password_actual" name="password_actual" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nueva_contraseña">Nueva contraseña:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password" id="nueva_password" name="nueva_password" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repetir_contraseña">Repetir contraseña <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password" id="repetir_password" name="repetir_password" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="button" name="guardar" id="guardar" class="boton boton-confirmar">Guardar</button>
      </div>
    </div>
  </form>
@endsection
@include('layouts.dialogs.message')
@section('js')
  <script src="{{ asset('js/password.js') }}" type="text/javascript"></script>
@endsection