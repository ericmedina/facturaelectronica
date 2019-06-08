@extends('layouts.panel_form')
@section('title', 'Agregar nuevo gasto - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_rojo sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Nuevo gasto</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('gastos.store') }}" method="POST" class="form-horizontal form-label-left" id="form_gastos">
    {{ csrf_field() }}
    <div class="form-group bordes_imput">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ej: Alquileres">
      </div>
    </div>
    <div class="form-group bordes_imput">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">Fecha <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="date" id="fecha" name="fecha" required="required" class="form-control col-md-7 col-xs-12" value="{{$fecha}}">
      </div>
    </div>
    <div class="form-group col-xs-12">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total">Total <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12 input-group">
        <span class="input-group-addon letras_rojas">$</span>
        <input type="text" id="total" name="total" required="required" class="form-control cel_boton_total letras_rojas" value="0">
      </div>
    </div>
    <div class="ln_solid pc"></div>
{{--     -------- BOTON ORISHINAL--------------------
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
                <div class="small-box boton_rojo botones_cuadrados boton_guardar_gasto">
                  <div class="inner">
                    <h3>Guardar gasto<sup style="font-size: 20px"></sup></h3>
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
    $(".boton_guardar_gasto").on("click", function(){
        $("#form_gastos").submit();
    });

  </script>
@endsection