<!DOCTYPE html>
<? include("../../LOGICA/seguridad.php"); ?> 
<html> 
<head> 
<title>Ha ingresado al panel de control</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body> <h1>Bienvenido al sistema!</h1> 
<h2> <?= $_POST["username"]?> </h2>

<br> 
<p>Entro correctamente al sistema.</p><br><br> 
<a href="../../LOGICA/salir.php">Salir</a> 
</body> 
</html>