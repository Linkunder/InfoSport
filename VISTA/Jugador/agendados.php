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

    $jefeJugador = infoJugadores::obtenerInstancia();
    $correo = $_SESSION['sesion'];;
    $vectorJugador=$jefeJugador->buscarID($correo);
    $idJugador = 0;
    
    foreach($vectorJugador as $Jugador){    
        $idJugador= $Jugador->getId_jugador();
    } 

    $jefePartidos = controlPartido::obtenerInstancia();
    $vectorPartidosActivos = $jefePartidos->obtenerPartidosAgendados($idJugador);

    foreach ($vectorPartidosActivos as $Partido) {
        echo $Partido->getIdPartido();
        echo "<br>";
    }

?>
























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
  