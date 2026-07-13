<?php
$no_control = $_GET['id'];
include 'config.inc.php';
$db = new Conect_MySql();
$sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$no_control'
                 ";
$query = $db->execute($sql);
if (mysqli_num_rows($query)  > 0) {
    if ($datos = $db->fetch_row($query)) { ?>
       
<?php  }
}
include 'conexion.php';
require_once "vendor/autoload.php";

use PhpOffice\PhpWord\Style\Language;

$documento = new \PhpOffice\PhpWord\PhpWord();
$propiedades = $documento->getDocInfo();
$propiedades->setCreator("PORFIRIO MEDINA DE LA ROSA");
$propiedades->setTitle("Imágenes");

$seccion = $documento->addSection(
    [
        "marginTop" => 600,
        "marginLeft" => 850,
        "marginRight" => 700,
        "marginBottom" => 100,
    ]
);
# Títulos. Solo modificando depth (el número)
$fuenteTitulo = [
    "name" => "Verdana",
    "size" => 20,
    "color" => "000000",
];
$documento->addTitleStyle(1, $fuenteTitulo);


$no_control = $_GET['id'];
$sql = "SELECT  *  FROM  cartaliberacionserviciosocial
WHERE no_control = '$no_control'  ";
$rec = $mysqli->query($sql);
while ($row22 = mysqli_fetch_array($rec)) {
    $seccion->addText("", array('name' => 'Arial', 'size' => 11, 'bold' => TRUE, 'lineHeight' => 7.0), array('align' => 'center'));
    $seccion->addText("                                                                                      DEPARTAMENTO: GESTIÓN", array('name' => 'Arial', 'size' => 11, 'bold' => TRUE, 'lineHeight' => 1.0), array('align' => 'center'));
    $seccion->addText("                                                                                                   TECNOLÓGICA, SERVICIO SOCIAL Y", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'center'));
    $seccion->addText("                                                                                             RESIDENCIAS PROFESIONALES ", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'center'));
    $seccion->addText("                                                                                                No. DE OFICIO: DGTSSRP " . $row22['numerooficio'] . '/2023', array('name' => 'Arial', 'size' => 11, 'bold' => true, 'lineHeight' => 1.0), array('align' => 'center'));
    $seccion->addText("                                                                                                           ASUNTO: Constancia.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.5), array('align' => 'center'));
}
$seccion->addText("A QUIEN CORRESPONDA", array('name' => 'Arial', 'size' => 11, 'bold' => TRUE, 'lineHeight' => 1.8), array('align' => 'left'));

$seccion->addText("Por medio de la presente se hace constar que:", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 2.0), array('align' => 'left'));

$no_control = $_GET['id'];
$sql22 = "SELECT  *  FROM  alumnos, Reporte1EA
            WHERE Reporte1EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$no_control'
                 ";
$query22 = $db->execute($sql22);
if (mysqli_num_rows($query22)  > 0) {
    if ($datos2 = $db->fetch_row($query22)) { ?>
       
<?php  }
}

$no_control = $_GET['id'];
$sql222 = "SELECT  *  FROM  alumnos, Reporte2EA
            WHERE Reporte2EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$no_control'
                 ";
$query222 = $db->execute($sql222);
if (mysqli_num_rows($query22)  > 0) {
    if ($datos22 = $db->fetch_row($query222)) { ?>
       
<?php  }
}


$no_control = $_GET['id'];
$sql2222 = "SELECT  *  FROM  alumnos, Reporte3EA
            WHERE Reporte3EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$no_control'
                 ";
$query2222 = $db->execute($sql2222);
if (mysqli_num_rows($query22)  > 0) {
    if ($datos222 = $db->fetch_row($query2222)) { ?>
       
<?php  }
}


$no_control = $_GET['id'];
$sql22222 = "SELECT  *  FROM  alumnos, ReporteFEA
            WHERE ReporteFEA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$no_control'
                 ";
$query22222 = $db->execute($sql22222);
if (mysqli_num_rows($query22222)  > 0) {
    if ($datos2222 = $db->fetch_row($query22222)) { ?>
       
<?php  }
}

$NcontrolA = $datos['Ncontrol'];


$CALIFICACIONFINAL =  (($datos2['AUTE'] / 7) * .1) + (($datos2['CRP'] / 7) * .9);

$CALIFICACIONFINAL2 =  (($datos22['AUTE2'] / 7) * .1) + (($datos22['CRP2'] / 7) * .9);

