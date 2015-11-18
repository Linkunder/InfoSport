<?php

class Categoria {
    private $id_categoria;
    private $nombre;
    private $descripcion;
    function __construct(){}
    
    function getIdcategoria() {
        return $this->id_categoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
?>