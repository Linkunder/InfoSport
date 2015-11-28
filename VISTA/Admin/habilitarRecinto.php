<?php

include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');

$id_recinto = $_GET['id_recinto'];

$jefe = infoRecintos::obtenerInstancia();

//Aqui solo se pasara la tarea de inhabilitar al INFOJUGADORES

$jefe->habilitarRecinto($id_recinto);

header("Location:recintos.php"); 

















?>