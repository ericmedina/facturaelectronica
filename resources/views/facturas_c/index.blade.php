@extends('layouts.main')
@section('title', 'Listado de facturas C - PampaDev')
@section('contenido')
<h1 class="text-center">Listado de facturas C</h1>
@include('flash::message')
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Fecha</th>
      <th>Cliente</th>
      <th>Total</th>
      <th>Ver</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($facturas as $factura)
	   	<tr>
	   		<td>{{ $factura->fecha }}</td>
	   		<td>{{ $factura->cliente->nombre }}</td>
	   		<td>{{ $factura->total }}</td>
	   		<td > <button type="button" class="btn btn-primary btn-tabla btn-editar float-right btn_eliminar"><span class="glyphicon glyphicon-eye-open"></span></button></td>
	   	</tr>
   	@endforeach
  </tbody>
</table>
@endsection