<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$ddbb = 'sistema_de_inventario';

	$conn = mysqli_connect($host,$user,$pass,$ddbb);

	if(!$conn){
		echo "no se ha podido establecer conneccion con las base de datos";
	}

	$enlace = new mysqli($host, $user, $pass, $ddbb);
?>