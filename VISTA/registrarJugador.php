<?php


include_once('../TO/Jugador.php');
include_once('../LOGICA/infoJugadores2.php');
//recibo los datos del formulario cliente

//$idjugador=$_POST['id_jugador'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$directorio_foto=$_POST['foto'];
$posicion=$_POST['pos'];
$deporte_fav=$_POST['deporte'];
$password=$_POST['pass'];
$password_encriptada = md5($password);
$estado = 2;


//creo el objeto recinto
$nuevoJugador= new Jugador();
//empaqueto la informacion de recinto en el objeto
//$nuevoJugador->setId_jugador($idjugador);
$nuevoJugador->setNombre($nombre);
$nuevoJugador->setApellido($apellido);
$nuevoJugador->setFecha_nacimiento($fecha_nacimiento);
$nuevoJugador->setSexo($sexo);
$nuevoJugador->setCorreo($correo);
$nuevoJugador->setDirectorio_foto($directorio_foto);
$nuevoJugador->setPosicion($posicion);
$nuevoJugador->setDeporte_fav($deporte_fav);
$nuevoJugador->setPassword($password);
$nuevoJugador->setRango($estado);

//derivar la trasacción a donde corresponde.---> a la logica

$jefeJugador= infoJugadores::obtenerInstancia();
$jefeJugador->guardarJugador($nuevoJugador);

echo "<script type='text/javascript'>alert('Jugador agregado!');</script>";
header("Location:subirImagen.php");

$to = $correo;
//rellenar con nombre jugador

$subject = "Gracias por registrarte!";

$message = "<html>";
$message .= "<head>";
$message .= "<title>HTML email</title>";
$message .= "</head>";
$message .= "<body>";
$message .= '<div style="height:auto; width:auto;"><img src="http://i.imgur.com/fuWkXQT.png" alt="Website Change Request" /></div>';
$message .= "<p>".$nombre.", ahora eres parte de Infosport, el sistema para encuentros deportivos.</p>";
$message .= "<p>Los datos que seleccionaste para tu cuenta, son los siguientes: </p>";
$message .= "<table>";
$message .= "<tr>";
$message .= "<td>Nombre completo :</td>";
$message .= "<td>".$nombre. " ".$apellido. "</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Sexo: :</td>";
$message .= "<td>".$sexo."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Fecha de nacimiento:</td>";
$message .= "<td>".$fecha_nacimiento."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Posicion preferida: :</td>";
$message .= "<td>".$posicion."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Deporte Favorito:</td>";
$message .= "<td>".$deporte_fav."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Contraseña :</td>";
$message .= "<td>".$password."</td>";
$message .= "</tr>";
$message .= "</table>";
$message .= "<center><b><p>© 2015 Ing.SW., Infosport.</p></b></center>";
$message .= "</body>";
$message .= "</html>";



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <infosport2k15@gmail.com>' . "\r\n"; //quien envia, se usa por defecto Infosport2k15@gmail.com
$headers .= 'Cc: infosport2k15@gmail' . "\r\n"; // se envia con copia a infosport, no es necesario enviarle copia al creador del partido ya que se hace antes.

mail($to,$subject,$message,$headers);


?>