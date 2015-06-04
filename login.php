<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php include("includes/header.php"); ?>
<?php

if (isset($_SESSION["nombre_de_sesion"])) {
    header('location: index.php');
}
if (isset($_POST["login"])) {
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // $query = mysql_query("SELECT * FROM maestroe WHERE usuario='" . $username . "' AND clave='" . $password . "'");
        $sql = "SELECT * FROM maestroe WHERE usuario='" . $username . "' AND clave='" . $password . "'";
        if ($query = mysqli_query($con, $sql)) 
        {
            $TOT=mysqli_num_rows($query);  
            if ($TOT >0)
            {
              $row = mysqli_fetch_assoc($query);
              $dbusername                   = $row['usuario'];
              $dbpassword                   = $row['clave'];
              $dbnombreu                    = $row['nombre'];
              $dbid_usuario                    = $row['id'];
              $_SESSION['nombre_de_sesion'] = $username;
              $_SESSION['nombre_usuario']   = $dbnombreu;
              $_SESSION['id_usuario']     = $dbid_usuario;
              // SELECCIONA EMPRESAS
              $sql = "SELECT * FROM empresas WHERE id_usuario=" . $_SESSION['id_usuario'];
              if ($query = mysqli_query($con, $sql)) 
              {
                  $TOT=mysqli_num_rows($query);  
                  if ($TOT >0)
                  {
                    $row = mysqli_fetch_assoc($query);
                    $dbnombre_empresa                    = $row['empresa'];
                    $dbid_empresa                    = $row['id_empresa'];
                    $_SESSION['nombre_empresa'] = $dbnombre_empresa;
                    $_SESSION['id_empresa'] = $dbid_empresa;
                    //header('location: index.php');
                    }
                    else 
                    {
                      $_SESSION['message']     = "No hay empresas asignadas a su usuario!";
                      //$message = "No hay empresas asignadas a su usuario!";
                    }
              }
              //-----------------------------
              header('location: index.php');
            }
            else 
            {
               $_SESSION['message']= "Nombre de usuario ó contraseña invalida!";
            }
        } 
        //$numrows = mysqi_num_rows($query);
        // echo $numrows;
        // echo $query;
        //$dbnombreu = $row['nombre'];
        //if ($numrows != 0) {
        //while ($row = mysql_fetch_assoc($query)) {
        //    $dbusername = $row['usuario'];
        //    $dbpassword = $row['clave'];
        //    $dbnombreu = $row['nombre'];
        //}
        //if ($username == $dbusername && $password == $dbpassword) {
        //  $_SESSION['nombre_de_sesion'] = $username;
        //$_SESSION['nombre_usuario'] = $dbnombreu;
        /* Redirect browser 
        header("Location: intropage.php");*/
        //header('location: index.php');
        // }
        // } else {
        //   $message = "Nombre de usuario ó contraseña invalida!";
        //}
    } 
    else 
    {
        $_SESSION['message'] = "Todos los campos son requeridos!";
    }
}
?>

  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="login-box clearfix animated flipInY">
      <div class="page-icon animated bounceInDown">
        <img class="img-responsive" src="assets/img/login-key-icon.png" alt="Key icon">
      </div>
      <div class="login-logo">
        <a href="#"><img src="assets/img/login-logo.png" alt="Company Logo"></a>
      </div>
      <hr>
      <div class="login-form">
        <div class="alert alert-error hide">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <h4>Error!</h4>
          Error no especificado
        </div>
        <form name="loginform" id="loginform" action="" method="POST">
          <input type="text" placeholder="User name" class="input-field" required="" name="username" id="username" class="input"> 
          <input type="password" placeholder="Password" class="input-field" required="" name="password" id="password"> 
          <button type="submit" name = "login" class="btn btn-login">Login</button> 
        </form>
        <div class="login-links"> 
          <a href="forgot-password.html">
          No recuerdo mi contraseña.
          </a>
          <br>
          <a href="sign-up.html">
          No tiene cuenta? <strong>Ingresar</strong>
          </a>
        </div>
      </div>
    </div>
  </div>




	<?php include("includes/footer.php"); ?>
	<?php 
  if (!empty($message)) 
  {
    
    echo "<div class='alert alert-danger' role='alert'> <strong> :s ! </strong>" .  $_SESSION['message'] . " </div>";
  } 
  ?>
  
	