<?php
include_once('../PERSISTENCIA/DAOJugador.php');
class infoJugadores{
	private static $instancia;
	private $persistenciaJugador;

	private function __construct(){
		$this->persistenciaJugador= new DAOJugador();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function guardarJugador($nuevojugador){
    //mandamos el recinto a la base de datos....->persistencia
    //debería existir alguna logica de negocio..., por ejemplo si existe el cliente
		$this->persistenciaJugador->insertarJugador($nuevojugador);
	}

	public function modificarJugadorDos($nuevojugador){
		$this->persistenciaJugador->modificarJugadorDos($nuevojugador);
	}

	public function modificarJugador($id_jugador){
		$vectorData=$this->persistenciaJugador->modificarJugador($id_jugador);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}
	
	public function obtenerJugador(){
		$vectorData=$this->persistenciaJugador->getJugadores();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerJugadorDos($correo){
		$vectorData=$this->persistenciaJugador->muestraJugadoresID($correo);
		if (count($vectorData)==0)
			echo "$correo";
			return null;
		return $vectorData;
	}
		public function obtenerJugadorId($id){
		$vectorData=$this->persistenciaJugador->muestraJugadoresID($id);
		if (empty($vectorData))
			return null;
		return $vectorData;
	}

	public function guardarImagen($id_jugador, $nombreImagen){
		$vectorData=$this->persistenciaJugador->guardarImagen($id_jugador, $nombreImagen);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	
}

?>