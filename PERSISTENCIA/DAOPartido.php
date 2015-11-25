<?php
	include_once('conexion.php'); //se hace la conexion
class DAOPartido{
	private $conexionBD;	
	function __construct(){
    $this->conexionBD= new conexion();
    }

    public function modificarPartido($partido){
 		$link=$this->conexionBD->getConexion(); //conexion a la bd
 		$query="UPDATE partido SET 
 		id_partido='".$partido->getIdPartido()."',
 		id_recinto='".$partido->getIdRecinto()."',
 		id_jugador='".$partido->getIdJugador()."',
        id_estado='".$partido->getEstado()."',
        hora='".$partido->getHora()."',
        fecha='".$partido->getFecha()."',
        cuota='".$partido->getCuota()."'
 		 where id_partido = '".$partido->getIdPartido()."'"
 		;
    }

    public function agregarRecinto($idUltimoPartido, $idRecinto, $precioRecinto){
        $link = $this->conexionBD->getConexion();
        $query= "UPDATE partido set id_recinto='".$idRecinto."',cuota='".$precioRecinto."' WHERE id_partido = '".$idUltimoPartido."'";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);
    }

    public function getPartidos(){
        $vectorData;
        $link=$this->conexionBD->getConexion();
        $query = "SELECT * FROM partido";
        $result = mysql_query($query,$link) or die (mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $partido = new Partido();
            $partido->setIdPartido($row['id_partido']);
            $partido->setIdRecinto($row['id_recinto']);
            $partido->setIdJugador($row['id_jugador']);
            $partido->setIdEstado($row['id_estado']);
            $partido->setHora($row['hora']);
            $partido->setFecha($row['fecha']);
            $partido->setCuota($row['cuota']);
            $partido->setNroJugadores($row['numero_jugadores']);
            $vectorData[$i]=$partido;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }

    public function obtenerRecinto($idPartido){
        $link=$this->conexionBD->getConexion();
        $query = "SELECT R.nombre from recinto_deportivo R INNER JOIN partido P on R.id_recinto = P.id_recinto where P.id_partido = '$idPartido'";
        $result = mysql_query($query,$link);
        $row = mysql_fetch_array($result);
        return $row['nombre'];

    }

	
	public function insertarPartido($partido){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO partido(id_jugador,id_estado,hora,fecha,numero_jugadores)
		VALUES('".$partido->getIdJugador()."','".$partido->getEstado()."','".$partido->getHora()."','".$partido->getFecha()."','".$partido->getNroJugadores()."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}
	public function eliminarPartido($id_partido){ //Depende
	$link=$this->conexionBD->getConexion(); //conexion a la 
	$query = "DELETE FROM partido WHERE id_partido = '$id_partido'";
	mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    mysql_close($link);
	}
	public function muestraPartidoID($id){
	$link=$this->conexionBD->getConexion(); 	
	
	$query="SELECT * FROM partido WHERE id_partido = '$id'";

    $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    $i=0;
    while($row=mysql_fetch_array($result)){
        
        $partido=new Partido();
        $partido->setIdPartido($row['id_partido']);
        $partido->setIdRecinto($row['id_recinto']);
        $partido->setIdJugador($row['id_jugador']);
        $partido->setIdEstado($row['id_estado']);
        $partido->setHora($row['hora']);
        $partido->setFecha($row['fecha']);
        $partido->setCuota($row['cuota']);

        $vectorData[$i]=$partido;
        $i++;
    }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;		
	}


    public function getPartidosJugados(){
           $vectorData;
            $link=$this->conexionBD->getConexion(); //conexion a la bd
            $query="SELECT * FROM partido where id_estado='2'";
            $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
               $i=0;
    while($row=mysql_fetch_array($result)){
        
        $partido=new Partido();
        $partido->setIdPartido($row['id_partido']);
        $partido->setIdRecinto($row['id_recinto']);
        $partido->setIdJugador($row['id_jugador']);
        $partido->setIdEstado($row['id_estado']);
        $partido->setHora($row['hora']);
        $partido->setFecha($row['fecha']);
        $partido->setCuota($row['cuota']);

        $vectorData[$i]=$partido;

    
        $i++;
    }
    mysql_close($link);
    if(empty($vectorData)){
        return null;
    }
    return $vectorData;


    }

    public function existePartido($id_recinto,$id_jugador){
        $vectorData;
            $link=$this->conexionBD->getConexion(); //conexion a la bd
            $query="SELECT * FROM partido where id_recinto='$id_recinto' AND id_jugador='$id_jugador' AND id_estado='2'";
            $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
               $i=0;
    while($row=mysql_fetch_array($result)){
        
        $partido= new Partido();
        $partido->setIdPartido($row['id_partido']);
        $partido->setIdRecinto($row['id_recinto']);
        $partido->setIdJugador($row['id_jugador']);
        $partido->setIdEstado($row['id_estado']);
        $partido->setHora($row['hora']);
        $partido->setFecha($row['fecha']);
        $partido->setCuota($row['cuota']);

        $vectorData[$i]=$partido;

    
        $i++;
    }
    mysql_close($link);
    
    if(empty($vectorData)){
        return null;
    }
    return $vectorData;


    }









    }




?>