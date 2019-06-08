@extends('layouts.panel_form')
@section('title', 'Agregar categoría de producto - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Nueva categoría</h2>
  </div>
@endsection
@section('contenido_panel')
  <form action="{{ route('categoriaproducto.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput margin-bottom-4" id="form_guardar_categoria">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoría <span class="required">:</span>
      </label>      
        <input type="text" id="categoria" name="categoria" required="required" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Ej: Celulares">      
    </div>
    <div class="ln_solid pc"></div>
{{--  GUARDO EL BOTON POR LAS DUUUUUUUUDASSS MAN!!!! CUALQUIER COSA, VOLVELO A PONER     
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
                <div class="small-box boton_verde botones_cuadrados boton_guardar_categoria">
                  <div class="inner">
                    <h3>Guardar categoria<sup style="font-size: 20px"></sup></h3>
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
    $(".boton_guardar_categoria").on("click", function(){
        $("#form_guardar_categoria").submit();
    });

  </script>
@endsection