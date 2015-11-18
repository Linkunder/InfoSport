<?php include('header.php'); ?>

  <!-- Aqui insertar formulario -->


<body class="registrar">

    <div class="reg-form clearfix">
        
        <form action="registrarJugador.php" method="post">
        
            <h1>Crea tu perfil en InfoSport</h1>
            <h3>Solo necesitas una cuenta</h3>
            <h2>Accede a todos los servicios de InfoSport con tu correo electrónico y una contraseña</h2>         
            
              <div class="login-fields">
                
                
                <div class="field">
                    
                    <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" class="login" required/>
                </div> <!-- /field -->
                <br>
                <div class="field">
                    
                    <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" class="login" required/>
                </div> <!-- /field -->
                
                <br>
                <div class="field">
                    
                    <input type="date" min="1950-12-31" max="" id="fecha" name="fecha" value="" placeholder="Fecha de nacimiento" class="login" required/>
                </div> <!-- /field -->
                <br>
                <div class="field">
                    
                    <input type="text" id="sexo" name="sexo" value="" placeholder="Sexo" class="login" required/>
                    
                </div> <!-- /field -->
                

                
                <h5>Seleccione deporte favorito</h5>
                <div class="field">
                    
                    <select name="deporte" id = "deporte">
                        <option>Baby-futbol</option>
                        <option>Futbolito</option>
                        <option>Hockey</option>
                        <option>Basquetbol</option>
                    </select>
                </div> <!-- /field -->


                <h5>Seleccione posición</h5>
                <div class="field">
                    
                        <select name="pos" id = "pos">
                            <option>Arquero</option>
                            <option>Defensa</option>
                            <option>Mediocampista</option>
                            <option>Delantero</option>
                        </select>

                </div> <!-- /field -->
                <br>
                <div class="field">
                    
                    <input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="correo" name="correo" value="" placeholder="Correo electronico" class="login" />
                </div> <!-- /field -->
                
                
                <br>
                <div class="field ">
                    
                    <input type="password" id="pass" name="pass" value="" placeholder="Contraseña" class="login"required />
                </div> <!-- /field -->


                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                
                                    
                <!--<button class="button btn btn-primary btn-medium">Registrar</button>-->
                
            </div> <!-- .actions -->
            <div class="boton">
                <input type="submit" value="Registrar">
            </div>    
        </form>
        
        
    </div> <!-- /content -->
    








        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2015 Ing.SW. <a href="Admin/login.html"><span class="text-left">Login Director</span></a></p>
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
</php>

