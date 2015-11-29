<?php

include_once('conexion.php');
class DAOTipoRecinto{
	private $conexionBD;
	function __construct(){
		$this->conexionBD = new conexion();
	}

	public function modificarTipoRecintoDos($TipoRecinto){
		$link=$this->conexionBD->getConexion(); //conexion a la bd
		$query="UPDATE tipo_recinto SET 
		id_Recinto='".$TipoRecinto->getId_Recinto()."',
		id_Categoria= '".$TipoRecinto->getId_Categoria()."'";
		mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
		mysql_close($link);
	}

	public function insertarTipoRecinto($TipoRecinto){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO tipo_recinto(id_recinto, id_categoria) 
		VALUES ('".$TipoRecinto->getId_Recinto()."','".$TipoRecinto->getId_Categoria()."'";

		mysql_query($query,$link) or die (mysql_error());
		mysql_close($link);
	}

	public function eliminarTipoRecinto($id_recinto){
		$link=$this->conexionBD->getConexion();
		$query = "DELETE FROM tipo_recinto WHERE id_recinto = '$id_recinto'";
		mysql_query($query,$link) or die (mysql_error());
		mysql_close();
	}

	public function modificarGrupo($id_recinto){
		$link=$this->conexionBD->getConexion();
		$query= "SELECT * FROM tipo_recinto WHERE id_recinto = '$id_recinto'";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$TipoRecinto= new TipoRecinto();
			$TipoRecinto->setId_Recinto($row[id_Recinto]);
			$TipoRecinto->setId_Categoria($row[id_Categoria]);

			$vectorData[$i]=$TipoRecinto;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

	public function getTipoRecinto(){
		$vectorData;
		$link=$this->conexionBD->conexionBD();
		$query = "SELECT * FROM tipo_recinto;";
		$result= mysql_query($query,$link) or die(mysql_error()):
		$i=0;
		while($row=mysql_fetch_array($result)){
			$TipoRecinto= new TipoRecinto();
			$TipoRecinto->setId_Recinto($row[id_Recinto]);
			$TipoRecinto->setId_Categoria($row[id_Categoria]);

			$vectorData[$i]=$TipoRecinto;
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