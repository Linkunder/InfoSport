<?php
include_once('../../PERSISTENCIA/DAOJugador.php');
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

	public function obtenerJugadorDos($id){
		//echo "infoJugadores.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaJugador->muestraJugadoresID($id);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}


	public function buscarID($correo){
		//echo "infoJugadores.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaJugador->buscarID($correo);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function buscarID2($correo){
		//echo "infoJugadores.php: $id";
		//echo "<br>";
		$vectorData=$this->persistenciaJugador->buscarID2($correo);
		if (count($vectorData)==0)
			return null;
	
		return $vectorData;
	}



	//Para saber los jugadores actuales
	public function contarJugadores(){
		$vectorData=$this->persistenciaJugador->getJugadores();
		
		return count($vectorData);
	}
	public function numeroHombres(){
		$vectorData=$this->persistenciaJugador->getJugadores();
		$c=0;
		foreach($vectorJugadores as $Jugador){//For
			if ($Jugador->getSexo()=="M"){
				$c=$c+1;
			}

		}
		return $c;
	}
	public function numeroMujeres(){

	}

	public function guardarImagen($id_jugador, $nombreImagen){
		$vectorData=$this->persistenciaJugador->guardarImagen($id_jugador, $nombreImagen);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}

	public function obtenerJugadores($idgrupo){
		$vectorData=$this->persistenciaJugador->getJugadoresGrupo($idgrupo);
		if (count($vectorData)==0)
			return null;
		return $vectorData;
	}
		public function obtenerJugadorId($id){
		$vectorData=$this->persistenciaJugador->muestraJugadoresID($id);
		if (empty($vectorData))
			return null;
		return $vectorData;
	}

	public function inhabilitarJugador($id){
		$this->persistenciaJugador->inhabilitarJugador($id);
	}

	public function verEstado($id){
		$estado=$this->persistenciaJugador->verEstado($id);
		return $estado;

	}

		public function habilitarJugador($id){
		$this->persistenciaJugador->habilitarJugador($id);
	}



}

?>