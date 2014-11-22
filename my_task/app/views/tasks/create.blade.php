<div class="frmcreate" id="create"> 
	<h2 class="title">New task</h2>
	<br>
{{ Form::open(array('url' => 'tasks')) }}
	{{ Form::label('titulo', 'Title') }}
	{{ Form::text('titulo', '',array('class' => 'txt_title_create')) }}
	{{ Form::label('prioridad', 'Priority',array('class' => 'lbl_title_combo')) }}
	{{ Form::select('prioridad', array('Alta' => 'High', 'Media' => 'Medium', 'Baja' => 'Low'), null,array('id' => 'combobox')) }}
	<br><br>{{ Form::label('descripcion', 'Description',array('class' => 'title_descripcion')) }}
	
	<div id="frm_descripcion">{{ Form::textArea('descripcion', '' ,array('class' => 'frm_descripcion', 'maxlength' => '250')) }}</div>
    <div class="lbl_descripcion">Characters Remaining</div> 
    <div class="divContador">250</div>    

	<br>
	<br>
	<div class="submit">{{Form::submit('Save', array('class' => 'btn btn-primary'))}}</div>
	<div class="registrarse">{{ HTML::linkAction('TaskController@index', 'Back', array(), array('class' => 'btn btn-primary')) }}</div>
	<br>
	<br>
{{ Form::close() }}



</div>
	
{{HTML::script('js/task.js');}}