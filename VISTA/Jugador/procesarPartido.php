<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

$jefeJugador = infoJugadores::obtenerInstancia();
$correo = $_SESSION['sesion'];
$vectorJugador = $jefeJugador->buscarID($correo);
foreach ($vectorJugador as $Jugador) {
	$idCapitan = $Jugador->getId_jugador();
}



// Recibo los datos del formulario partido
$fecha=$_POST['fecha'];
$hora = $_POST['hora'];
$jugadores = $_POST['jugadores'];
$_SESSION['fechaSes'] = $_POST['fecha'];

$_SESSION['nroJugadores']= $jugadores ;
$_SESSION['grupoPartido']= $_POST['grupo'];
$_SESSION['deporte']= $_POST['deporte'];
$estado = 1;

// Creo el objeto partido 
$nuevoPartido = new Partido();
$nuevoPartido->setIdJugador($idCapitan);
$nuevoPartido->setIdEstado($estado);
$nuevoPartido->setHora($hora);
$nuevoPartido->setFecha($fecha);
$nuevoPartido->setNroJugadores($jugadores);

$jefePartidos = controlPartido::obtenerInstancia();
$vectorPartidos = $jefePartidos->agregarPartido($nuevoPartido);

echo "<script type='text/javascript'>alert('Nuevo partido!');</script>";
header("Location:agendarPartido.php");

?>
