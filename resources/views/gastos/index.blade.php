@extends('layouts.main')
@section('title', 'Listasdo de gastos - PampaDev')
@section('contenido')
<h2 class="text-center">Listado de gastos</h2>
@include('flash::message')
<form action="{{url('/gastos')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item">
      <label class="col-md-3 col-xs-3 label-control hidden-xs" for="buscar">Buscar:</label>
      <div class=" col-md-9 col-xs-10 col-xs-offset-1 col-md-offset-0 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar" placeholder="Buscar gasto">
      </div>
    </div>
  	<div class="col-md-2 col-xs-10 col-xs-offset-1 col-md-offset-0">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success col-xs-12">Buscar</button>  	
  	</div>
</form>
<br>
<div id="card">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Descripción</th>
        <th>Total</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($gastos as $gasto)
  	   	<tr>
          <td data-label="Fecha">{{ $gasto->fecha }}</td>
  	   		<td data-label="Descripción">{{ $gasto->descripcion }}</td>
  	   		<td data-label="Total">${{ $gasto->total }}</td>
  	   		<td class="columna-botones">
  	   		{{-- 	BOTON DE EDITAR GASTOS HAY QUE VER SI SE HACE O NO, ANALIZALO NO SE
          <a href="{{url('/gastos/'.$gasto->id.'/edit')}}" class="btn boton-opciones btn-tabla btn-editar float-left" value="{{$gasto->id}}">
  					<i class="fa fa-edit"></i>
  				</a>	 --}}	
  				<button data-href="{{url('/gastos/'.$gasto->id.'/destroy')}}" class="btn boton-cancelar btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$gasto->descripcion}}"  >
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