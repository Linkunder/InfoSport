   
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

?>
<?php include('headerJugador.php'); 
?>




<div class= "fondoamarillo">

<!-- Agendado de partidos -->


<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3>Elige tu recinto deportivo	 <?php  echo "  <img src='images/big.png' height='32px' width='32px'>"?></h3></center>
    </tr>
</table>











<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>


</div>
