<?php
	include('connection.php');
	if (isset($_POST['updateProductId'])) {
		$updateProductId = $_POST['updateProductId'];
		$updateProductNombre = $_POST['updateProductNombre'];
		$updateProductCantidad = $_POST['updateProductCantidad'];
		$updateProductPrecio = $_POST['updateProductPrecio'];
		$queryDelete = "UPDATE `productos` 
			SET 
			`nombre` = '$updateProductNombre', 
			`cantidad` = '$updateProductCantidad', 
			`precio` = '$updateProductPrecio' 
			WHERE `productos`.`id` = $updateProductId";
		mysqli_query($conn,$queryDelete);
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="div-update">
		<h1>Update</h1>
		<form action="update.php" method="POST">
			<label for="updateProductId">Id</label>
			<input type="text" id="updateProductId" name="updateProductId" value="<?php echo $_GET['idGetUpdate'] ?>">
			<label for="updateProductNombre">Nombre</label>
			<input type="text" id="updateProductNombre" name="updateProductNombre" 
			value="<?php echo $_GET['nombreGetUpdate'] ?>">
			<label for="updateProductCantidad">Cantidad</label>
			<input type="text" id="updateProductCantidad" name="updateProductCantidad" 
			value="<?php echo $_GET['cantidadGetUpdate'] ?>">
			<label for="updateProductPrecio">Precio</label>
			<input type="text" id="updateProductPrecio" name="updateProductPrecio" 
			value="<?php echo $_GET['precioGetUpdate'] ?>">
			<input type="submit">
		</form>
	</div>
</body>
</html>