<?php

class Grupo {
       private $id_grupo;
       private $nombre_grupo;
       private $numero_personas;
       private $fecha_creacion;
       private $capitan;
       private $descripcion;

       function __construct(){}
       function getId_grupo() {
           return $this->id_grupo;
       }

       function getNombre_grupo() {
           return $this->nombre_grupo;
       }
       function getDescripcion(){
          return $this->descripcion;
       }

       function getNumero_personas() {
           return $this->numero_personas;
       }

       function getFecha_creacion() {
           return $this->fecha_creacion;
       }


       function getCapitan() {
           return $this->capitan;
       }

       function setNombre_grupo($nombre_grupo) {
           $this->nombre_grupo = $nombre_grupo;
       }

      function setId_grupo($id_grupo) {
           $this->id_grupo = $id_grupo;
       }
       function setNumero_personas($numero_personas) {
           $this->numero_personas = $numero_personas;
       }

       function setFecha_creacion($fecha_creacion) {
           $this->fecha_creacion = $fecha_creacion;
       }


       function setCapitan($capitan) {
           $this->capitan = $capitan;
       }

       function setDescripcion($descripcion){
          $this->descripcion = $descripcion;
       }
       
}
?>
