<?php
	include('./../../connection.php');
	$queryRead = "SELECT * FROM clientes";
	$listProducts = mysqli_query($conn, $queryRead);
?>
<div class="div-read">
	<h1 class="fc--base-d30">Clientes Registrados</h1>

	<?php
	$tbodyRead = "";
		
	while ($registroRead = mysqli_fetch_array($listProducts)) {
		$tbodyRead .= "
		<tr>
			<td>$registroRead[id]</td>
			<td>$registroRead[nombre]</td>
			<td>$registroRead[apellido]</td>
			<td>$registroRead[cedula]</td>
			<td>$registroRead[telefono]</td>
			<td>$registroRead[direccion]</td>
			<td><a class=\"datos--link\" href=\"update.php?
				idGetUpdate=$registroRead[id]&
				nombreGetUpdate=$registroRead[nombre]&
				apellidoGetUpdate=$registroRead[apellido]&
				cedulaGetUpdate=$registroRead[cedula]&
				telefonoGetUpdate=$registroRead[telefono]&
				direccionGetUpdate=$registroRead[direccion]\"
				>Editar</a>
			</td>
			<td><a class=\"datos--link\" href=\"./delete.php?idGetDelete=$registroRead[id]\">Eliminar</a></td>
		</tr>
		";
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

		<tbodyRead class="datos--cuerpo">
			<?php echo $tbodyRead; ?>
		</tbodyRead>
	</table>

</div>