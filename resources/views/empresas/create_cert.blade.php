@extends('layouts.panel_form')
@section('title', 'Habilitar facturación - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Trámites en AFIP para habilitar la facturación</h3>
@endsection
@section('contenido_panel')
    	{{ csrf_field() }}
			<h3 class="StepTitle">1. Dar de Alta a punto de venta</h3>
			<p>Ingrese en el sitio de AFIP desde su navegador.</p>
			<img src="{{ asset('facturacion/crear_cert/paso1.png') }}" alt="">
			<p>Ingrese en la opción de "Acceso con clave fiscal".</p>
			<img src="{{ asset('facturacion/crear_cert/paso2.png') }}" alt="">
			<p>Escriba su CUIT.</p>
			<img src="{{ asset('facturacion/crear_cert/paso3.png') }}" alt="">
			<p>Escriba su clave fiscal.</p>
			<img src="{{ asset('facturacion/crear_cert/paso4.png') }}" alt="">
			<p>Seleccione la opción "Administración de puntos de venta".</p>
			<img src="{{ asset('facturacion/crear_cert/paso5.png') }}" alt="">
			<p>Seleccione la empresa con la que desea habilitar la facturación electrónica.</p>
			<img src="{{ asset('facturacion/crear_cert/paso6.png') }}" alt="">
			<p>Ingrese en la opción "A/B/M de puntos de venta".</p>
			<img src="{{ asset('facturacion/crear_cert/paso7.png') }}" alt="">
			<p>Éste dialogo informa sobre los puntos de venta que corresponden a su régimen, lo cerramos para continuar.</p>
			<img src="{{ asset('facturacion/crear_cert/paso8.png') }}" alt="">
			<p>Presione el botón "Agregar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso9.png') }}" alt="">
			<p>Ingrese los datos correspondientes:</p>
			<p>N° de punto de venta se corresponde al siguiente a completar, si tiene 2 puntos creados éste correspondería al punto 3.</p>
			<p>Nombre de fantasía: "PampaDev".</p>
			<p>Sistema: "RECE para aplicativo y web services" para Responsables inscriptos o "Factura electrónica - Monotributo - Web Services" para monotributistas.</p>
			<p>Nuevo domicilio: Seleccione su domicilio fiscal.</p>
			<p>Por último confirmar presionando "Aceptar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso10.png') }}" alt="">
			<br>
			<hr>
			<h3 class="StepTitle">2. Designar facturador.</h3>
			<p>Ingrese en el sitio de AFIP desde su navegador.</p>
			<img src="{{ asset('facturacion/crear_cert/paso1.png') }}" alt="">
			<p>Ingrese en la opción de "Acceso con clave fiscal".</p>
			<img src="{{ asset('facturacion/crear_cert/paso2.png') }}" alt="">
			<p>Escriba su CUIT.</p>
			<img src="{{ asset('facturacion/crear_cert/paso3.png') }}" alt="">
			<p>Escriba su clave fiscal.</p>
			<img src="{{ asset('facturacion/crear_cert/paso4.png') }}" alt="">
			<p>Seleccione la opción "Administrador de Relaciones de Clave Fiscal".</p>
			<img src="{{ asset('facturacion/crear_cert/paso15.png') }}" alt="">
			<p>En caso de ser necesario, seleccione el contribuyente con el que desea facturar.</p>
			<img src="{{ asset('facturacion/crear_cert/paso16.png') }}" alt="">
			<p>Ingrese en la opción "Nueva relación".</p>
			<img src="{{ asset('facturacion/crear_cert/paso17.png') }}" alt="">
			<p>En la fila "Servicio" seleccione "Buscar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso18.png') }}" alt="">
			<p>Seleccione la opción "AFIP" y posteriormente "Web services".</p>
			<img src="{{ asset('facturacion/crear_cert/paso19.png') }}" alt="">
			<p>Seleccione la opción "Facturación Electrónica".</p>
			<img src="{{ asset('facturacion/crear_cert/paso20.png') }}" alt="">
			<p>En la fila "Representante" seleccione la opción "Buscar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso21.png') }}" alt="">
			<p>En la sección "CUIT/CUIL/CDI" ingrese 20371763644 y presione "Buscar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso22.png') }}" alt="">
			<p>Presione la opción "Confirmar".</p>
			<img src="{{ asset('facturacion/crear_cert/paso24.png') }}" alt="">
			<p>Una vez realizadas todas las acciones por favor finalice con el botón de la parte inferior.</p>

      
			<a href="{{ url('/fiscal/edit') }}" class="boton boton-confirmar">Finalicé los trámites</a>
@endsection
