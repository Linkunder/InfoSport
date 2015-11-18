                        
<?php 
session_start();
include('headerJugador.php'); 
include_once('../../TO/Comentario.php');
include_once('../../LOGICA/controlComentarios.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
$jefeComentario = controlComentarios::obtenerInstancia();
$idd= $_GET['id'];

$vectorComentarios=$jefeComentario->obtenerComentarioDos($idd);
$jefeJugador= infoJugadores::obtenerInstancia();
if($vectorComentarios==null){


echo '<script language="javascript">alert("No Hay comentarios para este recinto");</script>';
header('Location:busqueda2.php');
}

?>
<body>
                        <div class="row">
                            <?php
                            foreach($vectorComentarios as $comentarios){ 
                            ?>
                        <div class="span4">
                            <div class="testimonial">
                               
                                <p><?php echo $comentarios->getDetalle();?></p>

                                <div class="whopic">

                                    <?php 
                                    echo "ID del jugador: $comentarios->getId_jugador();";
                                    $jugador=$jefeJugador->obtenerJugadorId($comentarios->getId_jugador());
                                        
                                    ?>
                                    <div class="arrow"></div>
                                    <img src="images/usuarios/<?php echo $jugador[0]->getDirectorio_foto(); ?>" class="centered" alt="client 1">
                                    <strong><p><?php 
                                        echo $jugador[0]->getNombre();
                                    ?>
                                    </p></strong>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

</body>


<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>