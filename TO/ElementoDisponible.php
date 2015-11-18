<?php


class ElementoDisponible {
    private $id_elemento;
    private $id_recinto;
    private $precio;
    private $cantidad;
    function __construct(){}

    function getId_elemento() {
        return $this->id_elemento;
    }

    function getId_recinto() {
        return $this->id_recinto;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function setId_elemento($id_elemento) {
        $this->id_elemento = $id_elemento;
    }

    function setId_recinto($id_recinto) {
        $this->id_recinto = $id_recinto;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }
}
?>