<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="Nombreproducto">Nombreproducto:</label>
		<input class="form-control" name="Nombreproducto" required type="text" id="Nombreproducto" placeholder="Nombre producto">
		
		<label for="idmarca">idmarca:</label>
		<input class="form-control" name="idmarca" required type="text" id="idmarca" placeholder="idmarca">
		
		<label for="Tipodedulce">Tipodedulce:</label>
		<textarea required id="Tipodedulce" name="Tipodedulce" cols="30" rows="5" class="form-control"></textarea>
	
		<label for="Contenido">Contenido:</label>
		<input class="form-control" name="Contenido" required type="text" id="Contenido" placeholder="piezas">
		
				
		<label for="Pesounidad">Pesounidad:</label>
		<input class="form-control" name="Pesounidad" required type="text" id="Pesounidad" placeholder="Pesounidad">
	
		<label for="Preciounidad">Preciounidad:</label>
		<input class="form-control" name="Preciounidad" required type="number" id="Preciounidad" placeholder="Preciounidad">

		<label for="Preciopaquete">Preciopaquete:</label>
		<input class="form-control" name="Preciopaquete" required type="number" id="Preciopaquete" placeholder="Preciopaquete">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>