<?php

//require('../rsesiones.php');
session_start();

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == null) {
  print "<script>window.location='../index.html';</script>";
}
$idA = $_SESSION["user_id"];

include('plantilla.php');
$pdf = new  PDF('P', 'mm', 'letter');
$pdf->SetMargins(20, 20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(15, 42);
$pdf->Cell(0, 5, utf8_decode("ACUERDO DE COLABORACIÓN"), 0, 1, 'C');
$pdf->SetXY(15, 46);
$pdf->Cell(0, 5, utf8_decode("SERVICIO SOCIAL"), 0, 1, 'C');



$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(13, 54);
$pdf->Cell(0, 5, utf8_decode("  En los siguientes términos:"), 0, 1, 'la');

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 60);
$pdf->MultiCell(185, 4.5,  utf8_decode("El presente acuerdo de colaboración establece el compromiso entre la prestadora de Servicio Social, el Instituto Tecnológico Superior de Ciudad Serdán y el Organismo, Empresa o Dependencia donde la prestadora realizará su Servicio Social con la finalidad de fortalecer la formación integral del estudiante, desarrollando una conciencia de solidaridad y compromiso con la sociedad a la que pertenece, mediante la aplicación y desarrollo de sus competencias profesionales."), 0, 'J', 0);


$pdf->SetFont('Arial', '', 10);
$no_control = $_GET['id'];
include 'conexion.php';
$sql = "SELECT *  FROM  alumnos where Ncontrol = '$no_control'";
$rec = $mysqli->query($sql);
while ($rowa = mysqli_fetch_array($rec)) {
  if ($rowa['Sexo'] == 'Femenino') {
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(20, 85);
    $pdf->Cell(0, 5, utf8_decode("I.  Prestante de Servicio Social."), 0, 1, 'la');
 
  $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(23, 88);
    $pdf->MultiCell(177, 4.5,  utf8_decode("
a). Trabaja en conjunto con la Dependencia con un Plan de trabajo y cronograma de actividades para dar seguimiento y cumplimiento al Servicio Social.
b). Entrega la Carta de Presentación y Acuerdo de Colaboración y solicita una Carta de Aceptación al Organismo, Empresa o Dependencia donde realizará el Servicio Social. 
c). Asiste y concluye todas las actividades planeadas y establecidas en su programa de trabajo.
d). Entrega Reportes Bimestrales firmados y sellados por el Organismo, Empresa o Dependencia donde realiza su servicio social junto con el instrumento de evaluación y autoevaluación cualitativa de desempeño, y formato de evaluación de actividades de servicio social al Departamento de Residencias Profesionales y Servicio Social.
e). Se obliga a cumplir el Servicio Social en un período de seis meses como tiempo mínimo y no mayor a dos años, debiendo acumular 500 horas, en modalidad presencial.
f). Mantiene total confidencialidad de la información relativa al programa.
"), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(20, 148);
    $pdf->Cell(0, 5, utf8_decode("II.   El Instituto Tecnológico Superior de Ciudad Serdán.
"), 0, 1, 'la');


    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(23, 151);
    $pdf->MultiCell(177, 4.5,  utf8_decode("
a). Tiene la responsabilidad de establecer las normas, lineamientos y mecanismos para la integración del programa semestral del servicio social con la finalidad de llevar un control en cada expediente de la prestadora de servicio social. 
b). En caso de ser necesario mantendrá contacto con el/la responsable del programa de la organización en aspectos relacionados con el desarrollo del programa, al manejo de sus relaciones laborales, al avance y calidad de los trabajos realizados por la prestadora de servicio social.
c). Al finalizar el servicio social entregará Carta de terminación de Liberación del Servicio Social a la estudiante.
d). En caso de presentarse alguna contingencia, el instituto informará a la prestante de Servicio Social y Dependencia u organismo las medidas de seguridad que implementará el Instituto Tecnológico Superior de Ciudad Serdán para salvaguardar a la prestadora de servicio social, utilizando los medios electrónicos (correo electrónico). 
"), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(20, 208);
    $pdf->Cell(0, 5, utf8_decode("III.  El Organismo Público."), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(23, 212);
    $pdf->MultiCell(177, 5,  utf8_decode("
a). Canalizará a la estudiante en el área de acuerdo a su perfil, encomendando tareas que le permitan desarrollar sus conocimientos, capacidades y habilidades.
b). Asignará a uno de sus empleados/as como Responsable del Programa de Servicio Social, el cual gestionará los apoyos para el programa y mantendrá contacto con el Instituto.
c). Elaborará Carta de Aceptación al recibir la Carta de Presentación.
d). Se compromete a brindar todas las facilidades a la prestadora de Servicio Social para el cumplimiento de las actividades del programa o proyecto. 
"), 0, 'J', 0);

