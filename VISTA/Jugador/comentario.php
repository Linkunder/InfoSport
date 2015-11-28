<!DOCTYPE html>
<?php
session_start();

include_once('../../TO/Partido.php');
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();

$jefePartido = controlPartido::obtenerInstancia();
$vectorPartidos=$jefePartido->obtenerInstancia();
$jefeJugador = infoJugadores::obtenerInstancia();

include('headerJugador.php'); 

?>

<div class= "fondoamarillo">

<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<body>
<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3>Comenta y puntua los recintos visitados <?php  echo "<img src='images/comments19.png' height='32px' width='32px'>"?></h3></center>
            <center><h5></h5></th></center>
    </tr>
</table>

<form class="crearGrupo" name="form1" method="post" action="registrarComentario.php" align="center">
  <p>
    <label>
     <label>Recinto:</label>
      <br>
      <select name="Recinto">
        <?php
        $cont=0;
	     foreach($vectorRecintos as $RecintoDeportivo){
          if( $jefePartido->existePartido($RecintoDeportivo->getIdRecinto() ,$_SESSION["idJugador"])==1){
       ?>
        <option value="<?php echo $RecintoDeportivo->getIdRecinto(); ?>" ><?php echo $RecintoDeportivo->getNombre()?></option>

        <?php 
        $cont++;
          } //FIN IF
      }//FIN WHILE
      ?>
      </select>
      <br>
      <label>Asunto:</label>
      <br>
      <?php if($cont==0 ||($jefeJugador->verEstado($_SESSION["idJugadorBAN"])=="3")){?>
      <input type="text" name="Asunto" id="Asunto" readonly="readonly" >
      <?php }else{?>
      <input type="text" name="Asunto" id="Asunto"> 
      <?php } //fin if?>
      <br>
      <label>Puntaje:</label>
      <br>
      <?php if($cont==0 ||($jefeJugador->verEstado($_SESSION["idJugadorBAN"])=="3")){?>
      <select name="puntaje" id="puntaje" readonly="readonly">
      <?php }else{?>
      <select name="puntaje" id="puntaje">
        <?php } ?>
      
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <br>
      <label>Comentario:</label> 
    </label>
    <?php if($cont==0 ||($jefeJugador->verEstado($_SESSION["idJugadorBAN"])=="3")){?>
    <textarea name="Comentario" id="Comentario" cols="" rows="" readonly="readonly"></textarea>
    <?php }else{?>
    <textarea name="Comentario" id="Comentario" cols="" rows="" onkeyup="clean('Comentario')" onkeydown="clean('Comentario')"  ></textarea>
    <?php }?>
    
  </p>
  <?php if($cont!=0 ||($jefeJugador->verEstado($_SESSION["idJugadorBAN"])!="3")){?>
  <p align="center"><input type="submit" value="Comentar"></p>
  <?php }?>
  
</form>
<?php include('footer.php'); ?>

<?php 
if($cont==0 ||($jefeJugador->verEstado($_SESSION["idJugadorBAN"])=="3")){
    if($jefeJugador->verEstado($_SESSION["idJugadorBAN"])=="3"){
    echo '<script language="javascript">alert("Su cuenta ha sido restringida por mal comportamiento, comuniquese con el administrador");</script>';

    }
    echo '<script language="javascript">alert("No tienes partidos jugados, no puedes comentar");</script>';

 }?>

</body>


<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>