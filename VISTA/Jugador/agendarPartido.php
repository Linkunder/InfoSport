   
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

?>
<?php include('headerJugador.php'); 


include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos = $jefeRecinto->obtenerRecinto(); // obtiene todos los recintos


?>


<!-- Agendado de partidos -->

<div class="section secondary-section " id="portafolio">
    <div class="container">

<table class="table table-bordered2 ">
    <tr>
        <th>
            <center><h3>Busca tu recinto deportivo	 <?php  echo "  <img src='images/big.png' height='32px' width='32px'>"?></h3></center>
         </th>
    </tr>
</table>

<div class="section secondary-section " id="portafolio">
        <div class="container">
<div class = "busqueda">
<form class="form-wrapper cf" action="busqueda3.php" method="get">
        <input type="text" placeholder="Busca tu cancha..." name="search" required>
        <button type="submit">Buscar</button>
    </form> 
</div>


</div>
</div>

</div>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>

