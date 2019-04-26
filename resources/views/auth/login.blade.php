@extends('layouts.home.main')
@section('contenido')
    {{-- <figure id="bienvenido">
        <h2>bienvenido<span >.</span></h2>
    </figure> --}}
    <div class="contenido-login">
        <div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2 col-xs-12">
            <form class="form-horizontal form-login" method="POST" action="{{ route('login') }}">
                <h1>SISTEMA DE GESTIÓN ONLINE</h1>
                <h2>Iniciar sesión</h2>
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
                    <button type="submit" class="float-right boton celeste">Iniciar sesión</button>
                </div>
                <div class="buttons">
                    <a class="reset_pass" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
{{--     <figure id="pampadev_blanco">
        <img src="{{ asset('images/Iconos pampadev/Logotipo_fondo_colores.png') }}" alt="pampadev">
    </figure> --}}
@endsection