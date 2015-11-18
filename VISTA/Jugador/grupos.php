
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
    include_once('../../TO/Grupo.php');
    include_once('../../LOGICA/infoGrupos.php');
    include_once('../../TO/Jugador.php');
	include_once('../../LOGICA/infoJugadores.php');

    include_once('../../TO/GrupoConformado.php');
    include_once('../../LOGICA/infoGruposConformados.php');

    $jefeJugador = infoJugadores::obtenerInstancia();
	$correo = $_SESSION['sesion'];;
	$vectorJugador=$jefeJugador->buscarID($correo);
	$idJugadorGrupo = 0;
    
    foreach($vectorJugador as $Jugador){    
    	$idJugadorGrupo= $Jugador->getId_jugador();
        $nombreCapitan = $Jugador->getNombre();
        $apellidoCapitan= $nombreCapitan." ".$Jugador->getApellido();
    } 

    $jefeGrupo = infoGrupos::obtenerInstancia();
    $vectorGrupos=$jefeGrupo->obtenerGrupos($idJugadorGrupo);




    if ($vectorGrupos!=null){

?>

<hr>
<div class="header-table"> <i class="icon-th-list"></i>
  <h3>Mis equipos como capitan</h3>
</div>

<br>
    <table class="table table-bordered center">
    <tr>

    <th>Nombre</th>
    <th>Numero de jugadores</th>
    <th>Fecha de creacion</th>
    <th>Capitan</th>
    <th></th>
    <th></th>

    </tr>
<?php
    $auxiliar = 1;
    foreach($vectorGrupos as $Grupo){
        ob_start();
        $grupoActual = $Grupo->getId_grupo(); // Lo guardo por si acaso
        $_SESSION['grupoDetalle']=$grupoActual;
        echo '<a href="verEquipo.php"></a>';
?>
    <tr>
    <td><?php echo $Grupo->getNombre_grupo();?></td>    
    <td><?php echo $Grupo->getNumero_personas();?></td>
    <td><?php echo $Grupo->getFecha_creacion();?></td>
    <td>
        <?php echo "$apellidoCapitan";?>
    </td> 
    <td><center><a href='nuevoJugador.php?id_grupo=<?php echo $Grupo->getId_grupo();?>' title="Agregar jugador">
    	<?php
        echo "<img src='images/addblack.png' height='24px' width='24px'>";
      ?>
    </a></center></td>
    <td><center><a href='verEquipo.php?id_grupo=<?php echo $grupoActual;?>' class="modificar" title="Ver equipo">
    	<?php
        echo "<img src='images/teamblack.png' height='24px' width='24px'>";
      ?>
    </a></center></td>

    </tr> 


    <?php

    }
        ?>
    </table>

    <?php
    } else {
        $a = 0;
    }
?>

<br>
<br>

<!--- De aqui hacia arriba todo bien -->




<?php

    $jefeGrupo= infoGrupos::obtenerInstancia();
    $vectorGrupos2=$jefeGrupo->obtenerGrupos2($idJugadorGrupo);

    if ($vectorGrupos2!=null){

        $i=0;
    foreach ($vectorGrupos2 as $Grupo1) {
        $numeroGrupo = $Grupo1->getId_grupo();
      //  echo "$i "." $numeroGrupo   <br>";
        $i++;
    }
 
 ?>


<hr>
<div class="header-table"> <i class="icon-th-list"></i>
  <h3>Equipos a los que pertenezco</h3>
</div>


<br>
<table class="table table-bordered center">
<tr>

<th>Nombre</th>
<th>Numero de jugadores</th>
<th>Fecha de creacion</th>
<th>Capitan</th>
<th></th>

</tr>



 <?php   

    foreach($vectorGrupos2 as $Grupo1){
        ob_start();
        $grupoActual2 = $Grupo1->getId_grupo(); // Lo guardo por si acaso
        $_SESSION['grupoDetalle2']=$grupoActual2;
        echo '<a href="verEquipo2.php"></a>';
?>

        <tr>
        <td><?php echo $Grupo1->getNombre_grupo();?></td>    
        <td><?php echo $Grupo1->getNumero_personas();?></td>
        <td><?php echo $Grupo1->getFecha_creacion();?></td>
        <td><?php echo $Grupo1->getCapitan();?></td> 
        <td><center><a href='verEquipo2.php?id_grupo=<?php echo $grupoActual2?>'  title="Ver equipo">
            <?php
            echo "<img src='images/teamblack.png' height='24px' width='24px'>";
          ?>
        </a></center></td>

        </tr> 


    <?php
    }
    ?>


</table>
    <?php
    } else {
        $a=1;
        $message = "No pertenece a ningun grupo.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $yourURL="index2.php";
        echo ("<script>location.href='$yourURL'</script>");
    }
?>


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