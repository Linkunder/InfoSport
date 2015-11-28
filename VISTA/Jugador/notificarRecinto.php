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

<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3>¿Tu recinto favorito no está en InfoSport?<?php  echo "  <img src='images/big.png' height='32px' width='32px'>"?></h3></center>
            <center><h5>No te preocupes, InfoSport te permite agregarlo</h5></center>
         </th>
    </tr>
</table>


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

