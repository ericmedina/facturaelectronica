@extends('layouts.main')
@section('title', 'Movimientos generales - PampaDev')
@section('contenido')
<h1 class="text-center">Movimientos generales</h1>
@include('flash::message')
<div id="card">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Comprobante</th>
        <th>Cliente</th>
        <th>Total</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($ventas as $venta)
  	   	<tr>
  	   		<td data-label="Fecha">{{ $venta->fecha }}</td>
          <td data-label="Comprobante">{{ $venta->tipo_comprobante.str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
  	   		<td data-label="Cliente">{{ $venta->cliente->nombre }}</td>
  	   		<td data-label="Total">${{ $venta->total }}</td>
  	   		<td data-label="Acciones" > 
            <button type="button" class="boton boton-confirmar" data-toggle="collapse" data-target="#{{$venta->id}}">Detalle</button>
            <a href="{{url('facturas/'. $venta->tipo_comprobante.str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) )}}" target="_blank" style="margin-top:2.5px;" class="btn btn-warning btn-tabla btn-editar float-left">PDF</a></td>
        </tr>
        <tr  id="{{$venta->id}}" class="collapse">
          <td colspan="5">

            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th >Detalles</th>
                  <th >Cantidad</th>
                  <th >Importe</th>
                  <th >Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($venta->detalle as $detalle)
                <tr>
                  <td data-label="Detalles">{{$detalle->descripcion}}</td>
                  <td data-label="Cantidad">{{$detalle->cantidad}}</td>
                  <td data-label="Importe">${{$detalle->precio}}</td>
                  <td data-label="Total">${{$detalle->total}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </td>
        </tr>
     	@endforeach
    </tbody>
  </table>
</div>
@endsection