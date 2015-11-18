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

//derivar la trasacción a donde corresponde.---> a la logica

$jefeJugador= infoJugadores::obtenerInstancia();
$jefeJugador->guardarJugador($nuevoJugador);

echo "<script type='text/javascript'>alert('Jugador agregado!');</script>";
header("Location:subirImagen.php");

?>