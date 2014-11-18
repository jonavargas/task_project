<h1>Login</h1>

@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('email') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('invalid_credentials') }}</small>
    </div>
@endif
{{ Form::open(array('url' => 'login')) }}
	<label for="email">Email:</label>
	{{Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'required' => 'true'))}}
	<br>
	<label for="password">Password:</label>
	{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
	{{ Form::submit('Iniciar sesión', array('class' => 'btn btn-success'))}}
{{ Form::close() }}

{{HTML::script('js/task.js');}}