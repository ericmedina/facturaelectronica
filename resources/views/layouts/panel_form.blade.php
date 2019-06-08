@extends('layouts.main')
@section('contenido')
@yield('titulos')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel sombra_gris">
      <div class="x_title">
      	@yield('titulo_panel')
      </div>
      <div class="">
      	@yield('contenido_panel')
      </div>
    </div>
  </div>
 @yield('botones')
</div>
@endsection