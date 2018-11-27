@extends('layouts.panel_form')
@section('title', 'Editar cliente - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Editar {{ $cliente->nombre }}</h3>
@endsection
@section('contenido_panel')
  <form action="{{ url('clientes/'.$cliente->id) }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{ $cliente->nombre }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">CUIT/DNI <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="cuit" name="cuit" required="required" class="form-control col-md-7 col-xs-12" value="{{ $cliente->cuit }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="direccion" name="direccion" class="form-control col-md-7 col-xs-12" value="{{ $cliente->direccion }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localidad">Localidad:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="localidad" name="localidad" class="form-control col-md-7 col-xs-12" value="{{ $cliente->localidad }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12" value="{{ $cliente->provincia }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" value="{{ $cliente->telefono }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="{{ $cliente->email }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsabilidad_iva">Resp. IVA <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="responsabilidad_iva" class="form-control col-md-7 col-xs-12">
          @foreach($responsabilidad_iva as $iva)
            @if($iva->id == $cliente->responsabilidades_iva_id)
              <option selected="" value="{{ $iva->id }}">{{ $iva->nombre }}</option>
            @else
              <option value="{{ $iva->id }}">{{ $iva->nombre }}</option>
            @endif
          @endforeach
        </select>
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