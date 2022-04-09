<?php

	require "db.php";
	session_start();


	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$md5pass = md5($clave);


	$sql = "select count(*) as contar from usuarios where username = '$usuario' and password = '$md5pass'";
	$consulta = mysqli_query($conexion,$sql);
	$array = mysqli_fetch_array($consulta);

	if($array['contar']>0){
		$_SESSION['username'] = $usuario;
		header("location: ../index.php");
	}else{
		echo "datos incorrectos";
	}

?>