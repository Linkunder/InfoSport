<?php

include_once('conexion.php');
class DAOElementoDeportivo{
	private $conexionBD;
	funcion __construct(){
		$this->conexionBD = new conexion();
	}

	public function modificarElementoDeportivoDos($ElementoDeportivo){
		$link=$this->conexionBD->getConexion(); //conexion a la bd
		$query="UPDATE elemento_deportivo SET 
		id_elemento='".$ElementoDeportivo->getIdElemento()."',
		nombre= '".$ElementoDeportivo->getNombre()."',
		descripcion= '".$ElementoDeportivo->getDescripcion()."'";
		mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
		mysql_close($link);
	}


	public function insertarElementoDeportivo($ElementoDeportivo){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO elemento_deportivo(id_elemento, nombre, descripcion)
		VALUES('".$ElementoDeportivo->getIdElemento()."','".$ElementoDeportivo->getNombre()."','".$ElementoDeportivo->"')";

		mysql_query($query,$link) or die (mysql_error());
		mysql_close($link);
	}

	public function eliminarElementoDeportivo($id_elemento){
		$link=$this->conexionBD->getConexion();
		$query = "DELETE FROM elemento_deportivo WHERE id_elemento = '$id_elemento'";
		mysql_query($query,$link) or die (mysql_error());
		mysql_close();
	}

	public function modificarElementoDeportivo($id_elemento){
		$link=$this->conexionBD->getConexion();
		$query= "SELECT * FROM elemento_deportivo WHERE id_elemento = '$id_elemento'";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$ElementoDeportivo= new ElementoDeportivo();
			$ElementoDeportivo->setIdElemento($row[id_elemento]);
			$ElementoDeportivo->setNombre($row[nombre]);
			$ElementoDeportivo->setDescripcion($row[descripcion]);

			$vectorData[$i]=$ElementoDeportivo;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

	public function getElementosDeportivos(){
		$vectorData;
		$link=$this->conexionBD->conexionBD();
		$query = "SELECT * FROM elemento_deportivo;";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$ElementoDeportivo= new ElementoDeportivo();
			$ElementoDeportivo->setIdElemento($row[id_elemento]);
			$ElementoDeportivo->setNombre($row[nombre]);
			$ElementoDeportivo->setDescripcion($row[descripcion]);

			$vectorData[$i]=$cliente;
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