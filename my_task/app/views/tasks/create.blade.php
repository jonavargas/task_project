<div class="create"> 
{{ Form::open(array('url' => 'tasks')) }}
	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', '') }}
	{{ Form::label('prioridad', 'Prioridad') }}
	{{ Form::select('prioridad', array('Alta' => 'Alta', 'Media' => 'Media', 'Baja' => 'Baja')) }}
	{{ Form::label('descripcion', 'Descripcion') }}
	{{ Form::textArea('descripcion', '') }}
	
	{{Form::submit('Salvar', array('class' => 'btn btn-success'))}}
	{{ HTML::linkAction('TaskController@index', 'Cancelar', array(), array('class' => 'btn btn-warning')) }}

{{ Form::close() }}



</div>