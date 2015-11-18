<?php

include_once('conexion.php');
class DAOEstado{
	private $conexionBD;
	funcion __construct(){
		$this->conexionBD = new conexion();
	}

	public function modificarEstadoDos($Estado){
		$link=$this->conexionBD->getConexion(); //conexion a la bd
		$query="UPDATE estado SET 
		id_estado='".$Estado->getId_elemento()."',
		nombre= '".$Estado->getNombre()."',
		detalle= '".$Estado->getDetalle()."'";
		mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
		mysql_close($link);
	}


	public function insertarEstado($Estado){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO estado(id_estado, nombre, detalle) VALUES ('".$Estado->getId_estado()."','".$Estado->getNombre()."','".$Estado->getDetalle()."')";

		mysql_query($query,$link) or die (mysql_error());
		mysql_close($link);
	}

	public function eliminarEstado($id_estado){
		$link=$this->conexionBD->getConexion();
		$query = "DELETE FROM estado WHERE id_estado = '$id_estado'";
		mysql_query($query,$link) or die (mysql_error());
		mysql_close();
	}

	public function modificarEstado($id_estado){
		$link=$this->conexionBD->getConexion();
		$query= "SELECT * FROM estado WHERE id_estado = '$id_estado'";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$Estado= new Estado();
			$Estado->setId_estado($row[id_estado]);
			$Estado->setNombre($row[nombre]);
			$Estado->setDetalle($row[detalle]);

			$vectorData[$i]=$Estado;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

	public function getEstado(){
		$vectorData;
		$link=$this->conexionBD->conexionBD();
		$query = "SELECT * FROM estado;";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$Estado= new Estado();
			$Estado->setId_estado($row[id_estado]);
			$Estado->setNombre($row[nombre]);
			$Estado->setDetalle($row[detalle]);

			$vectorData[$i]=$Estado;
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