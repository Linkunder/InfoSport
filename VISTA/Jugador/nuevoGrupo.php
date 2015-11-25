
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}



include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');


$jefeJugador = infoJugadores::obtenerInstancia();
$correo = $_SESSION['sesion'];
$vectorJugador=$jefeJugador->buscarID($correo);
foreach($vectorJugador as $Jugador){    
	$idCapitan = $Jugador->getId_jugador();
}


?>

<?php include('headerJugador.php');?>

<!-- Incluir creacion del grupo -->

<div class= "fondoamarillo">
<br>

<table class="table table-bordered2">
    <tr>
        <th>
			<center><h3>Crea tu grupo de jugadores en InfoSport</h3></center>
			<center><h5>Con los jugadores que elijas, sera mucho mas facil agendar tu partido</h5></center>
		</th>
    </tr>
</table>




<form class="crearGrupo" action= "procesarGrupo.php" method="post">
<ul>

	    <label for="nombre">Nombre</label>
	    <input type="text" name="name" maxlength="100">
	
	
	    <label for="descripcion">Descripcion</label>
	    <input type="text" name="descripcion" maxlength="200">
	
		<br>
	    <center><input type="submit" value="Enviar"  ></center>
	
</ul>
</form>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>


</div>
