<h1>Registro</h1>

@if($errors->has())
     <div class="email_error">
	     @if ($errors->has('email'))
	          <p class="bg-danger">{{ $errors->first('email') }}</p>
	     @endif
     </div>
@endif

@if($errors->has())
     <div class="password_error">
	     @if ($errors->has('password'))
	          <p class="bg-danger">{{ $errors->first('password') }}</p>
	     @endif
     </div>
@endif

{{ Form::open(array('url' => 'registro')) }}
	<label for="email">Usuario o email:</label>
	{{Form::text('email', Input::old('email'), array('placeholder' => 'Usuario o email', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'true')) }}
	<label for="password">Confirmar Password:</label>
	{{ Form::password('password_confirmation', array('placeholder' => 'Confirmar Password', 'class' => 'form-control', 'required' => 'true')) }}
	{{ Form::submit('Registrarse', array('class' => 'btn btn-success'))}}
	{{ HTML::linkAction('UserController@index', 'Inicio', array(), array('class' => 'btn btn-warning')) }}
{{ Form::close() }}