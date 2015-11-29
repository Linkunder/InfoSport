    <?php
	include_once('conexion.php'); //se hace la conexion
class DAOJugador{
	private $conexionBD;	
	function __construct(){
    $this->conexionBD= new conexion();
    }
    public function modificarJugadorDos($jugador){
 		$link=$this->conexionBD->getConexion(); //conexion a la bd
 		$query="UPDATE jugador SET 
 		id_jugador='".$jugador->getId_jugador()."',
 		nombre_jugador='".$jugador->getNombre()."',
 		apellido_jugador='".$jugador->getApellido()."',
        fecha_nacimiento='".$jugador->getFecha_nacimiento()."',
        sexo='".$jugador->getSexo()."',
        correo='".$jugador->getCorreo()."',
        directorio_foto='".$jugador->getDirectorio_foto()."',
        posicion='".$jugador->getPosicion()."',
        deporte_fav='".$jugador->getDeporte_fav()."'
 		WHERE id_jugador = '".$jugador->getId_jugador()."'"
 		;
        mysql_query($query,$link) or die (mysql_error());
        mysql_close($link);
    }

    public function modificarJugador($idjugador){
        $link=$this->conexionBD->getConexion();
        $query = "SELECT * FROM jugador WHERE id_jugador = '$idjugador'";
        $result = mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $jugador = new Jugador();
            $jugador->setId_jugador($row['id_jugador']);
            $jugador->setNombre($row['nombre_jugador']);
            $jugador->setApellido($row['apellido_jugador']);
            $jugador->setFecha_nacimiento($row['fecha_nacimiento']);
            $jugador->setSexo($row['sexo']);  
            $jugador->setCorreo($row['correo']);
            $jugador->setDirectorio_foto($row['directorio_foto']);
            $jugador->setPosicion($row['posicion']);
            $jugador->setDeporte_Fav($row['deporte_fav']);
           // $jugador->setPassword($row['password']);
            $vectorData[$i]=$jugador;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }
	
