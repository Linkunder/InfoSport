
<?php
session_start();
if($_SESSION["autentica"]=="SI") {

}
else {
header("Location:login.php"); 
}
?>

<?php include('headerJugador.php');


include_once('../../TO/TercerTiempo.php');
include_once('../../LOGICA/controlTercerTiempo.php');
include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/LugarTercerTiempo.php');
include_once('../../LOGICA/controlLugarTercerTiempo.php');

$jefeLugarTercerTiempo = controlLugarTercerTiempo::obtenerInstancia();
$vectorLugarTercerTiempo = $jefeLugarTercerTiempo->obtenerLugares();

$fecha=$_SESSION['fechaSes'];

?>

<div class="section secondary-section " id="portafolio">
        <div class="container">


<table class="table table-bordered2">
    <tr>
        <th>
        	<br>

            <center><h3><?php echo "<img src='images/tercertime.png' height='32px' width='32px'>   "?>InfoSport te recomienda los siguientes lugares <?php  echo "<img src='images/wine65.png' height='32px' width='32px'>"?></h3></center>         
            <br>
    </tr>
</table>

    

<ul class="nav nav-pills">
	<li class="filter" data-filter="photo"></li>
	<li class="filter" data-filter="identity"></li>
</ul>

<div id="single-project">
<?php 

$i = 0;
shuffle($vectorLugarTercerTiempo);
foreach ($vectorLugarTercerTiempo as $LugarTercerTiempo) {
	if ($i <=2){
    $nombre = $LugarTercerTiempo->getNombreLugar();
    $i++;
 	?>
                
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
		  	<img src="../images/tercertiempo/<?php echo $LugarTercerTiempo->getImagen();?>" height='640' width='400' alt="project 1">
		  	</div>
		  </div>


 	</div>


<div class="span6">
	<div class="project-description">
		<div class="project-title clearfix">
			<h3> <?php echo "$nombre" ?> </h3>
			<span class="show_hide close">
				
			</span>
		</div>
		<div class="project-info">

			<br>
			<?php
			$idlugar = $LugarTercerTiempo->getIdLugar();
			?>
			<form action="procesarLugar.php?id_lugar=<?php echo $idlugar?>" method="post">
				<label class="titulo2" for ="fecha">Fecha:</label>
				<input id="fecha" name="fecha" class="cajaT" type="date"  min=<?php echo $fecha;?> required>

				<label class="titulo2" for ="hora">Hora:</label>
				<input id="hora" name="hora" class="cajaT" type="time" required>

				<label class="titulo2" for ="comentario">Comentario:</label>
				<input id="comentario" name="comentario" class="cajaT" type="text" placeholder="Escribe tu comentario..." required>
				<br>
				<br>
				<center><button type="submit" class="btn12m">Ir aqui</button></center>
			</form>
		</div>
		<p></p> <!--puede ir algo mas escrito aqui -->
	</div>
</div>


<br>
<br/>
<br>
<br/>
 
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
    }
  }
?>

<ul id="portfolio-grid" class="thumbnails row">
<?php
$cont = 0;
foreach ($vectorLugarTercerTiempo as $LugarTercerTiempo) {
?>
        <li class="span4 mix web">
            <div class="thumbnail">
                <img src="../images/tercertiempo/<?php echo $LugarTercerTiempo->getImagen();?>" height='640' width='400' alt="project 1">
                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $cont?>">
                    <i class="icon-plus"></i>
                </a>
                <h3> <?php echo "$nombre" ?> </h3>
                <p><?php echo $key->getDescripcion(); ?></p>
                <div class="mask"></div>
            </div>
        </li>
    <?php $cont++;
    
}
?>

</ul>
</div>
</div>




<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>
