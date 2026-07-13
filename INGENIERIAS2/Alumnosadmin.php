<?php
include '../conexion.php';

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Evaluaciones_Residentes.xls");
header("Pragma: no-cache");
header("Expires: 0");

$sql = "
SELECT
    r.no_control,
    CONCAT(r.nombre,' ',r.ap,' ',r.am) AS nombre_completo,
    r.carrera,

    rep.calificacionR1,
    rep.calificacionR2,
    rep.calificacionRF,

    ROUND(
        (
            IFNULL(rep.calificacionR1,0) * 0.10 +
            IFNULL(rep.calificacionR2,0) * 0.10 +
            IFNULL(rep.calificacionRF,0) * 0.80
        ),
        2
    ) AS promedio_final,

    rep.statusR1,
    rep.statusR2,
    rep.statusR3

FROM tb_residentes r
INNER JOIN reportesasesor rep
    ON r.no_control = rep.no_control

WHERE r.periodo = 'ENE-JUN 2026'

ORDER BY r.no_control;
";

$resultado = mysqli_query($mysqli, $sql);
?>

<table border="1">
    <tr style="background:#D9EAD3;font-weight:bold;">
        <th>No. Control</th>
        <th>Nombre</th>
        <th>Carrera</th>
        <th>Reporte 1 (10%)</th>
        <th>Reporte 2 (10%)</th>
        <th>Reporte 3 (80%)</th>
        <th>Promedio Final</th>
        <th>Status R1</th>
        <th>Status R2</th>
        <th>Status R3</th>
    </tr>

<?php
while($fila = mysqli_fetch_assoc($resultado))
{
    echo "<tr>";
    echo "<td>".$fila['no_control']."</td>";
    echo "<td>".$fila['nombre_completo']."</td>";
    echo "<td>".$fila['carrera']."</td>";
    echo "<td>".$fila['calificacionR1']."</td>";
    echo "<td>".$fila['calificacionR2']."</td>";
    echo "<td>".$fila['calificacionRF']."</td>";
    echo "<td>".$fila['promedio_final']."</td>";
    echo "<td>".$fila['statusR1']."</td>";
    echo "<td>".$fila['statusR2']."</td>";
    echo "<td>".$fila['statusR3']."</td>";
    echo "</tr>";
}
?>
</table>