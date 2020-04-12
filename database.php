<?php
	$server ='babavzqi2mn2koodnnft-mysql.services.clever-cloud.comz';
	$username = 'us2nbfl0cnyjrwv4';
	$password = 'oiQfnubRRqrsGj8VYhNT';
	$database ='babavzqi2mn2koodnnft';

	try {
		$conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
		
	} catch (PDOException $e) {
		die('Connected failed: '.$e->getMessage());
		
	}
?>
