<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}


include_once('../../TO/Grupo.php');
include_once('../../LOGICA/infoGrupos.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
include_once('../../TO/GrupoConformado.php');
include_once('../../LOGICA/infoGruposConformados.php');

$jefeJugador = infoJugadores::obtenerInstancia();
$correo = $_SESSION['sesion'];
$vectorJugador=$jefeJugador->buscarID($correo);
foreach($vectorJugador as $Jugador){    
	$idCapitan = $Jugador->getId_jugador();
}


//recibo los datos del formulario grupo

$nombre=$_POST['name'];
$descripcion=$_POST['descripcion'];
$time = time();
$fecha = date("Y-m-d", $time);


//creo el objeto grupo
$nuevoGrupo = new Grupo();
$nuevoGrupo->setNombre_grupo($nombre);
$nuevoGrupo->setDescripcion($descripcion);
$nuevoGrupo->setFecha_creacion($fecha);
$nuevoGrupo->setCapitan($idCapitan);

//derivar la trasacción a donde corresponde.---> a la logica
$jefeGrupo= infoGrupos::obtenerInstancia();
$jefeGrupo->guardarGrupo($nuevoGrupo);


// necesito el id del grupo que recien fue ingresado
$vectorGrupos = $jefeGrupo->obtenerGrupos1();
$ultimoGrupo = end($vectorGrupos);
$idUltimoGrupo = $ultimoGrupo->getId_grupo();


$nuevoJugadorGrupo= new GrupoConformado();
$nuevoJugadorGrupo->setIdJugador($idCapitan);
$nuevoJugadorGrupo->setIdGrupo($idUltimoGrupo);


$jefeGrupo2 = infoGruposConformados::obtenerInstancia();
$vectorGrupo=$jefeGrupo2->agregarJugador($nuevoJugadorGrupo);


echo "<script type='text/javascript'>alert('Grupo de jugadores agregado!');</script>";
header("Location:crearGrupo.php");
?>
