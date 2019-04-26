@extends('layouts.panel_form')
@section('title', 'Mi perfil - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Perfil de {{$contadores->nombre}}</h2>
@endsection
@section('contenido_panel')

  <form action="{{url('/contador/perfil/'.$acepta='si')}}" method="POST" id="form_contador" class="form-horizontal form-label-left">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre<span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nombre" name="nombre" required="required" readonly="readonly" class="form-control col-md-7 col-xs-12" value="{{$contadores->nombre}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dni">D.N.I
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="dni" name="dni" class="form-control col-md-7 col-xs-12" readonly="readonly" value="{{$contadores->dni}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">:</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="email" id="email" name="email" required="required" readonly="readonly" class="form-control col-md-7 col-xs-12" value="{{$contadores->email}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula">Matricula
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="matricula" name="matricula" readonly="readonly" class="form-control col-md-7 col-xs-12" value="{{$contadores->matricula}}">
      </div>
    </div>
    <input type="hidden" name="id_emp" id="id_emp" value="{{$datos_empresa->id}}">
    <input type="hidden" name="id_cont" id="id_cont" value="{{$contadores->id}}">
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
        <button type="submit" class="btn btn-primary">Aceptar contador</button>
        <a class="btn btn-danger rechazar">Rechazar contador</a>
      </div>
    </div>
  </form>
  @include('layouts.dialogs.mensaje2')
@endsection
@section('js')
 <script type="text/javascript">
      jQuery(document).on("click",".rechazar", function(){
          $('#message_title').html('Atencion: ');
          $('#message_text').html('Esta rechazando la asistencia de este contador');
          $('.modal_message2').modal('toggle');
      });
      jQuery(document).on("click", ".aceptar", function(){
        jQuery("#form_contador").attr("action","{{url('/contador/perfil/'.$acepta='no')}}");
        jQuery("#form_contador").submit();
      });

      //{{url('/contador/perfil/'.$a='no')}}
 </script>
@endsection