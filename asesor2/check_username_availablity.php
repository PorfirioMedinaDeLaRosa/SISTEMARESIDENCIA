<?php
sleep(0);
include('../conexion.php');
if($_REQUEST) {
    $usuariogt = $_REQUEST['usuariogt'];
$qq = $mysqli->query("SELECT * FROM presidente  WHERE UsuarioP = '$usuariogt'");

if( mysqli_num_rows($qq) > 0 ){

        echo '<div id="Error">Usuario ya existente</div>';
    }else{
        echo '<div id="Success">Disponible</div>';
    }
}

?>