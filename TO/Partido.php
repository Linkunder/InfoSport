<?php
class Partido{
private $id_partido;
private $id_recinto;
private $id_jugador;
private $id_estado;
private $hora;
private $fecha;
private $cuota;
private $numeroJugadores;


function __construct(){}

function setIdPartido($idPartido){
    $this->id_partido=$idPartido;
}

function setIdRecinto($idRecinto){
    $this->id_recinto=$idRecinto;
}

function setIdJugador($idJugador){
    $this->id_jugador=$idJugador;
}
function setIdEstado($idEstado){
    $this->id_estado=$idEstado;
}
function setHora($horaPartido){
    $this->hora=$horaPartido;
}
function setFecha($fechaPartido){
    $this->fecha=$fechaPartido;
}
function setCuota($cuotaPartido){
    $this->cuota=$cuotaPartido;
}

function setNroJugadores($numero){
	$this->numeroJugadores=$numero;
}

function getIdPartido(){return $this->id_partido;}
function getIdRecinto(){return $this->id_recinto;}
function getIdJugador(){return $this->id_jugador;}
function getEstado(){return $this->id_estado;}
function getHora(){return $this->hora;}
function getFecha(){return $this->fecha;}
function getCuota(){return $this->cuota;} 
function getNroJugadores(){return $this->numeroJugadores;}   
}
?>