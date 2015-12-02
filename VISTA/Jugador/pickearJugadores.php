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
include_once('../../PERSISTENCIA/conexion.php');
include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');

include('headerJugador.php'); 

$jefeRecinto = infoRecintos::obtenerInstancia();
$jefePartidos = controlPartido::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();
$vectorJugador=$jefeJugador= infoJugadores::obtenerInstancia();
$vectorJugador1=$jefeJugador= infoJugadores::obtenerInstancia();
$jefeGrupoConformado = infoGruposConformados::obtenerInstancia();
 $vectorPartidos = $jefePartidos->obtenerPartidos();
 $ultimoPartido = end($vectorPartidos);
 $idUltimoPartido = $ultimoPartido->getIdPartido();
 $nombreRecinto = $jefePartidos->obtenerNombreRecinto($idUltimoPartido);


$id_grupo=$_SESSION['grupoPartido'];
$vectorJugador = $jefeJugador->obtenerJugadores($id_grupo);
$vectorJugador1 = $jefeJugador->obtenerJugadores($id_grupo);


$_SESSION['id_recintoA']=$_GET['id_recinto'];
$_SESSION['id_partidoA']=$_GET['id_partido'];



 $conexionBD= new conexion();
 require_once('JSON.php');
 $json = new Services_JSON();
?>




  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .draggable { width: 40px; height: 40px; padding: 5px; float: left; float: ; margin: 0 10px 10px 0; font-size: 0.9em; color: black; text-align: center;}
  .ui-widget-header p{color: black; text-align: center; margin-top: 25px; margin-right: 25px;}, .ui-widget-content p { margin-top: 25px; margin-right: 25px; color: black; text-align: center; }
  #snaptarget { height: 452px; width: 726px; float: right; color: black; text-align: center;
    background-image: url("images/<?php 
      if($_SESSION['deporte']=="Basquetbol"){
        echo 'cbas.jpg';
      }else{
      echo 'cfut.jpg';
      }
      ?>"); 
  }
  </style>

  <script>
  var arrayJugador = new Array();
  $(function(){
     
    $( "#draggable" ).draggable({ snap: true 
    });

    $("#snaptarget").data("numsoltar",0);//variable que guarda el num de jugadores
    $("#snaptarget").droppable({
      drop: function( event, ui ) { //Aqui entra
      if (!ui.draggable.data("jugador")){
         ui.draggable.data("jugador", true);
         var elem = $(this);
         var elem1 = $(this);
         
         elem.data("numsoltar", elem.data("numsoltar") + 1);
         elem.html("" + elem.data("numsoltar") + " jugadores elegidos");
         var idjugador= ui.draggable.data("id");  
         arrayJugador[elem.data("numsoltar")-1]=(ui.draggable.data("id"));
         // alert(""+ arrayJugador+""); NO BORRAR SIRVE PARA DEBUGGEAR 
      }

   },
   out: function( event, ui ) { //Aqui sale
      if (ui.draggable.data("jugador")){
         ui.draggable.data("jugador", false);
         var elem = $(this);
         var elem1 = $(this);
         var arrAux= new Array();
         for (var i = 0; i < arrayJugador.length-1; i++) {
           if(ui.draggable.data("id")!=arrayJugador[i]){
              arrAux[i]= arrayJugador[i];
           }else{
            arrAux[i]=arrayJugador[i+1];
           }


         };
         arrayJugador=arrAux;
         elem.data("numsoltar", elem.data("numsoltar") - 1);
         elem1.html("" + ui.draggable.data("id") + " Jugadr Salio");

      }
   }

});

   <?php 
   foreach ($vectorJugador1 as $Jugador1) { ?>
    $( "#draggable<?php echo $Jugador1->getId_jugador();?>" ).draggable({ 
      snap: ".ui-widget-header",
      create: function(event, $Jugador1){}
      });
    $("#draggable<?php echo $Jugador1->getId_jugador();?>").data("jugador",false);
    $("#draggable<?php echo $Jugador1->getId_jugador();?>").data("id","<?php echo $Jugador1->getId_jugador();?>");

      <?php } ?> 
      });

  function setValue(){
    //arv= arrayJugador.join(","); //Funciona
    var jObject={};
    for(i in arrayJugador){
      jObject[i] = arrayJugador[i];
    }

    jObject=JSON.stringify(jObject);
      $.ajax({
          type:'post',
          cache:false,
          url:"eleccionJugadores.php",
          data:{jObject:jObject},
          success:function(server){
            alert(server);
          }
    });
    }


  </script>












<div class= "fondoamarillo">

<div class = "tituloCancha">
   <br>
   <?php echo "$nombreRecinto"?>
   <br>
</div>

<div  id="snaptarget" class="ui-widget-header">

</div>

 
<br style="clear:none">
 
<?php 
$cont=2;

foreach ($vectorJugador as $Jugador) {
  if(($jefeJugador->verEstado($Jugador->getId_jugador())!="3")){
?>
<div id="draggable<?php echo $Jugador->getId_jugador();?>" class="draggable ui-widget-content">
  <img src="../images/usuarios/<?php echo $Jugador->getDirectorio_foto()?>" width="30" alt="image02">
  <p color: "black"; text-align: "center"; ><?php echo $Jugador->getNombre()?></p>
</div>

<?php

  $cont++;
}
  }//fin del foreach
?>

<?php

?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>




  <center><button class="btn12m" onClick="setValue()"><a href='tercerTiempo.php'>Siguiente</a></button></center>

  <br>
  <br>
<!-- Ponle el href a la parte que sea pero el onclick debe quedar tal cual  :) -->


<?php
include('footer.php');

include('scrollUp.php');
?>

</div>