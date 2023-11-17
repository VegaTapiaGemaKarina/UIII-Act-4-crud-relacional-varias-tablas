<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="Nombreproducto">Nombreproducto:</label>
			<input value="<?php echo $producto->Nombreproducto ?>" class="form-control" name="Nombreproducto" required type="text" id="Nombreproducto" placeholder="Escribe Nombre">

			<label for="idmarca">idmarca:</label>
			<input value="<?php echo $producto->idmarca ?>" class="form-control" name="idmarca" required type="text" id="idmarca" placeholder="idmarca">

			<label for="Tipodedulce">Tipodedulce:</label>
			<textarea required id="Tipodedulce" name="Tipodedulce" cols="30" rows="5" class="form-control"><?php echo $producto->Tipodedulce ?></textarea>

			<label for="Contenido">Contenido:</label>
			<input value="<?php echo $producto->Contenido ?>" class="form-control" name="Contenido" required type="text" id="Contenido" placeholder="Contenido">
			
			<label for="Pesounidad">Pesounidad:</label>
			<input value="<?php echo $producto->Pesounidad ?>" class="form-control" name="Pesounidad" required type="text" id="Pesounidad" placeholder="Peso unidad">

			<label for="Preciounidad">Preciounidad:</label>
			<input value="<?php echo $producto->Preciounidad ?>" class="form-control" name="Preciounidad" required type="number" id="Preciounidad" placeholder="Preciounidad">
			
			<label for="Preciopaquete">Preciopaquete:</label>
			<input value="<?php echo $producto->Preciopaquete ?>" class="form-control" name="Preciopaquete" required type="number" id="Preciopaquete" placeholder="Preciopaquete">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
