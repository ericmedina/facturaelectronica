<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />

    <title>Facturación electrónica - PampaDev </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">

    <!-- Custom Theme Style -->
    
    <link href="{{asset('build/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/facturacion.css')}}?version=2" rel="stylesheet">
  </head>

  <body style="background-color: #e5e5e5;" class="login">
    <div class="contenido_login container-fluid text-center">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="x_panel tile">
                <div class="x_content">
                    <h3>Cuenta suspendida</h3>
                    <p>Tu cuenta ha sido suspendida satisfactoriamente.</p>
                    <p>¡Esperamos que regreses pronto!</p>
                    <a href="{{url('/')}}" title="" class="btn btn-success">Volver a la página principal</a>
                </div>
            </div>
        </div>
    </div>
  </body>
</html