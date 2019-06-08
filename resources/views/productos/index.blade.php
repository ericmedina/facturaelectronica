@extends('layouts.panel_form')
@section('title', 'Listado de productos - PampaDev')
@section('titulos')
  <div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Listado de productos</h2>
  </div>
@endsection
@section('contenido_panel')
@include('flash::message')
<form action="{{url('/productos')}}" method="get" accept-charset="utf-8" class="form-inline bordes_imput">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item">
      <label class="col-md-3 hidden-xs label-control" for="buscar">Buscar:</label>
      <div class=" col-md-9 col-md-offset-0 col-xs-12 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar" placeholder="Escriba el nombre o codigo del producto">
      </div>
    </div>
{{-- 
__________________    REEEMPLAZAR ESTE BOTON BUSCAR POR EL AUTOCOMPLETAR ______________________  	
    <div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-0">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success col-xs-12">Buscar</button>  	
  	</div> 
________________________________________________________________________________________________
--}}

{{--  BOTONES VIEJOS, LOS GUARDOOO POR LAS DUUUUUUUUUUUUUDAS     
    <div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-2">
      <button type="button" id="exportar_precios" style="margin-top: 7px;" onclick="abrir_precios()" class="btn btn-success col-xs-12">Exportar precios</button>    
    </div>
    <div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-0">
      <button type="button" id="exportar_precios" style="margin-top: 7px;" onclick="abrir_stock()" class="btn btn-success col-xs-12">Exportar stock</button>    
    </div> --}}
</form>
    <div class="p-botones sombra_gris margin-top-3 margin-bottom-4">   
      <div class="row panel-buttons contenedor_botones m-1">
            <div class="col-md-3 col-xs-6 text-center p-botones" id="exportar_precios" onclick="abrir_precios()">
                <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
                  <div class="inner">
                    <h3>Exportar <br>precios<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-tags"></i>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 text-center p-botones" id="exportar_precios" onclick="abrir_stock()">
                <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
                  <div class="inner">
                    <h3>Exportar <br>stock<sup style="font-size: 20px"></sup></h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list-ul"></i>
                  </div>
                </div>
            </div>
        </div>
    </div>
<br>
<style type="text/css">


