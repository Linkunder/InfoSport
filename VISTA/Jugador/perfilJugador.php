<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>

<?php include('headerJugador.php');?>



  <!-- Aqui insertar perfil -->

<div class="fondoamarillo"> 

<?php

include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

$jefeJugador = infoJugadores::obtenerInstancia();

// ESTE ID SE DEBE TRAER DESDE LA SESION, LO ESTOY INVESTIGANDO


$correo = $_SESSION['sesion'];
//echo "perfilJugador.php: $id";
//echo "<br>";
$vectorJugador=$jefeJugador->buscarID($correo);


?>


<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3>Mi perfil</h3></center>
    </tr>
</table>



<br>


<table class="table table-bordered center">
    <tr> 
    </tr>

     <?php
    foreach($vectorJugador as $Jugador){    
    ?>
    <tr>
        <td> <p align="center"> <!-- Fila 1 columna 1 tabla 1-->
            <?php
            $imagepath = "../images/usuarios/";
            echo "<img src='".$imagepath.$Jugador->getDirectorio_foto()."' height='250px' width='250px'>";
            ?>
        </p>
        </td>

        <td>    <!-- Fila 1 columna 2 tabla 1-->
            <center><h2> Datos personales </h2></center><br>
                <form method="post" action="actualizarInformacion.php">
        <table align="center">

            <!--
        <tr>
            <td> ID Jugador: </td>
            <td><input type="text" name="id_jugador" value="<?php echo $Jugador->getId_jugador();?>" readonly="readonly" size="30" maxlength="100"> </td>
        </tr>

    -->
        <tr>
            <td> Nombre: </td>
            <td><input type="text" name="nombre" value="<?php echo $Jugador->getNombre();?>" size="30" maxlength="100"> </td>
        </tr>
        <tr>
            <td> Apellido: </td>
            <td><input type="text" name="apellido" value="<?php echo $Jugador->getApellido();?>"  size="30" maxlength="100"> </td>
        </tr>
        <tr>
            <td> Sexo: </td>
            <td><input type="text" name="sexo" value="<?php echo $Jugador->getSexo();?>"  size="30" maxlength="100"> </td>
        </tr>
        <tr>
            <td> Fecha de nacimiento: </td>
            <td><input type="date" min="1950-12-31" max="" name="fecha_nacimiento" value="<?php echo $Jugador->getFecha_nacimiento();?>"  size="30" maxlength="100"> </td>
        </tr>
        <tr>
            <td> Deporte favorito: </td>
            <td><select name="deporte_favorito" value="<?php echo $Jugador->getDeporte_fav();?>">
                <option>Baby-futbol</option>
                <option>Futbolito</option>
                <option>Hockey</option>
                <option>Basquetbol</option> 
      </select> 
      </td>
        </tr>
        <tr>
            <td> Posicion: </td>
            <td><select name="posicion" value="<?php echo $Jugador->getPosicion();?>">
                            <option>Arquero</option>
                            <option>Defensa</option>
                            <option>Mediocampista</option>
                            <option>Delantero</option>
      </select>
      </td>
        </tr>
        <tr>
            <td> Correo: </td>
            <td><input type="text" name="correo" value="<?php echo $Jugador->getCorreo();?>" size="30" maxlength="100"> </td>
        </tr>

                <tr>
            <td> Foto: </td>
            <td><input type="text" name="directorio_foto" value="<?php echo $Jugador->getDirectorio_foto();?>" readonly="readonly"  size="30" maxlength="100"> </td>
            <td><a href="cambiarImagen.php">Cambiar imagen</a></td>
        </tr>

  <br>    
        <tr>
        </tr>

    </table>
    <center><input type="submit" name="submit" value="Actualizar" class="modificar"  onclick="valida_envia()"></center>
    <br>
</form>

            <?php
            }
                ?>

            </td>    

    </tr> 
    

</table>


</div>


<?php include('footer.php');?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
<?php include('js.php');?>
    </body>
</php>