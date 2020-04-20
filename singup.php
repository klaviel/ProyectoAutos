<?php
	



	$alert= '' ;


	if(!empty($_POST['email']) && !empty ($_POST['password'])){

		include "database.php";
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query=mysqli_query($conection,"SELECT * FROM users WHERE email = '$email'");
		$result = mysqli_fetch_array($query);

		if($result>0){
			$alert='<p class="msg_error">El correo ya existe.</p>';

		}else{
			$query_insert = mysqli_query($conection, "INSERT INTO users(email,password) VALUES('$email','$password')");
			if($query_insert){
				$alert='<p class="msg_save">Usuario creado correctamente</p>';
			}else{
				$alert='<p class="msg_error">Error al crear el usuario.</p>';
			}
		}



		

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Pagina singup</title>
	<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php require 'partials/header.php'?>
	<?php if(!empty($message)): ?>
		<p><?= $message ?> </p>
		<?php endif; ?>
	<h1>SingUP</h1>
	<spam>or <a href="login.php">Login</a> </spam>
	<div class="alert"><?php echo issets($alert) ? $alert : '';?></div>
	<form action="singup.php" method="post">
		<input type="text" name="email" placeholder="Enter your email">
		<input type="password" name="password" placeholder="Enter your password">
		<input type="password" name="confirm_password" placeholder="Confirm your password">

		<input type="submit" value="Send">
	</form>
	<spam>or <a href="singup.php">SingUp</a> </spam>

</body>
</html>