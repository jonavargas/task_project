{{ Form::open(array('url' => "tasks/$task->id/update")) }}
	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', $task->titulo) }}
	{{ Form::label('prioridad', 'Prioridad') }}
	{{ Form::select('prioridad', array('Alta' => 'Alta', 'Media' => 'Media', 'Baja' => 'Baja'),$task->prioridad ) }}
	{{ Form::label('descripcion', 'Descripcion') }}
	{{ Form::textArea('descripcion', $task->descripcion) }}
	
	{{Form::submit('Salvar', array('class' => 'btn btn-success'))}}
	{{ HTML::linkAction('TaskController@index', 'Cancelar', array(), array('class' => 'btn btn-warning')) }}

{{ Form::close() }}
