<?php
session_start();
include '../conexion.php';

// Verificar si se envió el archivo
if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    
    $file = $_FILES['file']['tmp_name'];
    $nombre_archivo = $_FILES['file']['name'];
    $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
    
    // Validar extensión
    if(strtolower($extension) != 'csv') {
        $_SESSION['mensaje'] = "Error: El archivo debe ser de tipo CSV";
        $_SESSION['tipo_mensaje'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
    // Validar tamaño (5MB máximo)
    if($_FILES['file']['size'] > 5 * 1024 * 1024) {
        $_SESSION['mensaje'] = "Error: El archivo excede el tamaño máximo de 5MB";
        $_SESSION['tipo_mensaje'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
    // Abrir el archivo
    $handle = fopen($file, "r");
    if($handle === false) {
        $_SESSION['mensaje'] = "Error: No se pudo abrir el archivo";
        $_SESSION['tipo_mensaje'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
    $c = 0;
    $errores = 0;
    $linea_error = [];
    
    // Leer el archivo línea por línea
    while(($filesop = fgetcsv($handle, 1000, ";")) !== false) {
        // Validar que la línea tenga al menos 14 columnas
        if(count($filesop) < 14) {
            $errores++;
            $linea_error[] = $c + 1;
            $c++;
            continue;
        }
        
        // Limpiar y asignar variables
        $matricula = trim($filesop[0]);
        $nombre = utf8_encode(trim($filesop[1]));
        $ap = utf8_encode(trim($filesop[2]));
        $am = utf8_encode(trim($filesop[3]));
        $carrera = utf8_encode(trim($filesop[4]));
        $curp = trim($filesop[5]);
        $semestre = trim($filesop[6]);
        $periodo = trim($filesop[7]);
        $promedio = trim($filesop[8]);
        $creditosc = trim($filesop[9]);
        $creditosr = trim($filesop[10]);
        $porcentaje = trim($filesop[11]);
        $folioseguro = trim($filesop[12]);
        $genero = trim($filesop[13]);
        
        // Validar datos obligatorios
        if(empty($matricula) || empty($curp)) {
            $errores++;
            $linea_error[] = $c + 1;
            $c++;
            continue;
        }
        
        // Escapar datos para evitar inyección SQL
        $matricula = $mysqli->real_escape_string($matricula);
        $nombre = $mysqli->real_escape_string($nombre);
        $ap = $mysqli->real_escape_string($ap);
        $am = $mysqli->real_escape_string($am);
        $carrera = $mysqli->real_escape_string($carrera);
        $curp = $mysqli->real_escape_string($curp);
        $semestre = $mysqli->real_escape_string($semestre);
        $periodo = $mysqli->real_escape_string($periodo);
        $promedio = $mysqli->real_escape_string($promedio);
        $creditosc = $mysqli->real_escape_string($creditosc);
        $creditosr = $mysqli->real_escape_string($creditosr);
        $porcentaje = $mysqli->real_escape_string($porcentaje);
        $folioseguro = $mysqli->real_escape_string($folioseguro);
        $genero = $mysqli->real_escape_string($genero);
        
        // Verificar si el registro ya existe
        $check = $mysqli->query("SELECT no_control FROM tb_residentes WHERE no_control = '$matricula'");
        if($check->num_rows > 0) {
            // Actualizar registro existente
            $sql = $mysqli->query("UPDATE tb_residentes SET 
                nombre='$nombre', 
                ap='$ap', 
                am='$am', 
                carrera='$carrera', 
                curp='$curp',
                semestre='$semestre', 
                periodo='$periodo', 
                promedio='$promedio', 
                creditosc='$creditosc', 
                creditosr='$creditosr', 
                porcentaje='$porcentaje', 
                folios='$folioseguro', 
                password='$curp',
                Genero='$genero'
                WHERE no_control='$matricula'");
        } else {
            // Insertar nuevo registro
            $sql = $mysqli->query("INSERT INTO tb_residentes 
                (no_control, nombre, ap, am, carrera, curp, semestre, periodo, promedio, creditosc, creditosr, porcentaje, folios, password, Genero) 
                VALUES 
                ('$matricula','$nombre','$ap','$am','$carrera','$curp','$semestre','$periodo','$promedio','$creditosc','$creditosr','$porcentaje','$folioseguro','$curp','$genero')");
        }
        
        if($sql) {
            $c++;
        } else {
            $errores++;
            $linea_error[] = $c + 1;
            $c++;
        }
    }
    
    fclose($handle);
    
    // Mostrar mensaje de resultado
    if($errores == 0) {
        $_SESSION['mensaje'] = "¡Éxito! Se importaron $c registros correctamente en la tabla tb_residentes";
        $_SESSION['tipo_mensaje'] = "exito";
    } else {
        $lineas_error_text = !empty($linea_error) ? " (Líneas con error: " . implode(", ", $linea_error) . ")" : "";
        $_SESSION['mensaje'] = "Se importaron " . ($c - $errores) . " registros con $errores errores$lineas_error_text";
        $_SESSION['tipo_mensaje'] = "error";
    }
    
} else {
    $_SESSION['mensaje'] = "Error: No se seleccionó ningún archivo o hubo un problema al subirlo";
    $_SESSION['tipo_mensaje'] = "error";
}

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>