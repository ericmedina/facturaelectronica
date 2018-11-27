<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{public_path()}}/css/comprobante.css">
</head>
<body>
	<div id="" name="" class="border-1">
		<div class="tipo-comprobante text-center">
			<p style="font-size: 35px;margin-bottom: -7px;">X</p>
		</div>
		<div class="cabecera">
			<div class="datos-empresa text-center">
				<h1 class="text-center" style="font-weight: bold;">RAISAL SRL</h1>
				<br>
				<p>Plumerillo 2</p>			
				<p>Santa Rosa - La Pampa</p>			
				<p>Telefono: (02954)-774412</p>						
				<p>Inicio actividades: 01/2017</p>						
			</div>
			<div class="datos-comprobante text-center">
				<h1 class="text-center">{{$titulo_factura}}</h1>
				<br>
				<p>N°{{str_pad($punto_venta, 4, '0', STR_PAD_LEFT)}} - {{$num_comprobante}}</p>
				<p>Fecha: {{$fecha}}</p>
				<p>CUIT: 30-71547222-4</p>
				<h4><strong>ORIGINAL</strong></h4>
			</div>
		</div>
		<div class="datos-cliente ">
			<table style="border:none;width: 100%;font-size: 12px;margin-top: 10px;">
				<tr style="height: 50px;">
					<th class="label-cliente"><label>Cliente: </label></th>
					<td class="valor-cliente">{{$Comprobante->cliente}}</td>
					<th class="label-cliente">CUIT: </th>
					<td class="valor-cliente">{{$Comprobante->cuit}}</td>
				</tr>
				<tr style="margin-top: 15px;">
					<th class="label-cliente"><label>Domicilio: </label></th>
					<td class="valor-cliente">{{$Comprobante->direccion}}</td>
					<th class="label-cliente">Localidad: </th>
					<td class="valor-cliente">{{$Comprobante->localidad}}</td>
				</tr>
				<tr style="margin-top: 15px;">
					<th class="label-cliente"><label>Condición IVA: </label></th>
					<td class="valor-cliente">{{$Comprobante->condIva}}</td>
					<th class="label-cliente">Cond. venta: </th>
					<td class="valor-cliente">{{$Comprobante->forma_pago}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="tabla-detalle">
		<table  style="width: 100%;">
			<thead>
				<tr>
					<th>Cantidad</th>
					<th>Descripción</th>
					<th>Importe</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($detalles as $detalle)
					<tr>
						<td>{{$detalle['cantidad']}}</td>
						<td>{{$detalle['descripcion']}}</td>
						<td>${{$detalle['precio']}}</td>
						<td>${{$detalle['total']}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="observaciones">
		@if($Comprobante->txtObservaciones != '')
			<p><strong>OBSERVACIONES:</strong> {{$Comprobante->txtObservaciones}}</p>
		@endif
	</div>
	<div class="totales">
			<label style="width: 85%;float: left;" class="text-right">Importe Total:</label><p class="text-right">${{$Comprobante->total}}</p>
	</div>
	<div style="font-size: 10px; padding-top: 5px;" >
				<h1 class="text-center">COMPROBANTE SIN VALIDEZ FISCAL</h1>
		<div></div>
	</div>
		<div style="position:absolute;bottom:0;font-size:10px;width: 100%" class="text-center">
			<p>www.pampadev.com.ar - Software de gestión y facturación electrónica</p>
		</div>
	<div class="page-break"></div>
		<div id="" name="" class="border-1">
		<div class="tipo-comprobante text-center">
			<p style="font-size: 35px;margin-bottom: -7px;margin-top: -3px;">X</p>
		</div>
		<div class="cabecera">
			<div class="datos-empresa text-center">
				<h1 class="text-center" style="font-weight: bold;">RAISAL SRL</h1>
				<br>
				<p>Plumerillo 2</p>			
				<p>Santa Rosa - La Pampa</p>			
				<p>Telefono: (02954)-774412</p>						
				<p>Inicio actividades: 01/2017</p>						
			</div>
			<div class="datos-comprobante text-center">
				<h1 class="text-center">{{$titulo_factura}}</h1>
				<br>
				<p>N°{{str_pad($punto_venta, 4, '0', STR_PAD_LEFT)}} - {{$num_comprobante}}</p>
				<p>Fecha: {{$fecha}}</p>
				<p>CUIT: 30-71547222-4</p>
				<h4><strong>DUPLICADO</strong></h4>
			</div>
		</div>
		
		<div class="datos-cliente ">
			<table style="border:none;width: 100%;font-size: 12px;margin-top: 10px;">
				<tr style="height: 50px;">
					<th class="label-cliente"><label>Cliente: </label></th>
					<td class="valor-cliente">{{$Comprobante->cliente}}</td>
					<th class="label-cliente">CUIT: </th>
					<td class="valor-cliente">{{$Comprobante->cuit}}</td>
				</tr>
				<tr style="margin-top: 15px;">
					<th class="label-cliente"><label>Domicilio: </label></th>
					<td class="valor-cliente">{{$Comprobante->direccion}}</td>
					<th class="label-cliente">Localidad: </th>
					<td class="valor-cliente">{{$Comprobante->localidad}}</td>
				</tr>
				<tr style="margin-top: 15px;">
					<th class="label-cliente"><label>Condición IVA: </label></th>
					<td class="valor-cliente">{{$Comprobante->condIva}}</td>
					<th class="label-cliente">Cond. venta: </th>
					<td class="valor-cliente">{{$Comprobante->forma_pago}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="tabla-detalle">
		<table  style="width: 100%;">
			<thead>
				<tr>
					<th>Cantidad</th>
					<th>Descripción</th>
					<th>Importe</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($detalles as $detalle)
					<tr>
						<td>{{$detalle['cantidad']}}</td>
						<td>{{$detalle['descripcion']}}</td>
						<td>${{$detalle['precio']}}</td>
						<td>${{$detalle['total']}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="observaciones">
		@if($Comprobante->txtObservaciones != '')
			<p><strong>OBSERVACIONES:</strong> {{$Comprobante->txtObservaciones}}</p>
		@endif
	</div>
	<div class="totales">

			<label style="width: 85%;float: left;" class="text-right">Importe Total:</label><p class="text-right">${{$Comprobante->total}}</p>
	</div>
	<div style="font-size: 10px; padding-top: 5px;" >
		<h1 class="text-center">COMPROBANTE SIN VALIDEZ FISCAL</h1>
	</div>
		<div style="position:absolute;bottom:0;font-size:10px;width: 100%" class="text-center">
			<p>www.pampadev.com.ar - Software de gestión y facturación electrónica - administracion@pampadev.com.ar</p>
		</div>
</body>
</html>