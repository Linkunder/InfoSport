<?php
	include_once('conexion.php'); //se hace la conexion


class DAOLugarTercerTiempo{
	private $conexionBD;	
	
    function __construct(){
    $this->conexionBD= new conexion();
    }

    public function obtenerLugares(){
        $vectorData;
        $link = $this->conexionBD->getConexion();
        $query = "SELECT * FROM lugar";
        $result = mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $lugar = new LugarTercerTiempo();
            $lugar->setIdLugar($row['id_lugar']);
            $lugar->setNombreLugar($row['nombre_lugar']);
            $lugar->setImagen($row['imagen']);
            $vectorData[$i]=$lugar;
            $i++;
        }
        mysql_close($link);
        if (empty($vectorData)){
            return null;
        }
        return $vectorData;
    }

    public function obtenerLugarEsp($idLugar){
        $vectorData;
        $link = $this->conexionBD->getConexion();
        $query = "SELECT * FROM lugar where id_lugar = '$idLugar'";
        $result = mysql_query($query,$link) or die(mysql_error());
        $i=0;
        while ($row=mysql_fetch_array($result)){
            $lugar = new LugarTercerTiempo();
            $lugar->setIdLugar($row['id_lugar']);
            $lugar->setNombreLugar($row['nombre_lugar']);
            $lugar->setImagen($row['imagen']);
            $vectorData[$i]=$lugar;
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