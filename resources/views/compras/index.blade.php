@extends('layouts.main')
@section('title', 'Listado de compras - PampaDev')
@section('contenido')
<h1 class="text-center">Listado de compras</h1>
@include('flash::message')
<div id="card">
  
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Proveedor</th>
        <th>Comprobante</th>
        <th>Total</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($compras as $compra)
  	   	<tr>
  	   		<td data-label="Fecha">{{ $compra->fecha }}</td>
  	   		<td data-label="Proveedor">{{ $compra->proveedor->nombre }}</td>
          <td data-label="Comprobante">{{ $compra->tipo_comprobante.str_pad($compra->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
  	   		<td data-label="Toral">${{ $compra->total }}</td>
  	   		<td data-label="Ver" > <button type="button" class="boton boton-confirmar" data-toggle="collapse" data-target="#{{$compra->id}}">Detalle</button></td>
        </tr>
        <tr  id="{{$compra->id}}" class="collapse">
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
                @foreach($compra->detalle_compra as $detalle)
                <tr>
                  <td data-label="Detalle">{{$detalle->producto->producto}}</td>
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