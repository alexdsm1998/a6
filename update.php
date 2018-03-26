<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include 'conection.php';

    $ID=$_POST['ID'];
    $Nombre=$_POST['Nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $curso=$_POST['curso'];
    $puntuacion=$_POST['puntuacion'];

    $consulta="UPDATE usuarios SET Nombre='$Nombre',apellidos='$apellidos',edad='$edad',curso='$curso',puntuacion='$puntuacion' WHERE ID=$ID";
    $insert=$conector->query($consulta);

    include 'userlist.php';
     ?>
  </body>
</html>
