<?php
include_once '../config.inc.php';
include '../conexion.php';

$no_control = $_POST['no_control'] ?? '';
$IdAS       = $_POST['IdAS'] ?? '';
$CR1        = $_POST['CR1'] ?? 0;

/* Validar datos obligatorios */
if ($no_control == '' || $IdAS == '') {
    echo "Datos incompletos";
    exit;
}

/* Validar archivo */
if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] !== 0) {
    echo "No se recibió archivo";
    exit;
}

$nombreTmp = $_FILES['archivo']['name'];
$tipo      = $_FILES['archivo']['type'];
$tamanio   = $_FILES['archivo']['size'];
$rutaTmp   = $_FILES['archivo']['tmp_name'];

/* Validaciones */
if ($tipo !== "application/pdf") {
    echo "Solo se permiten archivos PDF";
    exit;
}

if ($tamanio > 5 * 1024 * 1024) {
    echo "El archivo supera los 5MB";
    exit;
}

/* Renombrar archivo */
$nombreFinal = strtoupper($no_control) . "EF.pdf";
$destino = "../DIVISIONES2/efinal/" . $nombreFinal;

if (!move_uploaded_file($rutaTmp, $destino)) {
    echo "Error al guardar el archivo";
    exit;
}

/* Valores obligatorios */
$statusR1 = 'ENVIADO';
$modificacionesR1 = 'SIN MODIFICACIONES';

$db = new Conect_MySql();

/* Verificar si ya existe */
$q = $mysqli->query("SELECT id FROM reportesasesor WHERE no_control='$no_control'");

if (mysqli_num_rows($q) == 0) {

$statusR2 = 'PENDIENTE';
$modificacionesR2 = 'SIN MODIFICACIONES';

$calificacionR3 = 0;
$statusR3 = 'PENDIENTE';
$modificacionesR3 = 'SIN MODIFICACIONES';


$statusRF = 'PENDIENTE';
$modificacionesRF = 'SIN MODIFICACIONES';


$sql = "INSERT INTO reportesasesor
(
    tamanioRF, tipoRF, nombre_archivoRF, calificacionRF, statusR2, modificacionesR2,
    calificacionR3, statusR3, modificacionesR3,
    calificacionRF, statuss, modificaciones,
    no_control, IdAS
)
VALUES
(
    '$tamanio', '$tipo', '$nombreFinal', '$CR1', 'ENVIADO', 'SIN MODIFICACIONES',
    0, 'PENDIENTE', 'SIN MODIFICACIONES',
    0, 'PENDIENTE', 'SIN MODIFICACIONES',
    '$no_control', '$IdAS'
)";

    echo $db->execute($sql)
        ? "Reporte 1 guardado correctamente"
        : "Error al guardar el reporte";

} else {

    $sql = "UPDATE reportesasesor SET
        tamanioRF='$tamanio',
        tipoRF='$tipo',
        nombre_archivoRF='$nombreFinal',
        calificacionRF='$CR1',
        statusR2='$statusR1',
        modificacionesR2='$modificacionesR1',
        IdAS='$IdAS'
        WHERE no_control='$no_control'";

    echo $db->execute($sql)
        ? "Reporte 3 actualizado correctamente"
        : "Error al actualizar el reporte";
}
