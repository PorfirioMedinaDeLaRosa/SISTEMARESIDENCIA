<?php
include '../conexion.php';

// Obtener datos por POST
$nombrea   = $_POST['nombrea']   ?? '';
$cargo    = $_POST['cargo']     ?? '';
$carreraa = $_POST['carreraa']  ?? '';
$emaila   = $_POST['emaila']    ?? '';
$telefonoa= $_POST['telefonoa'] ?? '';
$passworda= $_POST['passworda'] ?? '';
$idD      = $_POST['idD']       ?? '';

// Validación de campos
if (
    $carreraa === 'Opción' ||
    empty($nombrea) ||
    empty($cargo) ||
    empty($emaila) ||
    empty($telefonoa) ||
    empty($passworda) ||
    empty($idD)
) {
    echo "Verificar Datos";
    exit;
}

// Consulta preparada (mejor práctica)
$stmt = $mysqli->prepare("
    INSERT INTO presidente 
    (NombreP, Cargo, CarreraP, EmailP, TelefonoP, PasswordP, ruta_imagen, idD) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

$ruta_imagen = $telefonoa; // Mantengo tu lógica original

$stmt->bind_param(
    "sssssssi",
    $nombrea,
    $cargo,
    $carreraa,
    $emaila,
    $telefonoa,
    $passworda,
    $ruta_imagen,
    $idD
);

if ($stmt->execute()) {
    echo "Presidente Registrado";
} else {
    echo "Error al registrar";
}

$stmt->close();
?>
