<?php
	include('./../../connection.php');
	if (isset($_POST['updateProductId'])) {
		$updateProductId = $_POST['updateProductId'];
		$updateProductNombre = $_POST['updateProductNombre'];
		$updateProductCantidad = $_POST['updateProductCantidad'];
		$updateProductPrecio = $_POST['updateProductPrecio'];
		$queryUpdate = "UPDATE `productos` 
			SET 
			`nombre` = '$updateProductNombre', 
			`cantidad` = '$updateProductCantidad', 
			`precio` = '$updateProductPrecio' 
			WHERE `productos`.`id` = $updateProductId";
		mysqli_query($conn,$queryUpdate);
		header("Location: ./../inventory/inventory.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./../../css/style.css">
</head>
<body>
	<div class="div-update div-create bc--base-d20 fc--white form">
		<h1>Update</h1>
		<form action="update.php" method="POST">

			<div class="form--campos">
				<label class="form--item" for="updateProductId">
					<span>Id</span>
					<input type="text" id="updateProductId" name="updateProductId" value="<?php echo $_GET['idGetUpdate'] ?>">
				</label>
				
				<label class="form--item" for="updateProductNombre">
					<span>Nombre</span>
					<input type="text" id="updateProductNombre" name="updateProductNombre" value="<?php echo $_GET['nombreGetUpdate'] ?>">
				</label>
	
				<label class="form--item" for="updateProductCantidad">
					<span>Cantidad</span>
					<input type="text" id="updateProductCantidad" name="updateProductCantidad" value="<?php echo $_GET['cantidadGetUpdate'] ?>">
				</label>
	
				<label class="form--item" for="updateProductPrecio">
					<span>Precio</span>
					<input type="text" id="updateProductPrecio" name="updateProductPrecio" 
					value="<?php echo $_GET['precioGetUpdate'] ?>">
				</label>
				
				<div class="group-button form--item">
					<button type="submit" class="group-button--submit">Actualizar</button>
				</div>
			</div>
			
		</form>
	</div>
</body>
</html>