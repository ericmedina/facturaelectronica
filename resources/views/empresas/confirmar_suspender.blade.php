@extends('layouts.panel_form')
@section('title', 'Suspender cuenta - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Confirmar acción</h3>
@endsection
@section('contenido_panel')
  <div class="text-center">
    <h4>¿Está seguro que desea suspender su cuenta?</h4>
    <h5>Podrá volver a activarla cuando desee.</h5>
    <a href="{{ url('/empresas/suspender_cuenta') }}" title="" class="btn btn-success">Cancelar cuenta</a>
  </div>
@endsection