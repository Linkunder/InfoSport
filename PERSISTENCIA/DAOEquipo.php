<?php
	include_once('conexion.php'); //se hace la conexion


class DAOEquipo{
	private $conexionBD;	
	
    function __construct(){
    $this->conexionBD= new conexion();
    }

    public function obtenerIDJugadores($idPartido){
        $vectorData;
        $link = $this->conexionBD->getConexion();
        $query = "SELECT * FROM equipo where id_partido = '$idPartido'";
        $result = mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $equipo = new Equipo();
            $equipo->setId_equipo($row['id_equipo']);
            $equipo->setId_partido($row['id_partido']);
            $equipo->setId_jugador($row['id_jugador']);
            $equipo->setNombre($row['nombre']);
            $equipo->setColor($row['color']);
            $vectorData[$i]=$equipo;
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