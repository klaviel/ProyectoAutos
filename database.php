<?php
	$host ='babavzqi2mn2koodnnft-mysql.services.clever-cloud.com';
	$user = 'us2nbfl0cnyjrwv4';
	$password = 'oiQfnubRRqrsGj8VYhNT';
	$db ='babavzqi2mn2koodnnft';

	$connection = @mysqli_connect($host,$user,$password,$db);
	if(!$connection){
		echo "ERROR EN LA CONEXION";

	}else{
		echo "Conexion exitosa";
	}
?>
