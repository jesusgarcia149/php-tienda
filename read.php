<?php
	include('connection.php');
	$queryRead = "SELECT * FROM productos";
	$listProducts = mysqli_query($conn, $queryRead);
?>
<div class="div-read">
	<h1 class="fc--base-d30">Productos Registrados</h1>

	<?php
	$tbody = "";
		
	while ($registro = mysqli_fetch_array($listProducts)) {
		$tbody .= "
		<tr>
			<td>$registro[id]</td>
			<td>$registro[nombre]</td>
			<td>$registro[cantidad]</td>
			<td>$registro[precio]</td>
			<td><a class=\"datos--link\" href=\"update.php?idGetUpdate=$registro[id]&nombreGetUpdate=$registro[nombre]&cantidadGetUpdate=$registro[cantidad]&precioGetUpdate=$registro[precio]\">Editar</a></td>
			<td><a class=\"datos--link\" href=\"delete.php?idGetDelete=$registro[id]\">Eliminar</a></td>
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

		<tbody class="datos--cuerpo">
			<?php echo $tbody; ?>
		</tbody>
	</table>

</div>