<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<div id="menu">
		<ul>
			<li>Home</li>
			<li class="cerrar-sesion">
				<a href="includes/logout.php">Cerrar sesion</a>
			</li>
		</ul>
	</div>
	<section>
		<h1>Bienvenido <?php echo $user->getNombre()?></h1>
	</section>
	<a href="vistas/tienda.php">ir a la tienda</a>

</body>
</html>