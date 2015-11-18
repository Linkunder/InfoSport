
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">



<div class="account-container register">
	


	<div class="content clearfix">
		
		<form action="registrarJugador.php" method="post">
		
			<h1>Crea tu perfil en InfoSport</h1>
            <h3>Solo necesitas una cuenta</h3>
<h5>Accede a todos los servicios de InfoSport con tu correo electrónico y una contraseña</h5><br>			
			
			<div class="login-fields">
				
				
				<div class="field">
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"  />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="apellido">Apellido:</label>	
					<input type="text" id="lastname" name="apellido" value="" placeholder="Apellido"  />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="fecha">Fecha:</label>
					<input type="text" id="email" name="fecha" value="" placeholder="Fecha de nacimiento" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="sexo">Sexo:</label>
					<input type="text" id="password" name="sexo" value="" placeholder="Sexo" />
				</div> <!-- /field -->
                
                <div class="field">
					<label for="deporte">Deporte:</label>
					<input type="text" id="password" name="deporte" value="" placeholder="Deporte favorito" />
				</div> <!-- /field -->
				
                <div class="field">
					<label for="pos">Posicion:</label>
					<input type="text" id="password" name="pos" value="" placeholder="Posicion" />
				</div> <!-- /field -->
                
                <div class="field">
					<label for="correo">Correo:</label>
					<input type="text" id="password" name="correo" value="" placeholder="Correo electronico" />
				</div> <!-- /field -->
                
                <div class="field">
					<label for="pass">Password:</label>
					<input type="password" id="password" name="pass" value="" placeholder="Contraseña" /><br>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
									
				<button class="button btn btn-primary btn-large">Enviar</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	¿Ya tienes una cuenta? <a href="login.html">Ingresa a tu cuenta</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>