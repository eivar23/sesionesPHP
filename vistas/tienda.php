<?php
	
include_once '../includes/user.php';
include_once '../includes/user_session.php';


	$user = new User();
	$userSession = new UserSession();

	$user->setUser($userSession->get_current_user());
	$nom= $user->getNombre();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?php echo "el nombre de la surundaio";	
			echo $nom;
		?>
		sy uididenjdiwun
	</h1>
	



</body>
</html>