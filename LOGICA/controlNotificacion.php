<?php
include_once('../../PERSISTENCIA/DAONotificacion.php');
class controlNotificacion{
	private static $instancia;
	private $persistenciaNotificacion;

	private function __construct(){
		$this->persistenciaNotificacion= new DAONotificacion();
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
		$this->persistenciaNotificacion->insertarRecinto($nuevorecinto);
	}

	public function modificarRecintoDos($nuevorecinto){
		$this->persistenciaRecinto->modificarRecintoDos($nuevorecinto);
	}
	
	public function modificarRecinto($id_recinto){
		$vectorData=$this->persistenciaRecinto->modificarRecinto($id_recinto);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerNotificaciones(){
		$vectorData=$this->persistenciaNotificacion->getRecintos();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerNotificacion($id_noti){
		$vectorData=$this->persistenciaNotificacion->obtenerNotificacion($id_noti);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function guardarImagen($id_recinto, $nombreImagen){
		$vectorData=$this->persistenciaNotificacion->guardarImagen($id_recinto, $nombreImagen);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}	

	public function actualizarPuntaje($promedio, $id_recinto){
		$this->persistenciaRecinto->actualizarPuntaje($promedio,$id_recinto);
	}

	public function obtenerNombreiD($id_recinto){
		return $this->persistenciaRecinto->obtenerNombreiD($id_recinto);

	}

	public function obtenerPrecio($id){
		return $this->persistenciaRecinto->obtenerPrecio($id);
	}


}
?>