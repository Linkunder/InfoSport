<?php
	include_once('conexion.php'); //se hace la conexion
class DAOCategoria{
	private $conexionBD;	
	function __construct(){
    $this->conexionBD= new conexion();
    }
    public function modificarCategoria($categoria){
 		$link=$this->conexionBD->getConexion(); //conexion a la bd
 		$query="UPDATE categoria SET 
 		id_categoria='".$categoria->getIdcategoria()."',
 		nombre='".$categoria->getNombre()."',
 		descripcion='".$categoria->getDescripcion()."'
 		 where id_categoria = '".$categoria->getIdcategoria()."'"
 		;
    }
	
	public function insertarCategoria($categoria){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO categoria(id_categoria,nombre,descripcion)
		VALUES('".$categoria->getIdcategoria()."','".$categoria->getNombre()."','".$categoria->getDescripcion."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}
	public function eliminarCategoria($id_categoria){ //Depende
	$link=$this->conexionBD->getConexion(); //conexion a la 
	$query = "DELETE FROM categoria WHERE id_categoria = '$id_categoria'";
	mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    mysql_close($link);
	}
	public function muestraCategoriasID($id){
	$link=$this->conexionBD->getConexion(); 	
	
	$query="SELECT * FROM categoria WHERE id_categoria = '$id'";

    $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    $i=0;
    while($row=mysql_fetch_array($result)){
        
        $categoria=new Categoria();
        $categoria->setId_categoria($row['id_categoria']);
        $categoria->setNombre($row['nombre']);
        $categoria->setDescripcion($row['descripcion']);

    
        $vectorData[$i]=$categoria;
        $i++;
    }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;		
	}
	public function getCategorias(){
		   $vectorData;
    		$link=$this->conexionBD->getConexion(); //conexion a la bd
    		$query="SELECT * FROM categoria;";
   			$result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			   $i=0;
    while($row=mysql_fetch_array($result)){
        
        $categoria=new Categoria();
        $categoria->setId_categoria($row['id_categoria']);
        $categproa->setNombre($row['nombre']);
        $categoria->setDescripcion($row['descripcion']);

    
        $vectorData[$i]=$categoria;
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