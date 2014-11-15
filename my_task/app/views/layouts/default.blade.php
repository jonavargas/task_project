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
	<a href="login">Login</a>
	<a href="registro">Registro</a>
	<a href="publica">Publica</a>
	<a href="privada">Privada</a>
	<a href="tasks">Tasks</a>
	<?php
		if (Auth::check()) {
			echo "<a href='logout'>Cerrar Session</a>";
			echo "<h3>Usuario Logueado</h3>";
		}
	?>
	{{ $content }}
</body>
</html>