<?php

class TipoRecinto {
    private $id_Recinto;
    private $id_Categoria;
    function __construct(){}
    function getId_Recinto() {
        return $this->id_Recinto;
    }

    function getId_Categoria() {
        return $this->id_Categoria;
    }

    function setId_Recinto($id_Recinto) {
        $this->id_Recinto = $id_Recinto;
    }

    function setId_Categoria($id_Categoria) {
        $this->id_Categoria = $id_Categoria;
    }


}
?>