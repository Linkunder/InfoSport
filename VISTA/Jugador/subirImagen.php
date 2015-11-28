<?php

session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>
<div class= "fondoamarillo">
<?php include('headerJugador.php');?>




  <!-- Aqui insertar formulario -->

<?php
include_once('../../TO/Notificacion.php');
include_once('../../LOGICA/controlNotificacion.php');

$jefeNotificacion = controlNotificacion::obtenerInstancia();
$vector = $jefeNotificacion->obtenerNotificaciones();
$ultimaNotificacion = end($vector);
$idUltima = $ultimaNotificacion->getIdNotificacion();


?>

<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3> ¡Ya casi terminas! <?php  echo "  <img src='images/big.png' height='32px' width='32px'>"?></h3></center>
            <center><h5>Agrega una imagen del recinto</h5></center>
         </th>
    </tr>
</table>
        
<form class="notificacion" action="uploadRecinto.php" method="post" enctype="multipart/form-data">
		<input class="campoTexto" type="file" name="fileToUpload" id="fileToUpload" size = "50" maxlengtg="50" autofocus required>
		<br>
		<br>
		<center><input class="btn12m" type="submit" value="Terminar"></center>
</form>
        






<?php include('footer.php');?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
<?php include('js.php');?>
    </body>
</php>
</div>

