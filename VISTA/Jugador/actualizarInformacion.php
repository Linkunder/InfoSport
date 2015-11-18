<?php

session_start();

include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
//recibo los datos del formulario cliente

$idjugador=$_POST['id_jugador']; 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$directorio_foto=$_POST['directorio_foto'];
$posicion=$_POST['posicion'];
$deporte_fav=$_POST['deporte_favorito'];
//$password=$_POST['pass'];

//creo el objeto recinto
$nuevoJugador= new Jugador();
//empaqueto la informacion de recinto en el objeto
$nuevoJugador->setId_jugador($idjugador);
$nuevoJugador->setNombre($nombre);
$nuevoJugador->setApellido($apellido);
$nuevoJugador->setFecha_nacimiento($fecha_nacimiento);
$nuevoJugador->setSexo($sexo);
$nuevoJugador->setCorreo($correo);
$nuevoJugador->setDirectorio_foto($directorio_foto);
$nuevoJugador->setPosicion($posicion);
$nuevoJugador->setDeporte_fav($deporte_fav);
//$nuevoJugador->setPassword($password);


//derivar la trasacción a donde corresponde.---> a la logica

$jefeJugador= infoJugadores::obtenerInstancia();
$jefeJugador->modificarJugadorDos($nuevoJugador);

$_SESSION['sesion']=$correo;

	$message = "Tu informacion actualizada correctamente.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	$yourURL="index2.php";
	echo ("<script>location.href='$yourURL'</script>");

?>