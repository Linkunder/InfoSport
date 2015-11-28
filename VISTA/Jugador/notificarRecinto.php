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
            <center><h3>¿Tu recinto favorito no esta en InfoSport?<?php  echo "  <img src='images/big.png' height='32px' width='32px'>"?></h3></center>
            <center><h5>¡No te preocupes! InfoSport te permite agregarlo de manera facil y rapida</h5></center>
         </th>
    </tr>
</table>



<form class="notificacion" action= "procesarNotificacion.php" method="post">

<ul>
        <label for="nombre">* Nombre</label>
        <input class="campoTexto" type="text" name="nombre" required>

        <label for="descripcion">Descripcion</label>
        <input class="campoTexto" type="text" name="descripcion" maxlength="200">

        <label for="precio">* Precio</label>
        <input class="campoTexto" type="text" name="precio" maxlength="200" required>

        <label for="horario">* Horario</label>
        <input class="campoTexto" type="text" name="horario" maxlength="200" required>

        <label for="numero_canchas">Numero de canchas</label>
        <input class="campoTexto" type="text" name="numero_canchas" maxlength="200">

        <label for="direccion">* Direccion</label>
        <input class="campoTexto" type="text" name="direccion" maxlength="200" required>

        <label for="telefono">* Telefono</label>
        <input class="campoTexto" type="text" name="telefono" maxlength="200" required>

        <label for="superficie">Superficie</label>
        <input class="campoTexto" type="text" name="superficie" maxlength="200">

    
        <br>
            <label>*Los campos con asterisco son obligatorios</label>
            <br>
        <center><input class="btn12m" type="submit" value="Notificar"  ></center>
    
</ul>
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

