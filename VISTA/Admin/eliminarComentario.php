<?php 
session_start();
include_once('../../TO/Comentario.php');
include_once('../../LOGICA/controlComentarios.php');
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
$jefeComentario = controlComentarios::obtenerInstancia();
$vectorComentarios=$jefeComentario->obtenerComentario();
$jefeRecinto = infoRecintos::obtenerInstancia();
$id=$_GET['id_comentario'];
    $jefeComentario->eliminarComentario($id);
    header("Location:charts.php");
?>