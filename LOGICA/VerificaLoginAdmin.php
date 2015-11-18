
<?php
session_start();
include_once('../PERSISTENCIA/conexion.php');

  $_SESSION['sesion']= $_POST['username'];
  $_SESSION["autentica"] = "NO";
  //echo $_SESSION['sesion'];



$conexionBD= new conexion();

 
/* @var $_POST type */
$nombre= $_POST["username"];
$pass= $_POST["password"];

$_SESSION["director"]= 0;

$link=$conexionBD->getConexion();
 $query = "SELECT correo,password,rango FROM jugador
          WHERE correo= '$nombre' AND 
          password= '$pass' AND rango='1';"; 



$rs= mysql_query($query,$link);
$row=mysql_fetch_object($rs);
$nr= mysql_num_rows($rs);
mysql_close($link);





if($nr == 1 ){ 
echo 'Ingreso '; 

$_SESSION["autentica"] = "SI";
$_SESSION["director"]=1;

header("Location:../VISTA/Admin/index.php"); 

} 
else if($nr == 0) {    
$_SESSION["autentica"] = "NO";
header('Location: ' . $_SERVER['HTTP_REFERER']);

}   

?>

