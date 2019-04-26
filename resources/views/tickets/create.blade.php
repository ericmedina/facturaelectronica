@extends('layouts.panel_form')
@section('css')
    <style type="text/css">
        textarea{
            resize: none;
            height: 100px;
        }
    </style>
@endsection
@section('title', 'Agregar nuevo ticket - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Nuevo Ticket</h2>
@endsection
@section('contenido_panel')
<form action="{{ route('ticket.store') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
   <div class="col-sm-12 form-group">
        <label for="Asunto" class="control-label">Asunto:</label>
        <input type="text" name="asunto" class="form-control" id="asunto" placeholder="">
    </div>
    <div class="col-sm-12 form-group">
            <label for="titulo" class="control-label">Contenido:</label>
            <textarea class="col-sm-12" name="mensaje" id="mensaje"></textarea>
    </div>
    <div class="col-sm-12">
            <button type="submit" class="btn btn-success">Guardar</button>
    </div>

</form>
@endsection