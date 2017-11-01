<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="shortcut icon" href="img/logo-segasi-1-min.png" />
  <title>Segasi</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <img src="img/logo-segasi-1-min.png" alt="HTML5 Icon" style="width:60px;height:60px;">
      <a id="logo-container" href="index.php" class="brand-logo"><div class="hide-on-small-only"><br><br></div>&nbsp;Segasi</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="https://twitter.com/_Segasi" target="_blank"><img src="img/twitter-min.png"></a></li>
        <li><a href="http://fb.me/segasi.cl" target="_blank"><img src="img/facebook-min.png"></a></li>
        <li><a href="./reloj.html" target="_blank"><img src="img/youtube-min.png"></a></li>
</ul>

<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <a class="center-align"> <img src="img/logo-segasi-min.png" style="width:100px;height:100px"></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">thumb_up</i>¡ Síguenos !</a></li>
    <li><div class="divider"></div></li>
    <li><a href="https://twitter.com/_Segasi" target="_blank"><img class="slide-out-icon" src="img/twitter-min.png">Twitter</a></li>
    <li><a href="http://fb.me/segasi.cl" target="_blank"><img class="slide-out-icon" src="img/facebook-min.png">Facebook</a></li>
    <li><a href="./reloj.html" target="_blank"><img class="slide-out-icon" src="img/youtube-min.png">YouTube</a></li>
  </ul>

  <a href="#" data-activates="slide-out" class="button-collapse"><div class="hide-on-small-only"><br><br></div><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Segasi</h1>
        <div class="row center">
          <h3 class="header col s12 light">Una compañía dedicada al desarrollo de Aplicaciones</h3>
        </div>

      </div>
    </div>
    <div class="parallax"><img src="img/compute-min.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">android</i></h2>
            <h5 class="center">Aplicaciones Móviles</h5>

            <p class="center">Desarrollamos aplicaciones con las herramientas más modernas de la web, adaptadas a las necesidades de cada cliente.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">phonelink</i></h2>
            <h5 class="center">Sitios Web</h5>

            <p class="center">Diseñamos su sitio web a medida, cercano y amigable para su fácil autoadministración.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">shopping_cart</i></h2>
            <h5 class="center">Tiendas Virtuales</h5>

            <p class="center">Entregamos soluciones personalizadas, mediante sistemas Web de acuerdo a su modelo de negocio.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <h5 class="center light">¡ Lo invitamos a descubrir los beneficios de la administración centralizada !</h5><br>

  <div class="parallax-container valign-wrapper" >
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light black-text">Somos jóvenes profesionales creativos, innovadores y estamos enfocados en la satisfacción de nuestros clientes</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background2-min.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
<!-- formulario inicio-->
  <div class="row">
      <form class="col s12">
        <div class="row">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contactanos</h4>

          <div class="input-field col s12">
            <i class="material-icons prefix">face</i>
            <input id="contact" type="text" required>
            <label for="contact">Nombre</label>
          </div>

          <div class="input-field col l6 m12 s12">
            <i class="material-icons prefix">phone</i>
            <input id="phone" type="tel" class="validate" required>
            <label for="phone">Telefono</label>
          </div>

          <div class="input-field col l6 m12 s12">
            <i class="material-icons prefix">email</i>
            <input id="mail" type="email" class="validate" required>
            <label for="mail" data-error="Verifique la dirección de correo electrónico" data-success="Correo Válido">Correo</label>
          </div>

          <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="message" class="materialize-textarea" required></textarea>
              <label for="message">Mensaje</label>
          </div>

          <button class="btn waves-effect waves-light" type="submit" onclick="addContact(); return false">Enviar
              <i class="material-icons right">send</i>
          </button>

        </div>
      </form>
</div>
<!-- formulario fin-->

 <h4 id="resultado" class="header light white-text"><?php include('contacto.php');?></h4>


        </div>
      </div>
    </div>
  </div>

 <div id="map"></div>

 <div class="fixed-action-btn">
   <a class="btn-floating btn-large teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Ir al Portafolio" href="./portfolio.html">
     <i class="large material-icons">work</i>
   </a>
 </div>



  <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col s12 l12">
            <h5 class="white-text"><i class="material-icons prefix">copyright</i> Segasi 2017</h5>
          </div>
          <div class="col s12 l12 white-text">
            <ul>
              <li>Nueva Providencia #1363, Oficina 1205, Providencia</li>
  	          <li><a class="brown-text text-lighten-3" href="mailto:contacto@segasi.cl">contacto@segasi.cl</a></li>
              <li><a class="brown-text text-lighten-3" href="tel:+56961501279">+56961501279</a></li>
            </ul>
          </div>
        </div>
      </div>


      <div class="footer-copyright">
        <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://segasi.cl">Segasi</a>
        </div>
      </div>
    </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnSpciOYPymGqc27IgQ4lrByEQOPLLuX4&callback=initMap"></script>
  <script src="js/map.js"></script>
  <script src="js/ajax.js"></script>

  </body>
</html>
