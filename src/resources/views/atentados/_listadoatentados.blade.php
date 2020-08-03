	<div class="panel panel-default">
	<div class="panel-heading">
		Listado de Atentados de Login
	</div>
	<div class="panel-body">
		<table class="table" cellspacing="0" width="100%">
			<thead>
            <tr>
                <th>Id</th>
                <th>FechaMaquina</th>
                <th>FechaVence</th>
                <th>FechaVenceNueva</th>
                <th>Exitoso</th>
                <th>Creado</th>
            </tr>
        </thead>
        <tbody>
	        @forelse($listadoAtentados as $atentado)
				<tr>
	                <td>{{$atentado->id}}</td>
	                <td>
	                	<div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{$atentado->locationhref}}" title="Host URL">
	                		{{$atentado->FechaMaquina}}
	                	</div>
	                </td>
	                <td>
						<div data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{$atentado->HashId}}" title="HashId">
	                		{{$atentado->FechaVence}}
	                	</div>
	                </td>
	                <td>{{$atentado->FechaVenceNueva}}</td>
	                <td>
	                	@if($atentado->Exitoso)
	                		<span>Si</span>
	                	@else
	                		<span>No</span>
	                	@endif
	                </td>
	                <td>{{$atentado->created_at}}</td>
	            </tr>
			@empty
				<tr>
	                <td colspan="6" style="text-align: center;">
	                	No Hay atentados en la lista...
	                </td>
	            </tr>
			@endforelse
        </tbody>
    </table>
	</div>
</div>