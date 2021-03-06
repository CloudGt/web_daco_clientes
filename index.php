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
  include("includes/paises.php");
  
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
    <link href="assets/css/filtros.css" rel="stylesheet">
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
            <li class="dropdown">
            <li><a href="#contact">Servicios</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li><a href="#contact">Localicenos</a></li>
            <li class="dropdown"> 
               <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empresas<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                   <li><a href="#">Intcomex de Guatemala, S.A. </a></li>
                   <li><a href="#">Artemis Edinter, S.A.</a></li> 
               </ul>
              <li class="dropdown">  
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Idioma <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                   <li><a href="#">Español</a></li>
                   <li><a href="#">Inglés</a></li>
                   <li><a href="#">Aleman</a></li>
                </ul>
              </li>
            </li>   
          </ul>  
          <ul class="nav navbar-nav navbar-right">
            <?php   echo '<li data-toggle="tooltip" data-placement="bottom" data-original-title="Usuario:  - '.  $_SESSION['nombre_usuario'] . '" ><a href="#"><span class="glyphicon glyphicon-user"  ></span> Perfil</a></li>' ?> 
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- inicia Carousel-->
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
    <hr>
    <!-- Finaliza Carousel-->
          

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>DACOTRANS DE CENTROAMERICA</h1>
        <p>Es una empresa con más de 40 años de experiencia en Logística, Aduana, Importaciones y Exportaciones 
           a nivel mundial somo su mejor aliado para su envío.</p>
      </div>
      <!-- Finaliza Jumbotron-->

      <!-- inicia circle-->
      <div class="container-fluid">  
          <div class="row">
             <div class="col-sm-4"><center><br>    
                  <a href= "estado_cuenta.php"><img src="assets/img/EC.png"class="img-circle" alt="cinque terre" width="230" height="230"></a>
             </div>
           
             <div class="col-sm-4"><center><br>        
                  <img src="assets/img/Cotizador.png" class="img-circle" alt="cinque terre" width="230" height="230">
             </div>

             <div class="col-sm-4"><center><br>        
                  <img src="assets/img/Datos.png" class="img-circle " alt="cinque terre" width="230" height="230" > 
             </div>            
          </div> 
      </div>
      <!-- finaliza circle-->
      

