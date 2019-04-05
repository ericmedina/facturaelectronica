@extends('layouts.main')
@section('title', 'Listado de productos - PampaDev')
@section('contenido')
<h2 class="text-center">Listado de productos</h2>
@include('flash::message')
<form action="{{url('/productos')}}" method="get" accept-charset="utf-8" class="form-inline">
	<div class="col-md-4 col-sm-6 col-xs-12 form-item">
      <label class="col-md-3 hidden-xs label-control" for="buscar">Buscar:</label>
      <div class=" col-md-9 col-md-offset-0 col-xs-12 input-group">
        <input type="text" name="buscar" class="form-control" id="buscar" placeholder="Buscar producto">
      </div>
    </div>
  	<div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-0">
      <button type="submit" style="margin-top: 7px;" class="btn btn-success col-xs-12">Buscar</button>  	
  	</div>
    <div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-2">
      <button type="button" id="exportar_precios" style="margin-top: 7px;" onclick="abrir_precios()" class="btn btn-success col-xs-12">Exportar precios</button>    
    </div>
    <div class="col-md-2 col-xs-8 col-xs-offset-2 col-md-offset-0">
      <button type="button" id="exportar_precios" style="margin-top: 7px;" onclick="abrir_stock()" class="btn btn-success col-xs-12">Exportar stock</button>    
    </div>
</form>
<br>
<style type="text/css">

     .pc{
            display: block;
          }
          .cell{
              display: none;
          }
    @media screen and (max-width: 600px) {
          .pc{
            display: none;
          }
          .cell{
              display: block;
              cursor:pointer;
          }
          .color_tabla{
            background-color: #f9f9f9!important;
            margin-bottom: 0px!important;

          }
          .icono{
            color: green;
            padding-left: 36%;
          }
          .padding-0{
            padding:0px!important;
          }
          .burbuja {
            background: #00b5ed; /* el color de fondo */
            color: #FFF; /* el color del texto */
            font-family: Arial, Sans-serif;
            font-size: 12px;
            padding: 20px 10px 10px 10px;
            text-align: center;
            width: 200px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            float: right;
          }
          .burbuja:after {
            border: solid 10px transparent;
            border-top-color: #00b5ed;  /* igual al color de fondo */
            border-bottom: 0;
            bottom: -20px;  /* igual al borde + el padding-bottom de la definición anterior */
            content: " ";
            display: block;
            height: 0;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 0;
          }
          .collapsing {
               -webkit-transition: none;
               transition: none;
               visibility: hidden;
               display: none;
          }
          
          .collapse.show {
                 -webkit-transition: none;
                 transition: none;
                 visibility: visible;
                 display: block;
          }


    }

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
<div class="burbuja">Haz click en algun producto de la tabla para mostrar detalles</div>
<div id="" class="cell">
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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