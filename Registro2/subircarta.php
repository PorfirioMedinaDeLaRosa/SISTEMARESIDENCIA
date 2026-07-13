<?php
include_once '../config.inc.php';
$no_control = $_POST['id'];

include'../conexion.php';  
$q = $mysqli->query("SELECT * FROM documentosgestion WHERE no_control = '$no_control'");

if (mysqli_num_rows($q) == 0) {
    if (isset($_FILES['archivo']) && isset($_POST['fechacarta'])) {
        $fechacarta = $_POST['fechacarta'];
        $nombre = $_FILES['archivo']['name'];
        $tipo = $_FILES['archivo']['type'];
        $tamanio = $_FILES['archivo']['size'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino = "./ALUMNOS2/" . $no_control . '/' . $nombre;

        if ($nombre != "") {
            if (copy($ruta, $destino)) {
                $db = new Conect_MySql();
                $sql = "INSERT INTO documentosgestion(tamanio2, tipo2, nombre_archivo2, fechapresentacion, no_control) 
                        VALUES ('$tamanio', '$tipo', '$nombre', '$fechacarta', '$no_control')";
                $query = $db->execute($sql);
                if ($query) {
                    echo json_encode(["success" => true, "message" => "Se guardó correctamente"]);
                } else {
                    echo json_encode(["success" => false, "message" => "Error al guardar los datos en la base de datos"]);
                }
            } else {
                echo json_encode(["success" => false, "message" => "Error al mover el archivo"]);
            }
        }
    }
} else {
    if (isset($_FILES['archivo']) && isset($_POST['fechacarta'])) {
        $fechacarta = $_POST['fechacarta'];
        $nombre = $_FILES['archivo']['name'];
        $tipo = $_FILES['archivo']['type'];
        $tamanio = $_FILES['archivo']['size'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino = "../ALUMNOS2/" . $no_control . '/' . $nombre;

        if ($nombre != "") {
            if (copy($ruta, $destino)) {
                $db = new Conect_MySql();
                $sql = "UPDATE documentosgestion SET tamanio2 = '$tamanio', tipo2 = '$tipo', nombre_archivo2 = '$nombre', 
                        fechapresentacion = '$fechacarta' WHERE no_control = '$no_control'";
                $query = $db->execute($sql);
                if ($query) {
                    echo json_encode(["success" => true, "message" => "Se actualizó correctamente"]);
                } else {
                    echo json_encode(["success" => false, "message" => "Error al actualizar los datos en la base de datos"]);
                }
            } else {
                echo json_encode(["success" => false, "message" => "Error al mover el archivo"]);
            }
        }
    }
}
?>
