<?php
include_once('../../PERSISTENCIA/DAOTercerTiempo.php');

class controlTercerTiempo{
	private static $instancia;
	private $persistenciaTercerTiempo;

	private function __construct(){
		$this->persistenciaTercerTiempo = new DAOTercerTiempo();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function obtenerTercerosTiempos(){
		$vectorData = $this->persistenciaTercerTiempo->getTercerosTiempos();
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}

	public function guardarTercerTiempo($tercer){
		$this->persistenciaTercerTiempo->insertarTercerTiempo($tercer);
	}

	public function agregarInformacion($idUltimoTercerTiempo, $lugar, $fecha, $hora, $comentario){
		$this->persistenciaTercerTiempo->agregarInformacion($idUltimoTercerTiempo, $lugar, $fecha, $hora, $comentario);
	}

	public function obtenerTercerEsp($idTercer){
		$vectorData=$this->persistenciaTercerTiempo->obtenerTercerEsp($idTercer);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function buscarTercer($idPartido){
		$vectorData=$this->persistenciaTercerTiempo->buscarTercer($idPartido);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}



}
?>
