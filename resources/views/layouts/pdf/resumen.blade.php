<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/comprobante.css">
</head>
<body>
	<div id="" name="" class="border-1">	
		<div class="tipo-comprobante text-center">
			<p style="font-size: 35px;margin-bottom: -7px;margin-top: -3px;">X</p>
		</div>
		<div class="cabecera">
			<div class="datos-empresa text-center">
				@if(Auth::user()->nombre_fantasia != "" && Auth::user()->nombre_fantasia != null)
					<h1 class="text-center" style="font-weight: bold;">{{ Auth::user()->nombre_fantasia }}</h1>
					<div>
						<p>De: {{Auth::user()->razon_social}}</p>			
						<p>{{Auth::user()->direccion}}</p>			
						<p>{{Auth::user()->localidad}} - {{ Auth::user()->provincia }}</p>			
						<p>Telefono: {{Auth::user()->telefono}}</p>
						<p class="underline">{{Auth::user()->responsabilidad_iva->nombre}}</p>			
					</div>
				@else
					<h1 class="text-center" style="font-weight: bold;">{{Auth::user()->razon_social}}</h1>
					<div>
						<p>{{Auth::user()->direccion}}</p>		
						<p>{{Auth::user()->localidad}} - {{ Auth::user()->provincia }}</p>			
						<p>Telefono: {{Auth::user()->telefono}}</p>
						<p class="underline">{{Auth::user()->responsabilidad_iva->nombre}}</p>					
					</div>
				@endif
			</div>
			<div class="datos-comprobante text-center">
				<h1 class="text-center"  style="font-weight: bold;">{{$titulo_factura}}</h1>
				<div>
					<p>N°{{str_pad($punto_venta, 4, '0', STR_PAD_LEFT)}} - {{$num_comprobante}}</p>
					<p>Fecha: {{$Comprobante->fecha}}</p>
					<p>CUIT: {{Auth::user()->cuit}}</p>
					<p>Inicio actividades: {{Auth::user()->fiscal->inicio_actividades}}</p>						
					<h4><strong>ORIGINAL</strong></h4>
				</div>
			</div>
		</div>
		<div class="datos-cliente ">
			<table style="border:none;width: 100%;font-size: 12px;margin-top: 10px;">
				<tr style="height: 50px;">
					<th class="label-cliente"><label>Cliente: </label></th>
					<td class="valor-cliente">{{$Comprobante->nombre}}</td>
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
					<td class="valor-cliente">{{$Comprobante->resp_iva}}</td>
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
					<th>Fecha</th>
					<th>Comprobante</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($detalles as $detalle)
					<tr>
						<td>{{$detalle->fecha}}</td>
						<td>{{$detalle->comprobante}}</td>
						<td>${{$detalle->total}}</td>
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
	<div style="position:absolute;bottom:3px;font-size:10px;width: 100%" class="text-center">
		<p>www.pampadev.com.ar - Software de gestión y facturación electrónica - administracion@pampadev.com.ar</p>
	</div>
	<div class="page-break"></div>
		<div id="" name="" class="border-1">
		<div class="tipo-comprobante text-center">
			<p style="font-size: 35px;margin-bottom: -7px;margin-top: -3px;">X</p>
		</div>
		<div class="cabecera">
			<div class="datos-empresa text-center">
				@if(Auth::user()->nombre_fantasia != "" && Auth::user()->nombre_fantasia != null)
					<h1 class="text-center" style="font-weight: bold;">{{ Auth::user()->nombre_fantasia }}</h1>
					<div>
						<p>De: {{Auth::user()->razon_social}}</p>			
						<p>{{Auth::user()->direccion}}</p>			
						<p>{{Auth::user()->localidad}} - {{ Auth::user()->provincia }}</p>			
						<p>Telefono: {{Auth::user()->telefono}}</p>
						<p class="underline">{{Auth::user()->responsabilidad_iva->nombre}}</p>			
					</div>
				@else
					<h1 class="text-center" style="font-weight: bold;">{{Auth::user()->razon_social}}</h1>
					<div>
						<p>{{Auth::user()->direccion}}</p>		
						<p>{{Auth::user()->localidad}} - {{ Auth::user()->provincia }}</p>			
						<p>Telefono: {{Auth::user()->telefono}}</p>
						<p class="underline">{{Auth::user()->responsabilidad_iva->nombre}}</p>					
					</div>
				@endif
			</div>
			<div class="datos-comprobante text-center">
				<h1 class="text-center"  style="font-weight: bold;">{{$titulo_factura}}</h1>
				<div>
					<p>N°{{str_pad($punto_venta, 4, '0', STR_PAD_LEFT)}} - {{$num_comprobante}}</p>
					<p>Fecha: {{$Comprobante->fecha}}</p>
					<p>CUIT: {{Auth::user()->cuit}}</p>
					<p>Inicio actividades: {{Auth::user()->fiscal->inicio_actividades}}</p>	
					<h4><strong>DUPLICADO</strong></h4>
				</div>
			</div>
		</div>
		
		<div class="datos-cliente ">
			<table style="border:none;width: 100%;font-size: 12px;margin-top: 10px;">
				<tr style="height: 50px;">
					<th class="label-cliente"><label>Cliente: </label></th>
					<td class="valor-cliente">{{$Comprobante->nombre}}</td>
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
					<td class="valor-cliente">{{$Comprobante->resp_iva}}</td>
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
					<th>Fecha</th>
					<th>Comprobante</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($detalles as $detalle)
					<tr>
						<td>{{$detalle->fecha}}</td>
						<td>{{$detalle->comprobante}}</td>
						<td>${{$detalle->total}}</td>
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
	<div style="position:absolute;bottom:3px;font-size:10px;width: 100%" class="text-center">
		<p>www.pampadev.com.ar - Software de gestión y facturación electrónica - administracion@pampadev.com.ar</p>
	</div>
</body>
</html>