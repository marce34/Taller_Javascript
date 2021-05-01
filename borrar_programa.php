<!doctype html>
<html>

<head>
  <title>Eliminación de Programas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="miscss/estilos.css" rel="stylesheet" />
  <script src="js/bootstrap.js"></script>
</head>

<body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
            <div id="div4">
                <form name="formulario" role="form" method="post">
                 <div class=" col-md-12">
                    <strong class="lgris">Ingrese criterio de busqueda</strong>
                    <br> <br>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre del programa" /><br>
                        </div>
                        <div class="form-group col-md-3">
                            <input class="btn btn-success" type="submit" value="Eliminar">
                        </div>
                    </div>
                    <br>
            </div>
            </form>
            <br>
        </div>
        <div id="divconsulta2">
            <?php
 if ($_SERVER['REQUEST_METHOD']==='POST')
 {
 include('funciones.php');
 $vnombre=$_POST['nombre'];
 $miconexion=conectar_bd('', 'sena_bd');
 $resultado=consulta($miconexion,"SELECT * FROM programa WHERE progra_nombre='{$vnombre}'");
 $resultado2=consulta($miconexion,"DELETE FROM programa WHERE progra_nombre='{$vnombre}'");
 if($resultado->num_rows>0)
 {
 $fila = $resultado->fetch_object();
 echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";

 if($resultado2)
 echo "<br> Datos borrados exitosamente";
 }
 else{
 echo "No existen registros";
 }
 $miconexion->close();
 }?>
        </div>
    </div>
    </div>
</body>

</html>