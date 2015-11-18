
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>


<?php include('headerJugador.php');?>
















<!-- Aqui insertar Ver Grupos -->








<?php

    include_once('../../TO/GrupoConformado.php');
    include_once('../../LOGICA/infoGruposConformados.php');
    include_once('../../TO/Jugador.php');
	include_once('../../LOGICA/infoJugadores.php');

    $jefeJugador = infoJugadores::obtenerInstancia();
	$correo = $_SESSION['sesion'];;
	$vectorJugador=$jefeJugador->buscarID($correo);

	$idJugadorGrupo = 0;
    foreach($vectorJugador as $Jugador){    
    	$idJugadorGrupo= $Jugador->getId_jugador();
    }

    $jefeGrupoConformado = infoGruposConformados::obtenerInstancia();
    $vectorGrupos=$jefeGrupoConformado->obtenerGrupos($idJugadorGrupo);


?>

<hr>
<div class="header-table" valign="middle"> 

<h3>Mis grupos</h3>
</div>


<br>
<table class="table table-bordered center">
<tr>

<th>Nombre</th>
<th>Fecha de creacion</th>
<th>Capitan</th>
<th></th>

</tr>


<?php
foreach($vectorGrupos as $Grupo){    
?>
<tr>
<td><?php echo $Grupo->getNombre_grupo();?></td>    
<td><?php echo $Grupo->getFecha_creacion();?></td>
<td><?php echo $Grupo->getCapitan();?></td>
<td><center><a href='verEquipo.php?id_grupo=<?php echo $Grupo->getId_grupo();?>'  title="Ver equipo">
	<?php
    echo "<img src='images/teamblack.png' height='24px' width='24px'>";
  ?>
</a></center></td>

</tr> 


<?php
}
    ?>
</table>

<br>
<br>


<center><button><a href="agregaRecinto.php"><h3>Agregar grupo</h3><br></a></button><center>
  <br>
  <br>









<?php include('footer.php');?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
<?php include('js.php');?>
    </body>
</php>
