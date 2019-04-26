<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
		body{
			font-family: 'Montserrat', sans-serif;
			font-weight: lighter;
		}
		#content img{
			margin-left: auto;
			height: 80px;
		}
		p > span{
			font-weight: bold;
		}
	</style>
</head>
<body >
<p>Estimado, le adjuntamos el comprobante <span>{{$venta->tipo_comprobante.str_pad($venta->num_comprobante, '8', '0', STR_PAD_LEFT)}}</span> de la compra que realizó el día <span>{{Carbon\Carbon::parse($venta->fecha)->format('d/m/Y')}}</span> a <span>{{Auth::user()->razon_social}}</span>.
<br>
<h3>Muchas gracias, PampaDev.</h3>

</body>
</html>
