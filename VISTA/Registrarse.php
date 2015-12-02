<?php include('header.php'); ?>

  <!-- Aqui insertar formulario -->


<body class="registrar">
    <div class="reg-form">
            <h1>Crea tu perfil en InfoSport</h1>
            <h2>Solo necesitas una cuenta</h2>
            <h2>Accede a todos los servicios de InfoSport con tu correo electrónico y una contraseña</h2>         
        <form action="registrarJugador.php" method="post">   
              <div class="login-fields">
                <div class="field">
                    
                    <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" class="login" required/>
                </div> <!-- /field -->
                <div class="field">
                    
                    <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" class="login" required/>
                </div> <!-- /field -->

                <div class="field">
                    
                    <input type="date" min="1950-12-31" max="" id="fecha" name="fecha" value="" placeholder="Fecha de nacimiento" class="login" required/>
                </div> <!-- /field -->

                <div class="field">
                    
                    <input type="text" pattern="^[M|F]|[m|f]"  type="text" id="sexo" name="sexo" value="" placeholder="Sexo" class="login" required title="Ingrese M si su sexo es Masculino o F si es Femenino"/>
                    
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
                <div class="field">
                    
                    <input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="correo" name="correo" value="" placeholder="Correo electronico" class="login" />
                </div> <!-- /field -->
                
                
         
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
    
    </body>
    <?php include('scrollUp.php'); ?>           
    <?php include('footer.php'); ?>                 

    <?php include('js.php'); ?> 

