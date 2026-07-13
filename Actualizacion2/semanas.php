<?php
header('Content-Type: application/json; charset=utf-8');

include '../conexion.php';

$response = ['success' => false, 'message' => ''];

$semanas = $_POST['semanas'] ?? '';
$no_control = $_POST['no_control'] ?? '';
$idproyecto = $_POST['idproyecto'] ?? '';

if ($semanas === '') {
    $response['message'] = 'Campo vacío';
    echo json_encode($response);
    exit;
}

if ($semanas >= 14 && $semanas <= 24) {
    $sql = $mysqli->query("UPDATE proyectos SET semanas='$semanas' WHERE idproyecto='$idproyecto'");
    if ($sql) {
        $response['success'] = true;
        $response['message'] = 'Registro Exitoso';
    } else {
        $response['message'] = 'Error en actualización';
    }
} else {
    $response['message'] = 'Número de semanas inválido';
}

// Actualiza tb_residentes según tu lógica (simplificada)
$consulta = "SELECT no_controlp FROM asignacionproyecto WHERE no_control='$no_control'";
$consulta2 = $mysqli->query($consulta);
$numerototal = null;
while ($numero = mysqli_fetch_assoc($consulta2)) {
    $numerototal = $numero['no_controlp'];
}

if ($numerototal) {
    $result = $mysqli->query("SELECT no_control FROM asignacionproyecto WHERE no_controlp='$numerototal'");
    $data = [];
    while ($d = mysqli_fetch_assoc($result)) {
        $data[] = $d['no_control'];
    }
    foreach ($data as $nc) {
        $mysqli->query("UPDATE tb_residentes SET paso7='x' WHERE no_control='$nc'");
    }
}

echo json_encode($response);
exit;
?>
