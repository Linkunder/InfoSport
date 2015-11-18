
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
$jefeJugador = infoJugadores::obtenerInstancia();
$vectorJugadores=$jefeJugador->obtenerJugador();
?>


<div class="account-container register">

    <div class="content clearfix">
        
        <form action="registrarJugador.php" method="post">
        
            <h1>Nuevo perfil</h1>

            <br>
              <div class="login-fields">
                
                
                <div class="field">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" class="login" required/>
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="apellido">Apellido:</label> 
                    <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" class="login" required/>
                </div> <!-- /field -->
                
                
                <div class="field">
                    <label for="fecha">Fecha:</label>
                    <input type="date" min="1950-12-31" max="" id="fecha" name="fecha" value="" placeholder="Fecha de nacimiento" class="login" required/>
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="sexo">Sexo:</label>
                    <input type="text" id="sexo" name="sexo" value="" placeholder="Sexo" class="login" required/>
                    
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="deporte">Deporte:</label>
                    <select name="deporte" id = "deporte">
                        <option>Baby-futbol</option>
                        <option>Futbolito</option>
                        <option>Hockey</option>
                        <option>Basquetbol</option>
                    </select>
                </div> <!-- /field -->

                <div class="field">
                    <label for="pos">Posicion:</label>
                        <select name="pos" id = "pos">
                            <option>Arquero</option>
                            <option>Defensa</option>
                            <option>Mediocampista</option>
                            <option>Delantero</option>
                        </select>
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="correo">Correo:</label>
                    <input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="correo" name="correo" value="" placeholder="Correo electronico" class="login" />
                </div> <!-- /field -->
                
                
                
                <div class="field">
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" value="" placeholder="Contraseña" class="login"required />
                </div> <!-- /field -->



                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                
                                    
                <!--<button class="button btn btn-primary btn-medium">Registrar</button>-->
                
            </div> <!-- .actions -->
            
            <p align="center"><input type="submit" value="Siguiente"></p>
        </form>
        
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->



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
    
    
    
   </body>


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

<!-- /footer -->
    


<script src="js/jquery-1.7.2.min.js"></script>
  
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>




</html>