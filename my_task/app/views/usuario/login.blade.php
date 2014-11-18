<h1>Login</h1>
<div class="login">
	@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('email') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('invalid_credentials') }}</small>
    </div>
@endif
{{ Form::open(array('url' => 'login')) }}
	<label for="email" class="glyphicon glyphicon-user "><strong>  Email:</strong></label><br>
	{{Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'required' => 'true'))}}
	<br>
	<br>
	<br>
	<label for="password" class="glyphicon glyphicon-credit-card"><strong>  Password:</strong></label>
	<div class="password">{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}</div>
	<br>
	<br>
	{{ Form::submit('Login', array())}}
{{ Form::close() }}

{{HTML::script('js/task.js');}}
	
</div>

