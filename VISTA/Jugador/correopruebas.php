<?php
$to = "eternaletulf@gmail.com";
//foreach para rellenar el campo con los correos de los jugadores
$subject = "HTML email";
//se debe obtener el asunto, Partido de: X deporte
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>";
$message .= '<div style="height:auto; width:auto;"><img src="http://i.imgur.com/fuWkXQT.png" alt="Website Change Request" /></div>';
$message .= '<div style="height:auto; width:auto;"><img src="http://maps.googleapis.com/maps/api/staticmap?center=Chillan,+Chile&zoom=14&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:small%7Ccolor:0xff0000%7Clabel:1%7CChillan,+Chile" alt="Website Change Request" /></div>';
//para el mapa se debe agregar o intentar colocar desde el php la direccion al lado del ?center="Chillan,+Chile", para obtener la ubicacion del recinto
$message .= "<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
//tabla para rellenar con datos aleatorios 

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <infosport2k15@gmail.com>' . "\r\n"; //quien envia, se usa por defecto Infosport2k15@gmail.com
$headers .= 'Cc: infosport2k15@gmail' . "\r\n"; // se envia con copia a infosport, no es necesario enviarle copia al creador del partido ya que se hace antes.

mail($to,$subject,$message,$headers);
?>

 <form method="post">
  <input type="submit" value="Submit" />
  </form>
	
<?php
  
?>