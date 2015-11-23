<?php include('header.php'); ?>
  

  <!-- Aqui insertar formulario comentario -->
<div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contactanos!</h1>
                        <p>Tus sugerencias son vitales para nuestro sitio.</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Cargando mapa...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Hola</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Bien hecho!</strong>Tu mensaje ha sido enviado.</div>
                                <div id="errorSend" class="alert alert-error invisible">Hubo un error.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Tu nombre..." />
                                            <div class="error left-align" id="err-name">Ingrese nombre.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Tu email..." />
                                            <div class="error left-align" id="err-email">Ingrese un email correcto.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comentarios..."></textarea>
                                            <div class="error left-align" id="err-comment">Por favor ingresa tu comentario.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <div class="title">
                            <h3>Stay Connected</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>





        <!-- Footer section start -->
        <?php include('footer.php'); ?>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <?php include('scrollUp.php'); ?>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <?php include('js.php'); ?>
    </body>
</php>

