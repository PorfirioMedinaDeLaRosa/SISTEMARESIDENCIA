<?php
sleep(0);
include('../conexion.php');
if($_REQUEST) {
    $usuarioa = $_REQUEST['usuarioa'];
$qq = $mysqli->query("SELECT * FROM asesor  WHERE UsuarioAS = '$usuarioa'");

if( mysqli_num_rows($qq) > 0 ){

        echo '<div id="Error">Usuario ya existente</div>';
    }else{
        echo '<div id="Success">Disponible</div>';
    }
}

?>