<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Nombreproducto"]) || !isset($_POST["idmarca"]) || !isset($_POST["Tipodedulce"]) || !isset($_POST["Contenido"]) || !isset($_POST["Pesounidad"]) || !isset($_POST["Preciounidad"]) || !isset($_POST["Preciopaquete"]) || !isset($_POST["existencia"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$Nombreproducto = $_POST["Nombreproducto"];
$idmarca = $_POST["idmarca"];
$Tipodedulce = $_POST["Tipodedulce"];
$Contenido = $_POST["Contenido"];
$Pesounidad = $_POST["Pesounidad"];
$Preciounidad = $_POST["Preciounidad"];
$Preciopaquete = $_POST["Preciopaquete"];
$existencia = $_POST["existencia"];


$sentencia = $base_de_datos->prepare("INSERT INTO productos(Nombreproducto, idmarca, Tipodedulce, Contenido, Pesounidad, Preciounidad, Preciopaquete, existencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Nombreproducto, $idmarca, $Tipodedulce, $Contenido, $Pesounidad, $Preciounidad, $Preciopaquete, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>