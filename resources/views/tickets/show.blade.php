@extends('layouts.panel_form')
@section('title', 'Agregar nuevo ticket - PampaDev')
@section('css')
	<style type="text/css">
	  	.empresa{
	  		/*background-color: #1f1fe01a;*/
	  		background-color: #00b5ed;
			border-radius: 0px 0px 5px 5px;
			position: relative;
			margin-top: 10px;
			height: 29px;
			padding: 4px 9px 0px 14px;
			color: white;
	  	}
	  	.empresa_contenedor{
	  		padding-left: 48px;
	  	}
	  	.mensaje{
	  		background-color: white;
			padding: 9px;
			border-radius: 6px;
	  	}
	  	.admin_contenedor{
	  		padding-right: 48px;
	  	}
	  	.ico{
	  		padding-right: 7px;
	  	}
	  	.admin{
	  		/*background-color: #bababa99;*/
	  		background-color: #404041;
	  		color: white;
			border-radius: 0px 0px 5px 5px; 
			margin-top: 10px;
			height: 29px;
			padding: 4px 8px 0px 14px;
	  	}

		.labelComentarios{
			margin-bottom: 10px!important;
		}
		textarea{
			resize: none;
			height: 100px;
		}
	</style>
@endsection
@section('titulo_panel')
  <h2 class="text-center titulo">{{$tickets->asunto}}</h2>
@endsection
@section('contenido_panel')
	@forelse($tickets->conversacion as $conversacion)
		<div class="card linea" style="margin-top: 10px;">
				<div class="row card-footer" style="margin-top: 10px">
					@if($conversacion->tipo_user == 'empresa')
					<div class="empresa_contenedor">						
						<div class="card-body mensaje">{{$conversacion->mensaje}}</div>
						<div class="col-lg-6 text-right empresa ico" style="text-align:left;">{{Carbon\Carbon::parse($conversacion->created_at)->format('d/m/Y h:m:s')}}</div>
						<div class="col-lg-6 empresa" style="text-align:right;"><li class="fa fa-user ico"></li>{{$conversacion->empresa->razon_social}}</div>
					</div>
					@else
					<div class="admin_contenedor">
						<div class="card-body mensaje">{{$conversacion->mensaje}}</div>
						<div class="col-lg-6 admin"><li class="fa fa-user ico"></li>Administrador: {{$conversacion->administrador->nombre}}</div>
						<div class="col-lg-6 text-right admin">{{Carbon\Carbon::parse($conversacion->created_at)->format('d/m/Y h:m:s')}}</div>
					</div>
					@endif
				</div>
		</div>
	@empty
		<p>No Hay mensajes</p>
	@endforelse
	<div class="clearfix"></div>
	<div class="card" style="margin-top: 50px;">
		<div class="card-body">
			<form action="{{ url('conversacion') }}" method="POST" class="form-horizontal form-label-left">
			  	 {{ csrf_field() }}
	   			
			    <div class="col-sm-12 form-group">
			            <label for="titulo" class="control-label labelComentarios">Agregar Comentario:</label>
			            <textarea class="col-sm-12 textareaComentarios" name="mensaje" id="mensaje"></textarea>
			            <input type="hidden" name="ticket_id" id="ticket_id" value="{{$tickets->id}}">
			    </div>
			    <div class="col-sm-12">
			            <button type="submit" class="boton boton-confirmar btn-tabla float-right">Guardar</button>
			    </div>
			</form>
		</div>
	</div>
@endsection

