<?php
include_once('../../TO/jugador.php');
include_once('../../LOGICA/infoJugadores.php');
//recibo los datos del formulario cliente

session_start();


$jefeJugador = infoJugadores::obtenerInstancia();
$vectorJugadores = $jefeJugador->obtenerJugador();
$ultimoJugador = end($vectorJugadores);
$idUltimoJugador = $ultimoJugador->getId_jugador();

$nuevoNombreImagen = $ultimoJugador->getCorreo();


$target_dir = "images/usuarios/";
$target_file = $target_dir.basename("usuarioDefault");

$jefe= infoJugadores::obtenerInstancia();
$jefe->guardarImagen($idUltimoJugador,"usuarioDefault.JPG");




$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
		$message = "Archivo es una imagen - " . $check["mime"] . ".";
	echo "<script type='text/javascript'>alert('$message');</script>";
		
    } else {
        echo "Archivo no es una imagen.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $mensaje2 = "Lo sentimos pero esta imagen ya existe.";
    $uploadOk = 0;
	echo "<script type='text/javascript'>alert('$mensaje2');</script>";
	$yourURL="subirImagen.php";
	echo ("<script>location.href='$yourURL'</script>");
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Lo sentimos, pero el archivo es muy grande.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "GIF") {
    echo "Lo sentimos , solo archivos con JPG, JPEG, PNG & GIF son permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $mensaje3 =  "Lo sentimos, tu archivo no se pude actualizar.";
	echo "<script type='text/javascript'>alert('$mensaje3');</script>";
	$yourURL="subirImagen.php";
	echo ("<script>location.href='$yourURL'</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$jefe= infoJugadores::obtenerInstancia();
		$jefe->guardarImagen($idUltimoJugador,"usuarioDefault.JPG");
		$message = "Tu foto de perfil fue ingresada correctamente.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	$yourURL="index2.php";
	echo ("<script>location.href='$yourURL'</script>");
		
    } else {
        echo "Lo sentimos, hubo un error al subir el archivo.";
    }
}
?>