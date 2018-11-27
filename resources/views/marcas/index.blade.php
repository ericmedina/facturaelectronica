@extends('layouts.main')
@section('title', 'Marcas de productos - PampaDev')
@section('contenido')
<h1 class="text-center">Marcas de productos</h1>
@include('flash::message')
<form action="{{url('/marcas')}}" method="get" accept-charset="utf-8" class="form-inline">
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
<div id="card">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Remarco</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($marcas as $marca)
  	   	<tr>
  	   		<td data-label="Nombre">{{ $marca->marca }}</td>
  	   		<td data-label="Remarco">{{ $marca->remarco }}%</td>
  	   		<td class="columna-botones">
  	   			<a href="{{url('/marcas/'.$marca->id.'/edit')}}" class="btn boton-opciones btn-tabla btn-editar float-left" value="{{$marca->id}}">
  					<i class="fa fa-edit"></i>
  				</a>		
  				<button data-href="{{url('/marcas/'.$marca->id.'/destroy')}}" class="btn boton-cancelar btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$marca->marca}}"  >
  					<span class="glyphicon glyphicon-trash"></span>
  				</button>			
  	   		</td>
  	   	</tr>
     	@endforeach
    </tbody>
  </table>
</div>
@include('layouts.modal_eliminar')
@endsection