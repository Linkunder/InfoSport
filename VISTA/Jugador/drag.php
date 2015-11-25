<?php include('headerJugador.php'); ?>



 <!-- Latest Bootstrap | compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



 <div class="container">
 <h1><p>Drag and Drop </p>
 <div id="drop1"></div>
 <div id="drag" draggable="true"></div>
  <div id="drag" draggable="true"></div>
   <div id="drag" draggable="true"></div>
    <div id="drag" draggable="true"></div>
     <div id="drag" draggable="true"></div>
 <h2>Arrastra el azul verde al cuadro gris</h2>
 </div>

 <script src="ddd-script.js"></script>
<?php echo drag.ondragstart()?>
 <style>
body{
text-align: center;
}
/*Creacion de los 2 elementos*/
#drag {
width: 100px;
height: 100px;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
border-radius: 50%;
background: #3498db;
margin: 1.5em auto 0;
}
#drop1 {
width: 300px;
height: 300px;
background:#ecf0f1;
border-radius: 15px 15px 15px 15px;
-moz-border-radius: 15px 15px 15px 15px;
-webkit-border-radius: 15px 15px 15px 15px;
border: 2px solid #bdc3c7;
margin: 1em auto 0;
}
 </style>

<script>

function DragDrop(drag, drop) {

var drag = document.getElementById(drag);
var drop = document.getElementById(drop);

drag.ondragstart = function(e)
{
//Guardamos el id del elemento para transferirlo al elemento drop
//Contenido es una clave que nos permitirá acceder al valor asignado
e.dataTransfer.setData("contenido", e.target.id);
}

drop.ondragover = function(e){
//Cancelar el evento que impide que podamos soltar el elemento drag
e.preventDefault();
}

drop.ondrop = function(e){
//Obtenemos los datos a través de la clave contenido, en este caso el id
var id = e.dataTransfer.getData("contenido");
e.target.appendChild(document.getElementById(id));
}
}

window.onload = function(){
DragDrop("drag", "drop1");
}
</script>







<?php
include('footer.php');

include('scrollUp.php');
?>