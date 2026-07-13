<?php
include('plantilla.php');

$pdf = new  PDF();
$pdf->SetMargins(15, 15);
$pdf->AddPage();

$no_control = $_GET['id'];
$nombre = $_GET['nombre'];
$carrera = $_GET['carrera'];
$genero = trim($_GET['g']);



if($genero == 'H'){

include '../conexion.php';



$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(65, 20);
$pdf->Cell(0, 5, utf8_decode("Acuerdo de Trabajo Estudiante-Escuela-Empresa para Realizar "), 0, 1, 'C');
//$pdf->Cell(0, 5, utf8_decode($genero), 0, 1, 'C');

$pdf->SetXY(76, 25);
$pdf->Cell(0, 5, utf8_decode("Residencia Profesional"), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 43);
$pdf->MultiCell(175, 4.5, utf8_decode("El presente acuerdo de trabajo establece el compromiso entre el estudiante, la escuela y la empresa de que el estudiante realice su residencia profesional bajo la elaboración y ejecución de un proyecto de interés común entre la empresa y el estudiante, con asesoría interna de la escuela y asesoría externa de la Empresa o Dependencia."));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 65);
$pdf->Cell(0, 5, utf8_decode("CON BASE A LA NORMATIVIDAD ACADÉMICA DEL TECNOLÓGICO NACIONAL DE MÉXICO"), 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(14, 68.5);
$pdf->Cell(0, 5, utf8_decode("CAPÍTULO 12. LINEAMIENTO PARA LA OPERACIÓN Y ACREDITACIÓN DE LA RESIDENCIA PROFESIONAL"), 0, 1, 'C');

$pdf->SetXY(15, 75);
$pdf->Cell(0, 5, utf8_decode("Para los efectos del presente ACUERDO se entiende por:"), 0, 1, 'la');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 80);
$pdf->Cell(0, 5, utf8_decode("Residencia Profesional."), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("A la estrategia educativa de carácter curricular, que permite al estudiante emprender un proyecto teórico-práctico, analítico, reflexivo, crítico y profesional; con el propósito de resolver un problema específico de la realidad social y productiva, para fortalecer y aplicar sus competencias profesionales.
    "));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 99);
$pdf->Cell(0, 5, utf8_decode("Asesor interno."), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Docente que ha sido comisionado para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 110);
$pdf->Cell(0, 5, utf8_decode("Asesor externo. "), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Persona de la empresa, organismo o dependencia,  que ha sido designada por la misma, para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 124);
$pdf->Cell(0, 5, utf8_decode("Proyectos interdisciplinarios.  "), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Estudio que se realiza con la cooperación de varias disciplinas."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 135);
$pdf->Cell(0, 5, utf8_decode("POLÍTICAS DE OPERACIÓN DE LA RESIDENCIA PROFESIONAL"), 0, 1, 'la');

$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 142, 10);
$pdf->Image('punto.png', 12, 155.5, 10);
$pdf->Image('punto.png', 12, 164.5, 10);
$pdf->Image('punto.png', 12, 173.5, 10);
$pdf->Image('punto.png', 12, 182.5, 10);
$pdf->Image('punto.png', 12, 191.2, 10);
$pdf->Image('punto.png', 12, 195.7, 10);
$pdf->SetXY(20, 138);
$pdf->MultiCell(175, 4.5, utf8_decode("
	El proyecto de Residencia Profesional puede realizarse de manera individual, grupal o interdisciplinaria; dependiendo de los requerimientos, condiciones y características del proyecto de la empresa, organismo o dependencia. La Residencia Profesional puede ser realizada a través de proyectos integradores, bajo el esquema de educación dual, entre otros.
	La Residencia Profesional se realiza en un período de cuatro meses como tiempo mínimo y seis meses como tiempo máximo, debiendo acumularse 500 horas.
	El proyecto de Residencia Profesional debe ser autorizado por la Jefa o Jefe de División de Ingeniería, previo análisis de la Academia.
	La academia correspondiente es la encargada de asignar al asesor interno y nombrar nuevo asesor del proyecto de Residencia Profesional, en caso de que el asesor interno asignado no pueda concluir con las actividades de asesoría.
	Si existe una propuesta de un proyecto por parte del estudiante, debe ser avalado por la Academia y autorizado por la jefa o jefe de División de Ingeniería. 
	La Residencia Profesional sólo se autoriza en periodos establecidos por el Instituto.
	Durante la Residencia Profesional, el estudiante deberá realizar actividades únicamente relacionadas a su proyecto de Residencia.

"));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 207);
$pdf->Cell(0, 5, utf8_decode("FUNCIONES DE LOS ASESORES"), 0, 1, 'la');


$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 214.5, 10);
$pdf->Image('punto.png', 12, 219.5, 10);
$pdf->Image('punto.png', 12, 228.5, 10);
$pdf->Image('punto.png', 12, 237.5, 10);
$pdf->SetXY(20, 210.5);
$pdf->MultiCell(175, 4.5, utf8_decode("
	Los asesores interno y externo supervisan el reporte preliminar mediante el formato electrónico que elabora el estudiante.
	Los asesores interno y externo revisan el reporte de residencia profesional y lo evalúan de acuerdo con el formato de evaluación.
	Los asesores interno y externo, asesoran y supervisan al residente en la solución de problemas y explicación de temas relacionados con el proyecto, en los horarios previamente establecidos y autorizados en su plan de trabajo.
	Los asesores interno y externo deben comunicarse en al menos cuatro momentos de manera presencial o virtual; la primera para determinar las características del proyecto, las dos posteriores con el propósito de evaluar al residente en dos etapas parciales y la cuarta para la evaluación del reporte de Residencia Profesional.
"));



$pdf->SetFont('Arial', '', 6);
$pdf->SetXY(15, 266);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');

$pdf->AddPage();

$pdf->SetXY(15, 33);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 5, utf8_decode("FUNCIONES DEL ESTUDIANTE"), 0, 1, 'la');

$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 41, 10);
$pdf->Image('punto.png', 12, 56, 10);
$pdf->Image('punto.png', 12, 61, 10);
$pdf->Image('punto.png', 12, 80.7, 10);
$pdf->Image('punto.png', 12, 91, 10);
$pdf->Image('punto.png', 12, 100.7, 10);
$pdf->Image('punto.png', 12, 105.5, 10);
$pdf->Image('punto.png', 12, 111, 10);
$pdf->Image('punto.png', 12, 121, 10);
$pdf->Image('punto.png', 12, 125.7, 10);
$pdf->Image('punto.png', 12, 141, 10);

$pdf->SetXY(20, 36);
$pdf->MultiCell(175, 5, utf8_decode('
Una vez seleccionado el proyecto de Residencia Profesional el estudiante debe entrevistarse con su asesor interno y externo, para ser orientado en la elaboración de un anteproyecto y estructurar conjuntamente la metodología de trabajo acorde con las expectativas del proyecto.
	El estudiante debe adjuntar todos los requisitos a la plataforma Institucional de Residencia Profesional.
	El estudiante debe solicitar la carta de aceptación a la empresa, misma, que contenga: nombre del estudiante, número de control, carrera, nombre del proyecto, las horas a cubrir, el periodo en que lo realizará. 
	El estudiante es el responsable de cumplir con el proyecto de Residencia Profesional basado en las competencias adquiridas. 
	El estudiante debe cubrir el horario diario de actividades para el desarrollo de su proyecto, previamente establecido con la empresa, organismo o dependencia, en un periodo mínimo de 4 meses y máximo 6 hasta cubrir 500 hrs.
	El estudiante debe mantener total confidencialidad de la información proporcionada por la empresa y utilizarla solo en el proyecto de Residencia Profesional.
	El estudiante de Respetar la autonomía administrativa, reglamentos y demás normatividad de la "EMPRESA". 
	Cumplir con las medidas de seguridad e higiene vigentes en la Empresa para prevenir los riesgos de trabajo.
	Hacer uso adecuado de las instalaciones, equipo y material de trabajo que se les entregue para la realización de su proyecto.
	Cumplir con los reglamentos académicos y disciplinarios establecidos por el "INSTITUTO".
	Al finalizar el proceso de residencia profesional el estudiante solicita a la empresa la carta de terminación de liberación de residencia profesional, la cual contenga: nombre del estudiante, número de control, carrera, nombre del proyecto, las horas que cubrió, el periodo en que realizó el proyecto (hoja membretada de la empresa).
	El estudiante adjuntará en el sistema de residencia profesional la carta de liberación de residencia profesional en formato pdf. 

'));


$sql = "SELECT  *  FROM tb_residentes
    where  no_control= '$no_control'";
$rec = $mysqli->query($sql);
while ($row = mysqli_fetch_array($rec)) {

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(15, 154);
    $pdf->Cell(0, 5, utf8_decode("FUNCIONES DE LA EMPRESA "), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 9);
    $pdf->SetXY(15, 162);
    $pdf->Cell(0, 5, utf8_decode("La Empresa, organismo o Dependencia debe: "), 0, 1, 'la');

    $pdf->SetXY(20, 165);
    $pdf->MultiCell(175, 4.5, utf8_decode('
A) Facilitar el acceso a los/las residentes del "EL INSTITUTO" para realizar la Residencia Profesional, estableciendo horarios y calendario de realización para tal efecto.
B) Proveer instalaciones, equipo y material adecuados para la realización de las actividades de Residencia Profesional, de acuerdo al proyecto asignado.
C) Brindar los primeros auxilios a (él o la practicante), en caso de algún accidente cuando se suscite en las instalaciones de la empresa y de ser necesario su traslado para la atención médica, la (el) estudiante cuenta con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social ' . $row['folios'] . '.
D) Conforme a su disponibilidad y normatividad vigente, podrá brindar un apoyo económico y/o en especie en el periodo a ejecutar el proyecto dentro de la empresa (el o la practicante).
E) Por circunstancias especiales tales como: huelga, bancarrota, cierre de empresa, organismo o dependencia, cambio de políticas empresariales o cualquier otra causa plenamente justificada, puede solicitar la cancelación y/o reasignación de otro proyecto, notificando por escrito en un máximo de 5 días hábiles al Instituto para dar cumplimiento de la Residencia Profesional. 
F) Emitir carta de aceptación Dirigida al/la titular del Departamento de Residencias Profesionales y  Servicio Social.
G) La carta de aceptación contendrá la modalidad: a distancia, mixta, o presencial en caso de que sea de manera presencial o mixta mencionar las medidas de seguridad.
    
    '));


    $pdf->SetFont('Arial', '', 6);
    $pdf->SetXY(15, 266);
    $pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');


    $pdf->AddPage();



    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(15, 38);
    $pdf->Cell(0, 5, utf8_decode("Disposiciones Generales"), 0, 1, 'la');
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    $pdf->SetFont('Arial', '', 9);
    $pdf->SetXY(20, 43);
    $pdf->MultiCell(175, 4.5, utf8_decode("
En caso de no existir, se gestionará la firma de un convenio con el objetivo de fortalecer el compromiso de nuestra Institución de Educación Superior, brindando a los estudiantes conocimientos de vanguardia que cubran las expectativas que la sociedad nos exige.
Las situaciones no previstas en el presente acuerdo para la operatividad de las Residencias Profesionales, serán analizadas por el comité académico de la escuela como lo establecen los lineamientos para la operación y acreditación de las residencias profesionales en el Sistema Nacional de Educación Superior Tecnológica y presentadas al director del plantel para su dictamen.
La vigencia del presente acuerdo corresponde al tiempo de duración del Proyecto de la Residencia Profesional. Firmándose de conformidad a los " . date('d') . " días del mes de " . $meses[date('n') - 1] . " de " . date('Y') . ".
    "));
}

$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(30, 130);
$pdf->Cell(50, 5, utf8_decode("C. JESÚS OCTAVIO CONTRERAS CRUZ"), 0, 1, 'C');
$pdf->Image('firmadirector.png', 35, 110, 35);
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(20, 135);
$pdf->Cell(0, 5, utf8_decode("ENCARGADO DE DIRECCIÓN DE PLANEACIÓN"), 0, 1, 'la');

$pdf->SetXY(39, 140);
$pdf->Cell(0, 5, utf8_decode(" Y VINCULACIÓN"), 0, 1, 'la');





$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(20, 170);
$pdf->Cell(0, 5, utf8_decode("C. MARÍA DEL CARMEN MARTÍNEZ ESCOBAR"), 0, 1, 'la');
$pdf->Image('firmabien.png', 40, 145, 31);
$pdf->Image('logobien.jpg', 76, 143, 27);
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(14, 175);
$pdf->Cell(0, 5, utf8_decode("ENCARGADA DEL DEPARTAMENTO DE RESIDENCIAS"), 0, 1, 'la');

$pdf->SetXY(15, 180);
$pdf->Cell(0, 5, utf8_decode("PROFESIONALES Y SERVICIO SOCIAL DEL I.T.S.C.S"), 0, 1, 'la');



$NOMBRE2 = mb_strtoupper($nombre);

$array_cadena = strlen($NOMBRE2);
if ($array_cadena >= 0 and $array_cadena <= 38) {
$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(110, 170);
$pdf->Cell(0, 5, utf8_decode("ESTUDIANTE: " . mb_strtoupper($NOMBRE2)), '0', '0', 'C');
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(110, 175);
$pdf->Cell(0, 5, utf8_decode("NO. CONTROL: " . mb_strtoupper($no_control)), '0', '0', 'C');

//if($carrera='Ingeniería En Innovación Agricola Sustentable'){
////    $pdf->SetXY(110, 180);
 //   $pdf->Cell(0, 5, utf8_decode("CARRERA: INGENIERÍA EN INNOVACIÓN"), '0', '0', 'C');
//    $pdf->SetXY(110, 185);
//    $pdf->Cell(0, 5, utf8_decode("AGRICOLA SUSTENTABLE"), '0', '0', 'C');
//    
//}else{
$pdf->SetXY(110, 180);
$pdf->Cell(0, 5, utf8_decode("CARRERA: ".mb_strtoupper($carrera)), '0', '0', 'C');
//}
}

$puesto = $_GET['puesto'];
$acuerdo = $_GET['acuerdo'];

$empresa = $_GET['empresaa'];
//$empresa = 'Escuela Telesecundaria Federal Hermanos Serdán de Santa Cecilia Tepetitlán, Tlachichuca, Puebla.';

$array_cadenap = strlen($puesto);
$array_cadenae = strlen($empresa);



$pdf->SetXY(110, 130);
$pdf->SetFont('Arial', 'B', '9');
$pdf->Cell(0, 5, utf8_decode(mb_strtoupper($acuerdo)), '0', '0', 'C');
$pdf->SetFont('Arial', '', '9');
if ($array_cadenap >= 0 && $array_cadenap <= 50) {
    $pdf->SetXY(110, 136);
    $pdf->MultiCell(85, 2, utf8_decode(mb_strtoupper($puesto)), 0, 'C', 0);
    $pdf->SetXY(110, 140);
    $pdf->MultiCell(85, 4, utf8_decode(mb_strtoupper($empresa)), 0, 'C', 0);
  
}
if ($array_cadenap >= 51 && $array_cadenap <= 100) {
    $pdf->SetXY(110, 136);
    $pdf->MultiCell(85, 3.5, utf8_decode(mb_strtoupper($puesto)), 0, 'C', 0);
    $pdf->SetXY(110, 143);
    $pdf->MultiCell(85, 4, utf8_decode(mb_strtoupper($empresa)), 0, 'C', 0);
  
}

$pdf->SetFont('Arial', '', 6);
$pdf->SetXY(15, 266);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');


}else{
///MODULO PARA MUJER 

include '../conexion.php';



$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(65, 20);
$pdf->Cell(0, 5, utf8_decode("Acuerdo de Trabajo Estudiante-Escuela-Empresa para Realizar "), 0, 1, 'C');

$pdf->SetXY(76, 25);
$pdf->Cell(0, 5, utf8_decode("Residencia Profesional"), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(15, 43);
$pdf->MultiCell(175, 4.5, utf8_decode("El presente acuerdo de trabajo establece el compromiso entre la estudiante, la escuela y la empresa, de que la estudiante realice su residencia profesional bajo la elaboración y ejecución de un proyecto de interés común entre la empresa y la estudiante, con asesoría interna de la escuela y asesoría externa de la Empresa o Dependencia."));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 65);
$pdf->Cell(0, 5, utf8_decode("CON BASE A LA NORMATIVIDAD ACADÉMICA DEL TECNOLÓGICO NACIONAL DE MÉXICO"), 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(14, 68.5);
$pdf->Cell(0, 5, utf8_decode("CAPÍTULO 12. LINEAMIENTO PARA LA OPERACIÓN Y ACREDITACIÓN DE LA RESIDENCIA PROFESIONAL"), 0, 1, 'C');

$pdf->SetXY(15, 75);
$pdf->Cell(0, 5, utf8_decode("Para los efectos del presente ACUERDO se entiende por:"), 0, 1, 'la');
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 80);
$pdf->Cell(0, 5, utf8_decode("Residencia Profesional."), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("A la estrategia educativa de carácter curricular, que permite a la estudiante emprender un proyecto teórico-práctico, analítico, reflexivo, crítico y profesional; con el propósito de resolver un problema específico de la realidad social y productiva, para fortalecer y aplicar sus competencias profesionales.
    "));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 99);
$pdf->Cell(0, 5, utf8_decode("Asesor interno."), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Docente que ha sido comisionado para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 110);
$pdf->Cell(0, 5, utf8_decode("Asesor externo. "), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Persona de la empresa, organismo o dependencia,  que ha sido designada por la misma, para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 124);
$pdf->Cell(0, 5, utf8_decode("Proyectos interdisciplinarios.  "), 0, 1, 'la');
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(175, 4.5, utf8_decode("Estudio que se realiza con la cooperación de varias disciplinas."));

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 135);
$pdf->Cell(0, 5, utf8_decode("POLÍTICAS DE OPERACIÓN DE LA RESIDENCIA PROFESIONAL"), 0, 1, 'la');

$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 142, 10);
$pdf->Image('punto.png', 12, 155.5, 10);
$pdf->Image('punto.png', 12, 164.5, 10);
$pdf->Image('punto.png', 12, 173.5, 10);
$pdf->Image('punto.png', 12, 182.5, 10);
$pdf->Image('punto.png', 12, 191.2, 10);
$pdf->Image('punto.png', 12, 195.7, 10);
$pdf->SetXY(20, 138);
$pdf->MultiCell(175, 4.5, utf8_decode("
	El proyecto de Residencia Profesional puede realizarse de manera individual, grupal o interdisciplinaria; dependiendo de los requerimientos, condiciones y características del proyecto de la empresa, organismo o dependencia. La Residencia Profesional puede ser realizada a través de proyectos integradores, bajo el esquema de educación dual, entre otros.
	La Residencia Profesional se realiza en un período de cuatro meses como tiempo mínimo y seis meses como tiempo máximo, debiendo acumularse 500 horas.
	El proyecto de Residencia Profesional debe ser autorizado por la Jefa o Jefe de División de Ingeniería, previo análisis de la Academia.
	La Academia correspondiente es la encargada de asignar al asesor interno y nombrar nuevo asesor del proyecto de Residencia Profesional, en caso de que el asesor interno asignado no pueda concluir con las actividades de asesoría.
	Si existe una propuesta de un proyecto por parte del estudiante, debe ser avalado por la Academia y autorizado por la jefa o jefe de División de Ingeniería. 
	La Residencia Profesional sólo se autoriza en periodos establecidos por el Instituto.
	Durante la Residencia Profesional, la estudiante deberá realizar actividades únicamente relacionadas a su proyecto de Residencia.

"));


$pdf->SetFont('Arial', 'B', 9);
$pdf->SetXY(15, 207);
$pdf->Cell(0, 5, utf8_decode("FUNCIONES DE LOS ASESORES"), 0, 1, 'la');


$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 214.5, 10);
$pdf->Image('punto.png', 12, 219.5, 10);
$pdf->Image('punto.png', 12, 228.5, 10);
$pdf->Image('punto.png', 12, 237.5, 10);
$pdf->SetXY(20, 210.5);
$pdf->MultiCell(175, 4.5, utf8_decode("
	Los asesores interno y externo supervisan el reporte preliminar mediante el formato electrónico que elabora la estudiante.
	Los asesores interno y externo revisan el reporte de residencia profesional y lo evalúan de acuerdo con el formato de evaluación.
	Los asesores interno y externo, asesoran y supervisan a la residente en la solución de problemas y explicación de temas relacionados con el proyecto, en los horarios previamente establecidos y autorizados en su plan de trabajo.
	Los asesores interno y externo deben comunicarse en al menos cuatro momentos de manera presencial o virtual; la primera para determinar las características del proyecto, las dos posteriores con el propósito de evaluar a la residente en dos etapas parciales y la cuarta para la evaluación del reporte de Residencia Profesional.
"));



$pdf->SetFont('Arial', '', 6);
$pdf->SetXY(15, 266);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');

$pdf->AddPage();

$pdf->SetXY(15, 33);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 5, utf8_decode("FUNCIONES DE LA ESTUDIANTE"), 0, 1, 'la');

$pdf->SetFont('Arial', '', 9);
$pdf->Image('punto.png', 12, 41, 10);
$pdf->Image('punto.png', 12, 56, 10);
$pdf->Image('punto.png', 12, 61, 10);
$pdf->Image('punto.png', 12, 80.7, 10);
$pdf->Image('punto.png', 12, 91, 10);
$pdf->Image('punto.png', 12, 100.7, 10);
$pdf->Image('punto.png', 12, 105.5, 10);
$pdf->Image('punto.png', 12, 111, 10);
$pdf->Image('punto.png', 12, 121, 10);
$pdf->Image('punto.png', 12, 125.7, 10);
$pdf->Image('punto.png', 12, 141, 10);
//$pdf->Image('punto.png', 12, 139.8, 10);

$pdf->SetXY(20, 36);
$pdf->MultiCell(175, 5, utf8_decode('
Una vez seleccionado el proyecto de Residencia Profesional la estudiante debe entrevistarse con su asesor interno y externo, para ser orientado en la elaboración de un anteproyecto y estructurar conjuntamente la metodología de trabajo acorde con las expectativas del proyecto.
	La estudiante debe adjuntar todos los requisitos a la plataforma Institucional de Residencia Profesional.
	La estudiante debe solicitar la carta de aceptación a la empresa, misma, que contenga: nombre de la estudiante, número de control, carrera, nombre del proyecto, las horas a cubrir, el periodo en que lo realizará. 
	La estudiante es la responsable de cumplir con el proyecto de Residencia Profesional basado en las competencias adquiridas. 
	La estudiante debe cubrir el horario diario de actividades para el desarrollo de su proyecto, previamente establecido con la empresa, organismo o dependencia, en un periodo mínimo de 4 meses y máximo 6 hasta cubrir 500 hrs.
	La estudiante debe mantener total confidencialidad de la información proporcionada por la empresa y utilizarla solo en el proyecto de Residencia Profesional.
	La estudiante debe Respetar la autonomía administrativa, reglamentos y demás normatividad de la "EMPRESA". 
	Cumplir con las medidas de seguridad e higiene vigentes en la Empresa para prevenir los riesgos de trabajo.
	Hacer uso adecuado de las instalaciones, equipo y material de trabajo que se les entregue para la realización de su proyecto.
	Cumplir con los reglamentos académicos y disciplinarios establecidos por el "INSTITUTO".
	Al finalizar el proceso de residencia profesional la estudiante solicita a la empresa la carta de terminación de liberación de residencia profesional, la cual contenga: nombre del estudiante, número de control, carrera, nombre del proyecto, las horas que cubrió, el periodo en que realizó el proyecto (hoja membretada de la empresa).
	La estudiante adjuntará en el sistema de residencia profesional la carta de liberación de residencia profesional en formato pdf. 

'));


$sql = "SELECT  *  FROM tb_residentes
    where  no_control= '$no_control'";
$rec = $mysqli->query($sql);
while ($row = mysqli_fetch_array($rec)) {

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(15, 154);
    $pdf->Cell(0, 5, utf8_decode("FUNCIONES DE LA EMPRESA "), 0, 1, 'la');

    $pdf->SetFont('Arial', '', 9);
    $pdf->SetXY(15, 162);
    $pdf->Cell(0, 5, utf8_decode("La Empresa, organismo o Dependencia debe: "), 0, 1, 'la');

    $pdf->SetXY(20, 165);
    $pdf->MultiCell(175, 4.5, utf8_decode('
A) Facilitar el acceso a los/las residentes del "EL INSTITUTO" para realizar la Residencia Profesional, estableciendo horarios y calendario de realización para tal efecto.
B) Proveer instalaciones, equipo y material adecuados para la realización de las actividades de Residencia Profesional, de acuerdo al proyecto asignado.
C) Brindar los primeros auxilios a (él o la practicante), en caso de algún accidente cuando se suscite en las instalaciones de la empresa y de ser necesario su traslado para la atención médica, la (el) estudiante cuenta con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social ' . $row['folios'] . '.
D) Conforme a su disponibilidad y normatividad vigente, podrá brindar un apoyo económico y/o en especie en el periodo a ejecutar el proyecto dentro de la empresa (el o la practicante).
E) Por circunstancias especiales tales como: huelga, bancarrota, cierre de empresa, organismo o dependencia, cambio de políticas empresariales o cualquier otra causa plenamente justificada, puede solicitar la cancelación y/o reasignación de otro proyecto, notificando por escrito en un máximo de 5 días hábiles al Instituto para dar cumplimiento de la Residencia Profesional. 
F) Emitir carta de aceptación Dirigida al/la titular del Departamento de Residencias Profesionales y  Servicio Social.
G) La carta de aceptación contendrá la modalidad: a distancia, mixta, o presencial en caso de que sea de manera presencial o mixta mencionar las medidas de seguridad.

'));


    $pdf->SetFont('Arial', '', 6);
    $pdf->SetXY(15, 266);
    $pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');


    $pdf->AddPage();



    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(15, 38);
    $pdf->Cell(0, 5, utf8_decode("Disposiciones Generales"), 0, 1, 'la');
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    $pdf->SetFont('Arial', '', 9);
    $pdf->SetXY(20, 43);
    $pdf->MultiCell(175, 4.5, utf8_decode("
En caso de no existir, se gestionará la firma de un convenio con el objetivo de fortalecer el compromiso de nuestra Institución de Educación Superior, brindando a los estudiantes conocimientos de vanguardia que cubran las expectativas que la sociedad nos exige.
Las situaciones no previstas en el presente acuerdo para la operatividad de las Residencias Profesionales, serán analizadas por el comité académico de la escuela como lo establecen los lineamientos para la operación y acreditación de las residencias profesionales en el Sistema Nacional de Educación Superior Tecnológica y presentadas a la directora del plantel para su dictamen.
La vigencia del presente acuerdo corresponde al tiempo de duración del Proyecto de la Residencia Profesional. Firmándose de conformidad a los " . date('d') . " días del mes de " . $meses[date('n') - 1] . " de " . date('Y') . ".
    "));
}

$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(25, 130);
$pdf->Cell(50, 5, utf8_decode("C. JESÚS OCTAVIO CONTRERAS CRUZ"), 0, 1, 'C');
$pdf->Image('firmadirector.png', 35, 110, 35);
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(26, 135);
$pdf->Cell(50, 5, utf8_decode("ENCARGADO DE DIRECCIÓN DE PLANEACIÓN "), 0, 1, 'C');
$pdf->SetXY(26, 139);
$pdf->Cell(50, 5, utf8_decode("Y VINCULACIÓN"), 0, 1, 'C');


//$pdf->SetXY(39, 140);
//$pdf->Cell(0, 5, utf8_decode("    DEL I.T.S.C.S"), 0, 1, 'la');




$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(20, 170);
$pdf->Cell(0, 5, utf8_decode("C. MARÍA DEL CARMEN MARTÍNEZ ESCOBAR"), 0, 1, 'la');
$pdf->Image('firmabien.png', 40, 145, 31);
$pdf->Image('logobien.jpg', 76, 143, 27);
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(14, 175);
$pdf->Cell(0, 5, utf8_decode("ENCARGADA DEL DEPARTAMENTO DE RESIDENCIAS"), 0, 1, 'la');

$pdf->SetXY(15, 180);
$pdf->Cell(0, 5, utf8_decode("PROFESIONALES Y SERVICIO SOCIAL "), 0, 1, 'la');




$NOMBRE2 = mb_strtoupper($nombre);

$array_cadena = strlen($NOMBRE2);
if ($array_cadena >= 0 and $array_cadena <= 58) {
$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(110, 170);
$pdf->Cell(0, 5, utf8_decode("ESTUDIANTE: " . mb_strtoupper($NOMBRE2)), '0', '0', 'C');
$pdf->SetFont('Arial', '', '9');
$pdf->SetXY(110, 175);
$pdf->Cell(0, 5, utf8_decode("NO. CONTROL: " . mb_strtoupper($no_control)), '0', '0', 'C');

//if($carrera ='Ingeniería En Innovación Agricola Sustentable'){
//    $pdf->SetXY(110, 180);
//    $pdf->Cell(0, 5, utf8_decode("CARRERA: INGENIERÍA EN INNOVACIÓN"), '0', '0', 'C');
//    $pdf->SetXY(110, 185);
//    $pdf->Cell(0, 5, utf8_decode("AGRICOLA SUSTENTABLE"), '0', '0', 'C');
    
//}else{

$pdf->SetXY(110, 180);
$pdf->Cell(0, 5, utf8_decode("CARRERA: " . mb_strtoupper($carrera)), '0', '0', 'C');
//}



}

$puesto = $_GET['puesto'];
$acuerdo = $_GET['acuerdo'];

$empresa = $_GET['empresaa'];
//$empresa = 'Escuela Telesecundaria Federal Hermanos Serdán de Santa Cecilia Tepetitlán, Tlachichuca, Puebla.';

$array_cadenap = strlen($puesto);
$array_cadenae = strlen($empresa);



$pdf->SetXY(110, 130);
$pdf->SetFont('Arial', 'B', '9');
$pdf->Cell(0, 5, utf8_decode(mb_strtoupper($acuerdo)), '0', '0', 'C');
$pdf->SetFont('Arial', '', '9');
if ($array_cadenap >= 0 && $array_cadenap <= 50) {
    $pdf->SetXY(110, 136);
    $pdf->MultiCell(85, 2, utf8_decode(mb_strtoupper($puesto)), 0, 'C', 0);
    $pdf->SetXY(110, 140);
    $pdf->MultiCell(85, 4, utf8_decode(mb_strtoupper($empresa)), 0, 'C', 0);
  
}
if ($array_cadenap >= 51 && $array_cadenap <= 100) {
    $pdf->SetXY(110, 134);
    $pdf->MultiCell(85, 3, utf8_decode(mb_strtoupper($puesto)), 0, 'C', 0);
    $pdf->SetXY(110, 140);
    $pdf->MultiCell(85, 4, utf8_decode(mb_strtoupper($empresa)), 0, 'C', 0);
  
}


$pdf->SetFont('Arial', '', 6);
$pdf->SetXY(15, 266);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx "), 0, 1, 'la');





}



$pdf->Output();
?>