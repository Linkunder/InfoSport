


<!-- Aqui insertar el jugador al grupo, y que vuelva a la seccion de busqueda -->

<?php
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');

include_once('../../TO/GrupoConformado.php');
include_once('../../LOGICA/infoGruposConformados.php');


ob_start();
$id_grupo2 = $_GET['id_grupo'];
echo "ID Grupo: $id_grupo2 <br>";

ob_start();
$idNuevo = $_GET['id_jugador'];
echo "ID Jugador: $idNuevo <br>";




$nuevoJugadorGrupo= new GrupoConformado();

$nuevoJugadorGrupo->setIdJugador($idNuevo);
$nuevoJugadorGrupo->setIdGrupo($id_grupo2);



$jefeGrupo = infoGruposConformados::obtenerInstancia();
$vectorGrupo=$jefeGrupo->agregarJugador($nuevoJugadorGrupo);


echo "<script type='text/javascript'>alert('Jugador agregado!');</script>";
header("Location:grupos.php");


?>


<br>
<br>
<?php include('footer.php');?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
<?php include('js.php');?>
    </body>
</php>
