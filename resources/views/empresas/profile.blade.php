@extends('layouts.panel_form')
@section('title', 'Mi perfil - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Mi perfil</h3>
@endsection
@section('contenido_panel')
  <form action="{{ url('/empresas/perfil') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razon_social">Razon social <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="razon_social" name="razon_social" required="required" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->razon_social }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_fantasia">Nombre de fantasía:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre_fantasia" name="nombre_fantasia" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->nombre_fantasia }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">CUIT/DNI <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="cuit" name="cuit" required="required" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->cuit }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="direccion" name="direccion" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->direccion }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localidad">Localidad:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="localidad" name="localidad" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->localidad }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->provincia }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->telefono }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->email }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="punto_venta">Punto de venta:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="punto_venta" name="punto_venta" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->fiscal->punto_venta }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inicio_actividades">Inicio de actividades:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="inicio_actividades" name="inicio_actividades" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->fiscal->inicio_actividades }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ingresos_brutos">N° Ingresos brutos:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="ingresos_brutos" name="ingresos_brutos" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->fiscal->ingresos_brutos }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_actividad">Tipo actividad: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="tipo_actividad" class="form-control col-md-7 col-xs-12">
          @if(Auth::user()->tipo_actividad == 'productos')
            <option selected="" value="productos">Productos</option>
            <option value="servicios">Servicios</option>
            <option value="productos y servicios">Productos y servicios</option>
          @elseif(Auth::user()->tipo_actividad == 'servicios')
            <option value="productos">Productos</option>
            <option selected="" value="servicios">Servicios</option>
            <option value="productos y servicios">Productos y servicios</option>
          @elseif(Auth::user()->tipo_actividad == 'productos y servicios')
            <option value="productos">Productos</option>
            <option value="servicios">Servicios</option>
            <option selected="" value="productos y servicios">Productos y servicios</option>
          @endif
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsabilidad_iva">Resp. IVA: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="responsabilidad_iva" class="form-control col-md-7 col-xs-12">
          @foreach($responsabilidad_iva as $iva)
            @if(Auth::user()->responsabilidad_iva_id == $iva->id)
              <option selected="" value="{{ $iva->id }}">{{ $iva->nombre }}</option>
            @else
              <option value="{{ $iva->id }}">{{ $iva->nombre }}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="actividad">Actividad:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="actividad" name="actividad" placeholder="EJ: Contrucción, Mecánica, Venta de inmuebles" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->fiscal->actividad }}">
      </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="boton boton-confirmar">Guardar</button>
      </div>
    </div>
  </form>
@endsection