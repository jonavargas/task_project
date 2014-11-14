<h1>Registro</h1>

{{ Form::open(array('url' => 'registro')) }}
	<label for="email">Email:</label>
	{{Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
	{{ Form::submit('Login', array())}}
{{ Form::close() }}