<!-- filter modal -->
<script language='JavaScript'>
 function showpay() {
  if ((document.cotizador.price.value == null || document.cotizador.price.value.length == 0) ||
   (document.cotizador.months.value == null || document.cotizador.months.value.length == 0)  ||
    (document.cotizador.rate.value == null || document.cotizador.rate.value.length == 0)) {
    document.cotizador.pay.value = "Incomplete data";
  } else {
    var down_payment = document.cotizador.down_payment.value || 0;
    var trade_in_value = document.cotizador.trade_in_value.value || 0;
    var sales_tax = document.cotizador.sales_tax.value || 0;
    var discounts = parseFloat(down_payment) + parseFloat(trade_in_value);
    var princ = document.cotizador.price.value - discounts;
    princ = princ * (1 + (sales_tax / 100));
    var term  = document.cotizador.months.value;
    var rate   = document.cotizador.rate.value || 0;
    var x = Math.pow(1 + rate/100/12, term);
    if (x == 1) {
      var result = princ/term;
    } else {
      var result = (princ * x * rate/100/12)/(x-1);
    }
    document.cotizador.pay.value = result.toFixed(2);
  }
}
</script>
<div aria-hidden='true' aria-labelledby='calculatorModalLabel' class='modal fade' id='cotizador_modal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <!--  encabezado -->
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>&times;</button>
        <h4 class='modal-title h3' id='calculatorModalLabel'>
        <span class='glyphicon glyphicon-calculator'></span>
        Cotización de carga </h4>
      </div>
      <!--  cuerpo modal -->
      <div class='modal-body'>
        <!--  form calculadora -->
        <form class='form-horizontal' id='payments_calculator' name='cotizacion' role='form'>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='price'>Origen:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='price' name='price' placeholder='Price' type='text' value=''>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='down_payment'>Destino:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='down_payment' name='down_payment' type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='trade_in_value'>Trade-In Value:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='trade_in_value' name='trade_in_value' type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='sales_tax'>Sales Tax:</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='sales_tax' name='sales_tax' type='text'>
              <span class='input-group-addon'>%</span>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='rate'>Interest Rate (APR):</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='rate' name='rate' type='text' value='3.9'>
              <span class='input-group-addon'>%</span>
            </div>

          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='months'>Term:</label>
            <div class='col-sm-8 input-group'>
              <input class='form-control' id='months' name='months' type='text' value='36'>
              <span class='input-group-addon'>months</span>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-sm-3 control-label' for='pay'>Monthly Payment:</label>
            <div class='col-sm-8 input-group'>
              <span class='input-group-addon'>$</span>
              <input class='form-control' id='pay' name='pay' readonly='readonly' type='text'>
            </div>
          </div>
        </form>
      </div>
      <!-- /.modal-body -->
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
        <button class='btn btn-callOA btn-lg' onclick='showpay()' type='button'>
        Calculate <span class='glyphicon glyphicon-refresh'></span>
        </button>
      </div>
    <!-- footer -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->













  <button class='btn btn-xs btn-important' data-target='#cotizador_modal' data-toggle='modal' onclick="payments_click()">Financing/Calculate Payments</button>


      
  <!-- Menu Servicios--> 
  
  <hr>
  <div class="container">
  <h1>Servicios</h1>
  <ul class="nav nav-tabs">
    <!-- Inicia Span-->
    <li class="active"><a data-toggle="tab" href="#home"><img src="assets/img/Barco.png" width="32" height="32" ><span class="hidden-xs"> MARITIMO</a></li></span>
    <li><a data-toggle="tab" href="#menu1"><img src="assets/img/Avion.png" width="32" height="32" ><span class="hidden-xs">   AEREO</a></li></span>
    <li><a data-toggle="tab" href="#menu2"><img src="assets/img/Camion.png" width="32" height="32" ><span class="hidden-xs"> TERRESTRE</a></li></span>
    <li><a data-toggle="tab" href="#menu3"><img src="assets/img/aduana.png" width="32" height="32" ><span class="hidden-xs">   ADUANA</a></li></span>
    <!-- Finaliza Span-->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Importaciones maritimos desde cualquier parte del mundo contamos con la mejor experiencia en transportes vía maritima.</h2>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Somos la mejor opción en transporte áereo en cualquier parte del mundo.</h2>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Hacer la logisticas vía terretres todo centroamerica es nuestro compromiso.</h2>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>No importa desde donde venga su mercaderia las fontreras no son barreras para llegar hasta su destino lo que importe o exporte.</h2>
    </div>
  </div>
  <hr>
  <!-- Finaliza Servicios-->
      

     <!-- Inicia Galeria-->
    <p></p>
    <div id="image-container">
      <h1>Galeria</h1>
        <p></p> 
        <div class="img" id="img-2">
          <span class="mask visible-sm visible-lg visible-md"></span>
          <img src="assets/img/camion_daco.JPG" width="480" height="375"  >
        </div>
        <p></p>
        <div class="img" id="img-2">
          <!--<div class="mask"></div>-->
          <span class="mask visible-sm visible-lg visible-md"></span>
          <img src="assets/img/camion_daco2.JPG" width="480" height="375"  >
        </div>
        <p></p>
        <div class="img" id="img-2">
          <span class="mask visible-sm visible-lg visible-md"></span>
          <img src="assets/img/camion_daco3.JPG" width="480" height="375"  >
        </div>
        <p></p>
        <div class="clearfix"></div>
    </div>
    <!-- finaliza Galeria-->
    

      <div class="page-header">
        <h1>Alerts</h1>
      </div>

      <p></p>
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
      <hr>


      
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