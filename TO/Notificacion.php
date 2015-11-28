<?php
class Notificacion{
private $id_notificacion;
private $nombre;
private $descripcion;
private $precio;
private $horario;
private $puntuacion; //creo que este no iba
private $superficie;
private $numero_canchas;
private $direccion;
private $telefono;
private $foto;

function __construct(){}

function setIdNotificacion($idNotificacion){
    $this->id_notificacion=$idNotificacion;
}

function setNombre($nombreRecinto){
    $this->nombre=$nombreRecinto;
}

function setDescripcion($descripcionRecinto){
    $this->descripcion=$descripcionRecinto;
}
function setPrecio($precioRecinto){
    $this->precio=$precioRecinto;
}
function setHorario($horarioRecinto){
    $this->horario=$horarioRecinto;
}
function setPuntuacion($puntuacion){
    $this->puntuacion=$puntuacion;
}

function setDireccion($direccionRecinto){
    $this->direccion=$direccionRecinto;
}
function setTelefono($telefonoRecinto){
    $this->telefono=$telefonoRecinto;
}
function setCantidadCanchas($numeroCanchas){
    $this->numero_canchas=$numeroCanchas;
}

function setSuperficie($superficie){
    $this->superficie=$superficie;
}

function setFoto($foto){
    $this->foto=$foto;
}




function getIdNotificacion(){return $this->id_notificacion;}
function getNombre(){return $this->nombre;}
function getDescripcion(){return $this->descripcion;}
function getPrecio(){return $this->precio;}
function getHorario(){return $this->horario;}
function getPuntuacion(){return $this->puntuacion;}
function getDireccion(){return $this->direccion;}
function getTelefono(){return $this->telefono;}
function getCantidadCanchas(){return $this->numero_canchas;}
function getSuperficie(){return $this->superficie;}
function getFoto(){return $this->foto;}
}
?>