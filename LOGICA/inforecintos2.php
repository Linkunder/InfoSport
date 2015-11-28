<?php
include_once('../PERSISTENCIA/DAORecintoDeportivo.php');
class infoRecintos{
	private static $instancia;
	private $persistenciaRecinto;

	private function __construct(){
		$this->persistenciaRecinto= new DAORecintoDeportivo();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function guardarRecinto($nuevorecinto){
    //mandamos el recinto a la base de datos....->persistencia
    //debería existir alguna logica de negocio..., por ejemplo si existe el cliente
		$this->persistenciaRecinto->insertarRecinto($nuevorecinto);
	}

	public function modificarRecintoDos($nuevorecinto){
		$this->persistenciaRecinto->modificarRecinto($nuevorecinto);
	}
	
	public function modificarRecinto($id_recinto){
		$vectorData=$this->persistenciaRecinto->modificarRecinto($id_recinto);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerRecinto(){
		$vectorData=$this->persistenciaRecinto->getRecintos();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerRecintosActivos(){
		$vectorData=$this->persistenciaRecinto->obtenerRecintosActivos();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}
}

?>