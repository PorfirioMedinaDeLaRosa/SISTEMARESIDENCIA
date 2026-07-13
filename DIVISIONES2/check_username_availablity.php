<?php
sleep(0);
include('../conexion.php');
if($_REQUEST) {
    $usuario = $_REQUEST['usuario'];
$qq = $mysqli->query("SELECT * FROM divisiones  WHERE UsuarioD = '$usuario'");

if( mysqli_num_rows($qq) > 0 ){

        echo '<div id="Error">Usuario ya existente</div>';
    }else{
        echo '<div id="Success">Disponible</div>';
    }
}

?>