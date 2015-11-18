<?php

class conexion{

private $nombreBd="infosport";
private $direccionBD="localhost";
private $user="root";
private $pass="";    
    
function __construct(){

}
    
public function getConexion(){

    $link=mysql_connect($this->direccionBD,$this->user,$this->pass);
    mysql_select_db($this->nombreBd,$link);
    return $link;
}

}

?>