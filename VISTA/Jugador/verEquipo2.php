
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>

<?php include('headerJugador.php');?>
















<!-- Aqui insertar Ver Detalle grupo-->




<br>

<?php


include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
$jefeJugador = infoJugadores::obtenerInstancia();
ob_start();
$id_grupo2 = $_GET['id_grupo'];
$vectorJugadores=$jefeJugador->obtenerJugadores($id_grupo2);
?>






<div class="header-table"> <i class="icon-th-list"></i>
  <h3>Nombre equipo</h3> <!-- La idea seria poner el nombre del equipo aqui-->
</div>



<br>
<table class="table table-bordered center">
<tr>   
<th>Nombre</th>
<th>Correo</th>
<th>Deporte favorito</th>
<th>Posicion</th>
<th>Foto</th>
</tr>


<?php
foreach($vectorJugadores as $Jugador){    
    $nombrejugador = $Jugador->getNombre();
    $nombreApellido = $nombrejugador." ".$Jugador->getApellido();
?>
<tr> 
<td><?php echo $nombreApellido;?></td>
<td><?php echo $Jugador->getCorreo();?></td>
<td><?php echo $Jugador->getDeporte_fav();?></td>
<td><?php echo $Jugador->getPosicion();?></td>
<td> <p align="center">
  <?php
    $imagepath = "../images/usuarios/";
    echo "<img src='".$imagepath.$Jugador->getDirectorio_foto()."' height='50px' width='50px'>";
  ?>
</p>
</td>
</tr> 
    
<?php
}
    ?>
</table>


<br>
<br>




<center><a href='grupos.php' title="Volver">
    <?php
    echo "<img src='images/volver.png' height='32px' width='32px'>";
  ?>
</a></center>
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