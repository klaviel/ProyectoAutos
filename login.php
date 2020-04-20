<?php
	<?php
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: sistema/');
}else{
		if(empty($_POST['usuario'])|| empty($_POST['clave']))
	{

	 	$alert='Ingrese su usuario y su clave';
	}else{
		require_once "conexion.php";
		$user = $_POST['usuario'];
		$pass = $_POST['clave'];

		$query = mysqli_query($connection, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$pass'");
		$result = mysqli_num_rows($query);
		if($result>0)
		{
			$data = mysqli_fetch_array($query);
			
			$_SESSION['active'] = true;
			$_SESSION['idUser'] = $data['idusuario'];
			$_SESSION['nombre'] = $data['nombre'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['user'] = $data['usuario'];
			$_SESSION['rol'] = $data['rol'];

			header('location: sistema/');

		}else{
			$alert ='El usuario o la clave son incorrectas';
			session_destroy();
			
		}
	}
}


		# code...
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina login</title>
	<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	<?php require 'partials/header.php'?>
	<?php if(!empty($message)): ?>
		<p><?= $message ?> </p>
		<?php endif; ?>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<input type="text" name="email" placeholder="Enter your email">
		<input type="password" name="password" placeholder="Enter your password">
		<div class="alert"><?php echo isset($alert) ? $alert : '' ; ?></div>
		<input type="submit" value="Send">

	</form>
	<spam>or <a href="singup.php">SingUp</a> </spam>

</body>
</html>