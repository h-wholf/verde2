<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>

<?php
/*
	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/




if (empty($_POST["name"])) {

	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}





#Si llegamos hasta aquí es porque los datos al menos están definidos
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

# creamos una variable que tendrá la sentencia
$sentencia = $baseDeDatos->prepare("INSERT INTO beneficiados(nombre, apellido_p, apellido_m, localidad, tipo, afiliado,fecha,cel,dir)
	VALUES(:name, :apellido_p, :apellido_m, :localidad, :tipo, :afiliado, :fecha, :cel, :dir);");


# Debemos pasar a bindParam las variables, no podemos pasar el dato directamente
# debido a que la llamada es por referencia


$sentencia->bindParam(":name", $_POST["name"]);
$sentencia->bindParam(":apellido_p", $_POST["apellido_p"]);
$sentencia->bindParam(":apellido_m", $_POST["apellido_m"]);
$sentencia->bindParam(":localidad", $_POST["localidad"]);
$sentencia->bindParam(":tipo", $_POST["tipo"]);
$sentencia->bindParam(":afiliado", $_POST["afiliado"]);
$sentencia->bindParam(":fecha", $_POST["fecha"]);
$sentencia->bindParam(":cel", $_POST["cel"]);
$sentencia->bindParam(":dir", $_POST["dir"]);



$resultado = $sentencia->execute();
if($resultado === true){
	echo "SE REGISTRÓ CORRECTO";
}else{
	echo "Lo siento, ocurrió un error";
}


?>
<script type="text/javascript">
	function redireccionarPagina() {
  window.location = "2.php";
}
setTimeout("redireccionarPagina()", 2000);
</script>
