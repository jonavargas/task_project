<!DOCTYPE html>
<html>
<head>
	<title>Login</title>	
	{{HTML::script('js/jquery-2.0.3.min.js');}}
	{{HTML::style('css/style.css');}}
	{{HTML::style('bootstrap/css/bootstrap.min.css');}}
	{{HTML::script('bootstrap/js/bootstrap.min.js');}}

</head>
	
<body class= "body">	
	<?php
		if (Auth::check()) {					
	?>		
		<div class="btn-group menu" role="group">
			
			{{ HTML::linkAction('UserController@logout', 'Log out', array(), array('class' => 'btn btn-danger')) }}

		</div>
	<?php		
		}
	?>

	{{ $content }}
</body>
</html>
