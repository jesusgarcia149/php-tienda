<?php
	include('connection.php');
	if (isset($_POST['createProductNombre'])) {
		$name = $_POST['createProductNombre'];
		$units = $_POST['createProductCantidad'];
		$price = $_POST['createProductPrecio'];
		$queryCreate = "INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `precio`) VALUES (NULL,'$name','$units','$price')";
		mysqli_query($conn,$queryCreate);
		header("Location: index.php");
	}
?>
<div class="div-create">
	<h1>Crear Producto</h1>
	<form action="create.php" method="POST">
		<label for="createProductNombre">Nombre</label>
		<input type="text" id="createProductNombre" name="createProductNombre">
		<label for="createProductCantidad">Cantidad</label>
		<input type="number" id="createProductCantidad" name="createProductCantidad">
		<label for="createProductPrecio">Precio</label>
		<input type="number" id="createProductPrecio" name="createProductPrecio">
		<input type="submit">
	</form>
</div>