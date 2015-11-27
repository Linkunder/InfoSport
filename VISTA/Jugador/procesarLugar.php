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
include_once('../../TO/LugarTercerTiempo.php');
include_once('../../LOGICA/controlLugarTercerTiempo.php');

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$comentario = $_POST['comentario'];
$lugar = $_GET['id_lugar'];

$jefeTercer = controlTercerTiempo::obtenerInstancia();
$vector = $jefeTercer->obtenerTercerosTiempos();
$ultimo = end($vector);
$idUltimoTercerTiempo = $ultimo->getIdTercer();

// necesito actualizar info Tercer tiempo

$jefeTercer->agregarInformacion($idUltimoTercerTiempo, $lugar, $fecha, $hora, $comentario);

$message = "Tercer tiempo agendado!";
echo "<script type='text/javascript'>alert('$message');</script>";
$yourURL="resumenPartido.php";
echo ("<script>location.href='$yourURL'</script>");





?>
