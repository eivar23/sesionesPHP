<?php

echo "login"

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<body>
	<form id="form-login" action="" method="post">
		<?php

		if(isset($errorLogin)){
			echo $errorLogin;
		}

		?>
		<h2>iniciar sesión</h2>
		<input type="text" name="username">
		<br>
		<input type="text" name="password">
		<br>
		<button>enviar</button>
	</form>
</body>
</html>