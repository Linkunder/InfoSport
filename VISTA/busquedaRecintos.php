<?php
include_once('../TO/RecintoDeportivo.php');
include_once('../LOGICA/infoRecintos2.php');
$jefeRecinto = infoRecintos::obtenerInstancia();
$vectorRecintos=$jefeRecinto->obtenerRecinto();

$search = '';
if (isset($_POST['search'])) {
	$search = $_POST['search'];
}

$val = '';
$pos = '';
if ($search!=''){ ?>

	<h2>Resultados</h2>

<?php } 
foreach ($vectorRecintos as $key) {
	$val = $key->getNombre();
	$pos = strripos($val, $search);
	if ($pos !== false) { ?>
		<div class="art">
			<a href = 'detalleRecinto.php?id_recinto=<?php echo $key->getIdRecinto();?>' class = "detalle"> <?php echo $val; ?> </a>
		</div>
	<?php }
	
}
?>