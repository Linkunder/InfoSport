<? 
//Reanudamos la sesión 
@session_start(); 
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["autentica"] != "SI")
{ 
  //Si no hay sesión activa, lo direccionamos al login.php (inicio de sesión) 
  header("Location: ../VISTA/Admin/login.php"); 
  exit(); 
} 
?>