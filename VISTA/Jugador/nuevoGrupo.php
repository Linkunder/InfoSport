   
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
$vectorJugadores=$jefeJugador->obtenerJugador();

?>

<?php include('headerJugador.php');?>


<div class="section secondary-section " id="portafolio">
        <div class="container">
            <div class = "busqueda">
            <form class="form-wrapper cf" action="nuevoGrupo.php" method="get">
                <input type="text" placeholder="Busca un jugador..." name="search" required>
                <button type="submit">Buscar</button>
            </form> 
            </div>


<?php
	$search = '';
	$cont = 0;
	$aux = 1;
	if (isset($_GET['search'])) {
	    $search = $_GET['search'];
	    echo "Busqueda: ".$search;
	}

	$val = '';
	$pos = '';
	if ($search!=''){

?>


<center><h3>Resultados</h3></center>
<div id="single-project">

<?php } 
foreach ($vectorJugadores as $key) {
    $val = $key->getCorreo();
    $pos = strripos($val, $search);     
    if ($pos !== false) { ?>
		<div id="slidingDiv<?php echo $cont?>" class="toggleDiv row-fluid single-project">
			<div class="span6">
				<div class="project-description">
					<div class="project-title clearfix">
						<?php 
								$nombreJugador = $key->getNombre();
								$nombreApellido = $nombreJugador." ".$key->getApellido();
	                        ?>
						<h3> <?php echo $nombreApellido?> </h3>
						
					</div>
					<div class="project-info">
						<!--<div>
							
	                       <	 <span>Nombre</span><?php echo $nombreApellido;?></div> -->
	                    <div> <span>Correo</span><?php echo $key->getCorreo();?></div>
	                    <div> <span>Deporte</span><?php echo $key->getDeporte_fav();?></div>
	                    <div> <span>Posicion</span><?php echo $key->getPosicion();?></div>
                    </div>
                </div>
            </div>

	<?php 
	$cont++;
	$aux++;
    }  
}
?>

<ul id="portfolio-grid" class="thumbnails row">
<?php
    $cont = 0;
foreach ($vectorJugadores as $key) {
    $val = $key->getCorreo();
    $pos = strripos($val, $search);
    if ($pos !== false) { ?>
        <li class="span4 mix web">
            <div class="thumbnail">
                <img src="../images/usuarios/<?php echo $key->getDirectorio_foto();?>" height='640' width='400' alt="project 1">
                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $cont?>">
                    <i class="icon-plus"></i>
                </a>
                <h3> <?php echo "$val" ?> </h3>
                <p><?php echo $nombreApellido(); ?></p>
                <div class="mask"></div>
            </div>
        </li>
    <?php $cont++;
    }
}
?>

</ul>


</div>
</div>



<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>


