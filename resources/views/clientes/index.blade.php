@extends('layouts.main')
@section('title', 'Listado de clientes - PampaDev')
@section('contenido')
<h1 class="text-center">Listado de clientes</h1>
@include('flash::message')
<form action="{{url('/clientes')}}" method="get" accept-charset="utf-8" class="form-inline">
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
        <th>Cuit</th>
        <th>Direccion</th>
        <th>Localidad</th>
        <th>Provincia</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Resp. IVA</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($clientes as $cliente)
  	   	<tr>
  	   		<td data-label="Nombre">{{ $cliente->nombre }}</td>
  	   		<td data-label="CUIT">{{ $cliente->cuit }}</td>
  	   		<td data-label="Dirección">{{ $cliente->direccion }}</td>
          <td data-label="Localidad">{{ $cliente->localidad }}</td>
  	   		<td data-label="Provincia">{{ $cliente->provincia }}</td>
  	   		<td data-label="Teléfono">{{ $cliente->telefono }}</td>
  	   		<td data-label="Email">{{ $cliente->email }}</td>
  	   		<td data-label="Resp. IVA">{{ $cliente->responsabilidades_iva->nombre }}</td>
  	   		<td class="columna-botones">
    				<a href="{{url('/clientes/'.$cliente->id)}}" class="btn btn-success btn-tabla btn-editar float-left" value="{{$cliente->id}}">
    					Ver
    				</a>				
    	   			<a href="{{url('/clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning btn-tabla btn-editar float-left" value="{{$cliente->id}}">
    					<i class="fa fa-edit"></i>
    				</a>		
    				<button data-href="{{url('/clientes/'.$cliente->id.'/destroy')}}" class="btn btn-danger btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$cliente->descripcion}}"  >
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