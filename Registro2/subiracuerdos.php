<?php
include_once '../config.inc.php';
include '../conexion.php';

// Validar que se reciban los datos necesarios
if (!isset($_POST['id']) || !isset($_FILES['archivo'])) {
    echo json_encode(["status" => "error", "message" => "Faltan datos"]);
    exit();
}

$no_control = $_POST['id'];
$fechaacuerdo = $_POST['fechaacuerdo'];
$nombre = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$ruta = $_FILES['archivo']['tmp_name'];
$destino = "../ALUMNOS2/" . $no_control . '/' . $nombre;

// Verificar si el usuario ya tiene un archivo registrado
$q = $mysqli->query("SELECT * FROM documentosgestion WHERE no_control = '$no_control'");

if ($nombre != "") {
    // Crear directorio si no existe
    if (!file_exists("../ALUMNOS2/" . $no_control)) {
        mkdir("../ALUMNOS2/" . $no_control, 0777, true);
    }

    if (move_uploaded_file($ruta, $destino)) {
        $db = new Conect_MySql();

        if (mysqli_num_rows($q) == 0) {
            // Insertar si no existe el registro
            $sql = "INSERT INTO documentosgestion (tamanio, tipo, nombre_archivo, fechaacuerdos, no_control) 
                    VALUES ('$tamanio', '$tipo', '$nombre', '$fechaacuerdo', '$no_control')";
        } else {
            // Actualizar si ya existe
            $sql = "UPDATE documentosgestion 
                    SET tamanio='$tamanio', tipo='$tipo', nombre_archivo='$nombre', fechaacuerdos='$fechaacuerdo' 
                    WHERE no_control='$no_control'";
        }

        $query = $db->execute($sql);

        if ($query) {
            echo json_encode(["status" => "success", "message" => "Archivo subido correctamente"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error al guardar en la base de datos"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Error al subir el archivo"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "No se seleccionó ningún archivo"]);
}
?>
