<!--
<body>
  <h1><center><a class="boton1" style="cursor: pointer" onClick="mostrar_ocultar('detalles2')"   >ocultar funcion</a></center></h1>
<div class="detalles" id="ocultar" >



</div>

<div>
<h1 class="detalles2" id="detalles2">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consectetur voluptatum, reiciendis 
  cum consequuntur totam aut explicabo necessitatibus placeat labore incidunt voluptate,
   laudantium neque ipsum suscipit maxime dolorem atque ut.</h1>



</div>



</body>
-->
<header>
<div class="titulo"><center>NUEVA IMAGEN TRIÁNGULO VERDE </center></div>
<br><br><br>

</header>
<div class="contenedor">
	
<section class="registrar">
	<p class="texto"> agregar<br><br><br>
		<a class="link"href="2.php">agregar beneficiados</a> </p>
		
</section>

<aside class="consultar">
	<p class="texto">
		beneficiados<br><br>
		<br><a class="link2"href="buscar.php">consultar beneficiados</a><br>
		</p>
</aside>


</div>
</div>
<div>
  <?php
$db = new SQLite3('apoyos2.db');                   $total = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados");                           
$tecola  = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados WHERE localidad = 'SANTA MARIA GUADALUPE TECOLA'");

$rincon = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados WHERE localidad = 'SAN JOSE EL RINCON'");

$libertad = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados WHERE localidad = 'LA LIBERTAD TECOLA'");

echo "<center><p class='info'>BENEFICIADOS totales --> <a class='link2'>$total</a></p></center>";
echo "<br><center><p class='info'>BENEFICIADOS en tecola --><a class='link2'>$tecola</a></p></center>";
echo "<br><center><p class='info'>BENEFICIADOS en san jose el rincon --> <a class='link2'>$rincon</a></p></center>";
echo "<br><center><p class='info'>BENEFICIADOS en LA LIBERTAD TECOLA --><a class='link2'>$libertad</a></p></center>";

?>
</div>
