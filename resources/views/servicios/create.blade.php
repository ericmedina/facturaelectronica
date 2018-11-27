@extends('layouts.panel_form')
@section('title', 'Agregar servicio - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Nuevo servicio</h3>
@endsection
@section('contenido_panel')
  <form action="{{ route('servicios.store') }}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">Precio:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio" name="precio" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iva">IVA <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="iva" class="form-control col-md-7 col-xs-12">
          @foreach($IVA as $alicuota)
            @if($alicuota->id == 5)
              <option selected="" value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
            @else
              <option value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
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