$pdf->AddPage();

  $pdf->SetXY(23,35 );
 $pdf->MultiCell(177, 5,  utf8_decode("
 e). Evaluará a la estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs, en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
"), 0, 'J', 0);

  } else {
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 62);
    $pdf->Cell(0, 5, utf8_decode("El prestador de Servicio Social."), 0, 1, 'la');
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(15, 40);
    $pdf->MultiCell(177, 4.5,  utf8_decode("El presente acuerdo de colaboración establece el compromiso entre el prestador de Servicio Social, el Instituto Tecnológico Superior de Ciudad Serdán y el Organismo, Empresa o Dependencia donde el prestador realizará su Servicio Social con la finalidad de fortalecer la formación integral del estudiante, desarrollando una conciencia de solidaridad y compromiso con la sociedad a la que pertenece, mediante la aplicación y desarrollo de sus competencias profesionales."), 0, 'J', 0);
  }}

/*
E. Evaluará a la estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs, en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
F. En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido  al/ a la Jefa/e del Departamento de Residencias Profesionales y Servicio Social. 

    $pdf->SetXY(15, 64);
    $pdf->MultiCell(180, 5,  utf8_decode("
A. Trabaja en conjunto con la Dependencia con un Plan de trabajo y cronograma de actividades para dar seguimiento y cumplimiento al Servicio Social.
B. Entrega la Carta de Presentación y Acuerdo de Colaboración y solicita una Carta de Aceptación al Organismo, Empresa o Dependencia donde realizará el Servicio Social. 
C. Asiste y concluye todas las actividades planeadas y establecidas en su programa de trabajo.
D. Entrega Reportes Bimestrales firmados y sellados por el Organismo, Empresa o Dependencia donde realiza su servicio social junto con el instrumento de evaluación y autoevaluación cualitativa de desempeño, y formato de evaluación de actividades de servicio social al Departamento de Residencias Profesionales y Servicio Social.
E. Se obliga a cumplir el Servicio Social en un período de seis meses como tiempo mínimo y no mayor a dos años, debiendo acumular 500 horas, en modalidad presencial.
F. Mantiene total confidencialidad de la información relativa al programa.
      "), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 129);
    $pdf->Cell(0, 5, utf8_decode("  El Instituto Tecnológico Superior de Ciudad Serdán.
      "), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 130);
    $pdf->MultiCell(180, 4,  utf8_decode("
A. Tiene la responsabilidad de establecer las normas, lineamientos y mecanismos para la integración del programa semestral del servicio social con la finalidad de llevar un control en cada expediente del prestador de servicio social. 
B. En caso de ser necesario mantendrá contacto con el/la responsable del programa de la organización en aspectos relacionados con el desarrollo del programa, al manejo de sus relaciones laborales, al avance y calidad de los trabajos realizados por el prestador de servicio social.
C. Al finalizar el servicio social entregará Carta de terminación de Liberación del Servicio Social al estudiante.
D. En caso de presentarse alguna contingencia, el instituto informará al prestante de Servicio Social y Dependencia u organismo las medidas de seguridad que implementará el Instituto Tecnológico Superior de Ciudad Serdán para salvaguardar al prestador de servicio social, utilizando los medios electrónicos (correo electrónico). 
      "), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 184);
    $pdf->Cell(0, 5, utf8_decode("  El Organismo Público."), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 185);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Canalizará al estudiante en el área de acuerdo a su perfil, encomendando tareas que le permitan desarrollar sus conocimientos, capacidades y habilidades.
B. Asignará a uno de sus empleados/as como Responsable del Programa de Servicio Social, el cual gestionará los apoyos para el programa y mantendrá contacto con el Instituto.
C. Elaborará Carta de Aceptación al recibir la Carta de Presentación.
D. Se compromete a brindar todas las facilidades al prestador de Servicio Social para el cumplimiento de las actividades del programa o proyecto. 
E. Evaluará al estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs, en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
F. En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido  al/ a la Jefa/e del Departamento de Residencias Profesionales y Servicio Social. 
      "), 0, 'J', 0);

        
  }
}
$pdf->SetFont('Arial', '', 7);
$pdf->SetXY(15, 254);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');



*/

