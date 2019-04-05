@extends('layouts.main')
@section('title', 'Listado de compras - PampaDev')
@section('contenido')
<h2 class="text-center">Listado de compras</h2>
@include('flash::message')
<div id="card" class="pc">  
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Proveedor</th>
        <th>Comprobante</th>
        <th>Total</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($compras as $compra)
  	   	<tr>
  	   		<td data-label="Fecha">{{ $compra->fecha }}</td>
  	   		<td data-label="Proveedor">{{ $compra->proveedor->nombre }}</td>
          <td data-label="Comprobante">{{ $compra->tipo_comprobante.str_pad($compra->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
  	   		<td data-label="Toral">${{ $compra->total }}</td>
  	   		<td data-label="Ver" > <button type="button" class="boton boton-confirmar" data-toggle="collapse" data-target="#{{$compra->id}}">Detalle</button></td>
        </tr>
        <tr  id="{{$compra->id}}" class="collapse">
          <td colspan="5">

            <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th >Detalles</th>
                  <th >Cantidad</th>
                  <th >Importe</th>
                  <th >Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($compra->detalle_compra as $detalle)
                <tr>
                  <td data-label="Detalle">{{$detalle->producto->producto}}</td>
                  <td data-label="Cantidad">{{$detalle->cantidad}}</td>
                  <td data-label="Importe">${{$detalle->precio}}</td>
                  <td data-label="Total">${{$detalle->total}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </td>
        </tr>
     	@endforeach
    </tbody>
  </table>
</div>
<!-- ______________________TABLA PARA CELULARES________________ -->
<div id="" class="cell">  
  <div class="burbuja">Haz click en algun producto de la tabla para mostrar detalles</div>
  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Proveedor</th>        
        <th>Total</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
      @foreach($compras as $compra)
        <tr data-toggle="collapse" data-target="#{{$compra->id}}cell" data-idcompra="{{$compra->id}}" class="tabla_cel">
          <td data-label="Fecha">{{ $compra->fecha }}</td>
          <td data-label="Proveedor">{{ $compra->proveedor->nombre }}</td>
          <td data-label="Toral">${{ $compra->total }}</td>
          <td><i class="icono fa fa-arrow-down" data-idflecha="{{$compra->id}}"></i></td>
        </tr>
          <tr  id="{{$compra->id}}cell" class="collapse">
            <td colspan="5">
               <div id="card">              
                 <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                   <thead>
                     <tr>
                       <th >Detalles</th>
                       <th >Cantidad</th>
                       <th >Importe</th>
                       <th >Total</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($compra->detalle_compra as $detalle)
                     <tr class="color_tabla">                       
                       <td data-label="Comprobante">{{ $compra->tipo_comprobante.str_pad($compra->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
                       <td data-label="Detalle">{{$detalle->producto->producto}}</td>
                       <td data-label="Cantidad">{{$detalle->cantidad}}</td>
                       <td data-label="Importe">${{$detalle->precio}}</td>
                       <td data-label="Total">${{$detalle->total}}</td>
                     </tr>
                     @endforeach
                   </tbody>
                 </table>
              </div>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
@section('js')
    <script type="text/javascript">
   //cambio la flechita de poscicion al hacer click en la tabla para celulares
    var id;
    jQuery(document).on("click", ".tabla_cel", function(){
      id=jQuery(this).data("idcompra");
  
      setTimeout("cambiar_flechita(id)",100);      
   
    });
    //-------------------------------------------------------------------------
    function cambiar_flechita(id){
         if(jQuery('i[data-idflecha^="'+id+'"]').hasClass("fa-arrow-down")){   
            
             jQuery('i[data-idflecha^="'+id+'"]').addClass("fa-arrow-up");
             jQuery('i[data-idflecha^="'+id+'"]').removeClass("fa-arrow-down");
             jQuery('i[data-idflecha^="'+id+'"]').css("color", "red");
          }else{
            jQuery('i[data-idflecha^="'+id+'"]').addClass("fa-arrow-down");
             jQuery('i[data-idflecha^="'+id+'"]').removeClass("fa-arrow-up");
              jQuery('i[data-idflecha^="'+id+'"]').css("color", "green");
          }
    }

    //--------- saco la burbuja al hacer algun click---------------------------
    jQuery(document).on("click", function(){
        jQuery(".burbuja").css("display", "none");
    });

    //--------------------------------------------------------------------------

    </script>
@endsection