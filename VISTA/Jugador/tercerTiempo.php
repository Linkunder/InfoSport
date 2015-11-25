<!DOCTYPE php>
<?php
session_start();
?>
<php lang="en">


<?php include('headerJugador.php');?>


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
	<form action="procesarTercerTiempo.php" method="post">
   <input class="btn14" type="button" value="SI" class="button" data-type="zoomin" />
   <input class="btn14" type="button" value="NO" class="button" data-type="zoomin" />
	</form>
 </div>
</div>

<br>

</div>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>
