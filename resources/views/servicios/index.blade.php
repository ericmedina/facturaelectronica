@extends('layouts.main')
@section('title', 'Listado de servicios - PampaDev')
@section('contenido')
<h1 class="text-center">Listado de servicios</h1>
@include('flash::message')
<form action="{{url('/servicios')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-10 form-item">
      <label class="col-xs-3 label-control" for="buscar">Buscar:</label>
      <div class=" col-xs-9 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar">
      </div>
    </div>
  	<div class="col-xs-2">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success">Buscar</button>  	
  	</div>
</form>
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Descripción</th>
      <th>Precio</th>
      <th>IVA</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	@foreach($servicios as $servicio)
	   	<tr>
	   		<td>{{ $servicio->descripcion }}</td>
	   		<td>{{ $servicio->precio }}</td>
	   		<td>{{ $servicio->iva->alicuota }}</td>
	   		<td class="columna-botones">
	   			<a href="{{url('/servicios/'.$servicio->id.'/edit')}}" class="btn boton-opciones btn-tabla btn-editar float-left" value="{{$servicio->id}}">
					<i class="fa fa-edit"></i>
				</a>		
				<button data-href="{{url('/servicios/'.$servicio->id.'/destroy')}}" class="btn boton-cancelar btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$servicio->descripcion}}"  >
					<span class="glyphicon glyphicon-trash"></span>
				</button>			
	   		</td>
	   	</tr>
   	@endforeach
  </tbody>
</table>
@include('layouts.modal_eliminar')
@endsection