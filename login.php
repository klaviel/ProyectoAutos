<?php
	session_start(); 
	require 'database.php';

	if (!empty($_POST['email'])&&!empty($_POST['password'])) {
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		$message='';
		if (count($results)>0 && password_verify($_POST['password'],$results['password'])){


			$_SESSION['user_id']=$results['id'];
			header("Location: /index.php");
			# code...
		}else{
			$message='Sorry, Those credentials do not match';
		}


		# code...
	}
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
		<input type="submit" value="Send">
	</form>
	<spam>or <a href="singup.php">SingUp</a> </spam>

</body>
</html>