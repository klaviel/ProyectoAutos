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
		$email = $_POST['email'];
		$pass = $_POST['password'];

		$query = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
		$result = mysqli_num_rows($query);
		if($result>0)
		{	

			$data = mysqli_fetch_array($query);
			
			$_SESSION['active'] = true;
			$_SESSION['email'] = $data['email'];

			header('location: index.php');

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