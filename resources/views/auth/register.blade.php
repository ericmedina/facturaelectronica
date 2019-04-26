@extends('layouts.home.main')
@section('contenido')
    <div class="contenido-login">
        <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-12">
            <form class="form-horizontal form-login" method="POST" action="{{ route('register') }}">
                <h1>SISTEMA DE GESTIÓN ONLINE</h1>
                <h2>Registrarse</h2>
                {{ csrf_field() }}
                <div class="form-group">
                        <input id="razon_social" type="text" class="form-control" name="razon_social" value="" required autofocus placeholder="Nombre/Razón Social">
                        @if ($errors->has('razon_social'))
                            <span class="help-block">
                                <strong>{{ $errors->first('razon_social') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group">
                    <input id="cuit" type="text" class="form-control" name="cuit" value="" required placeholder="CUIT">
                    @if ($errors->has('cuit'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cuit') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="nombre_fantasia" type="text" class="form-control" name="nombre_fantasia" value="" placeholder="Nombre de fantasía (Opcional)">
                    @if ($errors->has('nombre_fantasia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nombre_fantasia') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="direccion" type="text" class="form-control" name="direccion" value="" required placeholder="Dirección">
                    @if ($errors->has('direccion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="localidad" type="text" class="form-control" name="localidad" value="" required placeholder="Localidad">
                    @if ($errors->has('localidad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('localidad') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="provincia" type="text" class="form-control" name="provincia" value="" required placeholder="Provincia">
                    @if ($errors->has('provincia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('provincia') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="telefono" type="text" class="form-control" name="telefono" value="" required placeholder="Teléfono">
                    @if ($errors->has('telefono'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <select name="tipo_actividad"  class="form-control round">
                        <option value="productos">Productos</option>
                        <option value="servicios">Servicios</option>
                        <option value="productos y servicios">Productos y servicios</option>
                    </select>
                    @if ($errors->has('tipo_actividad'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tipo_actividad') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <select name="responsabilidad_iva"  class="form-control round">
                        <option value="1">IVA Responsable Inscripto</option>
                        <option value="2">Responsable Monotributo</option>
                    </select>
                    @if ($errors->has('responsabilidad_iva'))
                        <span class="help-block">
                            <strong>{{ $errors->first('responsabilidad_iva') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" value="" required placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-right">
                        <button type="submit" class="boton celeste">
                            Registrarse
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection