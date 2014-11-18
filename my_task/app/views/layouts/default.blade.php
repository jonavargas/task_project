<!DOCTYPE html>
<html>
<head>
	<title>Login</title>	
	{{HTML::script('js/jquery-2.0.3.min.js');}}
	{{HTML::style('css/style.css');}}
	{{HTML::style('bootstrap/css/bootstrap.min.css');}}
	{{HTML::script('bootstrap/js/bootstrap.min.js');}}



</head>
<body>

	<?php
		if (!Auth::check()) {				
	?>
		<div class="btn-group" role="group">
			{{ HTML::linkAction('UserController@index', 'Login', array(), array('class' => 'btn btn-primary')) }}
			{{ HTML::linkAction('UserController@create', 'Registro', array(), array('class' => 'btn btn-primary')) }}				
		</div>
	<?php
		}				
	?>

	<?php
		if (Auth::check()) {					
	?>		
		<div class="btn-group" role="group">
			{{ HTML::linkAction('TaskController@index', 'Dashboard', array(), array('class' => 'btn btn-primary')) }}
			{{ HTML::linkAction('UserController@logout', 'Cerrar Session', array(), array('class' => 'btn btn-primary')) }}
		</div>
	<?php		
		}
	?>

	{{ $content }}
</body>
</html>
