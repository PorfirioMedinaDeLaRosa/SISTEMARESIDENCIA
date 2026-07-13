<?php

include '../conexion.php';

$ids = $_POST['Ncontrol'];
$status = $_POST['status'];
$modificaciones = $_POST['observaciones'];



$sql = $mysqli->query("UPDATE tramitesgestion SET statusCL='$status', modificacionesCL='$modificaciones' WHERE no_control='$ids'");

if ($sql) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: " . $mysqli->error;
}
