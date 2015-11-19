
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>
<?php include('headerJugador.php');?>

<!-- Aqui insertar el jugador al grupo, y que vuelva a la seccion de busqueda -->

















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
