<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/inforecintos.php');
include_once('../../TO/Comentario.php');
include_once('../../LOGICA/controlComentarios.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
$jefeComentario = controlComentarios::obtenerInstancia();
$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();
$jefeJugador= infoJugadores::obtenerInstancia();

include('headerJugador.php'); ?>

<div class="section secondary-section " id="portafolio">
        <div class="container">
<div class = "busqueda">
<form class="form-wrapper cf" action="busqueda2.php" method="get">
        <input type="text" placeholder="Busca tu cancha..." name="search" required>
        <button type="submit">Buscar</button>
    </form> 
</div>

<?php
$search = '';
$cont = 0;
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

$val = '';
$pos = '';
if ($search!=''){ ?>

    <h3>Resultados</h3>

    

            <ul class="nav nav-pills">
                <li class="filter" data-filter="photo"></li>
                <li class="filter" data-filter="identity"></li>
            </ul>
            <div id="single-project">
<?php } 
foreach ($vectorRecintos as $key) {
    $nombre = $key->getNombre();
    $pos = strripos($nombre, $search);
    $superficie = $key->getSuperficie();
    $pos2 = strripos($superficie, $search); 
    $descripcion = $key->getDescripcion();
    $pos3 = strripos($descripcion, $search);
    
    if ($pos !== false || $pos2 !== false || $pos3 !== false) { ?>
                <!-- Start details for portfolio project 1 -->
                
                    <div id="slidingDiv<?php echo $cont?>" class="toggleDiv row-fluid single-project">
                        <div class="span6"> 
                            <style>
.Flexible-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 80px;
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

<iframe
  width="600"   height="500"  frameborder="5" style="border:0"  maptype="satellite"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDR2WyVnnd9GsSTKys5OEkowPu41kMpEUs
    &q=Chile + Chillan + <?php echo $key->getDireccion();?>" allowfullscreen>
</iframe>
 </div>
 </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3> <?php echo $nombre ?> </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span><?php echo $key->getNombre();?></div>
                                    <div>
                                        <span>Horario</span><?php echo $key->getHorario();?></div>
                                    <div>
                                        <span>Descripcion</span><?php echo $key->getDescripcion();?></div>
                                    <div>
                                        <span>Precio</span><?php echo $key->getPrecio();?></div>
                                    <div>
                                        <span>Puntaje</span><?php echo $key->getPuntuacion();?></div>
                                    <div>
                                        <span>Numero de canchas</span><?php echo $key->getCantidadCanchas();?></div>
                                                                <div>
                                        <span>Direccion</span><?php echo $key->getDireccion();?></div>
                                                                <div>
                                        <span>Telefono</span><?php echo $key->getTelefono();?></div>
                                                                <div>
                                        <span>Superficie</span><?php echo $key->getSuperficie();?></div>  
                                         <BUTTON><a href='comentarioBusqueda.php?idd=<?php echo $key->getIdRecinto();?>'class "modificar" >Comentarios</a></BUTTON>                    
                                                 </div>
                                <p></p> <!--puede ir algo mas escrito aqui -->
                            </div>
                        </div>


<br >
<br />
<br >
<br />
 

                                
                    
                  
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="demo1">
                                    <li class="news-item">
                                        <table cellpadding="4"> <!-- 4-->
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </li>    
                                    <?php $vectorComentarios=$jefeComentario->obtenerComentarioDos($key->getIdRecinto());
                                        if(!empty($vectorComentarios)){
                                    foreach($vectorComentarios as $comentarios){
                                         $jugador=$jefeJugador->obtenerJugadorId($comentarios->getId_jugador());
                                    
                                    ?>
                                       <li class="news-item">
                                        <table cellpadding="4"> <!-- 4-->
                                            <tr>
                                               <td> 
                                                <div class = "ajustarImagen">
                                                <img src="images/usuarios/<?php echo $jugador[0]->getDirectorio_foto(); ?>" class="img-circle">
                                                </div>
                                                </td>
                                                <td><div class="testimonial"><p><?php echo $comentarios->getDetalle();?></p></div></td>
                                            </tr>
                                        </table>
                                    </li> 
                                    <?php }} ?>          
      
                                </ul>
                            </div>
                        </div>






                    </div>
                    <!-- End details for portafolio project 1 -->
                    
                    
            
        
    <?php $cont++;
    }  
}
?>

<ul id="portfolio-grid" class="thumbnails row">
<?php
    $cont = 0;
foreach ($vectorRecintos as $key) {
    $nombre = $key->getNombre();
    $pos = strripos($nombre, $search);
    $superficie = $key->getSuperficie();
    $pos2 = strripos($superficie, $search); 
    $descripcion = $key->getDescripcion();
    $pos3 = strripos($descripcion, $search);
    
    if ($pos !== false || $pos2 !== false || $pos3 !== false) { ?>
        <li class="span4 mix web">
            <div class="thumbnail">
                <img src="../images/recintos/<?php echo $key->getImagen();?>" height='640' width='400' alt="project 1">
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
}
?>

</ul>
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-36.602459, -72.077014),
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}


google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(
    window,
    'load',
    function () {
         //1000 milliseconds == 1 second,
         //play with this til find a happy minimum delay amount
        window.setTimeout(initialize, 1000);
    }
);
</script>

<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>