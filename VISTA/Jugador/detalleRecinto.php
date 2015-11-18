<?php 

include_once('../../TO/RecintoDeportivo.php');
include_once('../../LOGICA/infoRecintos2.php');

$id_recinto = $_GET['id_recinto'];

$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos = $jefeRecinto->modificarRecinto($id_recinto);


?>

<center><h1> Detalle Recinto </h1></center><br>

<?php foreach ($vectorRecintos as $RecintoDeportivo){ ?>
	<table align="center">
		<tr>
			<td> Nombre: </td>
			<td><input type="text" name="nombre" value="<?php echo $RecintoDeportivo->getNombre();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Descripcion: </td>
			<td><input type="text" name="descripcion" value="<?php echo $RecintoDeportivo->getDescripcion();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Precio: </td>
			<td><input type="text" name="precio" value="<?php echo $RecintoDeportivo->getPrecio();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Horario: </td>
			<td><input type="text" name="horario" value="<?php echo $RecintoDeportivo->getHorario();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Puntuacion: </td>
			<td><input type="text" name="puntuacion" value="<?php echo $RecintoDeportivo->getPuntuacion();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Imagen: </td>
			<td><input type="text" name="directorio_imagen" value="<?php echo $RecintoDeportivo->getImagen();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		<tr>
			<td> Direccion: </td>
			<td><input type="text" name="direccion" value="<?php echo $RecintoDeportivo->getDireccion();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>

		<tr>
			<td> Telefono: </td>
			<td><input type="text" name="telefono" value="<?php echo $RecintoDeportivo->getTelefono();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>

		<tr>
			<td> Cantidad Canchas: </td>
			<td><input type="text" name="numero_canchas" value="<?php echo $RecintoDeportivo->getCantidadCanchas();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>

		<tr>
			<td> Superficie: </td>
			<td><input type="text" name="superficie" value="<?php echo $RecintoDeportivo->getSuperficie();?>" readonly="readonly" size="30" maxlength="100"> </td>
		</tr>
		
	</table>

	<div class = "button">
	<form>
                            
        <input type="button" value="volver atrás" name="volver atrás2" onclick="history.back()" />
                            
    </form>
	</div>

<?php
}
    ?>