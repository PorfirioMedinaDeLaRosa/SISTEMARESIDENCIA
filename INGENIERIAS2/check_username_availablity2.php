<?php
sleep(0);
include('../conexion.php');
if($_REQUEST) {
    $email = $_REQUEST['email'];
$qq = $mysqli->query("SELECT * FROM divisiones  WHERE EmailD = '$email'");

if( mysqli_num_rows($qq) > 0 ){

        echo '<div id="Error">El Email ya se encuentra registrado, si lo registra ocasionara problemas</div>';
    }else{
        echo '<div id="Success">Disponible</div>';
    }
}

?>