<!DOCTYPE php>
<?php
session_start();
?>
<php lang="en">


<?php include('headerJugador.php');
// Esta pantalla deberia venir despues de la eleccion de los jugadores
// supondre que es el partido 1

include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');

$jefePartidos = controlPartido::obtenerInstancia();
$vectorPartidos = $jefePartidos->obtenerPartidos();

$ultimoPartido = end($vectorPartidos);
$idUltimoPartido = $ultimoPartido->getIdPartido();

$idpartido = $_SESSION['id_partidoA'];
$auxiliar = 0;

?>


<div class="fondoamarillo">

<table class="table table-bordered2">
    <tr>
        <th>
        	<br>

            <center><h3><?php echo "<img src='images/tercertime.png' height='32px' width='32px'>   "?>¿Deseas agendar un tercer tiempo? <?php  echo "<img src='images/wine65.png' height='32px' width='32px'>"?></h3></center>
            
            <br>
    </tr>
</table>


<div class= "cuadrado">
<div>

   		<input class="btn14" type="submit" value="SI" class="button" onClick="location.href='procesarTercerTiempo.php?id_partido=<?php echo $idpartido?>&auxiliar=<?php echo 1?>'"/>
   		<input class="btn14" type="submit" value="NO" class="button" onClick="location.href='procesarTercerTiempo.php?id_partido=<?php echo $idpartido?>&auxiliar=<?php echo 0?>'"/>

 </div>
</div>



<br>

</div>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>
