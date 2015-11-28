<?php
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
//recibo los datos del formulario cliente

//traer datos desde notificaciones.php

include_once('../../TO/Notificacion.php');
include_once('../../LOGICA/controlNotificacion.php');

$id_noti = $_GET['id_notificacion'];

$jefeNotificacion = controlNotificacion::obtenerInstancia();
$vectorNotificacion = $jefeNotificacion->obtenerNotificacion($id_noti);

foreach ($vectorNotificacion as $Notificacion) {
	$nombre= $Notificacion->getNombre();
	$descripcion= $Notificacion->getDescripcion();
	$precio= $Notificacion->getPrecio();
	$horario= $Notificacion->getHorario();
	$numero_canchas= $Notificacion->getCantidadCanchas();
	$direccion= $Notificacion->getDireccion();
	$telefono= $Notificacion->getTelefono();
	$superficie= $Notificacion->getSuperficie();
	$foto = $Notificacion->getFoto();
}


//creo el objeto recinto
$nuevoRecinto= new RecintoDeportivo();
//empaqueto la informacion de recinto en el objeto
$nuevoRecinto->setNombre($nombre);
$nuevoRecinto->setDescripcion($descripcion);
$nuevoRecinto->setPrecio($precio);
$nuevoRecinto->setHorario($horario);
$nuevoRecinto->setDireccion($direccion);
$nuevoRecinto->setTelefono($telefono);
$nuevoRecinto->setCantidadCanchas($numero_canchas);
$nuevoRecinto->setSuperficie($superficie);
$nuevoRecinto->setImagen($foto);



//derivar la trasacción a donde corresponde.---> a la logica

$jefeRecinto= infoRecintos::obtenerInstancia();
$jefeRecinto->guardarRecinto($nuevoRecinto);

// el recinto ya esta guardado

$vectorRecintos = $jefeRecinto->obtenerRecinto();
$ultimo = end($vectorRecintos);
$idUltimo = $ultimo->getIdRecinto();


$target_destino = "../images/recintos/".$foto;
$target_origen = "../images/notificaciones/".$foto;

copy($target_origen, $target_destino);

$jefe= infoRecintos::obtenerInstancia();
$jefe->guardarImagen($idUltimo,$foto);
$message = "Recinto agregado!";
echo "<script type='text/javascript'>alert('$message');</script>";
$yourURL="index.php";
echo ("<script>location.href='$yourURL'</script>");


?>