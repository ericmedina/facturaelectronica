@extends('layouts.panel_form')
@section('title', 'Agregar servicio - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Nuevo servicio</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('servicios.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput" id="form_guardar_servicio">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
        @if ($errors->has('descripcion'))
            <div class="alert alert-danger mt-1">
                {{$errors->first('descripcion')}}
            </div>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">Precio:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="precio" name="precio" class="form-control col-md-7 col-xs-12" value="0">
        @if ($errors->has('precio'))
            <div class="alert alert-danger mt-1">
                {{$errors->first('precio')}}
            </div>
        @endif
      </div>
    </div>
    <div class="form-group margin-bottom-10">
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
    <div class="ln_solid pc"></div>
{{--    boton que guardo por las dudas, cuando ande todo borrar   
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="boton boton-confirmar">Guardar</button>
      </div>
    </div> --}}
  </form>
@endsection
@section('botones')
        <div class="panel-buttons">
            <div class="col-lg-4 col-md-3 col-xs-12 text-center">
              <div class="sombra_gris solo_pc_sombra_gris">                    
                <div class="small-box boton_verde botones_cuadrados boton-confirmar guardar_servicio">
                  <div class="inner">
                    <h3>Guardar servicio<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon-grande">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection
@section('js')
  <script type="text/javascript">
    $(".guardar_servicio").on("click", function(){
        $("#form_guardar_servicio").submit();
    });

  </script>
@endsection