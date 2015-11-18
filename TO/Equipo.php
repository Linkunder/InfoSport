<?php

class Equipo {
    private $id_equipo;
    private $id_partido;
    private $id_jugador;
    private $nombre;
    private $color;
    function __construct(){}
    
    function getId_equipo() {
        return $this->id_equipo;
    }

    function getId_partido() {
        return $this->id_partido;
    }

    function getId_jugador() {
        return $this->id_jugador;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getColor() {
        return $this->color;
    }

    function setId_equipo($id_equipo) {
        $this->id_equipo = $id_equipo;
    }

    function setId_partido($id_partido) {
        $this->id_partido = $id_partido;
    }

    function setId_jugador($id_jugador) {
        $this->id_jugador = $id_jugador;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setColor($color) {
        $this->color = $color;
    }


}
?>