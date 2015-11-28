
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
    <title>InfoSport- Recintos</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    
    <link href="js/guidely/guidely.css" rel="stylesheet"> 

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
        <li><a href="index.php"><i class="icon-dashboard"></i><span>Panel</span></a></li>
        <li><a href="reports.php"><i class="icon-list-alt"></i><span>Reportes</span></a></li>
        <li class="active"><a href="recintos.php"><i class="icon-file"></i><span>Recintos</span></a></li>
        <li><a href="charts.php"><i class="icon-bar-chart"></i><span>Comentarios</span></a></li>
        <li><a href="jugadores.php"><i class="icon-group"></i><span>Jugadores</span></a></li>
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
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
  
<?php
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();
?>

<div class="header-table"> <i class="icon-th-list"></i>
  <h3>Listado de recintos</h3>
</div>


<br>
<table class="table table-bordered center">
<tr>
<th>ID</th>    
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio</th>
<th>Horario</th>
<!-- <th>Puntuacion</th> -->

<th>Direccion</th>
<th>Telefono</th>
<th>Canchas</th>
<th>Estado</th>
<th>Imagen</th>
<th></th>
<th></th>
</tr>


<?php
foreach($vectorRecintos as $RecintoDeportivo){    
?>
<tr>
<td><?php echo $RecintoDeportivo->getIdRecinto();?></td>    
<td><?php echo $RecintoDeportivo->getNombre();?></td>
<td><?php echo $RecintoDeportivo->getDescripcion();?></td>
<td><?php echo $RecintoDeportivo->getPrecio();?></td>
<td><?php echo $RecintoDeportivo->getHorario();?></td>
<!-- <td><?php echo $RecintoDeportivo->getPuntuacion();?></td> -->

<td><?php echo $RecintoDeportivo->getDireccion();?></td>
<td><?php echo $RecintoDeportivo->getTelefono();?></td>
<td><?php echo $RecintoDeportivo->getCantidadCanchas();?></td>
<td>
<?php

 if($jefeRecinto->verEstado($RecintoDeportivo->getIdRecinto())== "0")
    echo "Activo";
  if($jefeRecinto->verEstado($RecintoDeportivo->getIdRecinto())== "1")
    echo "Inhabilitado";
  ?>

</td>

<td> <p align="center">
  <?php
    $imagepath = "../images/recintos/";
    echo "<img src='".$imagepath.$RecintoDeportivo->getImagen()."' height='50px' width='50px'>";
  ?>
</p>
</td>

<td><a href='modificarRecinto.php?id_recinto=<?php echo $RecintoDeportivo->getIdRecinto();?>' class="modificar">Modificar</a></td>
<td>
  <?php if($jefeRecinto->verEstado($RecintoDeportivo->getIdRecinto())== "0"){?>
  <a href='inhabilitarRecinto.php?id_recinto=<?php echo $RecintoDeportivo->getIdRecinto();?>' class="modificar">Inhabilitar</a></td>
  <?php }
        if($jefeRecinto->verEstado($RecintoDeportivo->getIdRecinto())== "1"){
  ?>
    <a href='habilitarRecinto.php?id_recinto=<?php echo $RecintoDeportivo->getIdRecinto();?>' class="modificar">Habilitar</a></td>
  <?php } ?>

</td>
</tr> 
    
<?php
}
    ?>
</table>

<br>
<br>


<center><button><a href="agregaRecinto.php"><h3>Agregar recinto deportivo</h3><br></a></button><center>
  <br>
  <br>
 
    
    

<!--


<hr>
<p align="center"><font size=5>Agregar recinto</font></p>
  



<form action="procesaRecintos.php" method="post">
<div><label for "nombre"> NOMBRE:</label> <input type="text" name="nombre"><br></div>
<div><label for "descripcion">DESCRIPCION:</label> <input type="text" name="descripcion"><br></div>
<div><label for "precio">PRECIO:</label> <input type="text" name="precio"><br></div>
<div><label for "horario">HORARIO: </label><input type="text" name="horario"><br></div>
<div><label for "puntiacion">PUNTUACION: </label><input type="text" name="puntuacion"><br></div>
<div><label for "directorio_imagen">IMAGEN: </label><input type="text" name="directorio_imagen"><br></div>
<div><label for "numero_canchas">NUMERO CANCHAS: </label><input type="text" name="numero_canchas"><br></div>
<div><label for "direccion">DIRECCION:</label> <input type="text" name="direccion"><br></div>
<div><label for "telefono">TELEFONO:</label> <input type="text" name="telefono"><br></div>
<div><label for "superficie">SUPERFICIE:</label> <input type="text" name="superficie"><br></div>
<br>
            <p align="center"><input type="submit" value="Agregar recinto"></p>
</form>

<hr>
  </body>
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
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>

<script src="js/guidely/guidely.min.js"></script>

<script>

$(function () {
	
	guidely.add ({
		attachTo: '#target-1'
		, anchor: 'top-left'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-2'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-3'
		, anchor: 'middle-middle'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.add ({
		attachTo: '#target-4'
		, anchor: 'top-right'
		, title: 'Guide Title'
		, text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.'
	});
	
	guidely.init ({ welcome: true, startTrigger: false });


});

</script>



</html>