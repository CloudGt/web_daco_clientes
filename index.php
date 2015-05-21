<?php 
session_start();
session_set_save_handler();
if(!isset($_SESSION["nombre_de_sesion"])) {
  header("location:login.php");
} 
else {}?>
<?php 
  if (!empty( $_SESSION['message'])) 
  {
    echo "<div class='alert alert-danger' role='alert'> <strong> :s ! </strong>" .  $_SESSION['message'] . " </div>";
  } 
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="es-Es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>--Dacotrans</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/tooltip-viewport.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/tooltip-viewport.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
  </head>
   <body role="document">

    <!-- Fixed navbar -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DACOTRAN S dads</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">inicio</a></li>
            <li><a href="#about">Servicios</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li><a href="#contact">Localicenos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Idioma <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Espa&ntilde;ol</a></li>
                <li><a href="#">Inglés</a></li>
                <li><a href="#">Aleman</a></li>
                <li class="divider"></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php   echo '<li data-toggle="tooltip" data-placement="bottom" data-original-title="Usuario:  - '.  $_SESSION['nombre_usuario'] . '" ><a href="#"><span class="glyphicon glyphicon-user"  ></span> Perfil</a></li>' ?> 
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" role="main">
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/img/avion4.png" width="1020" >
          </div>
        </div>
    </div>
          


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>DACOTRANS DE CENTROAMERICA</h1>
        <p>Es una empresa con más de 40 años de experiencia en Logística, Aduana, Importaciones y Exportaciones 
           a nivel mundial somo su mejor aliado para su envío.</p>
      </div>

      <div class="container"> 
         <div class="row">
             <div class="col-sm-4">     
                  <img src="assets/img/EC.jpg" class="img-circle" alt="" width="304" height="236">
             </div>
             <div class="col-sm-4">     
                  <img src="assets/img/Cotizador.jpg" class="img-circle" alt="" width="304" height="236"> 
             </div> 
             <div class="col-sm-4">     
                  <img src="assets/img/Datos.jpg" class="img-circle" alt="" width="304" height="236"> 
             </div>  
      </div>
        
  
  <p></p>
  <div class="container">
  <h1>Servicios</h1>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><h2>Maritimo</h2></a></li>
    <li><a data-toggle="tab" href="#menu1"><h2>Aereo</h2></a></li>
    <li><a data-toggle="tab" href="#menu2"><h2>Terrestre</h2></a></li>
    <li><a data-toggle="tab" href="#menu3"><h2>Aduana</h2></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <p></p>
      <img src="assets/img/barco2.png" width="75" height="75" >
      <h2>Importaciones maritimos desde cualquier parte del mundo contamos con la mejor experiencia en transportes vÃ­a maritima.</h2>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p></p>
      <img src="assets/img/avion2.png" width="75" height="75" >
      <h2>Somos la mejor opciÃ³n en transporte Ã¡ereo en cualquier parte del mundo.</h2>
    </div>
    <div id="menu2" class="tab-pane fade">
      <p></p>
      <img src="assets/img/camion2.png" width="75" height="75" >
      <h2>Hacer la logisticas vÃ­a terretres todo centroamerica es nuestro compromiso.</h2>
    </div>
    <div id="menu3" class="tab-pane fade">
      <p></p>
      <img src="assets/img/aduana.png" width="75" height="75" >
      <h2>No importa desde donde venga su mercaderia las fontreras no son barreras para llegar hasta su destino lo que importe o exporte.</h2>
    </div>
 </div>

<p></p>

      <div class="page-header">
         <h1>Thumbnails</h1>
          <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
      </div>

      <div class="page-header">
        <h1>Alerts</h1>
      </div>
      <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>

      <div class="page-header">
          <h1>Progress bars</h1>
        <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
       </div>
      </div> 

    <!-- fin container -->
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>