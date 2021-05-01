<?php
include('funciones.php');
session_start();
$vide=$_SESSION['ide1'];
$vnombre=$_POST['nombres'];
$vtipo=$_POST['progra_tipo'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"UPDATE programa set progra_nombre='{$vnombre}',progra_tipo='{$vtipo}' where progra_id='{$vide}'");

if ($miconexion->affected_rows>0)
 {
  echo "Actualizacion exitosa";
 }
?>