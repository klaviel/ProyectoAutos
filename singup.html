<?php
	require'database.php';



	$message= '' ;


	if(!empty($_POST['email']) && !empty ($_POST['password'])){
		$sql = "INSERT INTO users (email,password) VALUES (:email, :password)";
		$stmt= $conn->prepare($sql);
		$stmt->bindParam(':email',$_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


		$stmt->bindParam(':password',$password);

		if($stmt->execute()){
			$message= 'Successfully created new user';
		}else{
			$message = 'Sorry there must have been an issue creating your account';
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
	<form action="singup.php" method="post">
		<input type="text" name="email" placeholder="Enter your email">
		<input type="password" name="password" placeholder="Enter your password">
		<input type="password" name="confirm_password" placeholder="Confirm your password">
		<input type="submit" value="Send">
	</form>
	<spam>or <a href="singup.php">SingUp</a> </spam>

</body>
</html>