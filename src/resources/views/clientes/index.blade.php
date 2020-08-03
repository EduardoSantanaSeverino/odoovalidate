@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<h3>Listado de clientes</h3>
			<div class="panel panel-default">
				<div class="panel-heading">
					Listado de clientes
				</div>
				<div class="panel-body">
					<table class="table" cellspacing="0" width="100%">
						<thead>
			            <tr>
			                <th>Id</th>
			                <th>Nombre</th>
			                <th>Email</th>
			                <th>Telefono</th>
			                <th>Fecha Vence</th>
			                <th></th>
			            </tr>
			        </thead>
			        <tbody>
				        @forelse($listadoclientes as $cliente)
							<tr>
				                <td>
					                <a href="{{action('ClientesController@show',[$cliente->id])}}">
					                	{{$cliente->id}} 
					                </a>
				                </td>
				                <td>{{$cliente->Nombre}}</td>
				                <td>{{$cliente->Email}}</td>
				                <td>{{$cliente->Telefono}}</td>
				                <td>{{$cliente->FechaVence}}</td>
				                <td> 

				                <div class="dropdown">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    Actions
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <li><a href="{{action('ClientesController@show',[$cliente->id])}}"> Detalle </a></li>
								    <li role="separator" class="divider"></li>
								    <li><a href="{{action('ClientesController@edit',[$cliente->id])}}"> Editar </a></li>
								    <li role="separator" class="divider"></li>
								    <li style="text-align: center;"> 
								    	@include('clientes._btneliminar', ['submitButton' => 'Eliminar'])  
								    </li>
								  </ul>
								</div>
				                </td>
				            </tr>
						@empty
							<tr>
				                <td colspan="5" style="text-align: center;">
				                	No Hay clientes en la lista...
				                </td>
				            </tr>
						@endforelse
			        </tbody>
			    </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection