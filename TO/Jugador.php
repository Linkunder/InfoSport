<?php

class Jugador {
private $id_jugador;
private $nombre;
private $apellido;
private $fecha_nacimiento;
private $sexo;
private $correo;
private $directorio_foto;
private $posicion;
private $deporte_fav;
private $password;

function __construct(){}

function getId_jugador() {
    return $this->id_jugador;
}

function getNombre() {
    return $this->nombre;
}

function getApellido() {
    return $this->apellido;
}

function getFecha_nacimiento() {
    return $this->fecha_nacimiento;
}

function getSexo() {
    return $this->sexo;
}

function getCorreo() {
    return $this->correo;
}

function getDirectorio_foto() {
    return $this->directorio_foto;
}

function getPosicion() {
    return $this->posicion;
}

function getDeporte_fav() {
    return $this->deporte_fav;
}

function getPassword() {
    return $this->password;
}

function setId_jugador($id_jugador) {
    $this->id_jugador = $id_jugador;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setApellido($apellido) {
    $this->apellido = $apellido;
}

function setFecha_nacimiento($fecha_nacimiento) {
    $this->fecha_nacimiento = $fecha_nacimiento;
}

function setSexo($sexo) {
    $this->sexo = $sexo;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setDirectorio_foto($directorio_foto) {
    $this->directorio_foto = $directorio_foto;
}

function setPosicion($posicion) {
    $this->posicion = $posicion;
}

function setDeporte_fav($deporte_fav) {
    $this->deporte_fav = $deporte_fav;
}

function setPassword($password) {
    $this->password = $password;
}


}
