<?php

include 'conexion.php';

$Ncontrol = $_POST['NcontrolCP'];
$ObservacionesR1 = $_POST['Folio'];

if ($ObservacionesR1 == "") {
    echo "Campo vacío, verificar";
} else {
    $q = $mysqli->query("SELECT * FROM cartaliberacionserviciosocial WHERE no_control = '$Ncontrol'");

    if (mysqli_num_rows($q) == 0) {
        $sql = $mysqli->query("INSERT INTO cartaliberacionserviciosocial(no_control, numerooficio) VALUES('$Ncontrol', '$ObservacionesR1')");

        if ($sql) {
            echo "Registro agregado correctamente:<br>";
            echo "No. Control: $Ncontrol<br>";
            echo "Folio: $ObservacionesR1";
        } else {
            echo "Error al agregar el registro: " . $mysqli->error;
        }
    } else {
        $sql = $mysqli->query("UPDATE cartaliberacionserviciosocial SET numerooficio='$ObservacionesR1' WHERE no_control='$Ncontrol'");

        if ($sql) {
            echo "Registro actualizado correctamente:<br>";
            echo "No. Control: $Ncontrol<br>";
            echo "Folio: $ObservacionesR1";
        } else {
            echo "Error al actualizar el registro: " . $mysqli->error;
        }
    }
}
?>