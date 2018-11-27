@extends('layouts.main')
@section('title', 'Listado de productos - PampaDev')
@section('contenido')
<h1 class="text-center">Listado de productos</h1>
@include('flash::message')
<form action="{{url('/productos')}}" method="get" accept-charset="utf-8" class="form-inline">
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
        <th>Codigo</th>
        <th>Producto</th>
        <th>Stock</th>
        <th>Stock mínimo</th>
        <th>Precio venta</th>
        <th>Precio compra</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Proveedor</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($productos as $producto)
        @if($producto->stock_minimo >= $producto->stock)
    	   	<tr class="font-alert">
    	   		<td data-label="Codigo">{{ $producto->codigo }}</td>
    	   		<td data-label="Producto">{{ $producto->producto }}</td>
    	   		<td data-label="Stock">{{ $producto->stock }}</td>
            <td data-label="Stock min.">{{ $producto->stock_minimo }}</td>
    	   		<td data-label="Precio venta">${{ $producto->precio_venta }}</td>
    	   		<td data-label="Precio compra">${{ $producto->precio_compra }}</td>
    	   		<td data-label="Marca">{{ $producto->marca->marca }}</td>
    	   		<td data-label="Categoría">{{ $producto->categoria_producto->categoria }}</td>
    	   		<td data-label="Proveedor">{{ $producto->proveedor->nombre }}</td>
    	   		<td class="columna-botones">
    	   			<a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-tabla btn-editar float-left" value="{{$producto->id}}">
    					<i class="fa fa-edit"></i>
    				</a>		
    				<button data-href="{{url('/productos/'.$producto->id.'/destroy')}}" class="btn btn-danger btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$producto->producto}}"  >
    					<span class="glyphicon glyphicon-trash"></span>
    				</button>			
    	   		</td>
    	   	</tr>
        @else
          <tr>
            <td data-label="Codigo">{{ $producto->codigo }}</td>
            <td data-label="Producto">{{ $producto->producto }}</td>
            <td data-label="Stock">{{ $producto->stock }}</td>
            <td data-label="Stoick min.">{{ $producto->stock_minimo }}</td>
            <td data-label="Precio venta">${{ $producto->precio_venta }}</td>
            <td data-label="Precio compra">${{ $producto->precio_compra }}</td>
            <td data-label="Marca">{{ $producto->marca->marca }}</td>
            <td data-label="Categoría">{{ $producto->categoria_producto->categoria }}</td>
            <td data-label="Proveedor">{{ $producto->proveedor->nombre }}</td>
            <td class="columna-botones">
              <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-tabla btn-editar float-left" value="{{$producto->id}}">
              <i class="fa fa-edit"></i>
            </a>    
            <button data-href="{{url('/productos/'.$producto->id.'/destroy')}}" class="btn btn-danger btn-tabla btn-editar float-right btn_eliminar" data-nombre="{{$producto->producto}}"  >
              <span class="glyphicon glyphicon-trash"></span>
            </button>     
            </td>
          </tr>
        @endif
     	@endforeach
    </tbody>
  </table>
</div>
@include('layouts.modal_eliminar')
@endsection