<?php
include_once('../../TO/Partido.php');
include_once('../../LOGICA/controlPartido.php');
include_once('../../TO/Equipo.php');
include_once('../../LOGICA/controlEquipo.php');
include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos.php');
include_once('../../TO/Grupo.php');
include_once('../../LOGICA/infoGrupos.php');
include_once('../../TO/GrupoConformado.php');
include_once('../../LOGICA/infoGruposConformados.php');
include_once('../../TO/Jugador.php');
include_once('../../LOGICA/infoJugadores.php');
include_once('../../TO/TercerTiempo.php');
include_once('../../LOGICA/controlTercerTiempo.php');
include_once('../../TO/LugarTercerTiempo.php');
include_once('../../LOGICA/controlLugarTercerTiempo.php');

$jefePartido = controlPartido::obtenerInstancia();
$jefeRecinto = infoRecintos::obtenerInstancia();
$jefeGrupo = infoGrupos::obtenerInstancia();
$jefeGrupoC = infoGruposConformados::obtenerInstancia();
$jefeJugador = infoJugadores::obtenerInstancia();
$jefeTercer = controlTercerTiempo::obtenerInstancia();
$jefeLugar = controlLugarTercerTiempo::obtenerInstancia();
$jefeEquipo = controlEquipo::obtenerInstancia();

session_start();

$jefeJugador = infoJugadores::obtenerInstancia();
    $correo = $_SESSION['sesion'];;
    $vectorJugador=$jefeJugador->buscarID($correo);
    $idJugador = 0;
    
    foreach($vectorJugador as $Jugador){    
        $nombreJugador= $Jugador->getNombre();
    }

$idPartido = $_SESSION['id_partidoA']; // De aqui saco el recinto, hora, fecha, cuota y numero de personas
$idRecinto = $_SESSION['id_recintoA'];// Datos del recinto : direccion
$idGrupo = $_SESSION['grupoPartido']; // Nombre del grupo, y tb puedo sacar los jugadores.
$idTercer = $_SESSION['id_tercerTiempo']; // Datos del tercer tiempo

$recinto1 = $jefeRecinto->obtenerRecintoEsp($idRecinto);
foreach ($recinto1 as $RecintoDeportivo) {
	$imagenRecinto = $RecintoDeportivo->getImagen();
	$nombreRecinto = $RecintoDeportivo->getNombre();
	$direccionRecinto = $RecintoDeportivo->getDireccion();
}

$grupo1 = $jefeGrupo->obtenerGrupoEsp($idGrupo);
foreach ($grupo1 as $Grupo) {
	$nombreGrupo = $Grupo->getNombre_grupo();
}

$tercerTiempo1 = $jefeTercer->obtenerTercerEsp($idTercer);
foreach ($tercerTiempo1 as $TercerTiempo) {
	$idLugar = $TercerTiempo->getIdLugar();
}

$lugarTercerTiempo1 = $jefeLugar->obtenerLugarEsp($idLugar);

if ($idLugar != 0) { // Si es 0, no hay tercer tiempo 
foreach ($lugarTercerTiempo1 as $LugarTercerTiempo) {
	$nombreLugar = $LugarTercerTiempo->getNombreLugar();
	$direcciontercertiempo = $LugarTercerTiempo -> getDireccion();
	$imagenLugar = $LugarTercerTiempo->getImagen();
}
}
$jugadores = $jefeJugador->obtenerJugadores5($idPartido);

$vectorPartido = $jefePartido->obtenerPartido($idPartido);
			foreach ($vectorPartido as $Partido) {
				$dia = $Partido->getFecha();
				$newFecha = date("d-m-Y", strtotime($dia));
				$hora = $Partido->getHora();
				$cuotaTotal = $Partido->getCuota();
				$participantes = $Partido->getNroJugadores();
				$cuotaPersonal = $cuotaTotal/$participantes;
			}




echo "$idPartido $idRecinto $idGrupo $idTercer";
$to = "infosport2k15@gmail.com";
foreach ($jugadores as $Jugador) {
					$to .= ", " .$Jugador -> getCorreo();
					;
				}	
//foreach para rellenar el campo con los correos de los jugadores
//$query = "SELECT correo FROM jugador WHERE id_jugador IN (SELECT id_jugador FROM equipo where id_partido in (SELECT id_partido FROM partido))";
//echo $query;
//foreach ($query as $key) {
//$to .= ", ".$key;
//}

$dir = $direccionRecinto;
//rellenar con la direccion
$nombre = $nombreJugador;
//rellenar con nombre jugador
$fecha = $newFecha;
//fecha partido
//se mantiene el que copie
//hora partido
$monto = $cuotaTotal;
//precio original cancha
$cant = $participantes;
//cantidad de jugadores
$pagoporpersona = $cuotaPersonal;
//monto/cancha

$subject = "Invitacion Infosport";
//se debe obtener el asunto, Partido de: X deporte
$tercertiempo = $nombreLugar;
//recibir existencia de 3er tiempo
$direcciontercertiempo = $direcciontercertiempo;
//direccion tercer tiempo
echo "$direcciontercertiempo";

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
if($tercertiempo!=NULL){
	$message .= "<p>Tambien se te a invitado ha un evento post partido!</p>";
	$message .= "Este tercer tiempo sera en: " .$tercertiempo. " mapa de referencia:";
	$message .= '<div style="height:auto; width:auto;"><img src="http://maps.googleapis.com/maps/api/staticmap?center='. $direcciontercertiempo . '&zoom=14&scale=false&size=600x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:small%7Ccolor:0xff0000%7Clabel:%7C'.$direcciontercertiempo.'"" alt="Website Change Request" /></div>';
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
 
  
?>
<META http-equiv="refresh" content="0;URL=index2.php">
