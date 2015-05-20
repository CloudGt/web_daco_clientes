
<?php
require("constants.php");

//$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
//mysqli
$con = new mysqli(DB_SERVER,DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());
	//mysql_select_db(DB_NAME) or die("NO SE PUEDE SELECCIONAR LA BASE DE DATOS, O NO EXISTE!!!");
	
	?>