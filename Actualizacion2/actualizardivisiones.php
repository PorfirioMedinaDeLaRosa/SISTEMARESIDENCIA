<?php
include '../conexion.php';

// Verificar que sea POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id       = $_POST['idD'] ?? '';
    $nombre   = $_POST['nombre'] ?? '';
    $cargo    = $_POST['cargo'] ?? '';
    $carrera  = $_POST['carrera'] ?? '';
    $email    = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validación básica
    if ($carrera === 'Opción' || empty($id) || empty($nombre)) {
        echo "Verificar Datos";
        exit;
    }

    // Consulta preparada (sin hash de contraseña)
    $stmt = $mysqli->prepare("
        UPDATE divisiones 
        SET NombreD = ?, 
            CargoD = ?, 
            CarreraD = ?, 
            EmailD = ?,  
            TelefonoD = ?, 
            PasswordD = ?
        WHERE idD = ?
    ");

    $stmt->bind_param(
        "ssssssi",
        $nombre,
        $cargo,
        $carrera,
        $email,
        $telefono,
        $password,
        $id
    );

    if ($stmt->execute()) {
        echo "Datos Actualizados";
    } else {
        echo "Error al actualizar";
    }

    $stmt->close();
}
?>
