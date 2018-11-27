@extends('layouts.panel_form')
@section('title', 'Nuevo pago - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nuevo pago</h3>
@endsection
@section('contenido_panel')
  <a href="{{ $payment['response']['init_point'] }}" class="boton boton-confirmar" title="">Pagar</a>
@endsection