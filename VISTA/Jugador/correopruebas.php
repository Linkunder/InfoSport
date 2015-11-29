<?php
include_once('../../PERSISTENCIA/conexion.php');
$conexionBD= new conexion();
$id = 2;
session_start();

$to = "infosport2k15@gmail.com";
//foreach para rellenar el campo con los correos de los jugadores
$query = "SELECT correo FROM jugador WHERE id_jugador IN (SELECT id_jugador FROM equipo where id_partido in (SELECT id_partido FROM partido))";
echo $query;
foreach ($query as $key) {
$to .= ", ".$key;
}

$dir = "chillan, chile";
//rellenar con la direccion
$nombre = "mauricio";
//rellenar con nombre jugador
$fecha = "30-11-2015";
//fecha partido
$hora = "09:00";
//hora partido
$monto = 1;
//precio original cancha
$cant = 1;
//cantidad de jugadores
$pagoporpersona = $monto/$cant;
//monto/cancha

$subject = "Invitacion Infosport";
//se debe obtener el asunto, Partido de: X deporte
$tercertiempo = true;
//recibir existencia de 3er tiempo
$direcciontercertiempo = "concepcion, chile";
//direccion tercer tiempo
$dineroadicionaltercertiempo = 100;

$message = "<html>";
$message .= "<head>";
$message .= "<title>HTML email</title>";
$message .= "</head>";
$message .= "<body>";
$message .= '<div style="height:auto; width:auto;"><img src="http://i.imgur.com/fuWkXQT.png" alt="Website Change Request" /></div>';
$message .= '<div style="height:auto; width:auto;"><img src="http://maps.googleapis.com/maps/api/staticmap?center='. $dir . '&zoom=14&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:small%7Ccolor:0xff0000%7Clabel:%7C'.$dir.'" alt="Website Change Request" /></div>';
$message .= "<p>El jugador " .$nombre.  ", te a invitado a un partido.</p>";
$message .= "<table>";
$message .= "<tr>";
$message .= "<td>Direccion:</td>";
$message .= "<td>".$dir."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Fecha:</td>";
$message .= "<td>".$fecha."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Hora: :</td>";
$message .= "<td>".$hora."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Monto total a pagar:</td>";
$message .= "<td>".$monto."</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>Monto a Pagar por persona:</td>";
$message .= "<td>".$pagoporpersona."</td>";
$message .= "</tr>";
$message .= "</table>";
if($tercertiempo!=false){
	$message .= "<p>Tambien se te a invitado ha un evento post partido!</p>";
	$message .= "Este tercer tiempo sera en: " .$direcciontercertiempo. " mapa de referencia:";
	$message .= '<div style="height:auto; width:auto;"><img src="http://maps.googleapis.com/maps/api/staticmap?center='. $direcciontercertiempo . '&zoom=14&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:small%7Ccolor:0xff0000%7Clabel:%7C'.$direcciontercertiempo.'"" alt="Website Change Request" /></div>';
	$message .= "Tambien debes traer contigo, el siguiente monto de dinero: " .$dineroadicionaltercertiempo. "";
}
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
 //Email response
  echo "Thank you for contacting us!";
  
?>

