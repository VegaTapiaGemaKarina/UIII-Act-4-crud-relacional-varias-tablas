<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombreproducto</th>
					<th>idmarca</th>
					<th>Tipodedulce</th>
					<th>Contenido</th>
					<th>Pesounidad</th>
					<th>Preciounidad</th>
					<th>Preciopaquete</th>
					<th>existencia</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $productos){ ?>
				<tr>
					<td><?php echo $productos->id ?></td>
					<td><?php echo $productos->Nombreproducto ?></td>
					<td><?php echo $productos->idmarca ?></td>
					<td><?php echo $productos->Tipodedulce ?></td>
					<td><?php echo $productos->Contenido ?></td>
					<td><?php echo $productos->Pesounidad ?></td>
					<td><?php echo $productos->Preciounidad ?></td>
					<td><?php echo $productos->Preciopaquete ?></td>
					<td><?php echo $productos->existencia ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $productos->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $productos->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>