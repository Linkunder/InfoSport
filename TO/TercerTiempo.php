<?php
class TercerTiempo{
private $id_tercer;
private $id_partido;
private $descripcion;
private $fecha;
private $link_ubicacion;
private $cuota_tercer;


function __construct(){}

function setIdTercer($idTercer){
    $this->id_tercer=$idTercer;
}
function setIdPartido($idPartido){
    $this->id_partido=$idPartido;
}

function setNombre($idPartido){
    $this->id_partido=$idPartido;
}

function setDescripcion($descripcionTercer){
    $this->descripcion=$descripcionTercer;
}
function setFecha($fechaTercer){
    $this->fecha=$fechaTercer;
}
function setLink_ubicacion($linkUbicacionTercer){
    $this->fecha=$linkUbicacionTercer;
}
function setCuota($cuotaTercer){
    $this->cuota_tercer=$cuota_tercer;
}

function getIdTercer(){return $this->id_tercer;}
function getIdPartido(){return $this->id_partido;}
function getDescripcion(){return $this->descripcion;}
function getFecha(){return $this->fecha;}
function getUbicacion(){return $this->link_ubicacion;}
function getCuota(){return $this->cuota_tercer;}
    
}
?>