<?php

class Estado {
    private $id_estado;
    private $nombre;
    private $detalle;
    function __construct(){}
    function getId_estado() {
        return $this->id_estado;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDetalle() {
        return $this->detalle;
    }

    function setId_estado($id_estado) {
        $this->id_estado = $id_estado;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

}
?>