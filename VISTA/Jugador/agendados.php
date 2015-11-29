<!DOCTYPE php>
<?php
session_start();
?>
<php lang="en">


<?php include('headerJugador.php');?>


<div class="fondoamarillo">


<?php
    include_once('../../TO/Partido.php');
    include_once('../../LOGICA/controlPartido.php');
    include_once('../../TO/Jugador.php');
    include_once('../../LOGICA/infoJugadores.php');
    include_once('../../TO/RecintoDeportivo.php');
    include_once('../../LOGICA/infoRecintos.php');

    $jefeJugador = infoJugadores::obtenerInstancia();
    $correo = $_SESSION['sesion'];;
    $vectorJugador=$jefeJugador->buscarID($correo);
    $idJugador = 0;
    
    foreach($vectorJugador as $Jugador){    
        $idJugador= $Jugador->getId_jugador();
    } 

    $jefePartidos = controlPartido::obtenerInstancia();
    $vectorPartidosActivos = $jefePartidos->obtenerPartidosAgendados($idJugador);
    $vectorPartidosJugados = $jefePartidos->obtenerPartidosJugados($idJugador);

?>

<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3><?php echo "<img src='images/basketball27.png' height='32px' width='32px'>   "?>  Mis partidos  <?php  echo "<img src='images/man451.png' height='32px' width='32px'>"?></h3></center>
    </tr>
</table>


<table class = "calendario" >
    <tr>
        <td>
            Partidos agendados
        </td>
    </tr>
</table>


<table class = "calendario" >
    <tr>
        <td>Cancha</td>
        <td>Dia</td>
        <td>Hora</td>
        <td></td>
    </tr>
    <?php
foreach ($vectorPartidosActivos as $Partido) {
    

?>

    <tr>
        <td>
            <?php
            $idRecinto = $Partido->getIdRecinto();
            $_SESSION['id_recintoA'] = $idRecinto;
            $jefeRecinto = infoRecintos::obtenerInstancia();
            $nombreRecinto = $jefeRecinto->obtenerNombreiD($idRecinto);
            echo "$nombreRecinto";
            ?>
        </td>
        <td>
            <?php
            $fecha = $Partido->getFecha();
            $newFecha = date("d-m-Y", strtotime($fecha));
            echo "$newFecha";
            ?>
        </td>
        <td>
            <?php
            $hora = $Partido->getHora();
            echo "$hora";
            ?>
        </td>
        <td>
            <a href='resumenPartido2.php?id_partido=<?php echo $Partido->getIdPartido();?>' class="modificar"> Ver detalles </a>
        </td>
    </tr>
    <?php
}
?>
</table>
<br> 

<table class = "calendario" >
    <tr>
        <td>
            Partidos jugados
        </td>
    </tr>
</table>

<table class = "calendario" >
    <tr>
        <td>Cancha</td>
        <td>Dia</td>
        <td>Hora</td>
        <td></td>
    </tr>
    <?php
foreach ($vectorPartidosJugados as $Partido) {
    

?>

    <tr>
        <td>
            <?php
            $idRecinto = $Partido->getIdRecinto();
            $jefeRecinto = infoRecintos::obtenerInstancia();
            $nombreRecinto = $jefeRecinto->obtenerNombreiD($idRecinto);
            echo "$nombreRecinto";
            ?>
        </td>
        <td>
            <?php
            $fecha = $Partido->getFecha();
            $newFecha = date("d-m-Y", strtotime($fecha));
            echo "$newFecha";
            ?>
        </td>
        <td>
            <?php
            $hora = $Partido->getHora();
            echo "$hora";
            ?>
        </td>
        <td>
            <a href='resumenPartido2.php?id_partido=<?php echo $Partido->getIdPartido();?>' class="modificar"> Ver detalles </a>
        </td>
    </tr>
    <?php
}
?>
</table>



<!-- Footer section start -->
<?php include('footer.php');?>
<!-- Footer section end -->
<!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</php>


</div>
  