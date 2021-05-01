<?php
include('funciones.php');
$vnombres=$_POST['nombres'];
$vtipo=$_POST['progra_tipo'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"INSERT into programa (progra_nombre, progra_tipo) values ('{$vnombres}','{$vtipo}')");

if($resultado)
 {
   echo "guardado exitoso";
 }
?>