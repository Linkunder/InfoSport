
<?php
session_start();
include_once('../PERSISTENCIA/conexion.php');

  $_SESSION['sesion']= $_POST['user'];
  $_SESSION["autentica"] = "NO";
  $_SESSION["idJugador"];
 $_SESSION["idJugadorBAN"];


$conexionBD= new conexion();

 
/* @var $_POST type */
$nombre= $_POST["user"];
$pass= $_POST["pass"];


$link=$conexionBD->getConexion();
 $query = "SELECT correo,password FROM jugador
          WHERE correo= '$nombre' AND 
          password= '$pass';"; 

$rs= mysql_query($query,$link);
$row=mysql_fetch_object($rs);
$nr= mysql_num_rows($rs);
mysql_close($link);


if($nr == 1){ 
echo 'Ingreso '; 
$link=$conexionBD->getConexion();
 $query = "SELECT id_jugador FROM jugador
          WHERE correo= '$nombre' AND 
          password= '$pass';"; 

$rs= mysql_query($query,$link);
$row=mysql_fetch_array($rs);
$_SESSION["idJugador"]=$row['id_jugador'];
 $_SESSION["idJugadorBAN"]=$row['id_jugador'];
mysql_close($link);



$_SESSION["autentica"] = "SI";



header("Location:../VISTA/Jugador/index2.php"); 

} 
else if($nr == 0) {    
$_SESSION["autentica"] = "NO";
header("Location:../VISTA/login2.php"); 

}   

?>

<script>
  function alerta(){
  	<?php 
  	

  		//if(){
  	?>

	alert("Su cuenta ha sido restringida por mal comportamiento
	comuniquese con el administrador
	");
	<?php //} ?>

    }

</script>

