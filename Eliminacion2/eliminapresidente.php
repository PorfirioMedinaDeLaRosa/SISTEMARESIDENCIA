<?php
include '../conexion.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM presidente WHERE idP = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        if($stmt->affected_rows > 0){
            echo "Registro eliminado correctamente";
        }else{
            echo "No se encontró el registro";
        }
    }else{
        echo "Error al eliminar";
    }

    $stmt->close();
}else{
    echo "ID inválido";
}
?>