$no_control = $_GET['id'];
$sql = "SELECT * FROM peridosservicio, empresa, asignacion  WHERE peridosservicio.idPeriodo = empresa.idPeriodo AND  empresa.Ncontrol= asignacion.NControlAdmin AND asignacion.NControl = '$no_control'";
$rec = $mysqli->query($sql);
while ($rowp = mysqli_fetch_array($rec)) {

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(23, 65);
  $pdf->Cell(0, 5, utf8_decode("1.- Reportes de Evaluación Bimestre 1. 
 "), 0, 1, 'la');
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(28, 70);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B1Reportar']), 0, 1, 'la');

  $pdf->SetXY(28, 75);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B1Recepcion']), 0, 1, 'la');


  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(23, 81);
  $pdf->Cell(0, 5, utf8_decode("2.- Reportes de Evaluación Bimestre 2. 
"), 0, 1, 'la');
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(28, 86);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B2Reportar']), 0, 1, 'la');

  $pdf->SetXY(28, 91);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B2Recepcion']), 0, 1, 'la');


  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(23, 97);
  $pdf->Cell(0, 5, utf8_decode("3.- Reportes de Evaluación Bimestre 3. 
"), 0, 1, 'la');
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(28, 102);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B3Reportar']), 0, 1, 'la');

  $pdf->SetXY(28, 107);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B3Recepcion']), 0, 1, 'la');

  
  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(23, 111);
  $pdf->Cell(0, 5, utf8_decode("4.- Reporte bimestral final. 
"), 0, 1, 'la');


  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(28, 116);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B4Reportar']), 0, 1, 'la');

  $pdf->SetXY(28, 121);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B4Recepcion']), 0, 1, 'la');

  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(23, 126);
  $pdf->Cell(0, 5, utf8_decode("5.-Reportes de evaluación Final Extenso."), 0, 1, 'la');

  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(28, 131);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['Bfinal']), 0, 1, 'la');

  $sql = "SELECT *  FROM  alumnos where Ncontrol = '$no_control'";
  $rec = $mysqli->query($sql);


 
  while ($rowa = mysqli_fetch_array($rec)) {
    if ($rowa['Sexo'] == 'Femenino') {
      $pdf->SetXY(23, 136);
      $pdf->MultiCell(177, 4.5,  utf8_decode("
F.	 En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido al/ a la Jefa/e del Departamento de Residencias Profesionales y Servicio Social.
G.	 Al finalizar el Servicio Social entregará Carta de terminación de Servicio Social a la estudiante.
H.	 En caso de que existan cambios en el programa de Servicio Social, el Responsable del Programa notificará por escrito y sellado al Instituto para dar cumplimiento con los lineamientos del Servicio Social en un tiempo máximo de 5 días hábiles.
I.	 En caso de presentarse alguna contingencia, informar al Instituto Tecnológico Superior de Ciudad Serdán las medidas de seguridad que implementará para salvaguardar a la prestadora de servicio social, utilizando los medios electrónicos (serviciosocial@cdserdan.tecnm.mx).
"), 0, 'J', 0);
    } else {
      $pdf->SetXY(23, 136);
      $pdf->MultiCell(177, 4.5,  utf8_decode("
F.	 En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido al/ a la Jefa/e del Departamento de Residencias Profesionales y Servicio Social.
G.	 Al finalizar el Servicio Social entregará Carta de terminación de Servicio Social a la estudiante.
H.	 En caso de que existan cambios en el programa de Servicio Social, el Responsable del Programa notificará por escrito y sellado al Instituto para dar cumplimiento con los lineamientos del Servicio Social en un tiempo máximo de 5 días hábiles.
I.	 En caso de presentarse alguna contingencia, informar al Instituto Tecnológico Superior de Ciudad Serdán las medidas de seguridad que implementará para salvaguardar al prestador de servicio social, utilizando los medios electrónicos (serviciosocial@cdserdan.tecnm.mx).
"), 0, 'J', 0);
    }
  }
}


  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(20, 187);
  $pdf->Cell(0, 5, utf8_decode("IV.  Disposición General:"), 0, 1, 'la');
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(23, 193);
  $pdf->MultiCell(177, 4,  utf8_decode("Las situaciones no previstas en el presente acuerdo serán analizadas por el Departamento de Residencias
Profesionales y Servicio Social, con base a la normativa del Tecnológico Nacional de México y del Tecnológico Nacional de México Campus Ciudad Serdán. 

"), 0, 'J', 0);


$pdf->AddPage();

  $pdf->SetXY(23, 40);
  $pdf->Cell(0, 5, utf8_decode("Firmándose de conformidad el  día " . $rowp['fechainicio'] . ".
"), 0, 1, 'la');



$pdf->SetFont('Arial', 'B', 10);
//$pdf->Image('firmaoctavio.png', 40, 171, 28);

$pdf->SetXY(15, 50);
$pdf->Cell(95, 5, utf8_decode("POR EL INSTITUTO"), 1, 1, 'C');
$pdf->SetXY(15, 77);
$pdf->Cell(95, 5, utf8_decode("C. ALEJANDRA VELAZQUEZ VAZQUEZ"), 1, 1, 'C');


$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 82);
$pdf->Cell(95, 5, utf8_decode("ENCARGADA DE LA DIRECCIÓN DE PLANEACIÓN Y"), 1, 1, 'C');
$pdf->SetXY(15, 87);
$pdf->Cell(95, 5, utf8_decode(" VINCULACIÓN"), 1, 1, 'C');

//$pdf->Image('sello.jpg', 80, 65, 33);
$pdf->Image('firma.png', 43, 55, 28);
$pdf->SetFont('Arial', 'B', 10);


$pdf->SetXY(15, 115);
$pdf->Cell(95, 5, utf8_decode("C. ERICK GÓNZALEZ GÓNZALEZ"), 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 120);
$pdf->Cell(95, 5, utf8_decode("ENCARGADO DEL DEPARTAMENTO DE RESIDENCIAS  "), 1, 1, 'C');

$pdf->SetXY(15, 125);
$pdf->Cell(95, 5, utf8_decode("         PROFESIONALES Y SERVICIO SOCIAL"), 1, 1, 'C');


$no_control = $_GET['id'];
$sql = "SELECT *  FROM  alumnos, carreras, semestre where Ncontrol = '$no_control'
  and alumnos.IDCarrera = carreras.IDCarreras  and alumnos.IDSemestre = semestre.IDSemestre";
$rec = $mysqli->query($sql);
while ($rowa = mysqli_fetch_array($rec)) {
  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(15, 160);
  $array_cadena = strlen($rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno']);
  if ($array_cadena >= 0 and $array_cadena <= 38) {
    $pdf->MultiCell(110, 2,  utf8_decode("ESTUDIANTE: " . $rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno'] . ".
        "), 1, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(15, 166);
    $pdf->MultiCell(110, 2,  utf8_decode("NO. CONTROL: " . $rowa['Ncontrol'] . ""), 1, 'C', 0);


    $pdf->SetXY(15, 171);
    $pdf->MultiCell(
    110,
    2,
    utf8_decode(
        mb_strtoupper("CARRERA: " . $rowa['NombreCarrera'], 'UTF-8')
    ),
    1,
    'C',
    0
);
  }

  if ($array_cadena >= 39 and $array_cadena <= 60) {
    $pdf->MultiCell(180, 2,  utf8_decode("ESTUDIANTE: " . $rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno'] . ".
        "), 1, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(15, 170);
    $pdf->MultiCell(180, 2,  utf8_decode("NO. CONTROL: " . $rowa['Ncontrol'] . ""), 1, 'C', 0);


    $pdf->SetXY(65, 175);
    $pdf->MultiCell(180, 2,  utf8_decode("CARRERA: " . $rowa['NombreCarrera'] . "
        "), 1, 'C', 0);
  }
}


$sql2 = "SELECT * FROM empresa, programa, asignacion where asignacion.NControlAdmin = empresa.Ncontrol 
AND asignacion.NControlAdmin = programa.NControl AND asignacion.Ncontrol = '$no_control'";
$rec2 = $mysqli->query($sql2);
while ($rowe = mysqli_fetch_array($rec2)) {


  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(110, 50);
$pdf->Cell(95, 5, utf8_decode("POR LA DEPENDENCIA U ORGANISMO"), 1, 1, 'C');
  $array_cadena = strlen($rowe['CargoPrograma']);
  if ($array_cadena >= 0 and $array_cadena <=90) {
    $pdf->SetXY(110,77);
    $pdf->MultiCell(95, 3,   mb_strtoupper(($rowe['GradoAT'].' '.$rowe['NombreAC']), 'UTF-8'), 0, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(110, 82);
    $pdf->MultiCell(95, 3,   mb_strtoupper(($rowe['PuestoAC']), 'UTF-8'), 0, 'C', 0);
    $pdf->SetXY(110,  90);
    $pdf->MultiCell(95, 4.5,   mb_strtoupper(($rowe['Dependencia']), 'UTF-8'), 0, 'C', 0);
  }
  if ($array_cadena >=91 and $array_cadena <=120) {
     $pdf->SetXY(110, 77);
     $pdf->MultiCell(95, 3,   mb_strtoupper(utf8_decode($rowe['GradoAT'].' '.$rowe['NombreAC']), 'UTF-8'), 0, 'C', 0);
     $pdf->SetFont('Arial', '', 10);
     $pdf->SetXY(110, 82);
     $pdf->MultiCell(95, 3,   mb_strtoupper(utf8_decode($rowe['CargoPrograma']), 'UTF-8'), 0, 'C', 0);
    $pdf->SetXY(110,  87);
     $pdf->MultiCell(95, 4.5,   mb_strtoupper(utf8_decode($rowe['Dependencia']), 'UTF-8'), 0, 'C', 0);
  }
}

/*
$pdf->SetFont('Arial', '', 7);
$pdf->SetXY(15, 253);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');

*/

$pdf->Output();
