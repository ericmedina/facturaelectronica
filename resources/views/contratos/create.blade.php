@extends('layouts.panel_form')
@section('title', 'Elegir licencias - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Licencias</h2>
@endsection
@section('contenido')
<style type="text/css">
	.border{
		border: solid 1px;
	}
</style>
<div class="">


	<form action="{{ route('contratos.store') }}" method="POST" class="col-lg-4">
		<div class="border ">
			{{ csrf_field() }}
			<h3 class="text-center">Basico</h3>
			<p><i class="fa fa-check text-success"></i>Facturación</p>
			<input type="hidden" name="licencia_id" value="2">

			<div class="form-group">
				<label class="control-label col-md-4">Periodo:</label>
					<div class="col-md-8">
						<select class="col-xs-12 " id="select_basico" name="select_basico">
							@foreach($periodos as $periodo)
							<option data-descuento="{{$periodo->descuento}}" value="{{$periodo->id}}">{{$periodo->dias}}</option>
							@endforeach
						</select>
					</div>

			</div>
			<div class="clearfix"></div>
			<div class="form-group">
				<label class="control-label col-md-4">Precio:</label>
				<div class="col-md-7">
					<label  data-precio="{{App\Licencia::where('nombre','basico')->first()->precio}}" id="precio_basico" name ="precio_basico">{{App\Licencia::where('nombre','basico')->first()->precio}}</label>
					
				</div>
			</div>

			<button type="button" class="boton boton-confirmar boton-margenes"  id="btn-seleccionar">Seleccionar</button>
			<div class="clearfix"></div>
		</div>
	</form>


		<form action="{{ route('contratos.store') }}" method="POST" class="col-lg-4">
		<div class="border ">
			{{ csrf_field() }}
			<h3 class="text-center">intermedio</h3>
			<p><i class="fa fa-check text-success"></i>Facturación</p>
			<input type="hidden" name="licencia_id" value="3">

			<div class="form-group">
				<label class="control-label col-md-4">Periodo:</label>
					<div class="col-md-8">
						<select class="col-xs-12" id="select_intermedio" name="select_intermedio">
							@foreach($periodos as $periodo)
							<option data-descuento="{{$periodo->descuento}}" value="{{$periodo->id}}">{{$periodo->dias}}</option>
							@endforeach
						</select>
					</div>

			</div>
			<div class="clearfix"></div>
			<div class="form-group">
				<label class="control-label col-md-4">Precio:</label>
				<div class="col-md-7">
					<label  data-precio_intermedio="{{App\Licencia::where('nombre','intermedio')->first()->precio}}" id="precio_intermedio" name ="precio_intermedio">{{App\Licencia::where('nombre','intermedio')->first()->precio}}</label>
					
				</div>
			</div>

			<button type="button" class="boton boton-confirmar boton-margenes"  id="btn-seleccionar">Seleccionar</button>
			<div class="clearfix"></div>
		</div>
	</form>


	<form action="{{ route('contratos.store') }}" method="POST" class="col-lg-4">
		<div class="border ">
			{{ csrf_field() }}
			<h3 class="text-center">Avanzado</h3>
			<p><i class="fa fa-check text-success"></i>Facturación</p>
			<input type="hidden" name="licencia_id" value="4">

			<div class="form-group">
				<label class="control-label col-md-4">Periodo:</label>
					<div class="col-md-8">
						<select class="col-xs-12" id="select_avanzado" name="select_avanzado">
							@foreach($periodos as $periodo)
							<option data-descuento="{{$periodo->descuento}}" value="{{$periodo->id}}">{{$periodo->dias}}</option>
							@endforeach
						</select>
					</div>

			</div>
			<div class="clearfix"></div>
			<div class="form-group">
				<label class="control-label col-md-4">Precio:</label>
				<div class="col-md-7">
					<label  data-precio_avanzado="{{App\Licencia::where('nombre','avanzado')->first()->precio}}" id="precio_avanzado" name ="precio_avanzado">{{App\Licencia::where('nombre','avanzado')->first()->precio}}</label>
					
				</div>
			</div>

			<button type="submit" class="boton boton-confirmar boton-margenes"  id="btn-seleccionar">Seleccionar</button>
			<div class="clearfix"></div>
		</div>
	</form>
@endsection
@section('js')
	<script type="text/javascript">
				var precio_final
				var precio_basico
				var descuento
		// BASICO		
			//CON DESCUENTO
			$('#select_basico').on('change', function(){
				if (jQuery(this).children('option:selected').data('descuento') > 0) {
					//TRIMESTRAL
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_basico').data('precio') * 3
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//SEMESTRAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_basico').data('precio') * 6
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//ANUAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_basico').data('precio') * 12
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}
					 precio_final = precio_basico - descuento
		


			}

			//SIN DESCUENTO
				if (jQuery(this).children('option:selected').data('descuento')== 0) {
					//trimestral
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_final =  $('#precio_basico').data('precio') * 3

					 	
					}//semestral
					if ($(this).children('option:selected').val() == 3) {
					 	 precio_final =  $('#precio_basico').data('precio') * 6
					 	
					}//anual
					if ($(this).children('option:selected').val() == 4) {
					 	 precio_final =  $('#precio_basico').data('precio') * 12
					 	
					}

			}
			alert(precio_final)
			$('#precio_basico').html(precio_final)
			})


			// Intermedio		
			//CON DESCUENTO
			$('#select_intermedio').on('change', function(){
				if (jQuery(this).children('option:selected').data('descuento') > 0) {
					//TRIMESTRAL
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_intermedio').data('precio_intermedio') * 3
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//SEMESTRAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_intermedio').data('precio_intermedio') * 6
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//ANUAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_intermedio').data('precio_intermedio') * 12
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}
					 precio_final = precio_basico - descuento
		


			}

			//SIN DESCUENTO
				if (jQuery(this).children('option:selected').data('descuento')== 0) {
					
			
					//trimestral
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_final =  $('#precio_intermedio').data('precio_intermedio') * 3
					 	
					}//semestral
					if ($(this).children('option:selected').val() == 3) {
					 	 precio_final =  $('#precio_intermedio').data('precio_intermedio') * 6
					 	
					}//anual
					if ($(this).children('option:selected').val() == 4) {
					 	 precio_final =  $('#precio_intermedio').data('precio_intermedio') * 12
					 	
					}

			}
			$('#precio_intermedio').html(precio_final)
			

			})
			// Avanzado		
			//CON DESCUENTO
			$('#select_avanzado').on('change', function(){
				if (jQuery(this).children('option:selected').data('descuento') > 0) {
					//TRIMESTRAL
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_avanzado').data('precio_avanzado') * 3
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//SEMESTRAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_avanzado').data('precio_avanzado') * 6
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}//ANUAL
					if ($(this).children('option:selected').val() == 2) {
					 	 precio_basico = $('precio_avanzado').data('precio_avanzado') * 12
						 descuento = precio_basico *(jQuery(this).children('option:selected').data('descuento')/100)
					}
					 precio_final = precio_basico - descuento
		


			}

			//SIN DESCUENTO
				if (jQuery(this).children('option:selected').data('descuento')== 0) {
					
			
					//trimestral
					 if ($(this).children('option:selected').val() == 2) {
					 	 precio_final =  $('#precio_avanzado').data('precio_avanzado') * 3
					 	
					}//semestral
					if ($(this).children('option:selected').val() == 3) {
					 	 precio_final =  $('#precio_avanzado').data('precio_avanzado') * 6
					 	
					}//anual
					if ($(this).children('option:selected').val() == 4) {
					 	 precio_final =  $('#precio_avanzado').data('precio_avanzado') * 12
					 	
					}

			}

			$('#precio_avanzado').html(precio_final)

 })
	</script>

@endsection