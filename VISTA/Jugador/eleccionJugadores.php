<?php
session_start();
include_once('../../PERSISTENCIA/conexion.php');
 $conexionBD= new conexion();
      

$id_recinto=$_SESSION['id_recintoA'];    
$id_partido=$_SESSION['id_partidoA'];    


?>

<?php 
            
         $data= json_decode($_POST['jObject'],true);

         print_r("Jugadores Elegidos!");
    

         
        for($i=0; $i<sizeof($data); $i++){
              $id=$data[$i];
            $link=$conexionBD->getConexion();
         $query="INSERT INTO equipo(id_partido, id_jugador) VALUES('$id_partido','$id')";
         mysql_query($query,$link) or die(mysql_error()); //ejecuto la query
         mysql_close($link); //Cerramos la conexion

        } 

?>