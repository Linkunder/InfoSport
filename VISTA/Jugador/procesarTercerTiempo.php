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

$vectorTerceros = $jefeTercer->obtenerTercerosTiempos();
$ultimoTercerTiempo = end($vectorTerceros);
$_SESSION['id_tercerTiempo'] = $ultimoTercerTiempo->getIdTercer();

header("Location:elegirTercerTiempo.php");
} else {

$nuevoTercer = new TercerTiempo();
$nuevoTercer->setIdPartido($idpartido);

$jefeTercer = controlTercerTiempo::obtenerInstancia();
$jefeTercer->guardarTercerTiempo($nuevoTercer);

$vectorTerceros = $jefeTercer->obtenerTercerosTiempos();
$ultimoTercerTiempo = end($vectorTerceros);
$_SESSION['id_tercerTiempo'] = $ultimoTercerTiempo->getIdTercer();
header("Location:resumenPartido.php");
}



?>
