@extends('layouts.panel_form')
@section('title', 'Agregar nuevo gasto - PampaDev')
@section('titulo_panel')
  <h2 class="text-center">Remarca de productos</h2>
@endsection
@section('contenido_panel')
    <form action="{{url('/remarco')}}" method="POST" accept-charset="utf-8">
        {{csrf_field()}}
    	<div class="row">
    		<div class="form-group col-xs-12">
    			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="seleccionar">Seleccionar:
         		</label>
    		      <div class="col-md-6 col-sm-6 col-xs-12">
    		        <select class="form-control col-md-7 col-xs-12" id="seleccionar" name="seleccionar">
    		        	<option value="1">Proveedor</option>
    		        	<option value="2">Marca</option>
    		        	<option value="3">Categoría</option>
    		        </select>
    		      </div>
    		</div>
    		<div class="form-group col-xs-12">
    			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="seleccionar">Seleccionar:
         		</label>
    		      <div class="col-md-6 col-sm-6 col-xs-12">
    		        <select class="form-control col-md-7 col-xs-12" id="tipo" name="tipo" value="">
    		        </select>
    		      </div>
    		</div>
    		<div class="form-group col-xs-12">
    			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="porcentaje">Porcentaje a remarcar:</label>
    			<div class="col-md-6 col-sm-6 col-xs-12">
    				<input type="text" name="porcentaje" value="" class="form-control" placeholder="0.0">
    			</div>
    		</div>
            <div class="ln_solid"></div>
            <div class="form-group col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-right">
                <button type="submit" class="boton boton-confirmar">Guardar</button>
              </div>
            </div>
    	</div>
    </form>
@endsection
@section('js')
<script type="text/javascript">
		llenarSelect()
		$('#seleccionar').on('change', function(){
			llenarSelect()
		})
        function llenarSelect(){
            var select = document.getElementById("tipo");
            $('#tipo').empty();
            if ($('#seleccionar').children('option:selected').val() == 1) {
                $.ajax({
                    type:'POST',
                    url: '/llenar_proveedores',
                    dataType:'json',
                    complete: function(response){
                        var combo = document.getElementById("tipo");
                        var proveedores = response.responseJSON
                        for (var i = 0; i < proveedores.length; i++) {
                            var option = document.createElement('option');
                            combo.options.add(option,i);
                            combo.options[i].value = proveedores[i]['id'];
                            combo.options[i].innerText = proveedores[i]['nombre'];
                            console.log(proveedores[i]['nombre'])
                        }
                    }
                })
            }
            if ($('#seleccionar').children('option:selected').val() == 2) {
                $.ajax({
                    type:'POST',
                    url: '/llenar_marcas',
                    dataType:'json',
                    complete: function(response){
                        var combo = document.getElementById("tipo");
                        var marcas = response.responseJSON
                        for (var i = 0; i < marcas.length; i++) {
                            var option = document.createElement('option');
                            combo.options.add(option,i);
                            combo.options[i].value = marcas[i]['id'];
                            combo.options[i].innerText = marcas[i]['marca'];
                        }
                    }
                })              
            }
            if ($('#seleccionar').children('option:selected').val() == 3) {
                $.ajax({
                    type:'POST',
                    url: '/llenar_categorias',
                    dataType:'json',
                    complete: function(response){
                        var combo = document.getElementById("tipo");
                        var categorias = response.responseJSON
                        for (var i = 0; i < categorias.length; i++) {
                            var option = document.createElement('option');
                            combo.options.add(option,i);
                            combo.options[i].value = categorias[i]['id'];
                            combo.options[i].innerText = categorias[i]['categoria'];
                        }
                    }
                })
            }
        }
	</script>
@endsection

