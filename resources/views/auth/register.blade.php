<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. https://programacionymas.com/blog/confirmar-email-laravel-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />

    <title>Facturación electrónica - PampaDev </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    
    <link href="{{asset('build/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/facturacion.css')}}" rel="stylesheet">
  </head>

    <body style="background-color: #e5e5e5;" class="login">
        <div class="contenido_login container-fluid text-center">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <form class="form-horizontal" id="form_register" method="POST" action="{{ route('register') }}">

                    <div class="x_panel tile">
                      <div class="x_title  text-center" >
                        <h3 class="text-center">Registrarse</h3>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="razon_social" class="col-md-2 control-label">Nombre/Razón Social:</label>

                            <div class="col-md-8">
                                <input id="razon_social" type="text" class="form-control" name="razon_social" value="" required autofocus>
                            </div>
                                @if ($errors->has('razon_social'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="cuit" class="col-md-2 control-label">CUIT:</label>

                            <div class="col-md-8">
                                <input id="cuit" type="text" class="form-control" name="cuit" value="" required>
                            </div>
                            @if ($errors->has('cuit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cuit') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="nombre_fantasia" class="col-md-2 control-label">Nombre de fantasía(Opcional):</label>

                            <div class="col-md-8">
                                <input id="nombre_fantasia" type="text" class="form-control" name="nombre_fantasia" value="">
                            </div>
                                @if ($errors->has('nombre_fantasia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_fantasia') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-md-2 control-label">Dirección:</label>

                            <div class="col-md-8">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="" required>
                            </div>
                            @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="localidad" class="col-md-2 control-label">Localidad:</label>

                            <div class="col-md-8">
                                <input id="localidad" type="text" class="form-control" name="localidad" value="" required>
                            </div>
                            @if ($errors->has('localidad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('localidad') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="provincia" class="col-md-2 control-label">Provincia:</label>

                            <div class="col-md-8">
                                <input id="provincia" type="text" class="form-control" name="provincia" value="" required>
                            </div>
                                @if ($errors->has('provincia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provincia') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-md-2 control-label">Teléfono:</label>

                            <div class="col-md-8">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="" required>
                            </div>
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="tipo_actividad" class="col-md-2 control-label">Concepto:</label>

                            <div class="col-md-8">
                                <select name="tipo_actividad"  class="form-control">
                                    <option value="productos">Productos</option>
                                    <option value="servicios">Servicios</option>
                                    <option value="productos y servicios">Productos y servicios</option>
                                </select>
                            </div>
                            @if ($errors->has('tipo_actividad'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipo_actividad') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="responsabilidad_iva" class="col-md-2 control-label">Responsabilidad IVA:</label>

                            <div class="col-md-8">
                                <select name="responsabilidad_iva"  class="form-control">
                                    <option value="1">IVA Responsable Inscripto</option>
                                    <option value="2">Responsable Monotributo</option>
                                </select>
                            </div>
                            @if ($errors->has('responsabilidad_iva'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('responsabilidad_iva') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">E-Mail</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
