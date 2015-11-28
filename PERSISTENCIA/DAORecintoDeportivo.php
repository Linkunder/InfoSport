<?php
	include_once('conexion.php'); //se hace la conexion
    class DAORecintoDeportivo{
	private $conexionBD;	
	
    function __construct(){
        $this->conexionBD= new conexion();
    }

    public function obtenerNombreiD($id_recinto){
        $link=$this->conexionBD->getConexion();     
        $query="SELECT nombre FROM recinto_deportivo WHERE id_recinto = '$id_recinto'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $row=mysql_fetch_array($result);
        return $row['nombre'];
    }

    public function obtenerPrecio($id){
        $link=$this->conexionBD->getConexion();
        $query = "SELECT precio from recinto_deportivo where id_recinto = '$id'";
        $result = mysql_query($query, $link);
        $row = mysql_fetch_array($result);
        return $row['precio'];
    }


    
    public function modificarRecintoDos($recinto){
 		$link=$this->conexionBD->getConexion(); //conexion a la bd
 		$query="UPDATE recinto_deportivo SET 
 		id_recinto='".$recinto->getIdRecinto()."',
 		nombre='".$recinto->getNombre()."',
 		descripcion='".$recinto->getDescripcion()."',
        precio='".$recinto->getPrecio()."',
        horario='".$recinto->getHorario()."',
        superficie='".$recinto->getSuperficie()."',
        puntuacion='".$recinto->getPuntuacion()."',
        directorio_imagen='".$recinto->getImagen()."',
        numero_canchas='".$recinto->getCantidadCanchas()."',
        direccion='".$recinto->getDireccion()."',
        telefono='".$recinto->getTelefono()."'
 		WHERE id_recinto = '".$recinto->getIdRecinto()."'";
        mysql_query($query, $link) or die (mysql_error());
        mysql_close($link);
    }

    public function modificarRecinto($idrecinto){
        $link=$this->conexionBD->getConexion(); //conexion a la bd
        $query="SELECT * FROM recinto_deportivo WHERE id_recinto = '$idrecinto'";
        $result = mysql_query($query,$link) or die (mysql_error());  
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $recinto_deportivo= new RecintoDeportivo();
            $recinto_deportivo->setIdRecinto($row['id_recinto']);
            $recinto_deportivo->setNombre($row['nombre']);
            $recinto_deportivo->setDescripcion($row['descripcion']);
            $recinto_deportivo->setPrecio($row['precio']);
            $recinto_deportivo->setHorario($row['horario']);
            $recinto_deportivo->setSuperficie($row['superficie']);
            $recinto_deportivo->setPuntuacion($row['puntuacion']);
            $recinto_deportivo->setImagen($row['directorio_imagen']);
            $recinto_deportivo->setCantidadCanchas($row['numero_canchas']);
            $recinto_deportivo->setDireccion($row['direccion']);
            $recinto_deportivo->setTelefono($row['telefono']);
            $vectorData[$i]=$recinto_deportivo;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }
	
	public function insertarRecinto($recinto){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO recinto_deportivo(nombre,descripcion,precio,horario,puntuacion,directorio_imagen,numero_canchas,direccion,telefono)
		VALUES('".$recinto->getNombre()."','".$recinto->getDescripcion()."','".$recinto->getPrecio()."','".$recinto->getHorario()."','".$recinto->getPuntuacion()."','".$recinto->getImagen()."','".$recinto->getCantidadCanchas()."','".$recinto->getDireccion()."','".$recinto->getTelefono()."')";
        mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        mysql_close($link); //Cerramos la conexion
	}

	public function eliminarRecinto($id_recinto){ //Depende
	   $link=$this->conexionBD->getConexion(); //conexion a la 
	   $query = "DELETE FROM recinto_deportivo WHERE id_recinto = '$id_recinto'";
	   mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        mysql_close($link);
	}

	public function muestraRecintosID($id){
        $link=$this->conexionBD->getConexion(); 	
        $query="SELECT * FROM recinto_deportivo WHERE id_recinto = '$id'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $recinto=new RecintoDeportivo();
            $recinto->setIdRecinto($row['id_recinto']);
            $recinto->setNombre($row['nombre']);
            $recinto->setDescripcion($row['descripcion']);
            $recinto->setPrecio($row['precio']); 
            $recinto->setHorario($row['horario']);
            $recinto->setPuntuacion($row['puntuacion']);
            $recinto->setImagen($row['directorio_imagen']);
            $recinto->setCantidadCanchas($row['numero_canchas']);
            $recinto->setDireccion($row['direccion']);
            $recinto->setTelefono($row['telefono']);
            $recinto->setSuperficie($row['superficie']);

    
        $vectorData[$i]=$recinto;
        $i++;
    }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;		
	}

	public function getRecintos(){
        $vectorData;
        $link=$this->conexionBD->getConexion(); //conexion a la bd
        $query="SELECT * FROM recinto_deportivo;";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){

        $recinto=new RecintoDeportivo();
        $recinto->setIdRecinto($row['id_recinto']);
        $recinto->setNombre($row['nombre']);
        $recinto->setDescripcion($row['descripcion']);
        $recinto->setPrecio($row['precio']); 
        $recinto->setHorario($row['horario']);
        $recinto->setPuntuacion($row['puntuacion']);
        $recinto->setImagen($row['directorio_imagen']);
        $recinto->setCantidadCanchas($row['numero_canchas']);
        $recinto->setDireccion($row['direccion']);
        $recinto->setTelefono($row['telefono']);
        $recinto->setSuperficie($row['superficie']);

    
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
        $query = "UPDATE recinto_deportivo SET directorio_imagen='".$nombreImagen."' WHERE id_recinto = '".$id_recinto."'";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);
    }

    public function actualizarPuntaje($puntaje, $id){
        $link=$this->conexionBD->getConexion();
        $query = "UPDATE recinto_deportivo SET puntuacion='$puntaje' where id_recinto='$id'";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);
    }


}
?>