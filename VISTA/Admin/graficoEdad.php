<?php
require_once("../../PERSISTENCIA/conexion.php");
?>
<!DOCTYPE HTML>
<html>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Reportes Graficos</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Deporte favorito ' //titulo
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie', //Tipo de grafico
            name: 'Jugadores', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT sexo, COUNT(*) FROM `jugador` GROUP BY sexo";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['sexo'] ?>',  <?php echo $res['COUNT(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });
});


		</script>

<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

	
</html>
