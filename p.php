<?php                                           $db = new SQLite3('apoyos2.db');                   $total = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados");                                                     $tecola  = $db->querySingle("SELECT COUNT(*) as count FROM beneficiados WHERE localidad = 'SAN JOSE EL RINCON'");

echo $tecola;
?>