$CALIFICACIONFINAL3 =  (($datos222['AUTE3'] / 7) * .1) + (($datos222['CRP3'] / 7) * .9);

$CALIFICACIONFINAL4 =  (($datos2222['AUTE4'] / 7) * .1) + (($datos2222['CRP4'] / 7) * .9);

$PROMEDIOFINAL = ($CALIFICACIONFINAL + $CALIFICACIONFINAL2 + $CALIFICACIONFINAL3 + $CALIFICACIONFINAL4) / 4;

$sql = "SELECT *  FROM  alumnos, carreras, semestre, empresa, asignacion, programa ,  peridosservicio where IDAlumno = '$no_control'
and alumnos.IDCarrera = carreras.IDCarreras  
and alumnos.IDSemestre = semestre.IDSemestre and asignacion.NControlAdmin = empresa.Ncontrol 
 AND programa.NControl = asignacion.NControlAdmin 
 AND  peridosservicio.idPeriodo = empresa.idPeriodo AND    asignacion.NControl='$NcontrolA' ";
$rec = $mysqli->query($sql);
while ($row = mysqli_fetch_array($rec)) {

    if ($PROMEDIOFINAL >= 3.50 and $PROMEDIOFINAL <= 4.00) {

        if ($row['Sexo'] == 'Masculino') {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, el C. " . mb_strtoupper($row['NombreAlumno']) . " " . mb_strtoupper($row['Apellido1Alumno']) . " " . mb_strtoupper($row['Apellido2Alumno']) . ", con número de control " . mb_strtoupper($NcontrolA) . " de la carrera de " . mb_strtoupper($row['NombreCarrera']) . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . "; desarrollando las siguientes actividades: " . mb_strtoupper($row['NombrePrograma']) . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño EXCELENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'center'));
        } else {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, la C. " . mb_strtoupper($row['NombreAlumno']) . " " . mb_strtoupper($row['Apellido1Alumno']) . " " . mb_strtoupper($row['Apellido2Alumno']) . ", con número de control " . mb_strtoupper($NcontrolA) . " de la carrera de " . mb_strtoupper($row['NombreCarrera']) . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . "; desarrollando las siguientes actividades: " . mb_strtoupper($row['NombrePrograma']) . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño EXCELENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('alignment' => 'Jc'));
        }
    }
    if ($PROMEDIOFINAL >= 2.50 and $PROMEDIOFINAL < 3.50) {

        if ($row['Sexo'] == 'Masculino') {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, el C. " . mb_strtoupper($row['NombreAlumno']) . " " . mb_strtoupper($row['Apellido1Alumno']) . " " . mb_strtoupper($row['Apellido2Alumno']) . ", con número de control " . mb_strtoupper($NcontrolA) . " de la carrera de " . mb_strtoupper($row['NombreCarrera']) . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . "; desarrollando las siguientes actividades: " . mb_strtoupper($row['NombrePrograma']) . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño NOTABLE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        } else {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, la C. " . mb_strtoupper($row['NombreAlumno']) . " " . mb_strtoupper($row['Apellido1Alumno']) . " " . mb_strtoupper($row['Apellido2Alumno']) . ", con número de control " . mb_strtoupper($NcontrolA) . " de la carrera de " . mb_strtoupper($row['NombreCarrera']) . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . "; desarrollando las siguientes actividades: " . mb_strtoupper($row['NombrePrograma']) . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño NOTABLE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        }
    }
    if ($PROMEDIOFINAL >= 1.50 and $PROMEDIOFINAL < 2.50) {

        if ($row['Sexo'] == 'Masculino') {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, el C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño BUENO.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        } else {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, la C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño BUENO.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        }
    }
    if ($PROMEDIOFINAL >= 1.00 and $PROMEDIOFINAL <= 1.49) {

        if ($row['Sexo'] == 'Masculino') {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, el C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño SUFICIENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        } else {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, la C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño SUFICIENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        }
    }
    if ($PROMEDIOFINAL >= 0.00 and $PROMEDIOFINAL <= 0.99) {

        if ($row['Sexo'] == 'Masculino') {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, el C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño INSUFICIENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        } else {
            $seccion->addText("Según documentos que obran en los archivos de esta Institución, la C. " . $row['NombreAlumno'] . " " . $row['Apellido1Alumno'] . " " . $row['Apellido2Alumno'] . ", con número de control " . $row['Ncontrol'] . " de la carrera de " . $row['NombreCarrera'] . " realizó su Servicio Social en el (la) " . $row['Dependencia'] . ", " . $row['DomicilioDependencia'] . "; desarrollando las siguientes actividades: " . $row['NombrePrograma'] . ", cubriendo un total de 500 horas, durante el período comprendido del  " . strtoupper($row['fechainicio']) . " al " . strtoupper($row['fechatermino']) . " con un nivel de desempeño INSUFICIENTE.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
        }
    }
}
$seccion->addTextBreak(1.3);
$seccion->addText("Este servicio social fue realizado de acuerdo a lo establecido en la Ley Reglamentaria del Artículo 5o. Constitucional relativo al ejercicio de las Profesiones y los Reglamentos que rigen la normativa emitida por el Tecnológico Nacional de México. ", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));


$meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

if (date('d') == '01') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, al primer día del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '02') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los dos días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '03') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los tres días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés." . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '04') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los cuatro días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '05') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los cinco días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '06') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los seis días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '07') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los siete días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '08') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los ocho días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '09') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los nueve días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '10') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los diez días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '11') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los once días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '12') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los doce días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '13') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los trece días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '14') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los catorce días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '15') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los quince días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '16') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los dieciséis días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '17') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los diecisiete días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '18') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los dieciocho días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '19') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los diecinueve días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '20') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veinte días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '21') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintiuno días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '22') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintidós días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '23') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintitrés días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '24') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veinticuatro días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '25') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veinticinco días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '26') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintiséis días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

if (date('d') == '27') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintisiete días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '28') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintiocho días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '29') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los veintinueve días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '30') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los treinta días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}
if (date('d') == '31') {
    $seccion->addTextBreak(0.9);
    $seccion->addText("Se extiende la presente para los fines legales que al interesado convengan, en Ciudad Serdán, Puebla, a los treinta y uno días del mes de " . $meses[date('n') - 1] . " del año dos mil veintitrés.", array('name' => 'Arial', 'size' => 11, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'justified'));
}

$seccion->addTextBreak(2.0);
$seccion->addText("A t e n t a m e n t e", array('name' => 'Arial', 'size' => 11, 'bold' => true, 'lineHeight' => 4.7), array('align' => 'center'));


$seccion->addText("     ____________________________________________                   ______________________________________    ", array('name' => 'Arial', 'size' => 9, 'bold' => TRUE, 'lineHeight' => 0.1), array('align' => 'justified'));
$seccion->addText("       LIC. MARÍA DEL CARMEN MARTÍNEZ ESCOBAR                                C. ROSA ELENA ULIN BARJAU    ", array('name' => 'Arial', 'size' => 9, 'bold' => TRUE, 'lineHeight' => 0.8), array('align' => 'justified'));

$seccion->addText("        DEPARTAMENTO DE GESTIÓN TECNOLÓGICA                                         DIRECTORA GENERAL", array('name' => 'Arial', 'size' => 9, 'bold' => TRUE, 'lineHeight' => 0.8), array('align' => 'justified'));

$seccion->addText("                 SERVICIO SOCIAL Y RESIDENCIAS   ", array('name' => 'Arial', 'size' => 9, 'bold' => TRUE, 'lineHeight' => 0.8), array('align' => 'justified'));

$seccion->addText("                             PROFESIONALES                           ", array('name' => 'Arial', 'size' => 9, 'bold' => TRUE, 'lineHeight' => 0.8), array('align' => 'justified'));


$seccion->addTextBreak(2.5);
$seccion->addText("C.c.p. Departamento de Servicios Escolares", array('name' => 'Arial', 'size' => 9, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'left'));
$seccion->addText("       Expediente del estudiante   ", array('name' => 'Arial', 'size' => 9, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'left'));
$seccion->addText("       Archivo.    ", array('name' => 'Arial', 'size' => 9, 'bold' => false, 'lineHeight' => 1.0), array('align' => 'left'));

# Para que no diga que se abre en modo de compatibilidad
$documento->getCompatibility()->setOoxmlVersion(15);
# Idioma español de México
$documento->getSettings()->setThemeFontLang(new Language("ES-MX"));

$nombre = "libro.docx";
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="' . $nombre . '"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
# Guardarlo
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, "Word2007");

$objWriter->save("php://output");
