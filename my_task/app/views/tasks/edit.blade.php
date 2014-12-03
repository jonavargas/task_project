<body>
	<div class="frmcreate" id="create">
		<h2 class="title">Edit</h2>
		<br>
		{{ Form::open(array('url' => "tasks/$task->id/update")) }}
			{{ Form::label('titulo', 'Title') }}
			{{ Form::text('titulo', $task->titulo,array('class' => 'txt_title_create', 'required' => 'true')) }}
			{{ Form::label('prioridad', 'Priority',array('class' => 'lbl_title_combo')) }}
			{{ Form::select('prioridad', array('c_Baja' => 'Low', 'b_Media' => 'Medium', 'a_Alta' => 'High'),$task->prioridad,array('id' => 'combobox') ) }}

			<br><br>{{ Form::label('descripcion', 'Description',array('class' => 'title_descripcion')) }}	
			<div id="frm_descripcion">{{ Form::textArea('descripcion', $task->descripcion ,array('class' => 'frm_descripcion', 'maxlength' => '250', 'required' => 'true')) }}</div>
    		<div class="lbl_descripcion">Characters Remaining</div> 
    		<div class="divContador">250</div>


			<br>
			<br>

			<div class="submit">{{Form::submit('Save', array('class' => 'btn btn-primary'))}}</div>
			<div class="registrarse">{{ HTML::linkAction('TaskController@index', 'Back', array(), array('class' => 'btn btn-primary')) }}</div>
			<br><br>
		{{ Form::close() }}		

	</div>	
	
</body>

{{HTML::script('js/task.js');}}