<?php
session_start();
include_once('../../TO/Comentario.php');
include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlComentarios.php');
include_once('../../LOGICA/infoRecintos.php');



//Se comprueba antes lo del recinto
$idrecinto=$_POST["Recinto"]; 
$idjugador=$_SESSION['idJugador']; //Listo
$asunto=$_POST['Asunto'];		   //Listo
$detalle=$_POST['Comentario'];	   //Listo
$puntuacion=$_POST['puntaje'];	   //Listo
$fecha; //Listo
		//Creo que esta de mas

$nuevoComentario = new Comentario();

$nuevoComentario->setId_recinto($idrecinto);
$nuevoComentario->setId_jugador($idjugador);
$nuevoComentario->setAsunto($asunto);
$nuevoComentario->setDetalle($detalle);
$nuevoComentario->setPuntuacion($puntuacion);
$nuevoComentario->setFecha($fecha);
$nuevoComentario->setHora($hora);

$jefeComentario = controlComentarios::obtenerInstancia();
$jefeComentario->guardarComentario($nuevoComentario);

$jefeRecinto = infoRecintos::obtenerInstancia();
$k=$jefeComentario->obtienePromedioRecinto($idrecinto);
$jefeRecinto->actualizarPuntaje($k, $idrecinto); //me falta el promedio

echo "<script type='text/javascript'>alert('Comentario Agregado!');</script>";
header("Location:comentario.php");