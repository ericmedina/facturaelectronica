@extends('layouts.panel_form')
@section('title', 'Agregar cliente - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Nuevo cliente</h2>
@endsection
@section('contenido_panel')
  <form action="{{ route('clientes.store') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{old('nombre')}}">
        @if ($errors->has('nombre'))
          <div class="alert alert-danger mt-1">
              {{$errors->first('nombre')}}
          </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">CUIT/DNI <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="cuit" name="cuit" required="required" class="form-control col-md-7 col-xs-12" value="{{old('cuit')}}">
        @if ($errors->has('cuit'))
          <div class="alert alert-danger mt-1">
              {{$errors->first('cuit')}}
          </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="direccion" name="direccion" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localidad">Localidad:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="localidad" name="localidad" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsabilidad_iva">Resp. IVA <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="responsabilidad_iva" class="form-control col-md-7 col-xs-12">
          @foreach($responsabilidad_iva as $iva)
            @if($iva->id == 1)
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