
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
        <li><a href="charts.php"><i class="icon-bar-chart"></i><span>Charts</span></a></li>
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

$id_jugador = $_GET['id_jugador'];

$jefe = infoJugadores::obtenerInstancia();
$vectorJugadores = $jefe->modificarJugador($id_jugador);

?>

<center><h1> Modificar Jugador </h1></center><br>

<?php foreach ($vectorJugadores as $Jugador){?>

<form method="post" action="modificarJugadorDos.php">
	<table align="center">
		<tr>
			<td> ID Jugador: </td>
			<td><input type="text" name="id_jugador" value="<?php echo $Jugador->getId_jugador();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Nombre: </td>
			<td><input type="text" name="nombre" value="<?php echo $Jugador->getNombre();?>" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Apellido: </td>
			<td><input type="text" name="apellido" value="<?php echo $Jugador->getApellido();?>"  size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Sexo: </td>
			<td><input type="text" name="sexo" value="<?php echo $Jugador->getSexo();?>"  size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Fecha de nacimiento: </td>
			<td><input type="date" min="1950-12-31" max="" name="fecha_nacimiento" value="<?php echo $Jugador->getFecha_nacimiento();?>"  size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Deporte favorito: </td>
			<td><select name="deporte_favorito" value="<?php echo $Jugador->getDeporte_fav();?>">
        <option>Baby-futbol</option>
        <option>Futbolito</option>
        <option>Hockey</option>
        <option>Basquetbol</option> 
      </select> 
      </td>
		</tr>
		<tr>
			<td> Posicion: </td>
			<td><select name="posicion" value="<?php echo $Jugador->getPosicion();?>">
                            <option>Arquero</option>
                            <option>Defensa</option>
                            <option>Mediocampista</option>
                            <option>Delantero</option>
      </select>
      </td>
		</tr>
		<tr>
			<td> Correo: </td>
			<td><input type="text" name="correo" value="<?php echo $Jugador->getCorreo();?>" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Foto: </td>
			<td><input type="text" name="directorio_foto" value="<?php echo $Jugador->getDirectorio_foto();?>" readonly= "readonly" size="30" maxlength="100"> </td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Actualizar" class="modificar"  onclick="valida_envia()"></td>
		</tr>
	</table>
	<br>
</form>

<?php
}
    ?>



<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12"><!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
    
</div> <!-- /main -->
    
    
    
 
<div class="extra">

  <div class="extra-inner"><!-- /container -->

  </div> <!-- /extra-inner -->

</div> <!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2015 <a href="http://www.egrappler.com/">InfoSport</a>. </div>
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


  </body>

</html>