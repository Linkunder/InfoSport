   

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>InfoSport</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        
        
        
        
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/cooltext143839989291002.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                      <ul class="nav" id="top-navigation">
                        <li class="active"><a href="index2.php">Inicio</a></li>
                        <li><a href="#recintos">Recintos</a></li>
                        <li><a href="Contacto.php">Contacto</a></li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="login.php">Ingresar</a></li>
                        <li><a href="Registrarse.php">Registarse</a></li>
                      </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
<div class="mask"></div>
  

  <!-- Aqui insertar formulario -->


<div class="account-container register">

	<div class="content clearfix">
		
		<form action="registrarJugador.php" method="post">
		
			<h1>Crea tu perfil en InfoSport</h1>
            <h3>Solo necesitas una cuenta</h3>
<h5>Accede a todos los servicios de InfoSport con tu correo electrónico y una contraseña</h5><br>			
			
              <div class="login-fields">
				
				
				<div class="field">
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="apellido">Apellido:</label>	
					<input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" class="login" />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="fecha">Fecha:</label>
					<input type="text" id="fecha" name="fecha" value="" placeholder="Fecha de nacimiento" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="sexo">Sexo:</label>
					<input type="text" id="sexo" name="sexo" value="" placeholder="Sexo" class="login"/>
                    
				</div> <!-- /field -->
                

                
                <h5>Seleccione deporte favorito</h5>
                <div class="field">
					<label for="deporte">Deporte:</label>
					<select name="deporte" id = "deporte">
                    	<option>Baby-futbol</option>
                        <option>Futbolito</option>
                        <option>Hockey</option>
                        <option>Basquetbol</option>
                    </select>
				</div> <!-- /field -->
					
            
                <h5>Seleccione posición</h5>
                <div class="field">
					<label for="pos">Posicion:</label>
					<select name="pos" id = "pos">
                    	<option>Arquero</option>
                        <option>Defensor</option>
                        <option>Mediocentro</option>
                        <option>Atacante</option>
                    </select>
				</div> <!-- /field -->
                
                <div class="field">
					<label for="correo">Correo:</label>
					<input type="text" id="correo" name="correo" value="" placeholder="Correo electronico" class="login"/>
				</div> <!-- /field -->
                
                <div class="field">
					<label for="pass">Password:</label>
					<input type="password" id="pass" name="pass" value="" placeholder="Contraseña" class="login"/>
				</div> <!-- /field -->

                <div class="field">
                    <label for="foto">Subir imagen:</label>
					<input type="file" name="foto"/>
                    <br/>
                    <img src="images/usuarios/<?php echo $row_FrontEnd['foto'];?>"/>
			
                   <!-- <input type="texto" id="foto" name="foto" value="" placeholder="Foto" class="login"/> -->
                    
                </div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
									
				<!--<button class="button btn btn-primary btn-medium">Registrar</button>-->
				
			</div> <!-- .actions -->
			
            <p align="center"><input type="submit" value="Registrar"></p>
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->








        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2015 Ing.SW. <a href="../Admin/login.html"><span class="text-left">Login Director</span></a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
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
</html>

