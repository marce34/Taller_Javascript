<!doctype html>
<html>
  <head>
  <title>Consultar Programas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link href="miscss/estilos.css" rel="stylesheet"/>
  <script src="js/bootstrap.js"></script>
 </head>
 <body>
  <div id="divconsulta" class="container">
   <br>
    <div id="div2">
   <div id="div4" >
     <form name="formulario" role="form" method="post">
       <div class="col-md-12">
         <strong class="lgris">Ingrese criterio de busqueda</strong>
         <br> <br>
         <div class="form-row">
         <div class="form-group col-md-3">
       <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="NOMBRE PROGRAMA"/>
        </div>
        <div class="form-row">
            <div class="form-group col-xs-2">
                <label class="lgris">Tipo de programa:</label>
                <select class="form-control" name="progra_tipo">
                    <option value="" selected>Seleccionar Opcion</option>
                    <option value="TEGNOLOGO">TEGNOLOGO</option>
                    <option value="TECNICO">TECNICO</option>
                    <option value="VIRTUAL">VIRTUAL</option>
                    <option value="ESPECIAL">ESPECIAL</option>
                </select>
            </div>
          <div class="form-group col-md-3">
        <input class="btn btn-success" type="submit"value="Consultar" >
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
 $vnombre=$_POST['nombres'];
 $vtipo=$_POST['progra_tipo'];
 $miconexion=conectar_bd('', 'sena_bd');
 $resultado=consulta($miconexion,"SELECT * from programa where trim(progra_nombre) like '%{$vnombre}%' and (trim(progra_tipo) like'%{$vtipo}%')");
 if($resultado->num_rows>0)
  {
 while ($fila = $resultado->fetch_object())
   {
    echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";
  }
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