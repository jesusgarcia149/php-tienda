<?php
	include('./../../connection.php');
	// Condición
	$condicionCreate = 
		isset($_POST['createClientNombre']) && 
		isset($_POST['createClientApellido']) && 
		isset($_POST['createClientCedula']) &&
		isset($_POST['createClientTelefono']) &&
		isset($_POST['createClientDireccion']);
	
	if ( $condicionCreate ) {
		// Almacenar los datos capturados en las siguientes variables
		$name = $_POST['createClientNombre'];
		$lastName = $_POST['createClientApellido'];
		$cedula = $_POST['createClientCedula'];
		$tlf = $_POST['createClientTelefono'];
		$direction = $_POST['createClientDireccion'];
		
		// Filtrar etiquetas HTML
		$name = htmlentities($name);
		$lastName = htmlentities($lastName);
		$cedula = htmlentities($cedula);
		$tlf = htmlentities($tlf);
		$direction = htmlentities($direction);

		// Almacenar la consulta en una variable para su posterior ejecución
		$queryCreate = "INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`) VALUES (NULL,'$name','$lastName','$cedula','$tlf','$direction')";
		
		// Ejecutamos la consulta
		mysqli_query($conn, $queryCreate);
		
		// Volvemos al lugar donde estábamos
		header("Location: ./clients.php");
	}

?>

<div class="div-create fc--white">
	<h1 class="bc--base-d30">Registrar Cliente</h1>
	<form action="create.php" method="POST" clsas="form">
		<div class="form--campos">
			<label for="createClientNombre" class="form--item">
				<span>Nombre: </span>
				<input type="text" id="createClientNombre" name="createClientNombre" placeholder="Nombre de producto" autofocus="">
			</label>
			<label for="createClientApellido" class="form--item">
				<span>Apellido: </span>
				<input type="text" id="createClientApellido" name="createClientApellido" placeholder="1234" class="cantidad">
			</label>
			<label for="createClientCedula" class="form--item">
				<span>Cedula:</span>
				<input type="text" id="createClientCedula" name="createClientCedula" placeholder="100.00" class="precio">
			</label>
			<label for="createClientTelefono" class="form--item">
				<span>Telefono:</span>
				<input type="text" id="createClientTelefono" name="createClientTelefono" placeholder="Nombre de producto" autofocus="">
			</label>
			<label for="createClientDireccion" class="form--item">
				<span>Direccion:</span>
				<input type="text" id="createClientDireccion" name="createClientDireccion" placeholder="Nombre de producto" autofocus="">
			</label>
			<div class="group-button form--item">
				<button type="submit" class="group-button--submit">Registrar Cliente</button>
			</div>
		</div>
	</form>
</div>