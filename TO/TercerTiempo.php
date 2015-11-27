<?php
class TercerTiempo{
private $id_tercer;
private $id_partido;
private $id_lugar;
private $fecha;
private $hora;
private $comentario;


function __construct(){}

function setIdTercer($id_tercer){
    $this->id_tercer=$id_tercer;
}
function setIdPartido($id_partido){
    $this->id_partido=$id_partido;
}

function setIdLugar($id_lugar){
	$this->id_lugar=$id_lugar;
}

function setFecha($fecha){
    $this->fecha=$fecha;
}
function setHora($hora){
    $this->hora=$hora;
}
function setComentario($comentario){
    $this->comentario=$comentario;
}

function getIdTercer(){return $this->id_tercer;}
function getIdPartido(){return $this->id_partido;}
function getIdLugar(){return $this->id_lugar;}
function getFecha(){return $this->fecha;}
function getHora(){return $this->hora;}
function getComentario(){return $this->comentario;}
    
}
?>