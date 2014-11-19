<body>
	<div class="frmlogin">
		<h2 class="title">Edit</h2>
		<br>
		{{ Form::open(array('url' => "tasks/$task->id/update")) }}
			{{ Form::label('titulo', 'Title') }}
			{{ Form::text('titulo', $task->titulo) }}
			{{ Form::label('prioridad', 'Priority') }}
			{{ Form::select('prioridad', array('Alta' => 'High', 'Media' => 'Medium', 'Baja' => 'Low'),$task->prioridad ) }}
			<br><br>{{ Form::label('descripcion', 'Description') }}
			{{ Form::textArea('descripcion', $task->descripcion) }}	
			<br>
			<br>

			<div class="submit">{{Form::submit('Save', array('class' => 'btn btn-primary'))}}</div>
			<div class="registrarse">{{ HTML::linkAction('TaskController@index', 'Back', array(), array('class' => 'btn btn-primary')) }}</div>
			<br><br>
		{{ Form::close() }}
		

	</div>

	
	
</body>
