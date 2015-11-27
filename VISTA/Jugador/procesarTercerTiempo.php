<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/TercerTiempo.php');
include_once('../../LOGICA/controlTercerTiempo.php');

$idpartido= $_GET['id_partido'];
$aux = $_GET['auxiliar'];


if ($aux!=0){
// nuevo objeto tercer tiempo
$nuevoTercer = new TercerTiempo();
$nuevoTercer->setIdPartido($idpartido);

$jefeTercer = controlTercerTiempo::obtenerInstancia();
$jefeTercer->guardarTercerTiempo($nuevoTercer);

header("Location:elegirTercerTiempo.php");
} else {

// no quiso tercer tiempo

header("Location:resumenPartido.php");
}



?>
