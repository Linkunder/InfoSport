<?php
include_once('../../PERSISTENCIA/DAOComentario.php');

class controlComentarios{
	private static $instancia;
	private $persistenciaComentario;



	private function __construct(){
		$this->persistenciaComentario= new DAOComentario();
	}

	public function obtenerInstancia(){
		if (!isset(self::$instancia)){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}
		return self::$instancia;
	}

	public function guardarComentario($nuevocomentario){
    //mandamos el recinto a la base de datos....->persistencia
    //debería existir alguna logica de negocio..., por ejemplo si existe el cliente
		$this->persistenciaComentario->insertarComentario($nuevocomentario);
	}

	public function modificarComentarioDos($nuevocomentario){
		$this->persistenciaComentario->modificarComentarioDos($nuevocomentario);
	}

	public function modificarComentario($id_jugador){
		$vectorData=$this->persistenciaComentario->modificarComentario($id_comentario);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}
	
	public function obtenerComentario(){
		$vectorData=$this->persistenciaComentario->getComentarios();
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerComentarioDos($id){
		//echo "infoComentarioes.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaComentario->muestraComentariosIdRecinto($id);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}


	public function buscarID($correo){
		//echo "infoComentarioes.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaComentario->buscarID($correo);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function buscarID2($correo){
		//echo "infoComentarioes.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaComentario->buscarID2($correo);
		if (count($vectorData)==0)
			return null;
	
		return $vectorData;
	}



	//Para saber los jugadores actuales
	public function contarComentarios(){
		$vectorData=$this->persistenciaComentario->getComentarios();
		return count($vectorData);
	}
	
	public function obtienePromedioRecinto($id){
		$suma=$this->persistenciaComentario->obtienePromedioRecinto($id);
		return $suma;
	}
	public function eliminarComentario($detalle){
		$this->persistenciaComentario->eliminarComentario($detalle);
	}

}

?>