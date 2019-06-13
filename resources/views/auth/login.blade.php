@extends('layouts.home.main2')
@section('contenido')
    {{-- <figure id="bienvenido">
        <h2>bienvenido<span >.</span></h2>
    </figure> --}}
    <style type="text/css">


        .copyright{
            display: none;
        }

    </style>
    <div class="fondo-imagen"></div>
    <div class="container">
            <div class="row">
                <div class="col-md-6 pc-m-auto col-sm-8 offset-sm-2 col-xs-11 stilo-login fondo-transparente pb-5">
                    <form class="form-horizontal form-login" method="POST" action="{{ route('login') }}">
                        <h1 class="titulo-contacto text-white p-0 text-center">Sistema de Gestion </br>Online</h1>
                        <h2 class="text-center subtitulo-contacto">Iniciar sesión</h2>
                        {{ csrf_field() }}
                            <div class="col-lg-9 pc-m-auto">
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
                                <div class="buttons form-group">
                                    <button type="submit" class="btn boton-celeste pull-right col-xs-12 col-sm-4">Iniciar sesión</button>
                                <div class="buttons pt-2">
                                    <a class="reset_pass" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                </div>
                                </div>
                            </div>
                    </form>
                 </div>
            </div>
        <div class="clearfix"></div>
    </div>
{{--     <figure id="pampadev_blanco">
        <img src="{{ asset('images/Iconos pampadev/Logotipo_fondo_colores.png') }}" alt="pampadev">
    </figure> --}}
@endsection