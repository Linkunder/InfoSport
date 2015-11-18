<!DOCTYPE html>
<?php
session_start();

include_once('../../TO/Partido.php');
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
include_once('../../LOGICA/controlPartido.php');

$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();

$jefePartido = controlPartido::obtenerInstancia();
$vectorPartidos=$jefePartido->obtenerInstancia();

include('headerJugador.php'); ?>

<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<body>
<div class="table"> <i class="icon-th-list"></i>
  <h3 align= "center">Comentar</h3>
</div>

<form name="form1" method="post" action="registrarComentario.php" align="center">
  <p>
    <label>
     <a>Recinto:</a>
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
      <a>Asunto:</a>
      <br>
      <?php if($cont==0){?>
      <input type="text" name="Asunto" id="Asunto" readonly="readonly" >
      <?php }else{?>
      <input type="text" name="Asunto" id="Asunto"> 
      <?php } //fin if?>
      <br>
      <a>Puntaje:</a>
      <br>
      <?php if($cont==0){?>
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
      <a>Comentario:</a> 
    </label>
    <?php if($cont==0){?>
    <textarea name="Comentario" id="Comentario" cols="" rows="" readonly="readonly"></textarea>
    <?php }else{?>
    <textarea name="Comentario" id="Comentario" cols="" rows="" onkeyup="clean('Comentario')" onkeydown="clean('Comentario')" ></textarea>
    <?php }?>
    
  </p>
  <?php if($cont!=0){?>
  <p align="center"><input type="submit" value="Comentar"></p>
  <?php }?>
  
</form>

<?php 
if($cont==0){
echo '<script language="javascript">alert("No tienes partidos jugados, no puedes comentar");</script>'; }?>

</body>

<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>