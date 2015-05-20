<?php 
session_start();
unset($_SESSION['nombre_de_sesion']);
session_destroy();
header("location:login.php");
?>
