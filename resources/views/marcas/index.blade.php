@extends('layouts.main')
@section('title', 'Marcas de productos - PampaDev')
@section('contenido')
<h2 class="text-center">Marcas de productos</h2>
@include('flash::message')
<form action="{{url('/marcas')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item">
      <label class="col-md-3 hidden-xs label-control" for="buscar">Buscar:</label>
      <div class=" col-md-9 col-xs-12 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar" placeholder="Buscar marca">
      </div>
    </div>
  	<div class="col-md-2 col-md-offset-0 col-xs-8 col-xs-offset-2">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success col-xs-12">Buscar</button>  	
  	</div>
</form>
<br>
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