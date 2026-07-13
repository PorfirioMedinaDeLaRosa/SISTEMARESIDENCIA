<?php
sleep(0);
include('../conexion.php');
if($_REQUEST) {
    $emaila = $_REQUEST['emaila'];
$qq = $mysqli->query("SELECT * FROM presidente  WHERE EmailP = '$emaila'");

if( mysqli_num_rows($qq) > 0 ){

        echo '<div id="Error">El Email ya se encuentra registrado, si lo registra puede ocasionar problemas</div>';
    }else{
        echo '<div id="Success">Disponible</div>';
    }
}

?>