@extends('layouts.panel_form')
@section('contenido_panel')
<form action="{{ route('prueba.store') }}" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
    {{csrf_field()}}
	<input type="file" name="archivo" id="archivo">
	<input type="submit" name="">
</form>
@endsection