<?php
/*
	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

$resultado = $baseDeDatos->query("SELECT * FROM beneficiados;");
$datos = $resultado->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tabla estática</title>
	<style>
		table, th, td {
		    border: 1px solid blue;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>nombre</th>
				<th>apellido_p</th>
				<th>apellido_m</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<!-- Notar que siempre se repite lo que hay entre <tr> y </tr> -->
			<!-- Así que lo hacemos en un ciclo foreach -->

			<?php foreach($datos as $d){ /*Notar la llave que dejamos abierta*/ ?>
				<tr>
					<td><?php echo $d->nombre?></td>
					<td><?php echo $d->apellido_p ?></td>
					<td><?php echo $d->apellido_m?></td>
					<td>
						<a href="editar.php?id=<?php echo $d->id ?>">Editar</a>
					</td>
					<td>
						<a href="eliminar.php?id=<?php echo $d->id ?>">Eliminar</a>
					</td>
				</tr>
			<?php } /*Cerrar llave, fin de foreach*/ ?>

		</tbody>
	</table>
</body>
</html>