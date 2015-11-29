<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}

include('headerJugador.php');


include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/Equipo.php');
include_once('../../LOGICA/controlEquipo.php');
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
include_once('../../TO/Grupo.php');
include_once('../../LOGICA/infoGrupos.php');
include_once('../../TO/GrupoConformado.php');
include_once('../../LOGICA/infoGruposConformados.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
include_once('../../TO/TercerTiempo.php');
include_once('../../LOGICA/controlTercerTiempo.php');
include_once('../../TO/LugarTercerTiempo.php');
include_once('../../LOGICA/controlLugarTercerTiempo.php');

$jefePartido = controlPartido::obtenerInstancia();
$jefeRecinto = infoRecintos::obtenerInstancia();
$jefeGrupo = infoGrupos::obtenerInstancia();
$jefeGrupoC = infoGruposConformados::obtenerInstancia();
$jefeJugador = infoJugadores::obtenerInstancia();
$jefeTercer = controlTercerTiempo::obtenerInstancia();
$jefeLugar = controlLugarTercerTiempo::obtenerInstancia();
$jefeEquipo = controlEquipo::obtenerInstancia();

?>



<?php
$idPartido = $_GET['id_partido']; // De aqui saco el recinto, hora, fecha, cuota y numero de personas
$idRecinto = $_SESSION['id_recintoA'];// Datos del recinto : direccion
//$idGrupo = $_SESSION['grupoPartido']; // Nombre del grupo, y tb puedo sacar los jugadores.
//$idTercer = $_SESSION['id_tercerTiempo']; // Datos del tercer tiempo


$recinto1 = $jefeRecinto->obtenerRecintoEsp($idRecinto);
foreach ($recinto1 as $RecintoDeportivo) {
	$imagenRecinto = $RecintoDeportivo->getImagen();
	$nombreRecinto = $RecintoDeportivo->getNombre();
	$direccionRecinto = $RecintoDeportivo->getDireccion();
}

$tercerTiempo1 = $jefeTercer->buscarTercer($idPartido);
foreach ($tercerTiempo1 as $TercerTiempo) {
	$idLugar = $TercerTiempo->getIdLugar();
}


/*
$grupo1 = $jefeGrupo->obtenerGrupoEsp($idGrupo);
foreach ($grupo1 as $Grupo) {
	$nombreGrupo = $Grupo->getNombre_grupo();
}



$tercerTiempo1 = $jefeTercer->obtenerTercerEsp($idTercer);
foreach ($tercerTiempo1 as $TercerTiempo) {
	$idLugar = $TercerTiempo->getIdLugar();
}
*/
$lugarTercerTiempo1 = $jefeLugar->obtenerLugarEsp($idLugar);

if ($idLugar != 0) { // Si es 0, no hay tercer tiempo 
foreach ($lugarTercerTiempo1 as $LugarTercerTiempo) {
	$nombreLugar = $LugarTercerTiempo->getNombreLugar();
	$imagenLugar = $LugarTercerTiempo->getImagen();
}
}





?>

<table class="table table-bordered2 margin-table">
    <tr>
        <th>
        	<br>

            <center><h3><?php echo "<img src='images/man451.png' height='32px' width='32px'>   "?>Resumen del partido<?php  echo "<img src='images/tercertime.png' height='32px' width='32px'>"?></h3></center>         
            <br>
    </tr>
</table>

<div class="section secondary-section " id="portafolio">
        <div class="container">



<ul class="nav nav-pills">
	<li class="filter" data-filter="photo"></li>
	<li class="filter" data-filter="identity"></li>
</ul>

<div id="single-project">

           
<div id="slidingDiv<?php echo $cont?>" class="toggleDiv row-fluid single-project">
	<div class="span6"> 
		<style>
			.Flexible-container {
			    position: relative;
			    padding-bottom: 56.25%;
			    padding-top: 90px;
			    height: 0;
			    overflow: hidden;
			}

			.Flexible-container iframe,   
			.Flexible-container object,  
			.Flexible-container embed {
			    position: absolute;
			    top: 0;
			    left: 0;
			    width: 100%;
			    height: 100%;
			}
		 </style>

		  <div class="Flexible-container">
		  	<div class = "img1">
		  	<img src="../images/recintos/<?php echo $imagenRecinto;?>" height='640' width='400' alt="project 1">
		  	</div>
		  </div>


 	</div>




<div class="span6">
	<div class="project-description">
		<div class="project-title clearfix">
			<h3> <?php echo "$nombreRecinto" ?> </h3>

		</div>
		<div class="project-info2">

			<?php
			$vectorPartido = $jefePartido->obtenerPartido($idPartido);
			foreach ($vectorPartido as $Partido) {
				$dia = $Partido->getFecha();
				$newFecha = date("d-m-Y", strtotime($dia));
				$hora = $Partido->getHora();
				$cuotaTotal = $Partido->getCuota();
				$participantes = $Partido->getNroJugadores();
				$cuotaPersonal = $cuotaTotal/$participantes;
			}
			?>
			<div>
				<span>Direccion:  </span><?php echo "  $direccionRecinto"?>
			</div>
			<div>
				<span>Dia:  </span><?php echo "  $newFecha"?>
			</div>
			<div>
				<span>Hora:  </span><?php echo "  $hora"?>
			</div>
			<div>
				<span>Cuota personal:  </span><?php echo "  $ $cuotaPersonal"?>
			</div>
			<div>
			<!--	<span>Grupo:  </span><?php echo "  $nombreGrupo"?>	-->
			</div>
			<div>
				<span>Participantes:  </span>
				<table align = "center">
					<tr>
						<td>
				<?php 
				$jugadores = $jefeJugador->obtenerJugadores5($idPartido);
				foreach ($jugadores as $Jugador) {
					$nombre = $Jugador->getNombre();
					$nombreApellido= $nombre." ".$Jugador->getApellido();
					echo "$nombreApellido<br>";
				}
				?> 
			</td>
				</tr>
				</table>
			</div>

			<?php 
			if ($idLugar != 0) { //  agendo tercer tiempo
			?>

			
			<div class="project-title clearfix">
			<h3> <?php echo "Tercer tiempo" ?> </h3>
			</div>
			<?php 
			foreach ($tercerTiempo1 as $TercerTiempo) {
				$fechaTercer = $TercerTiempo->getFecha();
				$newFecha2 = date("d-m-Y", strtotime($fechaTercer));
				$horaTercer = $TercerTiempo->getHora();
				$cuotaTercer = $TercerTiempo->getComentario();
			} 
			?>

			<div>
				<span>Lugar:  </span><?php echo "  $nombreLugar"?>
			</div>
			<div>
				<span>Dia:  </span><?php echo "  $newFecha2"?>
			</div>
			<div>
				<span>Hora:  </span><?php echo "  $horaTercer"?>
			</div>

			<div>
				<span>Comentarios:  </span><?php echo "  $cuotaTercer"?>
			</div>


			<?php
			}
			?>

		</div>
		<p></p> <!--puede ir algo mas escrito aqui -->
	</div>
</div>



 
<div class="row">
	<div class="col-xs-12" >
		<ul class="demo1" >

			
						<!-- prueba -->
						<div class="span4">
							<div class="testimonial">
                                <div class="whopic">
                                    
                            </div>
                        </div>
                    
                    </ul>
                </div>
            </div>
        </div>
        <!-- End details for portafolio project 1 -->
        <?php 

?>
  <center><a href="agendados.php"><button class="btn13" >Volver</button></a></center>

<br>
<br>

<ul id="portfolio-grid" class="thumbnails row">
        <li class="span4 mix web">
            <div class="thumbnail">
                <img src="../images/recintos/<?php echo $imagenRecinto; ?>" height='640' width='400' alt="project 1">
                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $cont?>">
                    <i class="icon-plus"></i>
                </a>
                <h3> <?php echo "$nombre" ?> </h3>
                <p><?php echo $key->getDescripcion(); ?></p>
                <div class="mask"></div>
            </div>
        </li>
</ul>






</div>





<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>


