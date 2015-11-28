<?php
	include_once('conexion.php'); //se hace la conexion
    class DAONotificacion{
	private $conexionBD;	
	
    function __construct(){
        $this->conexionBD= new conexion();
    }


	
	public function insertarRecinto($recinto){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO notificacion(nombre,descripcion,precio,horario,numero_canchas,direccion,telefono,superficie,foto)
		VALUES('".$recinto->getNombre()."','".$recinto->getDescripcion()."','".$recinto->getPrecio()."','".$recinto->getHorario()."','".$recinto->getCantidadCanchas()."','".$recinto->getDireccion()."','".$recinto->getTelefono()."','".$recinto->getSuperficie()."','".$recinto->getFoto()."')";
        mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        mysql_close($link); //Cerramos la conexion
	}

	public function eliminarNotificacion($id_noti){ //Depende
	   $link=$this->conexionBD->getConexion(); //conexion a la 
	   $query = "DELETE FROM notificacion WHERE id = '$id_noti'";
	   mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        mysql_close($link);
	}


	public function getRecintos(){
        $vectorData;
        $link=$this->conexionBD->getConexion(); //conexion a la bd
        $query="SELECT * FROM notificacion;";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $recinto=new Notificacion();
            $recinto->setIdNotificacion($row['id']);
            $recinto->setNombre($row['nombre']);
            $recinto->setDescripcion($row['descripcion']);
            $recinto->setPrecio($row['precio']); 
            $recinto->setHorario($row['horario']);
            $recinto->setCantidadCanchas($row['numero_canchas']);
            $recinto->setDireccion($row['direccion']);
            $recinto->setTelefono($row['telefono']);
            $recinto->setSuperficie($row['superficie']);
            $recinto->setFoto($row['foto']);
            $vectorData[$i]=$recinto;
            $i++;
        }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;
	}

    public function obtenerNotificacion($id_noti){
        $vectorData;
        $link=$this->conexionBD->getConexion(); //conexion a la bd
        $query="SELECT * FROM notificacion WHERE id = '$id_noti';";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $recinto=new Notificacion();
            $recinto->setIdNotificacion($row['id']);
            $recinto->setNombre($row['nombre']);
            $recinto->setDescripcion($row['descripcion']);
            $recinto->setPrecio($row['precio']); 
            $recinto->setHorario($row['horario']);
            $recinto->setCantidadCanchas($row['numero_canchas']);
            $recinto->setDireccion($row['direccion']);
            $recinto->setTelefono($row['telefono']);
            $recinto->setSuperficie($row['superficie']);
            $recinto->setFoto($row['foto']);
            $vectorData[$i]=$recinto;
            $i++;
        }
    mysql_close($link);
    if(empty($vectorData)){
        return null;
    }
    return $vectorData;
    }

    public function guardarImagen($id_recinto, $nombreImagen){
        $link=$this->conexionBD->getConexion();
        $query = "UPDATE notificacion SET foto='".$nombreImagen."' WHERE id = '".$id_recinto."'";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);
    }



}
?>