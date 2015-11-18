<?php
class RecintoDeportivo{
private $id_recinto;
private $nombre;
private $descripcion;
private $precio;
private $horario;
private $puntuacion; //creo que este no iba
private $superficie;
private $directorio_imagen;
private $numero_canchas;
private $direccion;
private $telefono;

function __construct(){}

function setIdRecinto($idRecinto){
    $this->id_recinto=$idRecinto;
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
function setImagen($linkImagen){
    $this->directorio_imagen=$linkImagen;
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




function getIdRecinto(){return $this->id_recinto;}
function getNombre(){return $this->nombre;}
function getDescripcion(){return $this->descripcion;}
function getPrecio(){return $this->precio;}
function getHorario(){return $this->horario;}
function getPuntuacion(){return $this->puntuacion;}
function getImagen(){return $this->directorio_imagen;}
function getDireccion(){return $this->direccion;}
function getTelefono(){return $this->telefono;}
function getCantidadCanchas(){return $this->numero_canchas;}
function getSuperficie(){return $this->superficie;}
}
?>