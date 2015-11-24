<?php
include('header.php'); ?>




  <title>jQuery UI Draggable - Snap to element or grid</title>
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
  });
  </script>

<body><div class= "fondoamarillo">

<div  id="snaptarget" class="ui-widget-header">
  <p>Jugadores</p>
</div>
 
<br style="clear:none">
 
 
<div id="draggable2" class="draggable ui-widget-content">
  <img src="../images/usuarios/cbravo.png" width="30" alt="image02">
  <p color: "black"; text-align: "center"; >Claudio Bravo</p>
</div>
<div id="draggable3" class="draggable ui-widget-content" align="center">
  <img src="../images/1442031669_football.png" width="20" alt="image02">
  <p>Jugador</p>
</div>


 
</body>



<?php


include('scrollUp.php');
?>