<?php
	include('connection.php');
	$queryRead = "SELECT * FROM productos";
	$listProducts = mysqli_query($conn,$queryRead);
?>
<div class="div-read">
	<h1>Productos Registrados</h1>
	<table>
		<thead>
			<tr>
				<td><b>id</b></td>
				<td><b>nombre</b></td>
				<td><b>cantidad</b></td>
				<td><b>precio</b></td>
				<td><b>acciones</b></td>
			</tr>
		</thead>
		<tbody>	
			<?php 
				while ($row = mysqli_fetch_array($listProducts)) {
					echo "
								<tr>
									<td>$row[0]</td>
								  <td>$row[1]</td>
								  <td>$row[2]</td>
								  <td>$row[3]</td>
								  <td>
								  	<a href='update.php?idGetUpdate=$row[0]
											&nombreGetUpdate=$row[1]
											&cantidadGetUpdate=$row[2]
											&precioGetUpdate=$row[3]'
								 		>editar
								 		</a>
							 	  </td>
							 	  <td>
										<a href='delete.php?idGetDelete=$row[0]'>borrar</a>
							 	  </td>
						 	  </tr>
					 	  	";
				}
			?>
		</tbody>
	</table>
</div>