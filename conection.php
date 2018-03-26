<?php
$conector = new mysqli("localhost",
    "root", "", "5");
    if ($conector-> connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }
?>
