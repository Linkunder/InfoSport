<?php

session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

include_once('../../TO/Notificacion.php');
include_once('../../LOGICA/controlNotificacion.php');

// Debiera ser llevado al admin, para que el lo acepte o lo rechace

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$horario=$_POST['horario'];
$numero_canchas=$_POST['numero_canchas'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$superficie=$_POST['superficie'];


$nuevoRecinto= new Notificacion();
$nuevoRecinto->setNombre($nombre);
$nuevoRecinto->setDescripcion($descripcion);
$nuevoRecinto->setPrecio($precio);
$nuevoRecinto->setHorario($horario);
$nuevoRecinto->setDireccion($direccion);
$nuevoRecinto->setTelefono($telefono);
$nuevoRecinto->setCantidadCanchas($numero_canchas);
$nuevoRecinto->setSuperficie($superficie);

$jefe= controlNotificacion::obtenerInstancia();
$jefe->guardarRecinto($nuevoRecinto);


$message = "Notificacion enviada!";
echo "<script type='text/javascript'>alert('$message');</script>";
$yourURL="index2.php";
echo ("<script>location.href='$yourURL'</script>");



?>