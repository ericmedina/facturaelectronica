@extends('layouts.panel_form')
@section('title', 'Nuevo pago - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Nuevo pago</h2>
@endsection
@section('contenido_panel')
	<div class="contenido_factura">
		<div class="col-md-6 col-xs-12">
			<label class="col-sm-4 text-left">Nombre:</label>
			<p class="col-sm-8 text-left">Medina Eric Daniel</p>
		</div>
		<div class="col-md-6 col-xs-12">
			<label class="col-sm-4 text-left">CUIT:</label>
			<p class="col-sm-8 text-left">20371763644</p>
		</div>
		<div class="col-md-6 col-xs-12">
			<label class="col-sm-4 text-left">Dirección:</label>
			<p class="col-sm-8 text-left">Constituyentes 2442</p>
		</div>
		<div class="col-md-6 col-xs-12">
			<label class="col-sm-4 text-left">Localidad:</label>
			<p class="col-sm-8 text-left">Santa Rosa</p>
		</div>
	</div>
	<div class="detalle_pago">
		<h3 class="text-center">Detalle de pago</h3>
		<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Detalle</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Pago mensual PampaDev - Plan profesional</td>
					<td>$700</td>
				</tr>
			</tbody>
		</table>
		<br>
  		<a href="{{ $payment['response']['init_point'] }}" class="boton boton-confirmar" title="">Pagar</a>
	</div>
@endsection