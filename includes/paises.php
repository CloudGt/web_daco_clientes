<?php session_start();?>
<?php session_set_save_handler(); ?>
<?php require_once("connection.php"); ?>


<?php
if (isset($_SESSION["nombre_de_sesion"])) 
{
   $paises = array();
   $x = 0;
   $TOTAL_FAC = 0;
        // $query = mysql_query("SELECT * FROM maestroe WHERE usuario='" . $username . "' AND clave='" . $password . "'");
    $sql_pais = "SELECT  Idpaises, codigo, pais FROM paises";
    if ($query = mysqli_query($con, $sql_pais)) 
    {
        $TOT=mysqli_num_rows($query);  
        if ($TOT >0)
        {
        //include("includes/header_index.php");  
        while ($row = mysqli_fetch_assoc($query)) 
        {    
            $row['pais'] = mb_convert_encoding($row['pais'], 'UTF-8', mysqli_character_set_name($con));          
            $pais = new pais($row['Idpaises'], $row['codigo'],$row['pais']);
            array_push($paises, $pais);           
        }
        $json_string = json_encode($paises);
        $file = 'data/paises.json';
        file_put_contents($file, $json_string);
    }
    else 
    {
        $message = 'No hay registros ';
        }
    } 
}



    class pais {
        public $Idpaises;
        public $codigo;
        public $pais;

        function __construct($Idpaises, $codigo, $pais) {
            $this->Idpaises = $Idpaises;
            $this->codigo = $codigo;
            $this->pais = $pais;

        }
    }
?>




<?php
 
//Leemos el JSON
$datos_pais = file_get_contents('data/paises.json');
$array_pais = json_decode($datos_pais, false);
//print_r($array_pais);
 //echo '<html> 

echo '<select class="form-control" id="pais_destino" name="pais_destino">
    <option value="">Seleccione pais</option> ';
foreach ($array_pais as $obj) {
    //$x = $x+1;
    $Idpaises= $obj-> Idpaises;
    $codigo= $obj-> codigo;
    $pais= $obj->  pais;
   // echo $pais ."<br>";
    //echo $Idpaises ."<br>";
    //echo $dato[0]."<br>";
    //echo $dato[1]."<br>";
    echo '<option value='. $Idpaises .'>'.$pais.'</option>'; 
}
echo '</select>'
 
?>
