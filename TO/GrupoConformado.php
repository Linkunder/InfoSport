<?php

class GrupoConformado {

    private $id_jugador;
    private $id_grupo;


function __construct(){}

function getIdGrupo(){
	return $this->id_grupo;
}
function getIdJugador() {
    return $this->id_jugador;
}

 function setIdJugador($id_jugador) {
    $this->id_jugador = $id_jugador;
}
 function setIdGrupo($id_grupo) {
    $this->id_grupo = $id_grupo;
}

}
?>