<?php

include_once('conexion.php');
include_once('DAOJugador.php');
include_once('DAOGrupoConformado.php');


class DAOGrupo{
	private $conexionBD;
	function __construct(){
		$this->conexionBD = new conexion();
	}

	public function getGrupos($id){
		$vectorData;
		$link=$this->conexionBD->getConexion();
		$query = "SELECT * FROM grupo where id_capitan = $id";
		$result= mysql_query($query,$link) or die(mysql_error());
		$i=0;
		while($row=mysql_fetch_array($result)){
			$Grupo= new Grupo();
			$Grupo->setNombre_grupo($row['nombre_grupo']);
			$Grupo->setId_grupo($row['id_grupo']);
			$Grupo->setNumero_personas($row['numero_personas']);
			$Grupo->setFecha_creacion($row['fecha_creacion']);
			$Grupo->setDescripcion($row['descripcion']);
			$Grupo->setCapitan($row['id_capitan']);
			$vectorData[$i]=$Grupo;
			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}

	public function obtenerNombreGrupo($id_grupo2){
		$link = $this->conexionBD->getConexion();
		$query = "SELECT nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo2'";
        $result = mysql_query($query,$link);
        $row = mysql_fetch_array($result);
        return $row['nombre_grupo'];
	}


    public function getGrupos2($id){
        $vectorData;
        $link=$this->conexionBD->getConexion();
        $query = "SELECT G.nombre_grupo, G.id_grupo, G.numero_personas, G.fecha_creacion, G.id_capitan, G.descripcion From grupo G 
        inner join grupo_conformado C on G.id_grupo = C.id_grupo 
        INNER JOIN jugador J on C.id_jugador = J.id_jugador where J.id_jugador = $id";
        $result= mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while($row=mysql_fetch_array($result)){
            $Grupo= new Grupo();
            $Grupo->setNombre_grupo($row['nombre_grupo']);
            $Grupo->setId_grupo($row['id_grupo']);
            $Grupo->setNumero_personas($row['numero_personas']);
            $Grupo->setFecha_creacion($row['fecha_creacion']);
            $Grupo->setCapitan($row['id_capitan']);
            $Grupo->setDescripcion($row['descripcion']);
            $vectorData[$i]=$Grupo;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }



	public function obtenerCapitan($idcapitan){
		$vectorData;
		$link=$this->conexionBD->getConexion();
		$query = "SELECT J.nombre_jugador, J.apellido_jugador FROM jugador J 
					INNER JOIN grupo_conformado C on J.id_jugador= C.id_jugador
					INNER JOIN grupo G on J.id_jugador = G.id_capitan WHERE G.id_capitan = $idcapitan;";
		$result= mysql_query($query,$link) or die(mysql_error());
		$i=0;
		while($row=mysql_fetch_array($result)){
			$Grupo= new Grupo();
			$Grupo->setId_grupo($row['id_grupo']);
			$Grupo->setNumero_personas($row['setNumero_personas']);
			$Grupo->setFecha_creacion($row['fecha_creacion']);
			$Grupo->setNombre_grupo($row['nombre_grupo']);
			$Grupo->setCapitan($row['id_capitan']);
			$Grupo->setDescripcion($row['descripcion']);
			$vectorData[$i]=$Grupo;

			$i++;
		}
		mysql_close($link);
		if (empty($vectorData)){
			return null;
		}
		return $vectorData;
	}
	
		public function insertarGrupo($grupo){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO grupo(nombre_grupo,descripcion,fecha_creacion,id_capitan)
		VALUES('".$grupo->getNombre_grupo()."','".$grupo->getDescripcion()."','".$grupo->getFecha_creacion()."','".$grupo->getCapitan()."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}


	public function obtenerTodos(){
		$vectorData;
		$link=$this->conexionBD->getConexion();
		$query = "SELECT * FROM grupo ";
		$result= mysql_query($query,$link) or die(mysql_error());
		$i=0;
		while($row=mysql_fetch_array($result)){
			$Grupo= new Grupo();
			$Grupo->setNombre_grupo($row['nombre_grupo']);
			$Grupo->setId_grupo($row['id_grupo']);
			$Grupo->setNumero_personas($row['numero_personas']);
			$Grupo->setFecha_creacion($row['fecha_creacion']);
			$Grupo->setDescripcion($row['descripcion']);
			$Grupo->setCapitan($row['id_capitan']);
			$vectorData[$i]=$Grupo;
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
