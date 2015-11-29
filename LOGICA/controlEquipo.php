<?php

include_once('../../PERSISTENCIA/DAOEquipo.php');

class controlEquipo{
	private static $instancia;
	private $persistenciaEquipo;

	private function __construct(){
		$this->persistenciaEquipo = new DAOEquipo();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function obtenerIDJugadores($idPartido){
		$vectorData = $this->persistenciaEquipo->obtenerIDJugadores($idPartido);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}



}

?>
