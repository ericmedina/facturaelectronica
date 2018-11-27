<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
		#content{
			width: 100%; background-color: #2da9ff; background: -webkit-linear-gradient(top, #2da9ff 0%,#0c83d6 100%); background: linear-gradient(to bottom, #2da9ff 0%,#0c83d6 100%); height: 70px;
		}
		#title{
			text-align: center; font-size: 30px; padding-top: 15px;
		}
		#subtitle{
			text-align: center;
		}
	</style>
</head>
<body >
<div id="content">

	<h1 id="title">PampaDev</h1>
</div>
<br>
<h2 id="subtitle">Nueva Consulta en la Página</h2>
	<ul>
		<li>Nombre:	{{$nombre}}</li>
		<li>Telefono: {{$telefono}}</li>
		<li>Email: {{$email}}</li>
		<li>Localidad: {{$localidad}}</li>
		<li>Consulta: {{$consulta}}</li>
	</ul>

<br>
<h3 style="padding-left: 50px;">Muchas gracias, PampaDev.</h3>

</body>
</html>
