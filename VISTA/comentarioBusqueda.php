                        
<?php include('header.php'); 
include_once('../TO/Comentario.php');
include_once('../LOGICA/controlComentarios2.php');
include_once('../TO/Jugador.php');
include_once('../LOGICA/infoJugadores2.php');
$jefeComentario = controlComentarios::obtenerInstancia();
$id= $_GET['id'];

$vectorComentarios=$jefeComentario->obtenerComentarioDos($id);
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
                                    <?php $jugador=$jefeJugador->obtenerJugadorId($comentarios->getId_jugador());
                                        
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

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-list-alt"></span><b>Comentarios</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="demo1">
                                    <li class="news-item">
                                        <table cellpadding="4"> <!-- 4-->
                                            <tr>
                                                <td><img src="images/1.png" width="30" class="img-circle" /></td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim..</td>
                                            </tr>
                                        </table>
                                    </li>                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
    </div>
</div>
</body>


<?php include('footer.php'); ?>
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?>