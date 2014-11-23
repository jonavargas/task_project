<body>
	
<div class="frmlogin">
	<h1 class="title">Sign In</h1>


	{{ Form::open(array('url' => 'registro')) }}
		<label class="lbl_reg_user" for="email"><h4><strong class= "glyphicon glyphicon-user"> User or Email:</strong></h4></label>
		<br>
		<div class= "email">{{Form::text('email', Input::old('email'), array('placeholder' => 'User or Email', 'required' => 'true'))}}</div>
		<br>
		@if($errors->has())
		     <div class="email_error">
			     @if ($errors->has('email'))
			          <p class="bg-danger">{{ $errors->first('email') }}</p>
			     @endif
		     </div>
		@endif

		<label class="lbl_reg_pass" for="password"><h4><strong class="glyphicon glyphicon-credit-card"> Password:</strong></h4></label>
		<div class="password">{{ Form::password('password', array('placeholder' => 'Password', 'required' => 'true')) }}</div>
		<br>
		<label class="lbl_reg_confirm" for="confirPass"><h4><strong class="glyphicon glyphicon-credit-card"> Confirm Password:</strong></h4></label>
		<div class="password">{{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password', 'required' => 'true'))}}</div>
		<br>
		@if($errors->has())
		     <div class="password_error">
			     @if ($errors->has('password'))
			          <p class="bg-danger">{{ $errors->first('password') }}</p>
			     @endif
		     </div>
		@endif
		<br>
		<div class="submit">{{ Form::submit('Ok', array('class' => 'btn btn-primary'))}}</div>
		<div class="registrarse">{{ HTML::linkAction('UserController@index', 'Log In', array(), array('class' => 'btn btn-primary')) }}</div>
		<br>
		<br>
	{{ Form::close() }}

</div>



	
</body>

