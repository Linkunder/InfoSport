<?php
include_once('../../PERSISTENCIA/DAOPartido.php');

class controlPartido{
	private static $instancia;
	private $persistenciaPartido;

	private function __construct(){
		$this->persistenciaPartido= new DAOPartido();
	}

		public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function existePartido($idrecinto,$idjugador){
			$vectorData=$this->persistenciaPartido->existePartido($idrecinto,$idjugador);
			if(empty($vectorData)){
				return 0;
			}
			return 1;

	}

	public function contarPartidos(){
		$vectorData=$this->persistenciaPartido->getPartidosJugados();
		return count($vectorData);
	}

	public function agregarPartido($partido){
		$this->persistenciaPartido->insertarPartido($partido);
	}






}