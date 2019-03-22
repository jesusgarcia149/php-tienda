<?php
	include('./../../connection.php');
	$itemDelete = $_GET['idGetDelete'];
	$queryDelete = "DELETE FROM clientes WHERE id = $itemDelete";
	mysqli_query($conn,$queryDelete);
	header("Location: ./../clients/clients.php");
?>