</style>
<!--   ____________TABLA VISTA GRANDE PARA PC______________________       -->
<div id="card" class="pc">
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
<!-- ____________________FIN DE LA TABLA VISTA GRANDE PARA PC_____________________________________ -->
<!-- ____________________Inicio de la tablas para celulares_____________________________________ -->
<div id="" class="cell relative">
  <div class="col-xs-12 relative">
    <div class="burbuja" style="border: 1px solid grey; box-shadow: 2px 2px 4px 2px grey">Haz click en algun producto de la tabla para mostrar detalles</div>
  </div>
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Stock</th>
        <th>Detalle</th>        
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
        @if($producto->stock_minimo >= $producto->stock)
            <tr data-idprod="{{$producto->id}}" class="seleccion_producto" data-toggle="collapse" data-target="#{{$producto->codigo}}">
            <td data-label="Codigo">{{ $producto->codigo }}</td>
            <td data-label="Producto">{{ $producto->producto }}</td>
            <td data-label="Stock">{{ $producto->stock }}</td> 
            <td><i class="icono fa fa-arrow-down" data-idflecha="{{$producto->id}}"></i></td>
          </tr>
          <!-- ____________________TABLA QUE SE EXPANDE Y CONTRAE_____________________________________ -->
               <tr id="{{$producto->codigo}}" class="collapse p-0">
                  <td colspan="5" class="padding-0">                   
                     <div id="card">     
                        <table class="table table-striped table-bordered dt-responsive nowrap">
                             <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Producto</th>
                                  <th>Stock</th>                     
                                </tr>
                             </thead>
                            <tbody class="tbody_detalle">
                                 <tr data-idProdChico="{{$producto->codigo}}" class="color_tabla">                    
                                     <td data-label="Stock min.">{{ $producto->stock_minimo }}</td>
                                     <td data-label="Precio venta">${{ $producto->precio_venta }}</td>
                                     <td data-label="Precio compra">${{ $producto->precio_compra }}</td>
                                     <td data-label="Marca">{{ $producto->marca->marca }}</td>
                                     <td data-label="Categoría">{{ $producto->categoria_producto->categoria }}</td>
                                     <td data-label="Proveedor">{{ $producto->proveedor->nombre }}</td>
                                     <td class="columna-botones">
                                          <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-tabla <button>  </button>-editar float-left" value="{{$producto->id}}">
                                          <i class="fa fa-edit"></i>
                                        </a>    
                                        <button data-href="{{url('/productos/'.$producto->id.'/destroy')}}" class="btn btn-danger <button>  </button>-tabla btn-editar float-right btn_eliminar" data-nombre="{{$producto->producto}}"  >
                                          <span class="glyphicon glyphicon-trash"></span>
                                        </button>     
                                     </td>     
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </td>    
          </tr>
          <!-- ____________________FIN DE LA TABLA QUE SE EXPANDE Y CONTRAE_____________________________________ -->
          </tr>
        @else <!-- __________ No tiene el alert de letras rojas cuando tenes poco stock -->
          <tr data-idprod="{{$producto->id}}" class="seleccion_producto" data-toggle="collapse" data-target="#{{$producto->codigo}}">
            <td data-label="Codigo">{{ $producto->codigo }}</td>
            <td data-label="Producto">{{ $producto->producto }}</td>
            <td data-label="Stock">{{ $producto->stock }}</td> 
            <td><i class="icono fa fa-arrow-down" data-idflecha="{{$producto->id}}"></i></td>
          </tr>
          <!-- ____________________TABLA QUE SE EXPANDE Y CONTRAE_____________________________________ -->
               <tr id="{{$producto->codigo}}" class="collapse p-0">
                  <td colspan="5" class="padding-0">                   
                     <div id="card">     
                        <table class="table table-striped table-bordered dt-responsive nowrap">
                             <thead>
                                <tr>
                                  <th>Codigo</th>
                                  <th>Producto</th>
                                  <th>Stock</th>                     
                                </tr>
                             </thead>
                            <tbody class="tbody_detalle">
                                 <tr data-idProdChico="{{$producto->codigo}}" class="color_tabla">                    
                                     <td data-label="Stock min.">{{ $producto->stock_minimo }}</td>
                                     <td data-label="Precio venta">${{ $producto->precio_venta }}</td>
                                     <td data-label="Precio compra">${{ $producto->precio_compra }}</td>
                                     <td data-label="Marca">{{ $producto->marca->marca }}</td>
                                     <td data-label="Categoría">{{ $producto->categoria_producto->categoria }}</td>
                                     <td data-label="Proveedor">{{ $producto->proveedor->nombre }}</td>
                                     <td class="columna-botones">
                                          <a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-tabla <button>  </button>-editar float-left" value="{{$producto->id}}">
                                          <i class="fa fa-edit"></i>
                                        </a>    
                                        <button data-href="{{url('/productos/'.$producto->id.'/destroy')}}" class="btn btn-danger <button>  </button>-tabla btn-editar float-right btn_eliminar" data-nombre="{{$producto->producto}}"  >
                                          <span class="glyphicon glyphicon-trash"></span>
                                        </button>     
                                     </td>     
                                </tr>
                           </tbody>
                        </table>
                    </div>
                </td>    
          </tr>
          <!-- ____________________FIN DE LA TABLA QUE SE EXPANDE Y CONTRAE_____________________________________ -->
        @endif
      @endforeach
    </tbody>
  </table>
</div>
<!-- ____________________FIN DE LA TABLA PARA CELULARES_____________________________________ -->
@include('layouts.modal_eliminar')
@include('layouts.dialogs.stock')
@include('layouts.dialogs.precios')
@endsection
@section('js')
  <script type="text/javascript">
    function abrir_precios(){
      $('.modal-precios').modal('toggle');
    }
    function abrir_stock(){
      $('.modal-stock').modal('toggle');
    }

    //cambio la flechita de poscicion al hacer click en la tabla para celulares
    var id;
    jQuery(document).on("click", ".seleccion_producto", function(){
      id=jQuery(this).data("idprod");
  
       if(jQuery('i[data-idflecha^="'+id+'"]').hasClass("fa-arrow-down")){   
        
         jQuery('i[data-idflecha^="'+id+'"]').addClass("fa-arrow-up");
         jQuery('i[data-idflecha^="'+id+'"]').removeClass("fa-arrow-down");
         jQuery('i[data-idflecha^="'+id+'"]').css("color", "red");
      }else{
        jQuery('i[data-idflecha^="'+id+'"]').addClass("fa-arrow-down");
         jQuery('i[data-idflecha^="'+id+'"]').removeClass("fa-arrow-up");
          jQuery('i[data-idflecha^="'+id+'"]').css("color", "green");
      }
   
    });
    //-------------------------------------------------------------------------
    //--------- saco la burbuja al hacer algun click---------------------------
    jQuery(document).on("click", function(){
        jQuery(".burbuja").css("display", "none");
    });

    //--------------------------------------------------------------------------
  </script>
@endsection