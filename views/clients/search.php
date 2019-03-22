<?php
	include('./../../connection.php');
	if (isset($_POST['searchClientNombre'])) {
		$nombreSearch = $_POST['searchClientNombre'];
		$querySearch = "SELECT * FROM clientes WHERE nombre = '$nombreSearch'";
		$listClientsSearch = mysqli_query($conn, $querySearch);
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
		<a href="./../clients/clients.php">Clientes</a>
		<a href="./../clients/search.php">Buscar Cliente</a>
		<a href="./../products/products.php">Productos</a>
		<a href="./../products/search.php">Buscar Producto</a>
	</header>
	<div class="div-create fc--white">
		<h1 class="bc--base-d30">Buscar Cliente</h1>
		<form action="search.php" method="POST" clsas="form">
			<div class="form--campos">
				<!-- Nombre de Cliente -->
				<label for="searchClientNombre" class="form--item">
					<span>Nombre: </span>
					<input type="text" id="searchClientNombre" name="searchClientNombre" placeholder="Nombre de Cliente" autofocus="">
				</label>
				<div class="group-button form--item">
					<button type="submit" class="group-button--submit">Buscar Cliente</button>
				</div>
			</div>
		</form>
	</div>
	<div class="div-read">
		<h1 class="fc--base-d30">Clientes Buscados</h1>
		<?php
			if (isset($_POST['searchClientNombre'])) {
				$tbodySearch = "";
				while ($registroSearch = mysqli_fetch_array($listClientsSearch)) {
					$tbodySearch .= "
					<tr>
						<td>$registroSearch[id]</td>
						<td>$registroSearch[nombre]</td>
						<td>$registroSearch[apellido]</td>
						<td>$registroSearch[cedula]</td>
						<td>$registroSearch[telefono]</td>
						<td>$registroSearch[direccion]</td>
						<td>
							<a class=\"datos--link\" href=\"update.php?idGetUpdate=$registroSearch[id]&nombreGetUpdate=$registroSearch[nombre]&apellidoGetUpdate=$registroSearch[apellido]&cedulaGetUpdate=$registroSearch[cedula]
								&telefonoGetUpdate=$registroSearch[telefono]
								&direccionGetUpdate=$registroSearch[direccion]
							\">Editar
							</a>
						</td>
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
					<th>Apellido</th>
					<th>Cedula</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>

			<tbodySearch class="datos--cuerpo">
				<?php 
					if (isset($_POST['searchClientNombre'])) {
						echo $tbodySearch;
					}
				?>
			</tbodySearch>
		</table>
	</div>
</body>
</html>