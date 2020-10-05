<?php
	require_once "../clases/conexion.php";
	$con = new conectar();
	$conexion = $con->conexion();
	$sql = "SELECT id_videojuego, Nombre, Tipo, Fecha_Lanzamiento, Descripcion FROM t_videojuegos";
	$result = mysqli_query($conexion, $sql);  
?>

 <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">agregar nuevo videojuego </button>
 <hr>
 <table class="table table-hover" id="tablaDatos"> 
 	<thead>
 		<tr>
 			<td>id_videojuego</td>
 			<td>nombre</td>
 			<td>tipo</td>
 			<td>fechadelanzamiento</td>
            <td>descripcion</td> 
            <td>editar</td>
            <td>eliminar</td> 
 		</tr>
 	</thead>
 	<tbody>
		<?php 
		while ($mostrar=mysqli_fetch_row($result)) {
			?>
			<tr>
				<td><?php echo $mostrar[0] ?></td>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td><?php echo $mostrar[4] ?></td>
				<td style="text-align: center">
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
						<span class="fas fa-edit"></span>
					</span>
				</td>
				<td style="text-align: center">
					<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-trash"></span>
					</span>
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
 </table>
 
 <script type="text/javascript">
 	$(document).ready(function(){
 		$("#tablaDatos").DataTable();
 	});
 </script>