
<?php
session_start();
if($_SESSION["autentica"]=="SI" && $_SESSION["director"]==1) {

}
else {
header("Location:login.html"); 
}
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>InfoSport - Jugadores</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
   


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
	  <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a class="brand" href="index.php">InfoSport Administrador</a>
	    <div class="nav-collapse">
	      <ul class="nav pull-right">
	        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> <?php echo $_SESSION['sesion'] ?> <b class="caret"></b></a>
	          <ul class="dropdown-menu">
              <li><a href="notificaciones.php">Ver notificaciones</a></li>
             <hr>
	            <li><a href="../../LOGICA/salir.php">Cerrar Sesion</a></li>
	            <li></li>
              </ul>
            </li>
          </ul>
        </div>
	    <!--/.nav-collapse -->
      </div>
	  <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class=""><a href="index.php"><i class="icon-dashboard"></i><span>Panel</span></a></li>
        <li><a href="reports.php"><i class="icon-list-alt"></i><span>Reportes</span></a></li>
        <li><a href="recintos.php"><i class="icon-file"></i><span>Recintos</span></a></li>
        <li><a href="charts.php"><i class="icon-bar-chart"></i><span>Comentarios</span></a></li>
        <li class="active"><a href="jugadores.php"><i class="icon-group"></i><span>Jugadores</span></a></li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.php">Icons</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="pricing.php">Pricing Plans</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="error.php">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <p>
    <!-- /container --></p>
    <p>&nbsp;</p>
    
  </div>
  <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
    
<?php
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
$jefeJugador = infoJugadores::obtenerInstancia();
$vectorJugadores=$jefeJugador->obtenerJugador();
?>

<div class="header-table"> <i class="icon-th-list"></i>
  <h3>Listado de jugadores</h3>
</div>



<br>
<table class="table table-bordered center">
<tr>
<th>ID</th>    
<th>Nombre</th>
<th>Apellido</th>
<th>Fecha de nacimiento</th>
<th>Sexo</th>
<th>Deporte favorito</th>
<th>Posicion</th>
<th>Correo</th>
<th>Estado</th>
<th>Foto</th>
<th></th>
<th></th>
</tr>


<?php
foreach($vectorJugadores as $Jugador){    
?>
<tr>
<td><?php echo $Jugador->getId_jugador();?></td>    
<td><?php echo $Jugador->getNombre();?></td>
<td><?php echo $Jugador->getApellido();?></td>
<td><?php echo $Jugador->getFecha_nacimiento();?></td>
<td><?php echo $Jugador->getSexo();?></td>
<td><?php echo $Jugador->getDeporte_fav();?></td>
<td><?php echo $Jugador->getPosicion();?></td>
<td><?php echo $Jugador->getCorreo();?></td>
<td><?php

 if($jefeJugador->verEstado($Jugador->getId_jugador())== "1")
    echo "Activo Director";
  if($jefeJugador->verEstado($Jugador->getId_jugador())== "2")
    echo "Activo";
  if($jefeJugador->verEstado($Jugador->getId_jugador())== "3")
    echo "Inhabilitado";

  ?></td>
<td> <p align="center">
  <?php
    $imagepath = "../images/usuarios/";
    echo "<img src='".$imagepath.$Jugador->getDirectorio_foto()."' height='50px' width='50px'>";
  ?>
</p>
</td>
<td><a href='modificarJugador.php?id_jugador=<?php echo $Jugador->getId_jugador();?>' class="modificar">Modificar</a></td>
<td>
  <?php if(($jefeJugador->verEstado($Jugador->getId_jugador())== "1")||($jefeJugador->verEstado($Jugador->getId_jugador())== "2")){?>
  <a href='inhabilitarJugador.php?id_jugador=<?php echo $Jugador->getId_jugador();?>' class="modificar">Inhabilitar</a></td>
  <?php }
        if($jefeJugador->verEstado($Jugador->getId_jugador())== "3"){
  ?>
    <a href='habilitarJugador.php?id_jugador=<?php echo $Jugador->getId_jugador();?>' class="modificar">Habilitar</a></td>
  <?php } ?>
</tr> 
    
<?php
}
    ?>
</table>


<br>
<br>

<center><button><a href="agregaJugador.php"><h3>Agregar nuevo jugador</h3><br></a></button><center>
  <br>
  <br>


<!--


<hr>
<p align="center"><font size=5>Agregar jugador</font></p>
<br>



<form action="procesaJugadores.php" method="post">
<div><label for "nombre"> NOMBRE:</label> <input type="text" name="nombre"><br></div>
<div><label for "apellido">APELLIDO:</label> <input type="text" name="apellido"><br></div>
<div><label for "fecha">FECHA DE NACIMIENTO:</label> <input type="text" name="fecha"><br></div>
<div><label for "sexo">SEXO: </label><input type="text" name="sexo"><br></div>
<div><label for "deporte">DEPORTE FAVORITO: </label><input type="text" name="deporte"><br></div>
<div><label for "pos">POSICION: </label><input type="text" name="pos"><br></div>
<div><label for "correo">CORREO: </label><input type="text" name="correo"><br></div>
<div><label for "pass">PASSWORD:</label> <input type="password" name="pass"><br></div>
<div><label for "foto">DIRECTORIO FOTO:</label> <input type="text" name="foto"><br></div>
<br>
<p align="center"><input type="submit" value="Agregar jugador"></p>
</form>

-->


    
    
    

  </body>

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="">InfoSport</a>. </div>
        <!-- /span12 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer -->
    


<script src="js/jquery-1.7.2.min.js"></script>
  
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>




</html>