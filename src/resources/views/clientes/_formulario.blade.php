<div class="form-group">
	{!! Form::label('Nombre','Nombre') !!}
	{!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('FechaVence','Fecha Vence') !!}
	{!! Form::date('FechaVence', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Telefono','Telefono') !!}
	{!! Form::text('Telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('HashId','HashId') !!}
	{!! Form::text('HashId', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Host URL','Host URL') !!}
	{!! Form::text('HostURL', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('HashId2','HashId2') !!}
	{!! Form::text('HashId2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Email','Email') !!}
	{!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>