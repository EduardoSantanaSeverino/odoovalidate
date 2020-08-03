@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<h3>Muestra Cliente {{$cliente->Nombre}}</h3>
			<div class="panel panel-default">
				<div class="panel-heading">
					Muestra Cliente {{$cliente->Nombre}}
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
					  <div class="form-group">
					    <label class="col-sm-2 control-label">cliente ID</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->id}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Nombre</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->Nombre}}</p>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="col-sm-2 control-label">Fecha Vence</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->FechaVence}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Telefono</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->Telefono}}</p>
					    </div>
					  </div>
					  <div class="form-group" >
					    <label class="col-sm-2 control-label">Hash Id</label>
					    <div class="col-sm-10">
					      <p class="form-control-static" style="word-wrap: break-word;">{{$cliente->HashId}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->Email}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Host URL</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->HostURL}}</p>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Hash Id 2</label>
					    <div class="col-sm-10">
					      <p class="form-control-static" style="word-wrap: break-word;">{{$cliente->HashId2}}</p>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="col-sm-2 control-label">Creado</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->created_at}}</p>
					    </div>
					  </div>
					   <div class="form-group">
					    <label class="col-sm-2 control-label">Modificado</label>
					    <div class="col-sm-10">
					      <p class="form-control-static">{{$cliente->updated_at}}</p>
					    </div>
					  </div>
					</form>
				</div>
			</div>
			@include('atentados._listadoatentados', [ 'listadoAtentados' => $listadoAtentados])
		</div>
	</div>
</div>
@endsection