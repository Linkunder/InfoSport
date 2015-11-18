<!DOCTYPE html>
<?php
  	session_start();
    if(isset($_SESSION['user']))
   		 header('Location:index2.php');
  
  //revisa si ya ha iniciado sesion
?>
<html lang="en">

<head>
<title>Login Jugadores</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta charset="utf-8">
  <link href="csss/bootstrap.css" rel="stylesheet">
  <link href="csss/bootstrap-responsive.css" rel="stylesheet">
  <link href="csss/bootstrap-modal.css" rel="stylesheet">
  
  <script src="jss/jquery.min.js"></script>
  <script src="jss/bootstrap.js"></script>
  <script src="jss/bootstrap-modalmanager.js"></script>
  <script src="jss/bootstrap-modal.js"></script>
</head>

<body>
<a data-toggle="modal" href="#lightboxform">Login Jugadores</a>

<div id="lightboxform" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<h4>Login Jugadores</h4>
  </div>

	  <div class="modal-body">
		<form  action="../LOGICA/VerificaLoginJugador.php" method="POST" id="formulario" class="form-horizontal">
		  <div class="control-group">
			<label class="control-label" for="usernamej">Correo</label>
			<div class="controls">
			  <input type="text" id="user" placeholder="Email" name="user">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="passwordj">Contraseña</label>
			<div class="controls">
			  <input type="password" id="pass" placeholder="Password" name="pass">
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <label class="checkbox">
				<input type="checkbox"> Recuerdame
			  </label>
			  
			</div>
		  </div>
		
	  </div>
	  
 <div class="modal-footer">

		<button type="submit" class="btn">Entrar</button></form>
 </div>


</div>

</body>

</html>