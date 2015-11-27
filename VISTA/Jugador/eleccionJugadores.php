<?php
include_once('../../PERSISTENCIA/conexion.php');
 $conexionBD= new conexion();
 // $id_equipo=$_GET['id_equipo'];
$id_grupo="1";
//$id_recinto=$_GET['id_recinto'];
$id_recinto="3";
//$id_partido=$_GET['id_partido'];
$id_partido="9";
?>

<?php 
            
         $ar= "<script> document.write(arrayJugador) </script>";
    
         echo ""+$ar+"";
         $arrayElegidos= explode("*", $ar);
         echo ""+$arrayElegidos[0];

        /*for($i=1; $i<=sizeof($arrayElegidos); $i++){
              $id=$arrayElegidos[$i];
            echo $id;
            $link=$conexionBD->getConexion();
         $query="INSERT INTO equipo(id_recinto, id_partido, id_jugador) VALUES('$id_recinto','$id_partido','$id')";
         mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
         mysql_close($link); //Cerramos la conexion

        } */

?>