<div class="frmcreate" id="create"> 
	<h2 class="title">New task</h2>
	<br>

{{ Form::open(array('url' => 'tasks')) }}
	{{ Form::label('titulo', 'Title') }}
	{{ Form::text('titulo', '',array('class' => 'txt_title_create')) }}
	{{ Form::label('prioridad', 'Priority',array('class' => 'lbl_title_combo')) }}
	{{ Form::select('prioridad', array('c_Baja' => 'Low', 'b_Media' => 'Medium', 'a_Alta' => 'High'), null,array('id' => 'combobox')) }}
	

	@if($errors->has())
	    <div class="alert-danger text-center" role="alert">
		    @if ($errors->has('titulo'))
	       		<p class="bg-danger">{{ $errors->first('titulo') }}</p>
		    @endif
	    </div>
	@endif
		
	<br><br>{{ Form::label('descripcion', 'Description',array('class' => 'title_descripcion')) }}
	<div id="frm_descripcion">{{ Form::textArea('descripcion', '' ,array('class' => 'frm_descripcion', 'maxlength' => '220')) }}</div>

	@if($errors->has())
	    <div class="alert-danger text-center" role="alert">
		    @if ($errors->has('descripcion'))
	        	<p class="bg-danger">{{ $errors->first('descripcion') }}</p>
		    @endif
	    </div>
	@endif
	
    <div class="lbl_descripcion">Characters Remaining</div> 
    <div class="divContador">220</div>    

	<br>
	<br>
	<div class="submit">{{Form::submit('Save', array('class' => 'btn btn-primary'))}}</div>
	<div class="registrarse">{{ HTML::linkAction('TaskController@index', 'Back', array(), array('class' => 'btn btn-primary')) }}</div>
	<br>
	<br>
{{ Form::close() }}



</div>
	
{{HTML::script('js/task.js');}}