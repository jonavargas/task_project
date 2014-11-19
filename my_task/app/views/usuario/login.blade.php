<body >
	

@if ($errors->has())
    <div class="alert-danger text-center" role="alert">
        <small>{{ $errors->first('email') }}</small>
        <small>{{ $errors->first('password') }}</small>
        <small>{{ $errors->first('invalid_credentials') }}</small>
    </div>
@endif
<div class="frmlogin">
	{{ Form::open(array('url' => 'login')) }}
		<h1 class= "title"> My Task Login</h1>
		<label for="email"><h4><strong class= "glyphicon glyphicon-user"> User or Email:</strong></h4></label>
		<div class= "email">{{Form::text('email', Input::old('email'), array('placeholder' => 'User or Email', 'required' => 'true'))}}</div>
		<br>
		<label for="password"><h4><strong class="glyphicon glyphicon-credit-card"> Password:</strong></h4></label>
		<div class="password">{{ Form::password('password', array('placeholder' => 'Password', 'required' => 'true')) }}</div>
		<br>
		<br>
		<div class="submit">{{ Form::submit('Log In', array('class' => 'btn btn-primary'))}}</div>	
		<div class="registrarse">{{ HTML::linkAction('UserController@create', 'Sign in', array(), array('class' => 'btn btn-primary ')) }}</div>
		<br>
		<br>
	{{ Form::close() }}
	

</div>


	
</body>
{{HTML::script('js/task.js');}}
