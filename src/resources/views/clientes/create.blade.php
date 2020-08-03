@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3>Crear Nuevo Cliente</h3>
			<div class="panel panel-default">
				<div class="panel-heading">
					Crear Nuevo Cliente
				</div>
				<div class="panel-body">
				
					{!! Form::open(['url' => 'clientes']) !!}

						<div class="col-md-6">

							@include('errors.formerrors')

							@include('clientes._formulario', ['submitButton' => 'Guardar']) 

						</div>

					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection