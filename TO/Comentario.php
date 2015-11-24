<?php

class Comentario {
    private $id_comentario;
    private $id_recinto;
    private $id_jugador;
    private $asunto;
    private $detalle;
    private $puntuacion;
    private $fecha;
    private $hora;
    function __construct(){}
    
    function getId_comentario(){
        return $this->id_comentario;
    }
    function getId_recinto() {
        return $this->id_recinto;
    }

    function getId_jugador() {
        return $this->id_jugador;
    }

    function getAsunto() {
        return $this->asunto;
    }

    function getDetalle() {
        return $this->detalle;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId_recinto($id_recinto) {
        $this->id_recinto = $id_recinto;
    }

    function setId_jugador($id_jugador) {
        $this->id_jugador = $id_jugador;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }
    function setId_comentario($id_comentario){
        $this->id_comentario= $id_comentario;
    }

}
?>