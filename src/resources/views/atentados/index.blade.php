@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<h3>Listado de Atentados de Login</h3>
			@include('atentados._listadoatentados', [ 'listadoAtentados' => $listadoAtentados])
		</div>
	</div>
</div>
@endsection