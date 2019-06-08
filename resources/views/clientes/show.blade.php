@extends('layouts.main')
@section('title', 'Agregar cliente - PampaDev')
@section('contenido')
<div class="col-xs-12 p-botones titulo_verde solo_pc_titulo_verde sombra_gris solo_pc_sombra_gris">
  <h2 class="text-center">Datos de cliente</h2>
</div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel sombra_gris solo_pc_sombra_gris">
        <div class="x_title">
          <h4 class="text-center">Informacion personal</h4>
        </div>
        <div class="x_content bordes_imput">
            <form action="{{ route('clientes.store') }}" method="POST" class="form-horizontal form-label-left bordes_imput">
             {{ csrf_field() }}
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">:</span>
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{$cliente->nombre}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuit">CUIT/DNI <span class="required">:</span>
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="cuit" name="cuit" required="required" class="form-control col-md-7 col-xs-12" value="{{$cliente->cuit}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="direccion" name="direccion" class="form-control col-md-7 col-xs-12" value="{{$cliente->direccion}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localidad">Localidad:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="localidad" name="localidad" class="form-control col-md-7 col-xs-12" value="{{$cliente->localidad}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12" value="{{$cliente->provincia}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" value="{{$cliente->telefono}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12" value="{{$cliente->email}}" readonly="">
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resp_iva">Resp. IVA:
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text" id="resp_iva" name="resp_iva" class="form-control col-md-7 col-xs-12" value="{{$cliente->responsabilidades_iva->nombre}}" readonly="">
               </div>
             </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel sombra_gris solo_pc_sombra_gris p-botones">
        <div class="x_title">
          <h4 class="text-center">Historial de compras</h4>
        </div>
        <div class="x_content p-botones">
          <!--  ____________TABLA QUE SE VE GRANDE SOLO EN PC ___________________________________  -->
              <div class="pc">                   
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Comprobante</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($clientes as $cliente)
                        @foreach ($cliente->detalle as $client)
                          <tr>
                            <td data-label="Fecha">{{ $cliente->fecha }}</td>
                            <td data-label="Comprobante">{{ $cliente->tipo_comprobante.str_pad($cliente->num_comprobante, 8, "0", STR_PAD_LEFT) }}</td>
                            <td data-label="Detalle">{{ $client->descripcion }}</td>
                            <td data-label="Cantidad">{{ $client->cantidad }}</td>
                            <td data-label="Precio">${{ $client->precio}}</td>
                            <td data-label="Total">${{ $client->total }}</td>
                          </tr>
                        @endforeach
                      @endforeach
                    </tbody>
                  </table>
             </div>
    <!--  ____________FIN DE LA TABLA SOLO EN PC ___________________________________  -->
<!--  ____________ INICIO TABLA QUE SE VE SOLO EN CELULARES ___________________________________  -->
            <div class="cell p-botones">  
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead class="borde-tabla">
                      <tr>
                        <th>Fecha</th>                        
                        <th>Descripcion</th>                       
                        <th>Total</th>
                        <th>Ver</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($clientes as $cliente)
                        @foreach ($cliente->detalle as $client)
                          <tr data-toggle="collapse" data-target="#{{$cliente->id}}cell" class="tabla_cel borde-tabla" data-idcliente="{{$cliente->id}}">
                            <td data-label="Fecha">{{ $cliente->fecha }}</td>
                            <td data-label="Detalle">{{ $client->descripcion }}</td>
                            <td data-label="Total">${{ $client->total }}</td>
                            <td><i class="icono fa fa-arrow-down" data-idflecha="{{$cliente->id}}"></i></td>  
                          </tr>
                          <tr id="{{$cliente->id}}cell" class="collapse"> <!--  aca comienza la tabla chiquita que se expande -->
                            <td colspan="5" class="padding-0">
                              <div class="cell" id="card"> 
                                   <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="background-color:transparent">
                                     <thead>
                                       <tr>
                                         <th>Fecha</th>
                                         <th>Comprobante</th>
                                         <th>Descripcion</th>
                                         <th>Cantidad</th>
                                         <th>Precio</th>
                                         <th>Total</th>
                                       </tr>
                                     </thead>
                                     <tbody>    
                                           <tr>
                                             <td data-label="Fecha">{{ $cliente->fecha }}</td>
                                             <td data-label="Comprobante">{{ $cliente->tipo_comprobante.str_pad($cliente->num_comprobante, 8, "0", STR_PAD_LEFT) }}</td>
                                             <td data-label="Detalle">{{ $client->descripcion }}</td>
                                             <td data-label="Cantidad">{{ $client->cantidad }}</td>
                                             <td data-label="Precio">${{ $client->precio}}</td>
                                             <td data-label="Total">${{ $client->total }}</td>
                                           </tr>
                                     </tbody>
                                   </table>
                              </div>
                            </td>
                          </tr><!-- aca termina la tabla chiquita que se expande -->
                        @endforeach
                      @endforeach
                    </tbody>
                  </table>
             </div>
    <!--  _________________FIN DE LA TABLA QUE SE VE SOLO EN CELULARES  ___________________________________  -->
              <div class="col-xs-12">
                <h4 style="padding:20px;" class="text-right"><strong>Total comprado:</strong><strong class="letras_verdes"> ${{$total}}</strong></h4>
              </div>
        </div>
      </div>
    </div>
  </div>

    
  </form>
@endsection
@section('js')
    <script type="text/javascript">


    //cambio la flechita de poscicion al hacer click en la tabla para celulares
    var id;
    jQuery(document).on("click", ".tabla_cel", function(){
      id=jQuery(this).data("idcliente");
  
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