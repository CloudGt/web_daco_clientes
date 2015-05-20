

<?php session_start();?>
<?php session_set_save_handler(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/connection.php"); ?>

<?php
if (isset($_SESSION["nombre_de_sesion"])) 
{
   $x = 0;
   $TOTAL_FAC = 0;
        
/*        SELECT * 
FROM  `estado_cta` 
WHERE  `ID_CLIENTE` =3 */

        // $query = mysql_query("SELECT * FROM maestroe WHERE usuario='" . $username . "' AND clave='" . $password . "'");
        $sql_cta = "SELECT * FROM estado_cta WHERE ID_CLIENTE=" . $_SESSION['id_usuario'] ;
        if ($query = mysqli_query($con, $sql_cta)) 
        {
            $TOT=mysqli_num_rows($query);  
            if ($TOT >0)
            {
            include("includes/header_index.php");
            echo "<br><br><br><br>

                 <div class='container'>
                    <!--id_cliente-->
                    <h4>Fersuc, Sociedad Anonima</h4>
                    <h4>ESTADO DE CUENTA</h4>
                    <h4>Expreado en Quetzales y Dólares</h4>
                 
                    <!--id_fecha_hoy-->
                    <h4>al: 14-05-15</h4>
                 </div>
               <div class='table-responsive'>        
                    <table class='table table-hover  table-condensed table-bordered' >
                     <thead>
                       <tr class='active'>
                         <th> Factura # </th>
                         <th>Fecha</th>
                         <th>Valor Q </th>
                         <th>Valor $</th>
                         <th>Tipo Doc</th>
                       </tr>
                     </thead>
                     <tbody>";
              while ($row = mysqli_fetch_assoc($query)) 
              	{    $x = $x + 1;
                    $documento = $row['DOCUMENTO'];
                    $fecha = $row['FECHA'];
                    $valor = $row['VALOR'];
                    $tipo_doc = $row['TIPO_DOC'];
                    $TOTAL_FAC =  $TOTAL_FAC + $valor;
                    //$ID_CLIENTE = $row['ID_CLIENTE'];
              	    //echo  $documento;
                    //echo "<div class='alert alert-danger' role='alert'> <strong> :s ! </strong>" . $documento . $valor. $tipo_doc . $ID_CLIENTE . $x . "</div>";
                    if ($x % 2 ){
                    echo "
                    <tr class='success'>
                        <td>" . $documento . "</td>
                        <td>".$fecha."</td>
                        <td>".$valor."</td>
                        <td>0.00</td>
                        <td>" . $tipo_doc . "</td>
                     </tr>
                     ";}
                     else{
                        echo"
                        <tr class=''>
                            <td>" . $documento . "</td>
                            <td>".$fecha."</td>
                            <td>".$valor."</td>
                            <td>0.00</td>
                            <td>" . $tipo_doc. "</td>
                        </tr>";
                     }                   
          		}
                echo "</tbody>
                 </table>
                 </div>";
            }
            else 
            {
              $message = "No hay registros ";
            }
        } 
    echo "<div class='alert alert-danger' role='alert'> <strong> Q Y $ </strong>Total de facturación:" .  $TOTAL_FAC . " </div>";
}
?>
            
<?php include("includes/footer_index.php"); ?>