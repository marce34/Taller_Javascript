<?php
function conectar_bd($clave,$basedatos)
 {
    $conexion = new mysqli('localhost','root',$clave,$basedatos);

    if ($conexion->connect_error)
    {
        die('Error de conexion('.$mysqli->connect_errno.')'.$mysqli->connect_error);
        //echo $mysqli->connect_errno."  ".$mysqli->connect_error
    }
    return $conexion;
  }

 function consulta ($conexion,$consulta_sql)
 {
    $resultado=$conexion->query($consulta_sql);
     if (!$resultado)
  { 
      echo 'No se pudo ejecuatar la consulta:'. $conexion->error;
      exit;
 }

 return $resultado;
 }
?>