<?php
	include('./../../connection.php');
	if (isset($_POST['updateClientId'])) {
		$updateClientId = $_POST['updateClientId'];
		$updateClientNombre = $_POST['updateClientNombre'];
		$updateClientApellido = $_POST['updateClientApellido'];
		$updateClientCedula = $_POST['updateClientCedula'];
		$updateClientTelefono = $_POST['updateClientTelefono'];
		$updateClientDireccion = $_POST['updateClientDireccion'];
		$queryUpdate = "UPDATE `clientes` SET 
		`nombre` = '$updateClientNombre', 
		`apellido` = '$updateClientApellido', 
		`cedula` = '$updateClientCedula', 
		`telefono` = '$updateClientTelefono', 
		`direccion` = '$updateClientDireccion' 
		WHERE `clientes`.`id` = $updateClientId";
		mysqli_query($conn,$queryUpdate);
		header("Location: ./../clients/clients.php");
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
				<label class="form--item" for="updateClientId">
					<span>Id</span>
					<input type="text" id="updateClientId" name="updateClientId" value="<?php echo $_GET['idGetUpdate'] ?>">
				</label>
				<label class="form--item" for="updateClientNombre">
					<span>Nombre</span>
					<input type="text" id="updateClientNombre" name="updateClientNombre" value="<?php echo $_GET['nombreGetUpdate'] ?>">
				</label>
				<label class="form--item" for="updateClientApellido">
					<span>Apellido</span>
					<input type="text" id="updateClientApellido" name="updateClientApellido" value="<?php echo $_GET['apellidoGetUpdate'] ?>">
				</label>
				<label class="form--item" for="updateClientCedula">
					<span>Cedula</span>
					<input type="text" id="updateClientCedula" name="updateClientCedula" value="<?php echo $_GET['cedulaGetUpdate'] ?>">
				</label>
				<label class="form--item" for="updateClientTelefono">
					<span>Telefono</span>
					<input type="text" id="updateClientTelefono" name="updateClientTelefono" value="<?php echo $_GET['telefonoGetUpdate'] ?>">
				</label>
				<label class="form--item" for="updateClientDireccion">
					<span>Direccion</span>
					<input type="text" id="updateClientDireccion" name="updateClientDireccion" value="<?php echo $_GET['direccionGetUpdate'] ?>">
				</label>
				<div class="group-button form--item">
					<button type="submit" class="group-button--submit">Actualizar</button>
				</div>
			</div>
			
		</form>
	</div>
</body>
</html>