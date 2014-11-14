<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<a href="login">Login</a>
	<a href="registro">Registro</a>
	<a href="publica">Publica</a>
	<a href="privada">Privada</a>
	<?php
		if (Auth::check()) {
			echo "<a href='logout'>Cerrar Session</a>";
			echo "<h3>Usuario Logueado</h3>";
		}
	?>
	{{ $content }}
</body>
</html>