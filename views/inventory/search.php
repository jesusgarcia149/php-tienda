<?php
	include('./../../connection.php');
	if (isset($_POST['searchProductNombre'])) {
		$nombreSearch = $_POST['searchProductNombre'];
		$querySearch = "SELECT * FROM productos WHERE nombre = '$nombreSearch'";
		$listProductsSearch = mysqli_query($conn, $querySearch);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="./../../css/style.css">
</head>
<body>
	<header>
		<a href="./../sells/sells.php">Ventas</a>
		<a href="./../clients/clients.php">clientes</a>
		<a href="./../inventory/inventory.php">Inventario</a>
		<a href="./../inventory/search.php">Buscar Producto</a>
	</header>
	<div class="div-create fc--white">
		<h1 class="bc--base-d30">Buscar Producto</h1>
		<form action="search.php" method="POST" clsas="form">
			<div class="form--campos">
				<!-- Nombre de producto -->
				<label for="searchProductNombre" class="form--item">
					<span>Nombre: </span>
					<input type="text" id="searchProductNombre" name="searchProductNombre" placeholder="Nombre de producto" autofocus="">
				</label>
				<div class="group-button form--item">
					<button type="submit" class="group-button--submit">Buscar producto</button>
				</div>
			</div>
		</form>
	</div>
	<div class="div-read">
		<h1 class="fc--base-d30">Productos Buscados</h1>
		<?php
			if (isset($_POST['searchProductNombre'])) {
				$tbodySearch = "";
				while ($registroSearch = mysqli_fetch_array($listProductsSearch)) {
					$tbodySearch .= "
					<tr>
						<td>$registroSearch[id]</td>
						<td>$registroSearch[nombre]</td>
						<td>$registroSearch[cantidad]</td>
						<td>$registroSearch[precio]</td>
						<td><a class=\"datos--link\" href=\"update.php?idGetUpdate=$registroSearch[id]&nombreGetUpdate=$registroSearch[nombre]&cantidadGetUpdate=$registroSearch[cantidad]&precioGetUpdate=$registroSearch[precio]\">Editar</a></td>
						<td><a class=\"datos--link\" href=\"delete.php?idGetDelete=$registroSearch[id]\">Eliminar</a></td>
					</tr>
					";
				}
			}
		?>
		<!-- Tablas -->
		<table class="datos">
			<thead class="datos--cabecera">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>

			<tbodySearch class="datos--cuerpo">
				<?php 
					if (isset($_POST['searchProductNombre'])) {
						echo $tbodySearch;
					}
				?>
			</tbodySearch>
		</table>
	</div>
</body>
</html>