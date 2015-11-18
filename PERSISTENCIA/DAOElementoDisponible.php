<?php

include_once('conexion.php');
class DAOElemntoDisponible{
	private $conexionBD;

	funcion __construct(){
		$this->conexionBD=new conexion();
	}

	public function modificarElementoDisponibleDos($ElementoDisponible){
		$link=$this->conexionBD->getConexion(); //conexion a la bd
		$query="UPDATE elementos_disponibles SET 
		id_elemento='".$ElementoDisponible->getIdElemento()."',
		id_recinto= '".$ElementoDisponible->getId_recinto()."',
		precio= '".$ElementoDisponible->getPrecio()."',
		cantidad= '".$ElementoDisponible->getCantidad()."'";
		mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
		mysql_close($link);
	}

	public funcion insertElementoDisponible($ElementoDisponible){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO elementos_disponibles(id_elemento, id_recinto, precio, cantidad) 
		VALUES ('".$ElementoDisponible->getId_elemento()."','".$ElementoDisponible->getId_recinto()."',
			'".$ElementoDisponible->getPrecio()."','".$ElementoDisponible->getCantidad()."')";
		
		mysql_query($query,$link) or die (mysql_error());
		mysql_close($link);
	}

	public funcion eliminarElementoDisponbile($id_elemento){
		$link=$this->conexionBD->getConexion();
		$query= "DELETE FROM elementos_disponibles WHERE id_elemento = '$id_elemento'";
		mysql_query($query,$link) or die (mysql_error());
		mysql_close($link);
	}

		public function modificarElementoDisponible($id_elemento){
		$link=$this->conexionBD->getConexion();
		$query= "SELECT * FROM elementos_dispobles WHERE id_elemento = '$id_elemento'";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$ElementoDeportivo= new ElementoDeportivo();
			$ElementoDeportivo->setId_elemento($row[id_elemento]);
			$ElementoDeportivo->setId_recinto($row[id_recinto]);
			$ElementoDeportivo->setPrecio($row[precio]);
			$ElementoDeportivo->setCantidad($row[cantidad]);

			$vectorData[$i]=$ElementoDisponible;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

	public function getElementosDisponibles(){
		$vectorData;
		$link=$this->conexionBD->conexionBD();
		$query = "SELECT * FROM elementos_disponibles;";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$ElementoDeportivo= new ElementoDeportivo();
			$ElementoDeportivo->setId_elemento($row[id_elemento]);
			$ElementoDeportivo->setId_recinto($row[id_recinto]);
			$ElementoDeportivo->setPrecio($row[precio]);
			$ElementoDeportivo->setCantidad($row[cantidad]);

			$vectorData[$i]=$ElementoDisponible;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

}

?>