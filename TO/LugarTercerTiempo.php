<?php

class LugarTercerTiempo{

	private $idLugar;
	private $nombreLugar;
	private $direccionLugar;
	private $imagen;
	

	function __construct(){}

	 function getIdLugar(){
		return $this->idLugar;
	}

	 function getNombreLugar(){
		return $this->nombreLugar;
	}

	function getDireccion(){
		return $this->direccionLugar;
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

	function setDireccion($direccionLugar){
		$this->direccionLugar=$direccionLugar;
	}

	 function setImagen($imagen){
		$this->imagen = $imagen;
	}
	
}

?>