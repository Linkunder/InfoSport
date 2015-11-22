<?php
include_once('../../PERSISTENCIA/DAOGrupoConformado.php');
include_once('../../PERSISTENCIA/DAOJugador.php');



class infoGruposConformados{
	private static $instancia;
	private $persistenciaGrupoConformado;

	private function __construct(){
		$this->persistenciaGrupoConformado= new DAOGrupoConformado();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function obtenerGrupos($id){
		echo "Logica: $id";
		$vectorData=$this->persistenciaGrupoConformado->getGrupos($id);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}


	public function obtenerGrupoConformado(){
		$vectorData=$this->persistenciaGrupoConformado->getGrupoConformado();
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}

	public function obtenerJugadores($idgrupo){
		$vectorData=$this->persistenciaJugador->getJugadores($idgrupo);
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;

	}
	
	public function agregarJugador($nuevoJugador){
		$vectorData=$this->persistenciaGrupoConformado->agregarJugador($nuevoJugador);
		if (count($vectorData)==0){
			return null;
		}
		return $vectorData;
	}

	public function contarJugadores($id){
		$numero=$this->persistenciaGrupoConformado->contarJugadores($id);
		return $numero;		
	}

}

?>
