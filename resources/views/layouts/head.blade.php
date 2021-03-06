<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />

    <title>@yield('title', 'PampaDev')</title>
    
    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.css')}}?v=1.0" rel="stylesheet">
    <link href="{{asset('css/facturacion.css')}}?v=1.0" rel="stylesheet">
    @yield('css', '')
  </head>
