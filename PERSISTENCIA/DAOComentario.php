<?php
	include_once('conexion.php'); //se hace la conexion
class DAOComentario{
	private $conexionBD;	
	function __construct(){
    $this->conexionBD= new conexion();
    }


    public function modificarComentario($idrecinto, $idjugador){
        $link=$this->conexionBD->getConexion();
        $query = "SELECT * FROM comentario WHERE id_jugador = '$idjugador' and id_recinto = '$idrecinto' ";
        $result = mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $comentario = new comentario();
            $comentario->setId_recinto($row['id_recinto']);
            $comentario->setId_jugador($row['id_jugador']);
            $comentario->setAsunto($row['asunto']);
            $comentario->setDetalle($row['detalle']);
            $comentario->setPuntuacion($row['puntuacion']);  
            $comentario->setFecha($row['fecha']);
            $comentario->setHora($row['hora']);

            $vectorData[$i]=$comentario;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }
	


	public function insertarComentario($comentario){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO comentario(id_recinto,id_jugador,asunto,detalle,puntuacion,fecha,hora)
		VALUES('".$comentario->getId_recinto()."','".$comentario->getId_jugador()."','".$comentario->getAsunto()."','".$comentario->getDetalle()."','".$comentario->getPuntuacion()."', now() ,'".$comentario->getHora()."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}
	public function eliminarComentario($detalle){ //Depende
	$link=$this->conexionBD->getConexion(); //conexion a la 
	$query = "DELETE FROM comentario WHERE id_Comentario = '$detalle'";
	mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    mysql_close($link);
	}



	public function muestraComentariosIdRecinto($id){
        $link=$this->conexionBD->getConexion();

        $query="SELECT * FROM Comentario WHERE id_recinto = '$id'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $comentario = new comentario();
            $comentario->setId_recinto($row['id_recinto']);
            $comentario->setId_jugador($row['id_jugador']);
            $comentario->setAsunto($row['asunto']);
            $comentario->setDetalle($row['detalle']);
            $comentario->setPuntuacion($row['puntuacion']);  
            $comentario->setFecha($row['fecha']);
            $comentario->setHora($row['hora']);

            $vectorData[$i]=$comentario;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;	
	}

        public function muestraComentariosIdJugador($id){
        $link=$this->conexionBD->getConexion();

        $query="SELECT * FROM Comentario WHERE id_jugador = '$id'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $comentario = new comentario();
            $comentario->setId_recinto($row['id_recinto']);
            $comentario->setId_jugador($row['id_jugador']);
            $comentario->setAsunto($row['asunto']);
            $comentario->setDetalle($row['detalle']);
            $comentario->setPuntuacion($row['puntuacion']);  
            $comentario->setFecha($row['fecha']);
            $comentario->setHora($row['hora']);

            $vectorData[$i]=$comentario;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData; 
    }

   

	public function getComentarios(){
		   $vectorData;
    		$link=$this->conexionBD->getConexion(); //conexion a la bd
    		$query="SELECT * FROM comentario;";
   			$result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			   $i=0;
           while ($row=mysql_fetch_array($result)){
            $comentario = new comentario();
            $comentario->setId_comentario($row['id_Comentario']);
            $comentario->setId_recinto($row['id_recinto']);
            $comentario->setId_jugador($row['id_jugador']);
            $comentario->setAsunto($row['asunto']);
            $comentario->setDetalle($row['detalle']);
            $comentario->setPuntuacion($row['puntuacion']);  
            $comentario->setFecha($row['fecha']);
            $comentario->setHora($row['hora']);

            $vectorData[$i]=$comentario;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData; 


	}
    public function obtienePromedioRecinto($id){

            $link=$this->conexionBD->getConexion(); //conexion a la bd
            $query="SELECT AVG(puntuacion) FROM comentario WHERE id_recinto='$id';"; //SELECT SUM(puntuacion) FROM `comentario` WHERE id_recinto = 1
            $result= mysql_query($query,$link)or die(mysql_error()); //ejecuto la query
            $row=mysql_fetch_array($result);
            return $row['AVG(puntuacion)'];

    }
}
?>