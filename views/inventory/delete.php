<?php
	include('./../../connection.php');
	$itemDelete = $_GET['idGetDelete'];
	$queryDelete = "DELETE FROM productos WHERE id = $itemDelete";
	mysqli_query($conn,$queryDelete);
	header("Location: ./../inventory/inventory.php");
?>