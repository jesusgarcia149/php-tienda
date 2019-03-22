<?php
	include('./../../connection.php');
	// Condición
	$condicionCreate = isset($_POST['createProductNombre']) && isset($_POST['createProductCantidad']) && isset($_POST['createProductPrecio']);
	
	if ( $condicionCreate ) {
		// Almacenar los datos capturados en las siguientes variables
		$name = $_POST['createProductNombre'];
		$units = $_POST['createProductCantidad'];
		$price = $_POST['createProductPrecio'];
		
		// Filtrar etiquetas HTML
		$name = htmlentities($name);
		$units = htmlentities($units);
		$price = htmlentities($price);

		// Almacenar la consulta en una variable para su posterior ejecución
		$queryCreate = "INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `precio`) VALUES (NULL,'$name','$units','$price')";
		
		// Ejecutamos la consulta
		mysqli_query($conn, $queryCreate);
		
		// Volvemos al lugar donde estábamos
		header("Location: ./../inventario.php");
	}

?>

<div class="div-create fc--white">
	<a href="search.php">
		<h1 class="group-button--submit">Buscar Producto</h1>
	</a>
	<h1 class="bc--base-d30">Crear Producto</h1>
	<form action="create.php" method="POST" clsas="form">
		<div class="form--campos">
			<!-- Nombre de producto -->
			<label for="createProductNombre" class="form--item">
				<span>Nombre: </span>
				<input type="text" id="createProductNombre" name="createProductNombre" placeholder="Nombre de producto" autofocus="">
			</label>
	
			<!-- Cantidad -->
			<label for="createProductCantidad" class="form--item">
				<span>Cantidad: </span>
				<input type="text" id="createProductCantidad" name="createProductCantidad" placeholder="1234" class="cantidad">
			</label>
	
			<label for="createProductPrecio" class="form--item">
				<span>Precio</span>
				<input type="text" id="createProductPrecio" name="createProductPrecio" placeholder="100.00" class="precio">
			</label>
	
			<div class="group-button form--item">
				<button type="submit" class="group-button--submit">Registrar producto</button>
			</div>
		</div>
	</form>
</div>