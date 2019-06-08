@extends('layouts.main')
@section('title', 'Listado de ventas - PampaDev')
@section('contenido')
@include('flash::message')
<style type="text/css">



</style>
<div id="card" class="x_content pc pc-p-botones">
  <div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Listado de ventas</h2> 
  </div>
  <table class="table table-bordered table-striped  dt-responsive nowrap tabla-movimientos solo_pc_sombra_gris" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="text-center">Fecha</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Punto venta</th>
        <th class="text-center">Número</th>
        <th class="text-center">Cliente</th>
        <th class="text-center">DNI</th>
        <th class="text-center">Subtotal</th>
        <th class="text-center">IVA</th>
        <th class="text-center">Total</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($ventas as $venta)
  	   	<tr>
          <td data-label="Fecha">{{ $venta->fecha }}</td>
          <td data-label="Tipo">{{ $venta->codigo_comprobante($venta->tipo_comprobante) }} </td>
          <td data-label="Punto venta">{{ str_pad(Auth::user()->fiscal->punto_venta,4,"0",STR_PAD_LEFT) }}</td>
          <td data-label="Número">{{str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
          <td data-label="Cliente">{{ $venta->cliente->nombre }}</td>
          <td data-label="DNI">{{ $venta->cliente->cuit }}</td>
          <td data-label="Subtotal">{{ $venta->comprobante->importe_neto }}</td>
          <td data-label="IVA">{{ $venta->total -$venta->comprobante->importe_neto }}</td>
          <td data-label="Total">{{ $venta->total }}</td>
  	   		<td> 
            <button type="button" class="boton boton-confirmar" data-toggle="collapse" data-target="#{{$venta->id}}">Detalle</button>
            <a href="{{url('facturas/'. $venta->tipo_comprobante.str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) )}}" target="_blank" style="margin-top:2.5px;" class="btn btn-warning btn-tabla btn-editar float-left">PDF</a></td>
        </tr>
        <tr  id="{{$venta->id}}" class="collapse">
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
                @foreach($venta->detalle as $detalle)
                <tr>
                  <td data-label="Detalles">{{$detalle->descripcion}}</td>
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
<div id="" class="cell p-botones">
  <div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
    <h2 class="text-center">Listado de ventas</h2>
  </div>
  <div class="relative col-xs-12">
      <div class="burbuja cell">Haz click en algun producto de la tabla para mostrar detalles</div>
  </div>
  <table class="table table-striped dt-responsive nowrap tabla-movimientos sombra_gris" cellspacing="0" width="100%">
    <thead class="borde-tabla">
      <tr>
        <th class="text-center">Fecha</th>       
        <th class="text-center">Cliente</th>        
        <th class="text-center">Total</th>
        <th>Detalle</th>
      </tr>
    </thead>
    <tbody class="size-14">
      @foreach($ventas as $venta)
        <!-- el DATA-TARGET tiene las letras cell al lado para que el id no sea igual al de la tabla
                         para pantallas grandes y no se pise el colapse-->
        <tr data-toggle="collapse" data-target="#{{$venta->id}}cell" class="tabla_cel borde-tabla" data-idventa="{{$venta->id}}">
          <td data-label="Fecha">{{ $venta->fecha }}</td>          
          <td data-label="Cliente">{{ $venta->cliente->nombre }}</td>          
          <td data-label="Total">{{ $venta->total }}</td>  
          <td><i class="icono fa fa-arrow-down" data-idflecha="{{$venta->id}}"></i></td>        
        </tr>
        <tr id="{{$venta->id}}cell" class="collapse">
          <td colspan="5" class="padding-0">
            <div id="card">              
               <table class="table table-striped table-bordered dt-responsive nowrap" style="background-color:transparent">
                 <thead>
                   <tr>
                     <th >Detalles</th>
                     <th >Cantidad</th>
                     <th >Importe</th>
                     <th >Total</th>
                   </tr>
                 </thead>
                 <tbody>
                    <tr class="color_tabla">                      
                     <td data-label="Tipo">{{ $venta->codigo_comprobante($venta->tipo_comprobante) }} </td>
                     <td data-label="Punto venta">{{ str_pad(Auth::user()->fiscal->punto_venta,4,"0",STR_PAD_LEFT) }}</td>
                     <td data-label="Número">{{str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
                     <td data-label="DNI">{{ $venta->cliente->cuit }}</td>
                     <td data-label="Subtotal">{{ $venta->comprobante->importe_neto }}</td>
                     <td data-label="IVA">{{ $venta->total -$venta->comprobante->importe_neto }}</td>
                     <td>             
                       <a href="{{url('facturas/'. $venta->tipo_comprobante.str_pad($venta->num_comprobante,8,"0",STR_PAD_LEFT) )}}" target="_blank" style="margin-top:2.5px;" class="btn btn-warning btn-tabla btn-editar float-left">PDF</a>
                     </td>
                    </tr>
                   @foreach($venta->detalle as $detalle)
                   <tr class="color_tabla" style="margin: 15px 25px 5px 22px">
                     <td data-label="Detalles">{{$detalle->descripcion}}</td>
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
      id=jQuery(this).data("idventa");
  
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