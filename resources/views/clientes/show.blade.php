@extends('layouts.panel_form')
@section('title', 'Agregar cliente - PampaDev')
@section('titulo_panel')
  <h3 class="text-center">Datos cliente</h3>
@endsection
@section('contenido_panel')
  <form action="{{ route('clientes.store') }}" method="POST" class="form-horizontal form-label-left">
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

    <h3 style="padding:25px;text-decoration: underline;" class="text-center">Historial de compras</h3>
    <h4 style="padding:20px;" ><strong>Total comprado:</strong> ${{$total}}</h4>
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
    
  </form>
@endsection