@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3>Modificar Cliente</h3>
			<div class="panel panel-default">
				<div class="panel-heading">
					Crear Nuevo Cliente
				</div>
				<div class="panel-body">
				
					{!! Form::model($cliente , [ 'method' => 'PATCH', 'action' => ['ClientesController@update', $cliente -> id]]) !!}

						<div class="col-md-6">

							@include('errors.formerrors')

							@include('clientes._formulario', ['submitButton' => 'Modificar']) 

						</div>

					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection