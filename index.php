<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>activiad 5</title>
  </head>
  <body>

<h2>Inserte en la base de datos</h2>
<h4><a href="userlist.php">userlist<a/></h4><br>
    <form class="" action="insert_select.php" method="post">

      Nombre: <input type="text" name="Nombre"><br>
      Apellidos: <input type="text" name="apellidos"><br>
      Edad: <input type="text" name="edad"><br>
      Curso: <input type="text" name="curso"><br>
      Puntuacion: <input type="text" name="puntuacion"><br>
      <br>
      <input type="submit" name="Enviar" value="Enviar">
    </form>
<br>
<h2>Actualice la base de datos</h2>
<form class="" action="update.php" method="post">

  ID: <input type="text" name="ID"><br>
  Nombre: <input type="text" name="Nombre"><br>
  Apellidos: <input type="text" name="apellidos"><br>
  Edad: <input type="text" name="edad"><br>
  Curso: <input type="text" name="curso"><br>
  Puntuacion: <input type="text" name="puntuacion"><br>
  <br>
  <input type="submit" name="Enviar" value="Enviar">
</form>

<h2>Borre por id</h2>
<form class="" action="delete.php" method="post">

  ID: <input type="text" name="ID"><br>
  <br>
  <input type="submit" name="Enviar" value="Enviar">
</form>


  </body>
</html>
