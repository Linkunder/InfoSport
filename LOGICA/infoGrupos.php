<?php
include_once('../../PERSISTENCIA/DAOGrupo.php');


class infoGrupos{
	private static $instancia;
	private $persistenciaGrupo;

	private function __construct(){
		$this->persistenciaGrupo= new DAOGrupo();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}


	public function obtenerGrupos($id){
		$vectorData=$this->persistenciaGrupo->getGrupos($id);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerGrupos2($id){
		$vectorData=$this->persistenciaGrupo->getGrupos2($id);
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}




	public function obtenerCapitan(){
		$vectorData=$this->persistenciaGrupo->obtenerCapitan();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}






}

?>