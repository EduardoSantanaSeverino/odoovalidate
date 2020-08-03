@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Este es el Home </h1>
			<p>Este es el contenido que esta sin acceso a base de datos.</p>
			<div class="panel panel-default">
				<div class="panel-heading">
					Estas en la vista {{$vista}} y el controlador {{$controlador}}
				</div>
				<div class="panel-body">
					<p>Condicional</p>
					@if($condicion)
						<p>	Esto es verdadero siiiiiiiiiiiiiiii </p>
					@else
						<p>	Esto es falso nooooooooooooooooooooooooo </p>
					@endif
					<p>Bucle Foreach</p>
					@foreach($personas as $persona)
						<p>{{$persona}}</p>
					@endforeach
					<p>Bucle For Else</p>
					@forelse($personas as $persona)
						<p>{{$persona}}</p>
					@empty
						<p>No hay personas en la lista...</p>
					@endforelse
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection