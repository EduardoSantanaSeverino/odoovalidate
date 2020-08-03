{!! Form::model($cliente , [ 'method' => 'DELETE', 'action' => ['ClientesController@destroy', $cliente -> id]]) !!}
	{!! Form::submit($submitButton, ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}