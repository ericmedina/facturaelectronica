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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">

    <!-- Custom Theme Style -->
    
    <link href="{{asset('build/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/facturacion.css')}}?version=2" rel="stylesheet">
  </head>

  <body style="background-color: #e5e5e5;" class="login">
    <figure id="bienvenido">
        <h2>bienvenido<span >.</span></h2>
    </figure>
    <div class="contenido_login container-fluid text-center">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            <div id="title_login">
                <h2>SISTEMA DE FACTURACIÓN ONLINE</h2>
            </div>
          <div class="x_panel tile">
              <div class="x_content">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-success submit">Iniciar sesión</button>
                </div>
                <div class="buttons">
                    <a class="reset_pass" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                </div>
              </div>
            </form>
        </div>
    </div>
    <div class="clearfix">
        
    </div>
    <figure id="pampadev_blanco">
        <img src="{{ asset('images/Iconos pampadev/Logotipo_fondo_colores.png') }}" alt="pampadev">
        
    </figure>
  </body>
</html