    public function guardarImagen($id_jugador, $nombreImagen){
        $link=$this->conexionBD->getConexion();
        $query = "UPDATE jugador SET directorio_foto='".$nombreImagen."' WHERE id_jugador = '".$id_jugador."'";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);
    }



	public function insertarjugador($jugador){
		$link=$this->conexionBD->getConexion();
		$query="INSERT INTO jugador(nombre_jugador,apellido_jugador,fecha_nacimiento,sexo,correo,directorio_foto,posicion,deporte_fav, password)
		VALUES('".$jugador->getNombre()."','".$jugador->getApellido()."','".$jugador->getFecha_nacimiento()."','".$jugador->getSexo()."','".$jugador->getCorreo()."','".$jugador->getDirectorio_foto()."','".$jugador->getPosicion()."','".$jugador->getDeporte_fav()."','".$jugador->getPassword()."')";
		    mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			mysql_close($link); //Cerramos la conexion
	}
	public function eliminarJugador($id_jugador){ //Depende
	$link=$this->conexionBD->getConexion(); //conexion a la 
	$query = "DELETE FROM jugador WHERE id_jugador = '$id_jugador'";
	mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
    mysql_close($link);
	}



	public function muestrajugadoresID($id){
        $link=$this->conexionBD->getConexion();
       // echo "DAOJugador.php: $id";
        //echo "<br>";
        $query="SELECT * FROM jugador WHERE id_jugador = '$id'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $jugador=new Jugador();
            $jugador->setId_jugador($row['id_jugador']);
            $jugador->setNombre($row['nombre_jugador']);
            $jugador->setApellido($row['apellido_jugador']);
            $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
            $jugador->setSexo($row['sexo']);
            $jugador->setCorreo($row['correo']);
            $jugador->setDirectorio_foto($row['directorio_foto']);
            $jugador->setPosicion($row['posicion']);
            $jugador->setDeporte_Fav($row['deporte_fav']);
            $jugador->setPassword($row['password']);
            $vectorData[$i]=$jugador;
            $i++;
            //echo "DAOJugador.php: Contador $i";
            //echo "<br>";
        }
        mysql_close($link);
	   if(empty($vectorData)){
		  return null;
	   }
        return $vectorData;		
	}

    public function buscarID($correo){
        $link=$this->conexionBD->getConexion();
       // echo "DAOJugador.php: $id";
        //echo "<br>";
        $query="SELECT * FROM jugador WHERE correo = '$correo'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $jugador=new Jugador();
            $jugador->setId_jugador($row['id_jugador']);
            $jugador->setNombre($row['nombre_jugador']);
            $jugador->setApellido($row['apellido_jugador']);
            $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
            $jugador->setSexo($row['sexo']);
            $jugador->setCorreo($row['correo']);
            $jugador->setDirectorio_foto($row['directorio_foto']);
            $jugador->setPosicion($row['posicion']);
            $jugador->setDeporte_Fav($row['deporte_fav']);
            $jugador->setPassword($row['password']);
            $vectorData[$i]=$jugador;
            $i++;
            //echo "DAOJugador.php: Contador $i";
            //echo "<br>";
        }
        mysql_close($link);
       if(empty($vectorData)){
          return null;
       }
        return $vectorData;     
    }


    public function buscarID2($correo){
        $link=$this->conexionBD->getConexion();
       // echo "DAOJugador.php: $id";
        //echo "<br>";
        $query="SELECT * FROM jugador WHERE correo = '$correo'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        $id=0;
        while($row=mysql_fetch_array($result)){
            $jugador=new Jugador();
            $jugador->setId_jugador($row['id_jugador']);
            $jugador->setNombre($row['nombre_jugador']);
            $jugador->setApellido($row['apellido_jugador']);
            $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
            $jugador->setSexo($row['sexo']);
            $jugador->setCorreo($row['correo']);
            $jugador->setDirectorio_foto($row['directorio_foto']);
            $jugador->setPosicion($row['posicion']);
            $jugador->setDeporte_Fav($row['deporte_fav']);
            $jugador->setPassword($row['password']);
            $vectorData[$i]=$jugador;
            $id = $jugador->getId_jugador();
            $i++;
            //echo "DAOJugador.php: Contador $i";
            //echo "<br>";
        }
        mysql_close($link);
       if(empty($vectorData)){
          return null;
       }
        return $id;     
    }

	public function getJugadores(){
		   $vectorData;
    		$link=$this->conexionBD->getConexion(); //conexion a la bd
    		$query="SELECT * FROM jugador;";
   			$result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
   			   $i=0;
    while($row=mysql_fetch_array($result)){
        
        $jugador=new Jugador();
        $jugador->setId_jugador($row['id_jugador']);
        $jugador->setNombre($row['nombre_jugador']);
        $jugador->setApellido($row['apellido_jugador']);
        $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
        $jugador->setSexo($row['sexo']);
        $jugador->setCorreo($row['correo']);
        $jugador->setDirectorio_foto($row['directorio_foto']);
        $jugador->setPosicion($row['posicion']);
        $jugador->setDeporte_Fav($row['deporte_fav']);
        $jugador->setPassword($row['password']);

    
        $vectorData[$i]=$jugador;
        $i++;
    }
    mysql_close($link);
	if(empty($vectorData)){
		return null;
	}
    return $vectorData;


	}
     public function getJugadoresGrupo($idgrupo){
           $vectorData;
            $link=$this->conexionBD->getConexion(); //conexion a la bd
            $query="SELECT * FROM jugador J inner join grupo_conformado C on C.id_jugador = J.id_jugador where C.id_grupo = '$idgrupo';";
            $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
            $i=0;
            while($row=mysql_fetch_array($result)){
                $jugador=new Jugador();
                $jugador->setId_jugador($row['id_jugador']);
                $jugador->setNombre($row['nombre_jugador']);
                $jugador->setApellido($row['apellido_jugador']);
                $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
                $jugador->setSexo($row['sexo']);
                $jugador->setCorreo($row['correo']);
                $jugador->setDirectorio_foto($row['directorio_foto']);
                $jugador->setPosicion($row['posicion']);
                $jugador->setDeporte_Fav($row['deporte_fav']);
                $jugador->setPassword($row['password']);
                $vectorData[$i]=$jugador;
                $i++;
            }
        mysql_close($link);
        if(empty($vectorData)){
            return null;
        }
    return $vectorData;
    }

    public function inhabilitarJugador($id){

        $link=$this->conexionBD->getConexion();
        $query = "UPDATE jugador SET rango='3' WHERE id_jugador = '".$id."';";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);

    }

    public function verEstado($id){
            $link=$this->conexionBD->getConexion(); //conexion a la bd
            $query="SELECT rango FROM jugador where id_jugador= '".$id."';";
            $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
               $i=0;
            $row=mysql_fetch_array($result);

            return $row['rango'];

    }
        public function habilitarJugador($id){

        $link=$this->conexionBD->getConexion();
        $query = "UPDATE jugador SET rango='2' WHERE id_jugador = '".$id."';";
        $result = mysql_query($query,$link) or die(mysql_error());
        mysql_close($link);

    }


    public function obtenerJugadores5($idPartido){
        $vectorData;
        $link=$this->conexionBD->getConexion(); //conexion a la bd
        $query="SELECT * FROM jugador J inner join equipo e on J.id_jugador = e.id_jugador where e.id_partido = '$idPartido'";
        $result= mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
        $i=0;
        while($row=mysql_fetch_array($result)){
            $jugador=new Jugador();
            $jugador->setId_jugador($row['id_jugador']);
            $jugador->setNombre($row['nombre_jugador']);
            $jugador->setApellido($row['apellido_jugador']);
            $jugador->setFecha_nacimiento($row['fecha_nacimiento']); 
            $jugador->setSexo($row['sexo']);
            $jugador->setCorreo($row['correo']);
            $jugador->setDirectorio_foto($row['directorio_foto']);
            $jugador->setPosicion($row['posicion']);
            $jugador->setDeporte_Fav($row['deporte_fav']);
            $jugador->setPassword($row['password']);
            $vectorData[$i]=$jugador;
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