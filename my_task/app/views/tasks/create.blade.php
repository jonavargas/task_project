<div class="create frmcreate"> 
	<h2 class="title">New task</h2>
	<br>
{{ Form::open(array('url' => 'tasks')) }}
	{{ Form::label('titulo', 'Title') }}
	{{ Form::text('titulo', '') }}
	{{ Form::label('prioridad', 'Priority') }}
	{{ Form::select('prioridad', array('Alta' => 'High', 'Media' => 'Medium', 'Baja' => 'Low')) }}
	<br><br>{{ Form::label('descripcion', 'Description') }}
	{{ Form::textArea('descripcion', '') }}
	<br>
	<br>
	<div class="submit">{{Form::submit('Save', array('class' => 'btn btn-primary'))}}</div>
	<div class="registrarse">{{ HTML::linkAction('TaskController@index', 'Back', array(), array('class' => 'btn btn-primary')) }}</div>
	<br>
	<br>
{{ Form::close() }}



</div>