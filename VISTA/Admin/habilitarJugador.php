<?php

include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

$id_jugador = $_GET['id_jugador'];

$jefe = infoJugadores::obtenerInstancia();

//Aqui solo se pasara la tarea de inhabilitar al INFOJUGADORES

$jefe->habilitarJugador($id_jugador);

header("Location:jugadores.php"); 

















?>