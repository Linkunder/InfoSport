<?php
session_start();
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/inforecintos.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
include_once('../../TO/Grupo.php');
include_once('../../LOGICA/infoGrupos.php');
include_once('../../TO/GrupoConformado.php');
include_once('../../LOGICA/infoGruposConformados.php');
include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');

$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();

$vectorJugador=$jefeJugador= infoJugadores::obtenerInstancia();
$jefeGrupoConformado = infoGruposConformados::obtenerInstancia();

$jefePartidos = controlPartido::obtenerInstancia();

$vectorPartidos = $jefePartidos->obtenerPartidos();
$ultimoPartido = end($vectorPartidos);
$idUltimoPartido = $ultimoPartido->getIdPartido();

$nombreRecinto = $jefePartidos->obtenerNombreRecinto($idUltimoPartido);



// $id_equipo=$_GET['id_equipo'];
$id_grupo="1";
$vectorJugador = $jefeGrupoConformado->obtenerJugadores($id_grupo);; 



include('header.php'); ?>





  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
<<<<<<< HEAD
  .draggable { 
     width: 40px;
     height: 40px; 
     padding: 5px; 
     float: left; 
     margin: 0 10px 10px 0; 
     font-size: 0.9em; 
     color: black; 
     text-align: center;}     
  .ui-widget-header p{
    color: black; 
    text-align: 
    center;}
  ,.ui-widget-content p { 
    margin: 0;
    color: black; 
    text-align: center; 
  }
  #snaptarget { 
    height: 452px; 
    width: 726px; 
    float: right; 
    color: black; 
    text-align: center;
    background-image: url("images/cfut.jpg"); /*Aqui hay que ir cambiando la imagen dependiendo del deporte*/
=======
  .draggable { width: 40px; height: 40px; padding: 5px; float: left; float: ; margin: 0 10px 10px 0; font-size: 0.9em; color: black; text-align: center;}
  .ui-widget-header p{color: black; text-align: center; }, .ui-widget-content p { margin: 0;color: black; text-align: center;}
  #snaptarget { height: 452px; width: 726px; float: right; color: black; text-align: center; margin-top: 20px; margin-right: 20px;
    background-image: url("images/cfut.jpg"); 
>>>>>>> origin/master
  }
  </style>

  <script>
  $(function() { 
    $( "#draggable" ).draggable({ 
      snap: true 
    });
    $( "#draggable2" ).draggable({ snap: ".ui-widget-header" 

    });
    $( "#draggable3" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable4" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable5" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable6" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable7" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable8" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable9" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable10" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable11" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable12" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable13" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable14" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable15" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable16" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable17" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable18" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable19" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable20" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable21" ).draggable({ snap: ".ui-widget-header" });
    $( "#draggable22" ).draggable({ snap: ".ui-widget-header" });
  });
  </script>

<div class= "fondoamarillo"> <!-- FONDO AMARILLO-->

<<<<<<< HEAD
<div  id="snaptarget" class="ui-widget-header"> <!--Recinto deportivo (imagen de cancha) -->
  <p><?php echo "Recinto"?></p>
=======
<div class = "tituloCancha">
  <br>
  <?php echo "$nombreRecinto"?>
</div>

<div  id="snaptarget" class="ui-widget-header">

>>>>>>> origin/master
</div>
<br>

 
<br style="clear:none">
 
<?php 
$cont=2;

foreach ($vectorJugador as $Jugador) { //Vector de jugadores del grupo seleccionado  
?>
<div id="draggable<?php echo $cont ?>" class="draggable ui-widget-content"> <!--Jugador "draggable"-->
  <img src="../images/usuarios/<?php echo $Jugador->getDirectorio_foto()?>" width="30" alt="image02">
  <p color: "black"; text-align: "center"; ><?php echo $Jugador->getNombre()?></p>
</div>

<?php

  $cont++;
  }//fin del foreach
?>

<div>

<!--<br> para que baje el "fondoAmarillo" -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
<<<<<<< HEAD
<!--<br> para que baje el "fondoAmarillo" -->

=======

  <center><button class="btn13" href="#eleccionJugadores">Siguiente</button></center> </div>
<br>
>>>>>>> origin/master

<!--Boton para la eleccion de jugadores -->
  <center><button class="btn12" href="#eleccionJugadores">Siguiente</button></center> </div>

<?php
include('footer.php');
include('scrollUp.php');
?>