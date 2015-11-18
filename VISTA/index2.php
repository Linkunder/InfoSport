<?php include('header.php'); ?>

        <!-- Start home section -->
        <div id="inicio">
                 <!-- Empieza el login-->

            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Bienvenidos a InfoSport</h2>
                        <h4>Organiza tus partidos y tercer tiempo</h4>
                        <p>¿Te faltan jugadores?, ¿No sabes como llegar?, la solucion esta aqui</p>
                        
                        <div class="da-img">
                            <img src="images/running-128.png" alt="image01" width="200" height="200">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Encuentra tu cancha</h2>
                        <h4>Rapido y sin registro</h4>
                        <p>Encuentra recintos deportivos y su información asociada todo en un solo lugar.</p>
                        
                        <div class="da-img">
                            <img src="images/1442031669_football.png" width="256" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Retribuye</h2>
                        <h4>Comenta y puntua</h4>
                        <p>¿Tu cancha favorita es la mejor?, compartelo con otros usuarios comentando y puntuando los mejores recintos.</p>
                        
                        <div class="da-img">
                            <img src="images/1442032038_Online_Presence_Management.png" width="300" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="recintos"></div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Visita estos recintos deportivos</h1>
                    <p>Encuentra el recinto a tu medida.</p>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">All</a>
                    </li>
                    <li class="filter" data-filter="photo"></li>
                    <li class="filter" data-filter="identity"></li>
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                           <script type="text/javascript" 
    src="http://maps.googleapis.com/maps/api/js?sensor=false"> 
</script> 
<script type="text/javascript"> 

    // Standard google maps function 
    function initialize() { 
        var myLatlng = new google.maps.LatLng(-36.606835, -72.102511);
        var myOptions = { 
            zoom: 13, 
            center: myLatlng, 
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        } 
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
        
    } 
    // Function for adding a marker to the page. 
    function addMarker(location) { 
        marker = new google.maps.Marker({ 
            position: location, 
            map: map,
            animation: google.maps.Animation.DROP  

        }); 
    } 

    // Testing the addMarker function 
    function TestMarker() { 
Marker1=new google.maps.LatLng(-36.6045234,-72.1114534); addMarker(Marker1); // la jaula
Marker23=new google.maps.LatLng(-36.6248189,-72.1176016); addMarker(Marker23); // insuco
Marker24=new google.maps.LatLng(-36.5917999,-72.08676); addMarker(Marker24); // la curva soccer 
Marker25=new google.maps.LatLng(-36.6124366,-72.1065696); addMarker(Marker25); // escuela 4
Marker26=new google.maps.LatLng(-36.5899359,-72.0910142); addMarker(Marker26); // quilamapu 
Marker584=new google.maps.LatLng(-36.601661,-72.1095641); addMarker(Marker584); // escuela mexico
Marker585=new google.maps.LatLng(-36.6254096,-72.0850318); addMarker(Marker585); // chillan soccer
    } 


</script> 

<!-- <body onload="initialize()"> --> 
 <div id="map_canvas" style="border: 1px solid black; width: 550px; height: 500px;">map     div</div> 
<p style="margin-top: 5px"> 
   <button id="drop" onclick="TestMarker()">Canchas Disponibles.</button>  

</p> 
 
                        </div>
                        </div>
                </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- LOGIN-->
                    <div id="lightboxform" class="modal hide fade" tabindex="-1" data-width="500">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h4>Login Jugadores</h4>
  </div>

  <div class="modal-body">
        <form  action="../LOGICA/VerificaLoginJugador.php" method="POST" id="formulario" class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="usernamej">Correo</label>
            <div class="controls">
              <input type="text" id="user" placeholder="Email" name="user">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="passwordj">Contraseña</label>
            <div class="controls">
              <input type="password" id="pass" placeholder="Password" name="pass">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox"> Recuerdame
              </label>
              
            </div>
          </div>
        
      </div>
      
 <div class="modal-footer">

        <button type="submit" class="btn">Entrar</button></form>
 </div>


</div>
                    <!-- LOGIN -->
                    <!-- Start details for portfolio project 4 --><!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 --><!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 --><!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 --><!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 --><!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 --><!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/Apps-Google-Maps-icon.png" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3>Mapa</h3>
                                <p>Recintos en Chillan</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- About us section start --><!-- About us section end -->
        <div class="section secondary-section"></div>
        <!-- Client section start -->
        <!-- Client section start -->
        <div id="clients">
            <div class="section primary-section">
              <div class="container">
                  <div class="title">
                        <h1>¿Que se dice acerca de los recintos?</h1>
                        <p>Los comentarios hacia los recintos ayudan a la comunidad, ¡comenta tu tambien!.</p>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Aqui podemos sacar algun comentario random desde la base de datos. PRUEBA GITHUB"</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="Admin/img/message_avatar2.png" class="centered" alt="client 1">
                                    <strong>John Doe
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Aqui podemos sacar algun comentario random desde la base de datos EDITADO DESDE GITHUB."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="Admin/img/message_avatar1.png" class="centered" alt="client 2">
                                    <strong>John Doe
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Aqui podemos sacar algun comentario random desde la base de datos."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="Admin/img/message_avatar1.png" class="centered" alt="client 3">
                                    <strong>John Doe
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "La comunidad es primordial"
                </p>
                </div>
            </div>
        </div>
        <!-- Price section start --><!-- Price section end -->
        <!-- Newsletter section start -->
        </div>
        <!-- Newsletter section end -->
        <!-- Contact section start --><!-- Contact section edn -->
        <!-- Footer section start -->
        <?php include('footer.php'); ?>
    <!-- Footer section end -->
    
    <!-- ScrollUp button start -->
        <?php include('scrollUp.php'); ?>
        <!-- ScrollUp button end 
  

        <!- Include javascript -->
        <?php include('js.php'); ?>


           <!--Login-->
 
            <!--Login-->

    </body>
</php>
