<!DOCTYPE php>
<?php
session_start();
?>
<php lang="en">


<?php include('headerJugador.php');?>


<div class="fondoamarillo">


<table class="table table-bordered2">
    <tr>
        <th>
            <center><h3><?php echo "<img src='images/basketball27.png' height='32px' width='32px'>   "?>Llego la hora de jugar! <?php  echo "<img src='images/man451.png' height='32px' width='32px'>"?></h3></center>
            <center><h5>Ingresa la siguiente informacion</h5></th></center>
    </tr>
</table>

<br>

<form class="crearPartido" action= "procesarPartido.php" method="post">
<ul>
        
        <label for="fecha">Dia</label>
        <div class="in">
        <input type="date" name="fecha">
        </div>
        <label for="hora">Hora</label>
        <div class="in">
        <input type="time" name="hora" >
        </div>
        <label for="jugadores">Numero de jugadores</label>
        <div class="in">
        <input type="int" name="jugadores" maxlength="200">
        </div>
        <label for="deporte">Deporte</label>
        <div class="in">
        <select name="deporte" id = "deporte">
                        <option>Baby-futbol</option>
                        <option>Futbolito</option>
                        <option>Hockey</option>
                        <option>Basquetbol</option>
        </select>
        </div>
        <br>
        <br>
        <center><input type="submit" value="Enviar" ></center>
    
</ul>
</form>




<br>

<br>

<br>

<br>


<!-- Footer section start -->
<?php include('footer.php');?>
<!-- Footer section end -->
<!-- ScrollUp button start -->
<?php include('scrollUp.php');?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</php>


</div>
  