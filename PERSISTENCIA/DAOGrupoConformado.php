<?php
	include_once('conexion.php'); //se hace la conexion
    
    class DAOGrupoConformado{
    	private $conexionBD;	
    	

        function __construct(){
            $this->conexionBD= new conexion();
        }


        public function getGrupoConformado(){
            $vectorData;
            $link=$this->conexionBD->getConexion();
            $query = "SELECT * FROM grupo_conformado;";
            $result= mysql_query($query,$link) or die(mysql_error());
            $i=0;
            while($row=mysql_fetch_array($result)){
                $GrupoConformado= new GrupoConformado();
                $GrupoConformado->setIdGrupo($row['id_grupo']);
                $GrupoConformado->setIdJugador($row['id_jugador']);
                $vectorData[$i]=$GrupoConformado;
                $i++;
            }
            mysql_close($link);
            if (empty($vectorData)){
                return null;
            }
            return $vectorData;
        }

        public function getJugadores($idgrupo){
            $vectorData;
            $link=$this->conexionBD->getConexion();
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

    public function getGrupos($id){
        echo "Persistencia: $id";
        $vectorData;
        $link=$this->conexionBD->getConexion();
        $query = "SELECT G.nombre_grupo, G.numero_personas, G.fecha_creacion, G.id_capitan From grupo G 
        inner join grupo_conformado C on G.id_grupo = C.id_grupo 
        INNER JOIN jugador J on C.id_jugador = J.id_jugador where J.id_jugador = $id";
        $result= mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while($row=mysql_fetch_array($result)){
            $Grupo= new Grupo();
            $Grupo->setNombre_grupo($row['nombre_grupo']);
            //$Grupo->setId_grupo($row['id_grupo']);
            $Grupo->setNumero_personas($row['numero_personas']);
            $Grupo->setFecha_creacion($row['fecha_creacion']);
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