@extends('layouts.main')
@section('title', 'Mis pagos - PampaDev')
@section('contenido')
<h1 class="text-center">Mis pagos</h1>
@include('flash::message')
<div id="card">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Plan</th>
        <th>Total</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pagos as $pago)
  	   	<tr>
          <td data-label="Fecha">{{ $pago->fecha }}</td>
  	   		<td data-label="Plan">{{ $pago->Categoria->categoria }}</td>
  	   		<td data-label="Total">${{ $pago->total }}</td>
          <td data-label="Estado">{{ $pago->estado }}</td>
  	   		<td class="columna-botones text-center">
            @if($pago->estado == 'Pendiente' || $pago->estado == 'Vencido')
    	   			<a href="{{url('/pagos/'.$pago->id.'/edit')}}" class="btn boton-confirmar btn-tabla btn-editar float-left" value="{{$pago->id}}">
                Pagar
    				  </a>
          @endif
  	   		</td>
  	   	</tr>
     	@endforeach
    </tbody>
  </table>
</div>
@include('layouts.modal_eliminar')
@endsection