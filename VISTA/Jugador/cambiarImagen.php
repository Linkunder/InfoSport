<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>

<!DOCTYPE php>

<?php include('headerJugador.php');?>



  

  <!-- Aqui insertar formulario -->

<?php
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

$jefeJugador = infoJugadores::obtenerInstancia();
$vectorJugadores = $jefeJugador->obtenerJugador();




//$correo = $_SESSION['sesion'];
//$jugadorActual=$jefeJugador->buscarID($correo);



?>

<div class="account-container register">

    <div class="content clearfix">
        
        <form action="upload2.php" method="post" enctype="multipart/form-data">
        
            <h3>Selecciona tu nueva foto de perfil</h3><br>


              <div class="login-fields">


                <div class="field">
                    <input type="file" name="fileToUpload" id="fileToUpload" size = "50" maxlengtg="50" autofocus required>
                    <br/>
                </div> <!-- /field -->
                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                
                                    
                <!--<button class="button btn btn-primary btn-medium">Registrar</button>-->
                
            </div> <!-- .actions -->
            
            <p align="center"><input type="submit" value="Terminar"></p>
        </form>
        
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->








<?php include('footer.php');?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
<?php include('js.php');?>
    </body>
</php>