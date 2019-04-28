@extends('layouts.main')
@section('contenido')

	<div class="x_panel tile text-center p-botones">
        <div class="x_title titulo_verde sombra_gris">
	            <h2 class="text-center float-none">Nuevos movimientos</h2>
	            <div class="clearfix"></div>
	            
        </div>
        <div class="x_content">
			<div class="col-md-12 col-sm-12 col-xs-12 p-botones solo_pc sombra_gris">		
				<div class="row panel-buttons contenedor_botones">
					<div class="col-md-3 col-xs-6 text-center p-botones">
           			<!-- small box -->
           				<a href="{{ route('facturas.create') }}">           					
			            <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
			              <div class="inner">
			                <h3>Nuevo <br> comprobante<sup style="font-size: 20px"></sup></h3>

			              
			              </div>
			              <div class="icon">
			                <i class="fa fa-pencil"></i>
			              </div>
			            </div>
           				</a>
		         	</div>
		         	<div class="col-md-3 col-xs-6 text-center p-botones">
           			<!-- small box -->
           				<a href="{{ route('clientes.index') }}">           					
			            <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
			              <div class="inner">
			                <h3>Ver <br>clientes<sup style="font-size: 20px"></sup></h3>

			             
			              </div>
			              <div class="icon">
			                <i class="fa fa-users"></i>
			              </div>
			            </div>
           				</a>
		         	</div>
		         	<div class="col-md-3 col-xs-6 text-center p-botones">
           			<!-- small box -->
           				<a href="{{ route('ventas.index') }}">           					
			            <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
			              <div class="inner">
			                <h3>Ver <br>ventas<sup style="font-size: 20px"></sup></h3>

			              
			              </div>
			              <div class="icon">
			                <i class="fa fa-dollar"></i>
			              </div>
			            </div>
           				</a>
		         	</div>
		         	<div class="col-md-3 col-xs-6 text-center p-botones">
           			<!-- small box -->
           				<a href="">           					
			            <div class="small-box fondo_celeste botones_cuadrados solo_pc_sombra_gris">
			              <div class="inner">
			                <h3>Ver <br>proveedores<sup style="font-size: 20px"></sup></h3>

			              
			              </div>
			              <div class="icon">
			                <i class="fa fa-truck"></i>
			              </div>
			            </div>
           				</a>
		         	</div>
							         		
				</div>
			</div>
		</div>
	</div>
	@include('flash::message')
    <div class="x_panel tile p-botones">
        <div class="x_title titulo_naranja sombra_gris">
          <h2 class="text-center float-none">Últimos movimientos</h2>
          <div class="clearfix"></div>
        </div>
        <div id="card" class="x_content">
          	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap tabla-movimientos" cellspacing="0" width="100%">
			  <thead>
			    <tr>
			      <th>Fecha</th>
			      <th>Movimiento</th>
			      <th>Descripcion</th>
			      <th>Cliente</th>
			      <th>Total</th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($movimientos as $movimiento)
				   	<tr>
				   	@if($movimiento->movimiento == "VENTA")
				        <td data-label="Fecha">{{ $movimiento->venta->fecha }}</td>
					   	<td data-label="Movimiento"><i class="green fa fa-arrow-up"></i>{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion">{{$movimiento->venta->tipo_comprobante.str_pad($movimiento->venta->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
					   	<td data-label="Cliente">{{ $movimiento->venta->cliente->nombre }}</td>
					   	<td data-label="Total"><i class="green fa fa-arrow-up"></i>${{ $movimiento->venta->total }}</td>
					   	<td><a href="{{url('facturas/'.$movimiento->venta->tipo_comprobante.str_pad($movimiento->venta->num_comprobante,8,"0",STR_PAD_LEFT) )}}" target="_blank" style="margin-top:2.5px;" class="btn btn-warning btn-tabla btn-editar float-left">PDF</a></td>
				   	@elseif($movimiento->movimiento == "COMPRA")
				        <td data-label="Fecha">{{ $movimiento->compra->fecha}}</td>
					   	<td data-label="Movimiento"><i class="red fa fa-arrow-down"></i>{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion">{{$movimiento->compra->tipo_comprobante.str_pad($movimiento->compra->num_comprobante,8,"0",STR_PAD_LEFT) }}</td>
					   	<td data-label="Cliente">{{ $movimiento->compra->proveedor->nombre }}</td>
					   	<td data-label="Total"><i class="red fa fa-arrow-down"></i>${{ $movimiento->compra->total }}</td>
					   	<td>-</td>						   	
				   	@elseif($movimiento->movimiento == "GASTO")
				        <td data-label="Fecha">{{ $movimiento->gasto->fecha }}</td>
					   	<td data-label="Movimiento"><i class="red fa fa-arrow-down"></i>{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion">{{$movimiento->gasto->descripcion}}</td>
					   	<td data-label="Cliente"></td>
					   	<td data-label="Total"><i class="red fa fa-arrow-down"></i>${{ $movimiento->gasto->total }}</td>
					   	<td>-</td>
				   	@elseif($movimiento->movimiento == "PAGO")
				        <td data-label="Fecha">{{ $movimiento->pago->fecha }}</td>
					   	<td data-label="Movimiento"><i class="red fa fa-arrow-down"></i>{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion"></td>
					   	<td data-label="Cliente">{{$movimiento->pago->proveedor->nombre}}</td>
					   	<td data-label="Total"><i class="red fa fa-arrow-down"></i>${{ $movimiento->pago->pago }}</td>
					   	<td>-</td>
				   	@elseif($movimiento->movimiento == "COBRO CUENTA CORRIENTE")
				        <td data-label="Fecha">{{ $movimiento->resumen_cuenta->fecha }}</td>
					   	<td data-label="Movimiento"><i class="green fa fa-arrow-up"></i>{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion">{{'RC'.str_pad($movimiento->resumen_cuenta->id,8,"0",STR_PAD_LEFT) }}</td>
					   	<td data-label="Cliente">{{$movimiento->resumen_cuenta->cliente->nombre}}</td>
					   	<td data-label="Total"><i class="green fa fa-arrow-up"></i>${{ $movimiento->resumen_cuenta->total }}</td>
					   	<td><a href="{{url('facturas/'. 'RC'.str_pad($movimiento->resumen_cuenta->id,8,"0",STR_PAD_LEFT) )}}" target="_blank" style="margin-top:2.5px;" class="btn btn-warning btn-tabla btn-editar">PDF</a></td>
				   	@elseif($movimiento->movimiento == "SALDO INICIAL")
				   		<td data-label="Fecha">-</td>
					   	<td data-label="Movimiento">{{ $movimiento->movimiento }}</td>
					   	<td data-label="Descripcion">-</td>
					   	<td data-label="Cliente">-</td>
					   	<td data-label="Total">$0</td>
					   	<td>-</td>
				   	@endif
				   	</tr>
			   	@endforeach
			  </tbody>
			</table>
			{{$movimientos->links()}}
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

