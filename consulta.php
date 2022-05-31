<?php

$c = ($_POST["NOMBRE"]);
/*

	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

$resultado = $baseDeDatos->query("SELECT * FROM beneficiados where nombre ='$c';");
$datos = $resultado->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <link rel="stylesheet" href="estilos.css">
    <title>REGISTRO CIVIL DE SANTA MARIA GUADALUPE TECOLA</title>
    <script type="text/javascript" src="ocultar.js"></script>
	<style> 
		table, th, td {
		    border: 2px solid #202020;
		}
	</style>
</head>
<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>
<body>
	<center>
	<table class="tabla">
		<thead>
			<tr>

				<th>NOMBRE</th>
				<th>COMPLETO</th>
				<th></th>
				<th> localidad </th>
			  <th> tipo de apoyo</th>
			  <th> es del grupo </th>
			  <th> fecha de la entrega</th>
			  <th> numero de celular</th>
			</tr>
		</thead>
		<tbody>
			<!-- Notar que siempre se repite lo que hay entre <tr> y </tr> -->
			<!-- Así que lo hacemos en un ciclo foreach -->

			<?php foreach($datos as $d){ /*Notar la llave que dejamos abierta ,  aqui se pone el nombre de el compo de la tabla que se decean mostrar los datos*/ ?>
				<tr>
					<td><?php echo $d->nombre?></td>
					<td><?php echo $d->apellido_p ?></td>
					<td><?php echo $d->apellido_m ?></td>
					<td><?php echo $d->localidad?></td>
					<td><?php echo $d->tipo?></td>
				<td><?php echo $d->afiliado?></td>
				<td><?php echo $d->fecha?></td>
				
				<td><?php echo $d->cel?></td></tr>
			<?php } /*Cerrar llave, fin de foreach*/ ?>

		</tbody>
	</table></center>
	<br>
	<br>
	</center>
<div><center><a class="link2" href="index.php">regresar al inicio</a></center></div>
		
	</section>
</div>
</body>
</html>


