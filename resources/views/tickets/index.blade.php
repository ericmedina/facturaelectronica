@extends('layouts.panel_form')
@section('title', 'Agregar nuevo ticket - PampaDev')
@section('css')
  <style type="text/css">
    .fila-clickeable{
      background-color: #f9f9f9;
    }
    .fila-clickeable:hover{
      cursor: pointer;
      background-color: #f1f1f1;
    }
  </style>
@endsection
@section('titulo_panel')
  <h2 class="text-center">Mis tickets</h2>
@endsection
@section('contenido_panel')
<table id="datatable-responsive" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Asunto</th>
      <th>Estado</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($tickets as $ticket)
	   	<tr data-href="{{url('/ticket/'.$ticket->id)}}" class="fila-clickeable" >
  	   		<td>{{ $ticket->asunto }}</td>
          <td>{{ $ticket->estado }}</td>
          <td>{{Carbon\Carbon::parse($ticket->created_at)->format('d/m/Y h:m:s')}}</td>
	   	</tr>
   	@endforeach
  </tbody>
</table>
@endsection