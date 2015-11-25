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

   		<input class="btn14" type="submit" value="SI" class="button" />
   		<input class="btn14" type="submit" value="NO" class="button" />

 </div>
</div>



<br>

</div>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>
