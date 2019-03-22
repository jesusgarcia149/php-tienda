<?php
	include('./../../connection.php');
	$queryRead = "SELECT * FROM productos";
	$listProducts = mysqli_query($conn, $queryRead);
?>
<div class="div-read">
	<h1 class="fc--base-d30">Productos Registrados</h1>

	<?php
	$tbodyRead = "";
		
	while ($registroRead = mysqli_fetch_array($listProducts)) {
		$tbodyRead .= "
		<tr>
			<td>$registroRead[id]</td>
			<td>$registroRead[nombre]</td>
			<td>$registroRead[cantidad]</td>
			<td>$registroRead[precio]</td>
			<td><a class=\"datos--link\" href=\"update.php?idGetUpdate=$registroRead[id]&nombreGetUpdate=$registroRead[nombre]&cantidadGetUpdate=$registroRead[cantidad]&precioGetUpdate=$registroRead[precio]\">Editar</a></td>
			<td><a class=\"datos--link\" href=\"delete.php?idGetDelete=$registroRead[id]\">Eliminar</a></td>
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
				<th>Cantidad</th>
				<th>Precio</th>
				<th colspan="2">Acciones</th>
			</tr>
		</thead>

		<tbodyRead class="datos--cuerpo">
			<?php echo $tbodyRead; ?>
		</tbodyRead>
	</table>

</div>