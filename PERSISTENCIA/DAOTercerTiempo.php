<?php
	include_once('conexion.php'); //se hace la conexion
class DAOTercerTiempo{
	private $conexionBD;	
	function __construct(){
    $this->conexionBD= new conexion();
    }
    public function modificarTercer($tercer){
 		$link=$this->conexionBD->getConexion(); //conexion a la bd
 		$query="UPDATE tercer_tiempo SET 
 		id_tercer='".$tercer->getIdTercer()."',
 		id_partido='".$tercer->getIdPartido()."',
 		descripcion='".$tercer->getDescripcion()."',
        fecha='".$tercer->getFecha()."',     
        link_ubicacion='".$tercer->getUbicacion."',  
        cuota='".$tercer->getCuota()."'
 		 where id_tercer = '".$partido->getIdTercer()."'"
 		;
    }
	
	public function insertarTercer($tercer){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO tercer_tiempo(id_tercer,id_partido,descripcion,fecha,link_ubicacion,cuota)
		VALUES('".$tercer->getIdTercer()."','".$tercer->getIdPartido()."','".$tercer->getDescripcion()."','".$tercer->getFecha()."','".$tercer->getUbicacion()."','".$tercer->getCuota()."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}
	public function eliminarTercerId($id_tercer){ //Depende
	$link=$this->conexionBD->getConexion(); //conexion a la 
	$query = "DELETE FROM tercer_tiempo WHERE id_tercer = '$id_tercer'";
	mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    mysql_close($link);
	}
	public function muestraTercerID($id){
	$link=$this->conexionBD->getConexion(); 	
	
	$query="SELECT * FROM tercer_tiempo WHERE id_tercer = '$id'";

    $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    $i=0;
    while($row=mysql_fetch_array($result)){
        
        $tercer=new TercerTiempo();
        $tercer->setIdTercer($row['id_tercer']);
        $tercer->setIdPartido($row['id_partido']);
        $tercer->setDescripcion($row['descripcion']);
        $tercer->setFecha($row['fecha']);
        $tercer->setUbicacion($row['link_ubicacion']);
        $partido->setCuota($row['cuota']);

        $vectorData[$i]=$tercer; //ojo
        $i++;
    }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;		
	}

	public function getTercerosTiempos(){
		   $vectorData;
    		$link=$this->conexionBD->getConexion(); //conexion a la bd
    		$query="SELECT * FROM tercer_tiempo;";
   			$result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			   $i=0;
    while($row=mysql_fetch_array($result)){
        
        $tercer=new TercerTiempo();
        $tercer->setIdTercer($row['id_tercer']);
        $tercer->setIdPartido($row['id_partido']);
        $tercer->setDescripcion($row['descripcion']);
        $tercer->setFecha($row['fecha']);
        $tercer->setUbicacion($row['link_ubicacion']);
        $partido->setCuota($row['cuota']);

        $vectorData[$i]=$tercer; //ojo
  

    
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