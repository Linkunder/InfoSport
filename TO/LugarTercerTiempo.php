<?php

class LugarTercerTiempo{

	private $idLugar;
	private $nombreLugar;
	private $imagen;

	function __construct(){}

	 function getIdLugar(){
		return $this->idLugar;
	}

	 function getNombreLugar(){
		return $this->nombreLugar;
	}

	 function getImagen(){
		return $this->imagen;
	}

	 function setIdLugar($idLugar){
		$this->idLugar= $idLugar;
	}

	 function setNombreLugar($nombreLugar){
		$this->nombreLugar = $nombreLugar;
	}

	 function setImagen($imagen){
		$this->imagen = $imagen;
	}
}

?>