<?php 
  	session_start();
    if(isset($_SESSION['user']))
   		 header('Location:index2.php');
  
  //revisa si ya ha iniciado sesion

include('header.php'); 
?>
	<title>Log In</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<body class = "log" >
		<div class="login">
				 <!-----start-main---->
				<div class="login-form">
						<h1>Iniciar Sesión</h1>
						<h2><a href="Registrarse.php">Crear cuenta</a></h2>
				<form action="../LOGICA/VerificaLoginJugador.php" method="POST" id="formulario">
					<li>
						<input type="text" name="user" class="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="pass" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}"><a href="#" class=" icon lock"></a>
					</li>
					
					 <div class ="forgot">
						<h3><a href="#">¿Olvido su contraseña?</a></h3>
						<input type="submit" onclick="myFunction()" value="Iniciar Sesión" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                  </h4>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
<?php include('footer.php'); ?>					
<?php include('scrollUp.php'); ?>
<?php include('js.php'); ?> 		 		
</body>
