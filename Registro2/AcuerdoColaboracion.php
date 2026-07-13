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
$pdf->SetXY(55, 18);
$pdf->Cell(0, 5, utf8_decode("ACUERDO DE COLABORACIÓN"), 0, 1, 'C');
$pdf->SetXY(55, 23);
$pdf->Cell(0, 5, utf8_decode("SERVICIO SOCIAL"), 0, 1, 'C');



$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(15, 57);
$pdf->Cell(0, 5, utf8_decode("  En los siguientes términos:"), 0, 1, 'la');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(15, 62);
$pdf->Cell(0, 5, utf8_decode("  El Prestador ó Prestadora de Servicio Social."), 0, 1, 'la');


$pdf->SetFont('Arial', '', 10);
$no_control = $_GET['id'];
include 'conexion.php';
$sql = "SELECT *  FROM  alumnos where Ncontrol = '$no_control'";
$rec = $mysqli->query($sql);
while ($rowa = mysqli_fetch_array($rec)) {
  if ($rowa['Sexo'] == 'Femenino') {

    $pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 31);
$pdf->MultiCell(180, 4.5,  utf8_decode("El presente acuerdo de colaboración establece el compromiso entre la prestadora de Servicio Social, el Instituto Tecnológico Superior de Ciudad Serdán y el Organismo, Empresa o Dependencia donde la prestadora realizará su Servicio Social con la finalidad de fortalecer la formación integral del estudiante, desarrollando una conciencia de solidaridad y compromiso con la sociedad a la que pertenece, mediante la aplicación y desarrollo de sus competencias profesionales."), 0, 'J', 0);

    $pdf->SetXY(15, 64);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Trabaja en conjunto con la Dependencia con un Plan de trabajo y cronograma de actividades para dar seguimiento y cumplimiento al Servicio Social.
B. Entrega la Carta de Presentación y Acuerdo de Colaboración y solicita una Carta de Aceptación al Organismo, Empresa o Dependencia donde realizará el Servicio Social. 
C. Asiste y concluye todas las actividades planeadas y establecidas en su programa de trabajo.
D. Entrega Reportes Bimestrales firmados y sellados por el Organismo, Empresa o Dependencia donde realiza su servicio social junto con el instrumento de evaluación y autoevaluación cualitativa de desempeño, y formato de evaluación de actividades de servicio social al Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales.
E. Se obliga a cumplir el Servicio Social en un período de seis meses como tiempo mínimo y no mayor a dos años, debiendo acumular 500 horas, en modalidad presencial.
F. Mantiene total confidencialidad de la información relativa al programa.
"), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 129);
    $pdf->Cell(0, 5, utf8_decode("  El Instituto Tecnológico Superior de Ciudad Serdán.
"), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 130);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Tiene la responsabilidad de establecer las normas, lineamientos y mecanismos para la integración del programa semestral del servicio social con la finalidad de llevar un control en cada expediente de la prestadora de servicio social. 
B. En caso de ser necesario mantendrá contacto con el/la responsable del programa de la organización en aspectos relacionados con el desarrollo del programa, al manejo de sus relaciones laborales, al avance y calidad de los trabajos realizados por la prestadora de servicio social.
C. Al finalizar el servicio social entregará Carta de terminación de Liberación del Servicio Social a la estudiante.
D. En caso de presentarse alguna contingencia, el instituto informará a la prestante de Servicio Social y Dependencia u organismo las medidas se seguridad que implementará el Instituto Tecnológico Superior de Ciudad Serdán para salvaguardar a la prestadora de servicio social, utilizando los medios electrónicos (correo electrónico). 
"), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 184);
    $pdf->Cell(0, 5, utf8_decode("  El Organismo Público."), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 185);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Canalizará a la estudiante en el área de acuerdo a su perfil, encomendando tareas que le permitan desarrollas sus conocimientos, capacidades y habilidades.
B. Asignará a uno de sus empleados/as como Responsable del Programa de Servicio Social, el cual gestionará los apoyos para el programa y mantendrá contacto con el Instituto.
C. Elaborará Carta de Aceptación al recibir la Carta de Presentación.
D. Se compromete a brindar todas las facilidades a la prestadora de Servicio Social para el cumplimiento de las actividades del programa o proyecto. 
E. Evaluará a la estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs, en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
F. En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido  al/ a la Jefa/e del Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales. 
"), 0, 'J', 0);
  } else {
    $pdf->SetXY(15, 64);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Trabaja en conjunto con la Dependencia con un Plan de trabajo y cronograma de actividades para dar seguimiento y cumplimiento al Servicio Social.
B. Entrega la Carta de Presentación y Acuerdo de Colaboración y solicita una Carta de Aceptación al Organismo, Empresa o Dependencia donde realizará el Servicio Social. 
C. Asiste y concluye todas las actividades planeadas y establecidas en su programa de trabajo.
D. Entrega Reportes Bimestrales firmados y sellados por el Organismo, Empresa o Dependencia donde realiza su servicio social junto con el instrumento de evaluación y autoevaluación cualitativa de desempeño, y formato de evaluación de actividades de servicio social al Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales.
E. Se obliga a cumplir el Servicio Social en un período de seis meses como tiempo mínimo y no mayor a dos años, debiendo acumular 500 horas, en modalidad presencial o virtual derivado de la emergencia sanitaria provocada por el Virus SARS-CoV.- 2 .
F. Mantiene total confidencialidad de la información relativa al programa.
      "), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 129);
    $pdf->Cell(0, 5, utf8_decode("  El Instituto Tecnológico Superior de Ciudad Serdán.
      "), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 130);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Tiene la responsabilidad de establecer las normas, lineamientos y mecanismos para la integración del programa semestral del servicio social con la finalidad de llevar un control en cada expediente del prestador de servicio social. 
B. En caso de ser necesario mantendrá contacto con el responsable del programa de la organización en aspectos relacionados con el desarrollo del programa, al manejo de sus relaciones laborales, al avance y calidad de los trabajos realizados por el prestador de servicio social.
C. Al finalizar el servicio social entregará Carta de terminación de Liberación del Servicio Social al estudiante.
D. En caso de presentarse alguna contingencia, el instituto informará al prestante de Servicio Social y Dependencia u organismo las medidas se seguridad que implementará el Instituto Tecnológico Superior de Ciudad Serdán para salvaguardar al prestador de servicio social, utilizando los medios electrónicos (correo electrónico). 
      "), 0, 'J', 0);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(15, 184);
    $pdf->Cell(0, 5, utf8_decode("  El Organismo Público."), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 10);

    $pdf->SetXY(15, 185);
    $pdf->MultiCell(180, 4.5,  utf8_decode("
A. Canalizará al estudiante en el área de acuerdo a su perfil, encomendando tareas que le permitan desarrollas sus conocimientos, capacidades y habilidades.
B. Asignará a uno de sus empleados como Responsable del Programa de Servicio Social, el cual gestionará los apoyos para el programa y mantendrá contacto con el Instituto.
C. Elaborará Carta de Aceptación al recibir la Carta de Presentación.
D. Se compromete a brindar todas las facilidades al prestador de Servicio Social para el cumplimiento de las actividades del programa o proyecto. 
E. Evaluará al estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs, en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
F. En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido  al/ a la Jefa/e del Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales. 
      "), 0, 'J', 0);
  }
}
$pdf->SetFont('Arial', '', 7);
$pdf->SetXY(15, 254);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');


/*
$pdf->SetXY(15, 78);
$pdf->MultiCell(180,4.5,  utf8_decode("B.    Entrega la Carta de Presentación,  Acuerdo de Colaboración y solicita una Carta de Aceptación al Organismo, Empresa o Dependencia donde realizará el Servicio Social. 
"),0,'J',0);

$pdf->SetXY(15, 88);
$pdf->MultiCell(180,4.5,  utf8_decode("C.    Asiste y concluye todas las actividades planeadas y establecidas en su programa de trabajo.
"),0,'J',0);


$pdf->SetXY(15, 93);
$pdf->MultiCell(180,4.5,  utf8_decode("D.    Entrega Reportes Bimestrales firmados y sellados por el Organismo, Empresa o Dependencia donde realiza su servicio social junto con el instrumento de evaluación, autoevaluación cualitativa de desempeño, y formato de evaluación de actividades de servicio social al Departamento de Gestión Tecnológica, Servicio Social y Residencia Profesional. 
"),0,'J',0);

$pdf->SetXY(15, 107);
$pdf->MultiCell(180,4.5,  utf8_decode("E.    Se obliga a cumplir el Servicio Social en un período de seis meses como tiempo mínimo y no mayor a dos años, debiendo acumular 500 horas, en modalidad presencial o virtual derivado de la emergencia sanitaria provocada por el Virus SARS-CoV. 2 . 
"),0,'J',0);

$pdf->SetXY(15, 121);
$pdf->MultiCell(180,4.5,  utf8_decode("F.    Mantiene total confidencialidad de la información relativa al programa.
"),0,'J',0);



$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 129);
$pdf->Cell(0,5, utf8_decode("         El Instituto Tecnológico Superior de Ciudad Serdán.
"),0,1,'la'); 



$pdf->SetFont('Arial','',9);

$pdf->SetXY(15, 135);
$pdf->MultiCell(180,4.5,  utf8_decode("A.    Tiene la responsabilidad de establecer las normas, lineamientos y mecanismos para la integración del programa semestral del servicio social con la finalidad de llevar un control en cada expediente del prestador de servicio. 
"),0,'J',0);

$pdf->SetXY(15, 142);
$pdf->MultiCell(180,4.5,  utf8_decode("B.    En caso de ser necesario mantendrá contacto con el responsable del programa de la organización en aspectos relacionados con el desarrollo del programa, al manejo de sus relaciones laborales, al avance y calidad de los trabajos realizados por el prestador de servicio social.
"),0,'J',0);

$pdf->SetXY(15, 156);
$pdf->MultiCell(180,4.5,  utf8_decode("C.    Al finalizar el servicio social entregará Carta de terminación de Liberación del Servicio Social al estudiante. 
"),0,'J',0);

$pdf->SetXY(15, 160);
$pdf->MultiCell(180,4.5,  utf8_decode("D.    En caso de presentarse alguna contingencia, el instituto informará al (la) prestante de Servicio Social y Dependencia u organismo las medidas se seguridad que implementará el Instituto Tecnológico Superior de Ciudad Serdán para salvaguardar al prestador (a) de servicio social, utilizando los medios electrónicos (correo electrónico). 
"),0,'J',0);








$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 175);
$pdf->Cell(0,5, utf8_decode("         El Organismo Público.
"),0,1,'la'); 


$pdf->SetFont('Arial','',9);

$pdf->SetXY(15, 180);
$pdf->MultiCell(180,4,  utf8_decode("A.    Canalizará al estudiante en el área de acuerdo a su perfil, encomendando tareas que le permitan desarrollas sus conocimientos, capacidades y habilidades. 
"),0,'J',0);

$pdf->SetXY(15, 189);
$pdf->MultiCell(180,3,  utf8_decode("B.    Asignará a uno de sus empleados como Responsable del Programa de Servicio social, el cual gestionará los apoyos para el programa y mantendrá contacto con el Instituto.
"),0,'J',0);

$pdf->SetXY(15, 197);
$pdf->MultiCell(180,2,  utf8_decode("C.    Elaborará Carta de Aceptación al recibir la Carta de Presentación. 
"),0,'J',0);

$pdf->SetXY(15, 201);
$pdf->MultiCell(180,4,  utf8_decode("D.    Se compromete a brindar todas las facilidades al prestador de servicio para el cumplimiento de las actividades del programa o proyecto. 
"),0,'J',0);

$pdf->SetXY(15, 211);
$pdf->MultiCell(180,4,  utf8_decode("E.    Evaluará al estudiante de manera bimestral hasta concluir su Servicio Social, teniendo en cuenta el periodo de 6 meses como mínimo y máximo 2 años considerando las siguientes fechas de entrega establecidas para 6 meses, en caso de no cubrir las 500 hrs. en 6 meses deberá seguir con la firma de reportes bimestrales de manera consecutiva hasta completar las horas requeridas para la liberación del servicio social.
"),0,'J',0);

$pdf->SetXY(15, 229);
    $pdf->MultiCell(180,4,  utf8_decode("F.    En caso de que sea necesario cambio de responsable del programa de Servicio Social, deberá informar a través de un documento escrito, dirigido  al/ a la Jefa/e del Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales. 
 "),0,'J',0);

 $pdf->SetFont('Arial','',7);
 $pdf->SetXY(20, 250);
 $pdf->Cell(0,5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270 "),0,1,'la');
 $pdf->SetXY(20, 253);
 $pdf->Cell(0,5, utf8_decode("www.tecnm.mx | www.itsciudadserdan.edu.mx"),0,1,'la');
 
*/

$pdf->AddPage();

$no_control = $_GET['id'];
$sql = "SELECT * FROM peridosservicio, empresa, asignacion  WHERE peridosservicio.idPeriodo = empresa.idPeriodo AND  empresa.Ncontrol= asignacion.NControlAdmin AND asignacion.NControl = '$no_control'";
$rec = $mysqli->query($sql);
while ($rowp = mysqli_fetch_array($rec)) {

  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(15, 30);
  $pdf->Cell(0, 5, utf8_decode("1.- Reportes de Evaluación Bimestre 1. 
 "), 0, 1, 'la');

  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(20, 35);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B1Reportar']), 0, 1, 'la');

  $pdf->SetXY(20, 40);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B1Recepcion']), 0, 1, 'la');



  $pdf->SetXY(15, 46);
  $pdf->Cell(0, 5, utf8_decode("2.- Reportes de Evaluación Bimestre 2. 
"), 0, 1, 'la');

  $pdf->SetXY(20, 51);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B2Reportar']), 0, 1, 'la');

  $pdf->SetXY(20, 56);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B2Recepcion']), 0, 1, 'la');



  $pdf->SetXY(15, 62);
  $pdf->Cell(0, 5, utf8_decode("3.- Reportes de Evaluación Bimestre 3. 
"), 0, 1, 'la');

  $pdf->SetXY(20, 67);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B3Reportar']), 0, 1, 'la');

  $pdf->SetXY(20, 72);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B3Recepcion']), 0, 1, 'la');


  $pdf->SetXY(15, 78);
  $pdf->Cell(0, 5, utf8_decode("4.- Reporte bimestral final. 
"), 0, 1, 'la');

  $pdf->SetXY(20, 83);
  $pdf->Cell(0, 5, utf8_decode("Período a reportar: " . $rowp['B4Reportar']), 0, 1, 'la');

  $pdf->SetXY(20, 88);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['B4Recepcion']), 0, 1, 'la');


  $pdf->SetXY(15, 94);
  $pdf->Cell(0, 5, utf8_decode("5.-Reportes de evaluación Final Extenso."), 0, 1, 'la');

  $pdf->SetXY(20, 99);
  $pdf->Cell(0, 5, utf8_decode("Periodo de recepción: " . $rowp['Bfinal']), 0, 1, 'la');

  $sql = "SELECT *  FROM  alumnos where Ncontrol = '$no_control'";
  $rec = $mysqli->query($sql);
  while ($rowa = mysqli_fetch_array($rec)) {
    if ($rowa['Sexo'] == 'Femenino') {
      $pdf->SetXY(15, 104);
      $pdf->MultiCell(180, 4.5,  utf8_decode("
G.	 Al finalizar el Servicio Social entregará Carta de terminación de Servicio Social a la estudiante.
H.	 En caso de que existan cambios en el programa de Servicio Social, el Responsable del Programa notificará por escrito y sellado al Instituto para dar cumplimiento con los lineamientos del Servicio Social en un tiempo máximo de 5 días hábiles.
I.	 En caso de presentarse alguna contingencia, informar al Instituto Tecnológico Superior de Ciudad Serdán las medidas de seguridad que implementará para salvaguardar a la prestadora de servicio social, utilizando los medios electrónicos (serviciosocial@cdserdan.tecnm.mx).
 
"), 0, 'J', 0);
    } else {
      $pdf->SetXY(15, 105);
      $pdf->MultiCell(180, 4.5,  utf8_decode("
G.	 Al finalizar el Servicio Social entregará Carta de terminación de Servicio Social al estudiante.
H.	 En caso de que existan cambios en el programa de Servicio Social, el Responsable del Programa notificará por escrito y sellado al Instituto para dar cumplimiento con los lineamientos del Servicio Social en un tiempo máximo de 5 días hábiles.
I.	 En caso de presentarse alguna contingencia, informar al Instituto Tecnológico Superior de Ciudad Serdán las medidas de seguridad que implementará para salvaguardar al prestador de servicio social, utilizando los medios electrónicos (serviciosocial@cdserdan.tecnm.mx).
 
"), 0, 'J', 0);
    }
  }


  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(20, 142);
  $pdf->Cell(0, 5, utf8_decode("Disposición General:"), 0, 1, 'la');
  $pdf->SetFont('Arial', '', 10);
  $pdf->SetXY(20, 148);
  $pdf->MultiCell(180, 4,  utf8_decode("Las situaciones no previstas en el presente acuerdo serán analizadas por el Departamento de Gestión Tecnológica, Servicio Social y Residencias Profesionales.
"), 0, 'J', 0);

  $pdf->SetXY(20, 158);
  $pdf->Cell(0, 5, utf8_decode("Firmándose de conformidad el  día " . $rowp['fechainicio'] . ".
"), 0, 1, 'la');
}



$pdf->SetFont('Arial', 'B', 10);
$pdf->Image('firmaarmando.png', 40, 171, 28);
$pdf->SetXY(25, 180);
$pdf->Cell(0, 5, utf8_decode(" Dr. Armando González Ramírez"), 0, 1, 'la');


$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(19, 185);
$pdf->Cell(0, 5, utf8_decode("Encargado de la Dirección de Planeación y"), 0, 1, 'la');
$pdf->SetXY(41, 190);
$pdf->Cell(0, 5, utf8_decode(" Vinculación"), 0, 1, 'la');

$pdf->Image('sello.png', 82, 193, 25);
$pdf->Image('firma.png', 40, 204, 28);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(18, 220);
$pdf->Cell(0, 5, utf8_decode("Lic. María Del Carmen Martinéz Escobar "), 0, 1, 'la');

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 225);
$pdf->Cell(0, 5, utf8_decode("Jefa del Departamento de Gestión Tecnológica"), 0, 1, 'la');

$pdf->SetXY(17, 230);
$pdf->Cell(0, 5, utf8_decode("Servicio Social y Residencias Profesionales"), 0, 1, 'la');

$no_control = $_GET['id'];
$sql = "SELECT *  FROM  alumnos, carreras, semestre where Ncontrol = '$no_control'
  and alumnos.IDCarrera = carreras.IDCarreras  and alumnos.IDSemestre = semestre.IDSemestre";
$rec = $mysqli->query($sql);
while ($rowa = mysqli_fetch_array($rec)) {
  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetXY(65, 220);
  $array_cadena = strlen($rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno']);
  if ($array_cadena >= 0 and $array_cadena <= 38) {
    $pdf->MultiCell(180, 2,  utf8_decode("Estudiante: " . $rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno'] . ".
        "), 0, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(65, 225);
    $pdf->MultiCell(180, 2,  utf8_decode("No. Control: " . $rowa['Ncontrol'] . ""), 0, 'C', 0);


    $pdf->SetXY(65, 230);
    $pdf->MultiCell(180, 2,  utf8_decode("Carrera: " . $rowa['NombreCarrera'] . "
        "), 0, 'C', 0);
  }

  if ($array_cadena >= 39 and $array_cadena <= 60) {
    $pdf->MultiCell(180, 2,  utf8_decode("Estudiante: " . $rowa['NombreAlumno'] . " " . $rowa['Apellido1Alumno'] . " " . $rowa['Apellido2Alumno'] . ".
        "), 0, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(65, 230);
    $pdf->MultiCell(180, 2,  utf8_decode("No. Control: " . $rowa['Ncontrol'] . ""), 0, 'C', 0);


    $pdf->SetXY(65, 235);
    $pdf->MultiCell(180, 2,  utf8_decode("Carrera: " . $rowa['NombreCarrera'] . "
        "), 0, 'C', 0);
  }
}


$sql2 = "SELECT * FROM empresa, programa, asignacion where asignacion.NControlAdmin = empresa.Ncontrol 
AND asignacion.NControlAdmin = programa.NControl AND asignacion.Ncontrol = '$no_control'";
$rec2 = $mysqli->query($sql2);
while ($rowe = mysqli_fetch_array($rec2)) {


  $pdf->SetFont('Arial', 'B', 10);
  $array_cadena = strlen($rowe['CargoPrograma']);
  if ($array_cadena >= 0 and $array_cadena <= 90) {
    $pdf->SetXY(65, 180);
    $pdf->MultiCell(180, 3,  utf8_decode($rowe['ResponsablePrograma']), 0, 'C', 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->SetXY(65, 185.5);
    $pdf->MultiCell(180, 2,  utf8_decode($rowe['CargoPrograma']), 0, 'C', 0);
    $pdf->SetXY(115,  190);
    $pdf->MultiCell(80, 4.5,  utf8_decode($rowe['Dependencia']), 0, 'C', 0);
  }
}
$pdf->SetFont('Arial', '', 7);
$pdf->SetXY(15, 253);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');



$pdf->Output();
