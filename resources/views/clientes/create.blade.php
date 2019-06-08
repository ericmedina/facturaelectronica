@extends('layouts.panel_form')
@section('title', 'Agregar cliente - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Nuevo cliente</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('clientes.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput margin-bottom-10" id="form_guardar_cliente">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{old('nombre')}}" placeholder="Ej: Manuel Perez">
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
        <input type="text" id="cuit" name="cuit" required="required" class="form-control col-md-7 col-xs-12" value="{{old('cuit')}}" placeholder="Ej: 20334445352">
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
        <input type="text" id="direccion" name="direccion" class="form-control col-md-7 col-xs-12" placeholder="Ej: Jose silva 1500">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localidad">Localidad:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="localidad" name="localidad" class="form-control col-md-7 col-xs-12" placeholder="Ej: Santa Rosa">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12" placeholder="EJ: La Pampa">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" placeholder="Ej: 2954666263">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" placeholder="Ej: email@email.com">
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
    <div class="ln_solid pc"></div>
{{--  guardo boton por las dudas un tiempito  
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
                <div class="small-box boton_verde botones_cuadrados boton_guardar_cliente">
                  <div class="inner">
                    <h3>Guardar cliente<sup style="font-size: 20px"></sup></h3>
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
    $(".boton_guardar_cliente").on("click", function(){
        $("#form_guardar_cliente").submit();
    });

  </script>
@endsection