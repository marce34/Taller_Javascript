<!doctype html>
<html>

<head>
    <title>Modificar programa</title>
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
                    <div class="col-md-12">
                        <strong class="lgris">Ingrese criterio de busqueda</strong>
                        <br> <br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <label class="lgris">Nombres:</label>
                            <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombre programa" required />
                        <br>
                        <div class="form-row">
                            <div class="form-group col-xs-2">
                               <label class="lgris">Tipo de programa:</label>
                                <select class="form-control" name="progra_tipo">
                                    <option value="" selected>seleccione opcion</option>
                                    <option value="TEGNOLOGO">TEGNOLOGO</option>
                                    <option value="TECNICO">TECNICO</option>
                                    <option value="VIRTUAL">VIRTUAL</option>
                                    <option value="ESPECIAL">ESPECIAL</option>
                                </select>
                            </div>
                    </div>
                            </div>
                            <div class="form-group col-md-3">
                                <input class="btn btn-success" type="submit" value="Consultar">
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
session_start();
$vnombre=$_POST['nombres'];
$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"SELECT * from programa where progra_nombre='{$vnombre}'");
if($resultado->num_rows>0)
{
$fila = $resultado->fetch_object();
$_SESSION['ide1']=$fila->progra_id;
?>
                <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                    <div class="col-md-12">
                        <strong class="lgris">Datos del programa</strong><br>


                        <label class="lgris">id:</label>
                        <input class="form-control" type="text" name="ide" disabled="disabled"
                            value="<?php echo $fila->progra_id ?>" />

                        <label class="lgris">Nombre:</label>
                        <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres"
                            required value="<?php echo $fila->progra_nombre ?>" />

                        <label class="lgris">tipo:</label>
                        <input class="form-control" style="text-transform:uppercase;" type="text" name="progra_tipo"
                            value="<?php echo $fila->progra_tipo ?>" required />

                        <br>
                        <input class="btn btn-success" type="submit" value="Actualizar">
                        <br>
                    </div>
                </form>
                <?php
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