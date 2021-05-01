<!doctype html>
<html>

<head>
    <title>Registro de Ficha</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="miscss/estilos.css" rel="stylesheet" />
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
            <img src="IMAGENES/banner3.png"> <?php } ?>
            <div id="div3">
                <?php
 if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
 {
 ?>
                <form id="formulario" role="form" method="post" action="guardado_ficha.php">
                    <div class="col-md-12">
                        <strong class="lgris">Ingrese los datos de la ficha</strong>
                        <br>
                        <label class="lgris">FICHA:</label>
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombre programa" required />
                        <br>
                        <div class="form-row">
                            <div class="form-group col-xs-2">
                               <label class="lgris">Tipo de programa:</label>
                                <select class="form-control" name="progra_tipo">
                                    <option value="" selected>seleccione opcion</option>
                                    <option value="TEGNOLOGO" selected>TEGNOLOGO</option>
                                    <option value="TECNICO">TECNICO</option>
                                    <option value="VIRTUAL">VIRTUAL</option>
                                    <option value="ESPECIAL">ESPECIAL</option>
                                </select>
                            </div>
                    </div>
                    <br>
                    
                        <input class="btn btn-succes" type="submit" value="Guardar">
                </form>
                <?php
 }
 else
 {
 echo "No tiene permisos para realizar esta acción";
 }
 ?>
                <br>
            </div>
        </div>
    </div>
</body>

</html>