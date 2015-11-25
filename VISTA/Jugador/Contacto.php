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

$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();
$vectorJugador=$jefeJugador= infoJugadores::obtenerInstancia();
$jefeGrupoConformado = infoGruposConformados::obtenerInstancia();

// $id_equipo=$_GET['id_equipo'];
$id_grupo="1";
$vectorJugador = $jefeGrupoConformado->obtenerJugadores($id_grupo);; 
//$id_recinto=$GET['id_recinto'];
$id_recinto="3";

include('header.php'); ?>





  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .draggable { width: 40px; height: 40px; padding: 5px; float: left; float: ; margin: 0 10px 10px 0; font-size: 0.9em; color: black; text-align: center;}
  .ui-widget-header p{color: black; text-align: center;}, .ui-widget-content p { margin: 0;color: black; text-align: center; }
  #snaptarget { height: 452px; width: 726px; float: right; color: black; text-align: center;
    background-image: url("images/cfut.jpg"); 
  }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable({ snap: true });
    $( "#draggable2" ).draggable({ snap: ".ui-widget-header" });
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

<body><div class= "fondoamarillo">

<div  id="snaptarget" class="ui-widget-header">
  <p><?php echo "Recinto"?></p>
</div>
 
<br style="clear:none">
 
<?php 
$cont=2;

foreach ($vectorJugador as $Jugador) {
  
?>
<div id="draggable<?php echo $cont ?>" class="draggable ui-widget-content">
  <img src="../images/usuarios/<?php echo $Jugador->getDirectorio_foto()?>" width="30" alt="image02">
  <p color: "black"; text-align: "center"; ><?php $Jugador->getNombre()?></p>
</div>

<?php

  $cont++;
  }//fin del foreach
?>


 
</body>



<?php


include('scrollUp.php');
?>