@extends('layouts.panel_form')
@section('title', 'Categorías de productos - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Categorías de productos</h2>
  </div>
@endsection
@section('contenido_panel')
@include('flash::message')
<form action="{{url('/categoriaproducto')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item bordes_imput">
      <label class="col-md-3 hidden-xs label-control" for="buscar">Buscar:</label>      
        <input type="text" name="buscar" class="form-control col-md-9 col-xs-12" id="buscar" placeholder="Escriba la categoria a buscar">    
    </div>
{{-- REEMPLAZAR ESTE BOTON POR EL AUTO COMPLETAR MAN, DALE DALE DALE DALE DALEEEEE!!!!!!!!  	
    <div class="col-md-2 col-md-offset-0 col-xs-8 col-xs-offset-2">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success col-xs-12">Buscar</button>  	
  	</div> --}}
</form>
<br>
<div id="card">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($categorias as $categoria)
  	   	<tr>
  	   		<td data-label="Nombre" >{{ $categoria->categoria }}</td>
  	   		<td class="columna-botones">
  	   			<a href="{{url('/categoriaproducto/'.$categoria->id.'/edit')}}" class="btn boton-opciones btn-tabla btn-editar float-left boton_verde" value="{{$categoria->id}}">
  					<i class="fa fa-edit"></i>
  				</a>		
  				<button data-href="{{url('/categoriaproducto/'.$categoria->id.'/destroy')}}" class="btn boton-cancelar btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$categoria->categoria}}"  >
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