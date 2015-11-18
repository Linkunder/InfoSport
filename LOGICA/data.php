<?php

include_once('../PERSISTENCIA/conexion.php');
$con= new conexion();

$link=$con->getConexion();

$query = "SELECT * FROM Jugador"

$result = mysql_query($query,$link);


while($row = mysql_fetch_array($result)) {
  echo $row['sexo'] . "\t" . $row['deporte_fav']. "\n";
}

mysql_close($link);
?>