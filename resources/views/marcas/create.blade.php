@extends('layouts.panel_form')
@section('title', 'Agregar nueva marca - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Nueva marca</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('marcas.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput" id="form_guardar_marca">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">Marca: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="marca" name="marca" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ej: Genius">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remarco">Remarco: <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="remarco" name="remarco" required="required" class="form-control col-md-6 col-sm-6 col-xs-12" value="0">
      </div>
    </div>
    <div class="ln_solid"></div>
{{--  boton que guardo por las duuuuudas    
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
                <div class="small-box boton_verde botones_cuadrados boton-confirmar guardar_marca">
                  <div class="inner">
                    <h3>Agregar marca<sup style="font-size: 20px"></sup></h3>
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
    $(".guardar_marca").on("click", function(){
        $("#form_guardar_marca").submit();
    });

  </script>
@endsection