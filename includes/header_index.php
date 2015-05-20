<?php 
session_start();
session_set_save_handler();
if(!isset($_SESSION["nombre_de_sesion"])) {
  header("location:login.php");
} 
else {}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="es-Es" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Dacotrans</title>
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
          <a class="navbar-brand" href="#">DACOTRANS</a>
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
    <div class="container theme-showcase" role="main">