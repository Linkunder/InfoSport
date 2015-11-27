<?php

include_once('../../PERSISTENCIA/DAOLugarTercerTiempo.php');

class controlLugarTercerTiempo{
	private static $instancia;
	private $persistenciaLugarTercerTiempo;

	private function __construct(){
		$this->persistenciaLugarTercerTiempo = new DAOLugarTercerTiempo();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function obtenerLugares(){
		$vectorData = $this->persistenciaLugarTercerTiempo->obtenerLugares();
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}


}

?>
