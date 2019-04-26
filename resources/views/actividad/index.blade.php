@extends('layouts.head')

	<h1 class="text-center" style="margin-top: 30px;margin-bottom: 30px;">Actividad Pampadev</h1>

	<br>
	<div id="card" class="col-lg-11">
	  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	    <thead>
	      <tr>
	        <th>Usuario</th>
	        <th>Tipo Usr</th>
	        <th>Actividad</th>
	        <th>Fecha</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	      	@foreach($actividades as $actividad)
	      <tr>
	        <td data-label="Dato">@if(!empty($actividad->empresa->nombre_fantasia)) {{$actividad->empresa->nombre_fantasia}} @else {{$actividad->contador->nombre}} @endif</td>
	        <td data-label="Dato">{{$actividad->tipo_usuario}}</td>
	        <td data-label="Dato">{{$actividad->actividad}}</td>
	        <td data-label="Dato">{{$actividad->updated_at}}</td>
	       
	      </tr>
	        @endforeach
	    </tbody>
	  </table>
	  <div class="pt-2 pl-5 pr-5 pb-2 col-lg-2 text-center m-auto">
          
         
        </div>
	</div>
	

