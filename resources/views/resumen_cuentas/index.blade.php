@extends('layouts.main')
@section('title', 'Cuentas corrientes - PampaDev')
@section('contenido')
<h2 class="text-center">Cuentas corrientes</h2>
@include('flash::message')
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Cliente</th>
      <th>CUIT</th>
      <th>Total</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	@foreach($ventas as $venta)
	   	<tr>
        <td>{{ $venta->cliente->nombre }}</td>
        <td>{{ $venta->cliente->cuit }}</td>
	   		<td>${{ $venta->total }}</td>
	   		<td class="columna-botones text-center">
  	   			<a href="{{url('/resumen_cuenta/'.$venta->cliente_id.'/edit')}}" class="btn boton-confirmar btn-tabla btn-editar float-left" value="{{$venta->cliente_id}}">
              Cobrar
  				  </a>
	   		</td>
	   	</tr>
   	@endforeach
  </tbody>
</table>
@include('layouts.modal_eliminar')
@endsection