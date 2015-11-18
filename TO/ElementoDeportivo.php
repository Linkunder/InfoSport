<?php
class ElementoDeportivo{
private $id_elemento;
private $nombre;
private $descripcion;


function __construct(){}

function setIdElemento($idElemento){
    $this->id_elemento=$idElemento;
}

function setNombre($nombreElemento){
    $this->nombre=$nombreElemento;
}

function setDescripcion($descripcionElemento){
    $this->descripcion=$descripcionElemento;
}

function getIdElemento(){return $this->id_elemento;}
function getNombre(){return $this->nombre;}
function getDescripcion(){return $this->descripcion;}

    
}
?>