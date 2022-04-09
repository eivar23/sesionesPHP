<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<body>
	<form id="form-login" action="includes/logueo.php" method="post">
	
		<h2>iniciar sesión</h2>
		<input type="text" name="usuario">
		<br>
		<input type="text" name="clave">
		<br>
		<button>enviar</button>
	</form>
</body>
<?php 
session_start();
 $_SESSION['username'];
if($usuario != null){
	echo $usuario;
}else{
	echo "soy un menu desplegable y mostraré mucha info";
}

?>
</html>