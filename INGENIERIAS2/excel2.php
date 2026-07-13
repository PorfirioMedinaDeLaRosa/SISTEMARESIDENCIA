<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos Residentes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- XLSX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
</head>

<body>

<div class="container mt-4">
    <h2 class="text-center">ALUMNOS RESIDENTES</h2>

    <button id="btnExcel" class="btn btn-success mb-3">
        Exportar a Excel
    </button>

    <div class="table-responsive">
        <table id="tablaAlumnos" class="table table-bordered table-striped table-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th>NO_CONTROL</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>CURP</th>
                    <th>SEMESTRE</th>
                    <th>SEGURO</th>
                    <th>FOLIO</th>
                    <th>EMAIL</th>
                    <th>EMAIL PERSONAL</th>
                    <th>FACEBOOK</th>
                    <th>PROGRAMA</th>
                    <th>MODALIDAD</th>
                    <th>ACTIVIDADES</th>
                    <th>TIPO PROGRAMA</th>
                    <th>RESPONSABLE</th>
                    <th>CARGO</th>
                    <th>OBJETIVO</th>
                    <th>ALCANCES</th>
                    <th>LIMITACIONES</th>
                    <th>PERSONAS</th>
                    <th>DEPENDENCIA</th>
                    <th>TITULAR</th>
                    <th>PUESTO</th>
                    <th>DOMICILIO</th>
                    <th>CARRERA</th>
                    <th>INICIO</th>
                    <th>TERMINO</th>
                    <th>INCLUSIÓN</th>
                </tr>
            </thead>

            <tbody>

<?php
include 'conexionservicio.php';

if (mysqli_connect_errno()) {
    die("Error en conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM alumnos, programa , asignacion, empresa, carreras, peridosservicio  
WHERE programa.Ncontrol = asignacion.NControlAdmin 
AND empresa.Ncontrol = asignacion.NControlAdmin 
AND alumnos.IDCarrera = carreras.IDCarreras 
AND empresa.idPeriodo = peridosservicio.idPeriodo 
AND alumnos.Ncontrol = asignacion.NControl 
AND alumnos.IDSemestre ='14'";

$resultado = $mysqli->query($consulta);

if ($resultado->num_rows > 0) {

    while ($fila = $resultado->fetch_assoc()) {

        echo "<tr>
            <td>{$fila['Ncontrol']}</td>
            <td>{$fila['NombreAlumno']}</td>
            <td>{$fila['Apellido1Alumno']}</td>
            <td>{$fila['Apellido2Alumno']}</td>
            <td>{$fila['CurpAlumno']}</td>
            <td>{$fila['SemestreAlumno']}</td>
            <td>{$fila['Seguro']}</td>
            <td>{$fila['FolioSeguro']}</td>
            <td>{$fila['EmailIns']}</td>
            <td>{$fila['EmailPersonal']}</td>
            <td>{$fila['Facebook']}</td>
            <td>{$fila['NombrePrograma']}</td>
            <td>{$fila['Modalidad']}</td>
            <td>{$fila['Actividades']}</td>
            <td>{$fila['TipoPrograma']}</td>
            <td>{$fila['ResponsablePrograma']}</td>
            <td>{$fila['CargoPrograma']}</td>
            <td>{$fila['ObejtivoPrograma']}</td>
            <td>{$fila['Alcances']}</td>
            <td>{$fila['Limitaciones']}</td>
            <td>{$fila['Personas']}</td>
            <td>{$fila['Dependencia']}</td>
            <td>{$fila['TitularDependencia']}</td>
            <td>{$fila['PuestoDependencia']}</td>
            <td>{$fila['DomicilioDependencia']}</td>
            <td>{$fila['NombreCarrera']}</td>
            <td>{$fila['fechainicio']}</td>
            <td>{$fila['fechatermino']}</td>
            <td>{$fila['Igualda']}</td>
        </tr>";
    }

} else {
    echo "<tr><td colspan='29' class='text-center'>No hay datos</td></tr>";
}

$mysqli->close();
?>

            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById("btnExcel").addEventListener("click", function () {

    let tabla = document.getElementById("tablaAlumnos");

    let wb = XLSX.utils.book_new();
    let ws = XLSX.utils.table_to_sheet(tabla);

    XLSX.utils.book_append_sheet(wb, ws, "Alumnos");

    XLSX.writeFile(wb, "Alumnos_Residentes.xlsx");
});
</script>

</body>
</html>