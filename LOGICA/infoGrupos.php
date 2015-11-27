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
	
	public function obtenerGrupos1(){
		$vectorData=$this->persistenciaGrupo->obtenerTodos();
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}


	public function obtenerGrupos2($id){
		$vectorData=$this->persistenciaGrupo->getGrupos2($id);
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}

	public function guardarGrupo($grupo){
		$this->persistenciaGrupo->insertarGrupo($grupo);
	}




	public function obtenerCapitan(){
		$vectorData=$this->persistenciaGrupo->obtenerCapitan();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerNombreCapitan($id){
		$vectorData=$this->persistenciaGrupo->obtenerNombreCapitan($id);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerNombreGrupo($id_grupo2){
		return $this->persistenciaGrupo->obtenerNombreGrupo($id_grupo2);
	}
	





}

?>
