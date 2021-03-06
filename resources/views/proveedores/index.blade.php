@extends('layouts.main')
@section('contenido')
<h2 class="text-center">Proveedores</h2>
@include('flash::message')
<form action="{{url('/proveedor')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item">
      <label class="col-md-3 hidden-xs label-control" for="buscar">Buscar:</label>
      <div class=" col-md-9 col-xs-12 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar" placeholder="Buscar proveedores">
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
        <th>CUIT</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Deuda</th>
        <th>Observaciones</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($proveedores as $proveedor)
  	   	<tr>
  	   		<td  data-label="Nombre">{{ $proveedor->nombre }}</td>
  	   		<td  data-label="CUIT">{{ $proveedor->cuit }}</td>
  	   		<td data-label="Telefono">{{ $proveedor->telefono }}</td>
  	   		<td data-label="Email">{{ $proveedor->email }}</td>
  	   		<td data-label="Deuda">${{ $proveedor->deuda }}</td>
  	   		<td data-label="Observaciones">{{ $proveedor->observaciones }}</td>
  	   		<td class="columna-botones">
  	   			<a href="{{url('/proveedor/'.$proveedor->id.'/edit')}}" class="btn boton-opciones btn-tabla btn-editar float-left" value="{{$proveedor->id}}">
  					<i class="fa fa-edit"></i>
  				</a>		
  				<button data-href="{{url('/proveedor/'.$proveedor->id.'/destroy')}}" class="btn boton-cancelar btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$proveedor->nombre}}"  >
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