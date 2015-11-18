<?php
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
//recibo los datos del formulario cliente

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$horario=$_POST['horario'];
$puntuacion=$_POST['puntuacion'];
$directorio_imagen=$_POST['directorio_imagen'];
$numero_canchas=$_POST['numero_canchas'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$superficie=$_POST['superficie'];

//creo el objeto recinto
$nuevoRecinto= new RecintoDeportivo();
//empaqueto la informacion de recinto en el objeto
$nuevoRecinto->setNombre($nombre);
$nuevoRecinto->setDescripcion($descripcion);
$nuevoRecinto->setPrecio($precio);
$nuevoRecinto->setHorario($horario);
$nuevoRecinto->setPuntuacion($puntuacion);
$nuevoRecinto->setImagen($directorio_imagen);
$nuevoRecinto->setDireccion($direccion);
$nuevoRecinto->setTelefono($telefono);
$nuevoRecinto->setCantidadCanchas($numero_canchas);
$nuevoRecinto->setSuperficie($superficie);

//derivar la trasacción a donde corresponde.---> a la logica

$jefeRecinto= infoRecintos::obtenerInstancia();
$jefeRecinto->guardarRecinto($nuevoRecinto);


echo "<script type='text/javascript'>alert('Recinto agregado!');</script>";
header("Location:agregarFotoRecinto.php");

?>