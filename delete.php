<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>delete</title>
  </head>
  <body>
<?php
include 'conection.php';

$ID=$_POST['ID'];        

$consulta="DELETE FROM usuarios WHERE ID=$ID";
$insert=$conector->query($consulta);
$resultado = $conector->query("SELECT * FROM usuarios");
foreach ($resultado as $fila) {
 echo " <br>ID: ".$fila["ID"];
 echo " <br>Nombre: ".$fila["Nombre"];
 echo " <br>Apellido: ".$fila["apellidos"];
 echo " <br>edad: ".$fila["edad"];
 echo " <br>curso: ".$fila["curso"];
 echo " <br>puntuacion: ".$fila["puntuacion"];
 echo "<br>";
}
 ?>
  </body>
</html>
