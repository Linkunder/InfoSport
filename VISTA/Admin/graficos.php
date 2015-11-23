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
            text: 'Jugadores agrupados por sexo ' //titulo
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

 $('#container1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Deporte favorito jugadores ' //titulo
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
            name: 'Deporte', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT deporte_fav, COUNT(*) FROM `jugador` GROUP BY deporte_fav";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['deporte_fav'] ?>',  <?php echo $res['COUNT(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });//fin grafico deporte fav
//Comienza el grafico de barras de edad
$('#container3').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Jugadores agrupados por edad'
        },
        subtitle: {
            text: 'InfoSport'
        },
        xAxis: {
            categories: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT YEAR(CURRENT_DATE())-YEAR(fecha_nacimiento)as edad, count(*) FROM `jugador` GROUP by edad";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                ['<?php echo $res['edad'] ?>'],
<?php
}
?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jugadores ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Jugadores'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Numero Jugadores',
            data: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT YEAR(CURRENT_DATE())-YEAR(fecha_nacimiento)as edad, count(*) FROM `jugador` GROUP by edad";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                [<?php echo $res['count(*)'] ?>],
<?php
}
?>


            ]
        }]
    });

    $('#container4').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Superficie recintos deportivos' //titulo
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
            name: 'Recintos deportivos', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT `superficie`, COUNT(*) FROM recinto_deportivo GROUP BY superficie";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['superficie'] ?>',  <?php echo $res['COUNT(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });

//Grafico de barras cantidad de canchas
$('#container5').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Canchas por recintos deportivos'
        },
        subtitle: {
            text: 'InfoSport'
        },
        xAxis: {
            categories: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT nombre from recinto_deportivo";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                ['<?php echo $res['nombre'] ?>'],
<?php
}
?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Canchas ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Numero canchas',
            data: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT numero_canchas from recinto_deportivo";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                [<?php echo $res['numero_canchas'] ?>],
<?php
}
?>


            ]
        }]
    });
    $('#container6').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Precio Recintos deportivos' //titulo
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
            name: 'Recintos', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT precio, count(*) FROM `recinto_deportivo` group by precio";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['precio'] ?>',  <?php echo $res['count(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });
$('#container7').highcharts({ //Comentarios
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Puntuacion recintos deportivos'
        },
        subtitle: {
            text: 'InfoSport'
        },
        xAxis: {
            categories: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT nombre from recinto_deportivo ORDER BY  puntuacion";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                ['<?php echo $res['nombre'] ?>'],
<?php
}
?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Canchas ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Puntuacion',
            data: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT puntuacion from recinto_deportivo ORDER BY  puntuacion";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                [<?php echo $res['puntuacion'] ?>],
<?php
}
?>


            ]
        }]
    });
$('#container8').highcharts({ //Comentarios
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Comentarios Recintos deportivos'
        },
        subtitle: {
            text: 'InfoSport'
        },
        xAxis: {
            categories: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT nombre, count(*) FROM recinto_deportivo NATURAL JOIN comentario GROUP BY nombre";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                ['<?php echo $res['nombre'] ?>'],
<?php
}
?>

            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Canchas ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Comentarios',
            data: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT nombre, count(*) FROM recinto_deportivo NATURAL JOIN comentario GROUP BY nombre";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                [<?php echo $res['count(*)'] ?>],
<?php
}
?>


            ]
        }]
    });
$('#container9').highcharts({ //Comentarios
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Numero de comentarios por jugador'
        },
        subtitle: {
            text: 'InfoSport'
        },
        xAxis: {
            name: 'Jugador',
            categories: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT id_jugador, count(*) FROM jugador natural JOIN comentario  GROUP BY id_jugador";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                ['<?php echo $res['id_jugador'] ?>'],
<?php
}
?>

            ],
            title: {
                text: 'jugador'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Comentarios ',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Comentario',
            data: [
<?php
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT id_jugador, count(*) FROM jugador natural JOIN comentario  GROUP BY id_jugador";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
?>

                [<?php echo $res['count(*)'] ?>],
<?php
}
?>


            ]
        }]
    });
 $('#container10').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Partidos jugados por jugadores ' //titulo
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
            name: 'Deporte', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT id_jugador, count(*) FROM jugador natural JOIN partido GROUP BY id_jugador";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['id_jugador'] ?>',  <?php echo $res['count(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });//fin grafico deporte fav
//Comienza el grafico de barras de edad

 $('#container11').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Recintos deportivos y sus partidos' //titulo
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
            name: 'Deporte', //nombre de lo que estamos viendo
            data: [
                
                <?php 
                $conexionBD= new conexion();
                $link=$conexionBD->getConexion();
                $query="SELECT nombre, count(*) FROM recinto_deportivo natural JOIN partido GROUP BY id_recinto";
                $sql=mysql_query($query,$link);
                while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['nombre'] ?>',  <?php echo $res['count(*)']?>],
            <?php
                }
            ?>
            ]
        }]
    });//fin grafico deporte fav
//Comienza el grafico de barras de edad

}); //Aqui finalizan los graficos


		</script>





<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
<!-- Aqui ponemos el "titulo" de los graficos que se muestran-->
<div class="widget-header">
 <i class="icon-bar-chart"></i>
 <h3>Reportes graficos Jugadores</h3>
  <a name="jugadores"></a>
</div>
<!-- A continuacion vamos a mostrar los graficos, para este caso JUADORES-->

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container9" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container10" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<!-- Titulo de reportes recintos deportivos-->
<div class="widget-header">
 <i class="icon-bar-chart"></i>
 <h3>Reportes graficos Recintos deportivos</h3>
</div>
<!-- Se muestran los graficos sobre recintos deportivos-->
<div id="container4" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto" ></div>
<div id="container5" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto" ></div>
<div id="container6" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container7" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container8" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<div id="container11" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


</html>
