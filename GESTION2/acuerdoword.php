<?php

require_once "vendor/autoload.php";
use PhpOffice\PhpWord\Style\Language;
$documento = new \PhpOffice\PhpWord\PhpWord();
$propiedades = $documento->getDocInfo();
$propiedades->setCreator("PORFIRIO MEDINA DE LA ROSA");
$propiedades->setTitle("Imágenes");

$seccion = $documento->addSection(
    ["marginTop" => 600,
    "marginLeft" =>850,
    "marginRight" =>700,
    "marginBottom" =>400,
 ]);
# Títulos. Solo modificando depth (el número)
$fuenteTitulo = [
    "name" => "Verdana",
    "size" => 20,
    "color" => "000000",
];
$documento->addTitleStyle(1, $fuenteTitulo);

$seccion->addImage("encabezadoo.png", [
    "width" => 150,
    "height" => 70,
    "wrapDistanceTop" => 0,
   ]);



 //$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   //llllllllllllllll
$seccion->addText("Acuerdo de Trabajo Estudiante-Escuela-Empresa para Realizar Residencia Profesional", array('name' => 'Arial', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'center'));

$seccion->addText("El presente acuerdo de trabajo establece el compromiso entre el estudiante, la escuela y la empresa de que el estudiante realice su residencia profesional bajo la elaboración y ejecución de un proyecto de interés común entre la empresa y el estudiante, con asesoría interna de la escuela y asesoría externa de la Empresa o Dependencia.", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'Jc'));

$seccion->addText("CON BASE A LA NORMATIVIDAD ACADÉMICA DEL TECNOLÓGICO NACIONAL DE MÉXICO", array('name' => 'Arial', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 1.0),array('align' => 'center'));

$seccion->addText("CAPÍTULO 12. LINEAMIENTO PARA LA OPERACIÓN Y ACREDITACIÓN DE LA RESIDENCIA PROFESIONAL", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'center'));


$seccion->addText("Para los efectos del presente ACUERDO se entiende por:", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'left'));

$seccion->addTextBreak(0.5);
$seccion->addText("Residencia Profesional a la estrategia educativa de carácter curricular, que permite al estudiante emprender un proyecto teórico-práctico, analítico, reflexivo, crítico y profesional; con el propósito de resolver un problema específico de la realidad social y productiva, para fortalecer y aplicar sus competencias profesionales.", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'left'));

$seccion->addTextBreak(0.5);
$seccion->addText("Asesor interno. - Docente que ha sido comisionado para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional.", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'left'));

$seccion->addTextBreak(0.5);
$seccion->addText("Asesor externo. - Persona de la empresa, organismo o dependencia, que ha sido designada por la misma, para la revisión y supervisión del desarrollo del proyecto de Residencia Profesional.", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'left'));


$seccion->addTextBreak(0.5);
$seccion->addText("Proyectos interdisciplinarios. - Estudio que se realiza con la cooperación de varias disciplinas.", array('name' => 'Arial', 'size' =>10, 'bold' => FALSE, 'lineHeight' => 1.0),array('align' => 'left'));


$seccion->addText("POLÍTICAS DE OPERACIÓN DE LA RESIDENCIA PROFESIONAL", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));


$seccion->addListItem("El proyecto de Residencia Profesional puede realizarse de manera individual, grupal o interdisciplinaria; dependiendo de los requerimientos, condiciones y características del proyecto de la empresa, organismo o dependencia. La Residencia Profesional puede ser realizada a través de proyectos integradores, bajo el esquema de educación dual, entre otros.");
$seccion->addListItem("La Residencia Profesional se realiza en un período de cuatro meses como tiempo mínimo y seis meses como tiempo máximo, debiendo acumularse 500 horas.");
$seccion->addListItem("El proyecto de Residencia Profesional debe ser autorizado por la Jefa o Jefe de División de Ingeniería, previo análisis de la Academia.");
$seccion->addListItem("La academia correspondiente es la encargada de asignar al asesor interno y nombrar nuevo asesor del proyecto de Residencia Profesional, en caso de que el asesor interno asignado no pueda concluir con las actividades de asesoría.");
$seccion->addListItem("Si existe una propuesta de un proyecto por parte del estudiante, debe ser avalado por la Academia y autorizado por la jefa o jefe de División de Ingeniería. ");
$seccion->addListItem("La Residencia Profesional sólo se autoriza en periodos establecidos por el Instituto." );
$seccion->addListItem("Durante la Residencia Profesional, el estudiante deberá realizar actividades únicamente relacionadas a su proyecto de Residencia");


$seccion->addText("FUNCIONES DE LOS ASESORES", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));

$seccion->addListItem("Los asesores interno y externo supervisan el reporte preliminar mediante el formato electrónico que elabora el estudiante");
$seccion->addListItem("Los asesores interno y externo revisan el reporte de residencia profesional y lo evalúan de acuerdo con el formato de evaluación.");
$seccion->addListItem("Los asesores interno y externo, asesoran y supervisan al residente en la solución de problemas y explicación de temas relacionados con el proyecto, en los horarios previamente establecidos y autorizados en su plan de trabajo.");



$seccion->addTextBreak(1);
$seccion->addText("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx", array('name' => 'Arial', 'size' =>7, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));


$seccion->addImage("encabezadoo.png", [
    "width" => 150,
    "height" => 70,
    "wrapDistanceTop" => 0,
   ]);



$seccion->addListItem("Los asesores interno y externo deben comunicarse en al menos cuatro momentos de manera presencial o virtual; la primera para determinar las características del proyecto, las dos posteriores con el propósito de evaluar al residente en dos etapas parciales y la cuarta para la evaluación del reporte de Residencia Profesional");


$seccion->addText("FUNCIONES DEL ESTUDIANTE", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));

$seccion->addListItem("Una vez seleccionado el proyecto de Residencia Profesional el estudiante debe entrevistarse con su asesor interno y externo, para ser orientado en la elaboración de un anteproyecto y estructurar conjuntamente la metodología de trabajo acorde con las expectativas del proyecto.");
$seccion->addListItem("El estudiante debe adjuntar todos los requisitos a la plataforma Institucional de Residencia Profesional.");
$seccion->addListItem("El estudiante debe solicitar la carta de aceptación a la empresa, misma, que contenga: nombre del estudiante, número de control, carrera, nombre del proyecto, las horas a cubrir, el periodo en que lo realizará, modalidad (a distancia, presencial, mixta), si es modalidad presencial o mixta debe contener las medidas de seguridad que implementa la empresa en relación a la pandemia generada por el virus SARS-COV-2.");
$seccion->addListItem("El estudiante es el responsable de cumplir con el proyecto de Residencia Profesional basado en las competencias adquiridas.");
$seccion->addListItem("El estudiante debe cubrir el horario diario de actividades para el desarrollo de su proyecto, previamente establecido con la empresa, organismo o dependencia, en un periodo mínimo de 4 meses y máximo 6 hasta cubrir 500 hrs.");
$seccion->addListItem("El estudiante debe mantener total confidencialidad de la información proporcionada por la empresa y utilizarla solo en el proyecto de Residencia Profesional.");
$seccion->addListItem("El estudiante de Respetar la autonomía administrativa, reglamentos y demás normatividad de la “EMPRESA”.");
$seccion->addListItem("Cumplir con las medidas de seguridad e higiene vigentes en la Empresa para prevenir los riesgos de trabajo”");
$seccion->addListItem("Hacer uso adecuado de las instalaciones, equipo y material de trabajo que se les entregue para la realización de su proyecto");
$seccion->addListItem("Cumplir con los reglamentos académicos y disciplinarios establecidos por el “INSTITUTO”.");
$seccion->addListItem("Al finalizar el proceso de residencia profesional el estudiante solicita a la empresa la carta de terminación de liberación de residencia profesional, la cual contenga: nombre del estudiante, número de control, carrera, nombre del proyecto, las horas que cubrió, el periodo en que realizó el proyecto (hoja membretada de la empresa)");
$seccion->addListItem("El estudiante adjuntará en el sistema de residencia profesional la carta de liberación de residencia profesional en formato pdf. ");

$seccion->addText("FUNCIONES DE LA EMPRESA ", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));


$seccion->addText("La Empresa, organismo o Dependencia debe:", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 0.8),array('align' => 'left'));

$seccion->addText("A) Facilitar el acceso a los residentes del “EL INSTITUTO” para realizar la Residencia Profesional, estableciendo horarios y calendario de realización para tal efecto.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 0.8),array('align' => 'left'));

$seccion->addText("B) Proveer instalaciones, equipo y material adecuados para la realización de las actividades de Residencia Profesional, de acuerdo al proyecto asignado.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 0.8),array('align' => 'left'));



$seccion->addTextBreak(1);
$seccion->addText("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx", array('name' => 'Arial', 'size' =>7, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

   $seccion->addImage("encabezadoo.png", [
    "width" => 150,
    "height" => 70,
    "wrapDistanceTop" => 0,
   ]);
   include'../conexion.php';
   $no_control = $_GET['id'];
   $sql="SELECT  *  FROM tb_residentes
   where  no_control= '$no_control'";
$rec = $mysqli->query($sql);
while($row=mysqli_fetch_array($rec))
{

   $seccion->addText("C) Brindar los primeros auxilios a (él o la practicante), en caso de algún accidente cuando se suscite en las instalaciones de la empresa y de ser necesario su traslado para la atención médica, la (el) estudiante cuenta con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social ".$row['folios'].".", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("D) Conforme a su disponibilidad y normatividad vigente, podrá brindar un apoyo económico y/o en especie en el periodo a ejecutar el proyecto dentro de la empresa (el o la practicante).", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("E) Por circunstancias especiales tales como: huelga, bancarrota, cierre de empresa, organismo o dependencia, cambio de políticas empresariales o cualquier otra causa plenamente justificada, puede solicitar la cancelación y/o reasignación de otro proyecto, notificando por escrito en un máximo de 5 días hábiles al Instituto para dar cumplimiento de la Residencia Profesional. ", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("F) Emitir carta de aceptación Dirigida al/la titular del Departamento de Gestión Tecnológica, Servicio Social y Residencia Profesional.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("G) La carta de aceptación contendrá la modalidad: a distancia, mixta, o presencial, en caso de que sea de manera presencial o mixta mencionar las medidas de seguridad que realiza en atención a emergencia sanitaria provocada por el virus SARS-COV.-2.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));


   $seccion->addText("Disposiciones Generales", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));

}
   $seccion->addText("En caso de no existir, se gestionará la firma de un convenio con el objetivo de fortalecer el compromiso de nuestra Institución de Educación Superior, brindando a los estudiantes conocimientos de vanguardia que cubran las expectativas que la sociedad nos exige.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("Las situaciones no previstas en el presente acuerdo para la operatividad de las Residencias Profesionales, serán analizadas por el comité académico de la escuela como lo establecen los lineamientos para la operación y acreditación de las residencias profesionales en el Sistema Nacional de Educación Superior Tecnológica y presentadas al director del plantel para su dictamen.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));

   $seccion->addText("La vigencia del presente acuerdo corresponde al tiempo de duración del Proyecto de la Residencia Profesional. Firmándose de conformidad a los 19 días del mes de septiembre del 2022.", array('name' => 'Arial', 'size' =>10, 'bold' =>FALSE, 'lineHeight' => 1.0),array('align' => 'justified'));
  
  $sql="SELECT  *  FROM tb_residentes, empresa, asignacionempresa
   where empresa.no_control = asignacionempresa.no_controle AND  asignacionempresa.no_control = tb_residentes.no_control AND tb_residentes.no_control = '$no_control'";
$rec = $mysqli->query($sql);
while($row2=mysqli_fetch_array($rec))
{
   $seccion->addTextBreak(3);
   $seccion->addText("                         C. ROSA ELENA ULIIN BARJAU                                 ".$row2['PersonaAEE']."", array('name' => 'Arial', 'size' =>8, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'justified'));
   
   $seccion->addTextBreak(.3);
   $seccion->addText("                            DIRECCIÒN GENERAL DEL I.T.S.C.S.                                                          ".$row2['PuestoAEE']."", array('name' => 'Arial', 'size' =>8, 'bold' =>FALSE, 'lineHeight' => 1),array('align' => 'justified'));
   
   $seccion->addTextBreak(.3);
   $seccion->addText("                                                                                                                             ".$row2['NombreE']."", array('name' => 'Arial', 'size' =>8, 'bold' =>FALSE, 'lineHeight' => 1),array('align' => 'justified'));
   
   $seccion->addTextBreak(3);
   $seccion->addText("                        C. MARÍA DEL CARMEN MARTÍNEZ ESCOBAR                            ESTUDIANTE:".$row2['nombre']." ".$row2['ap']." ".$row2['am']."", array('name' => 'Arial', 'size' =>8, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'justified'));
   $seccion->addTextBreak(.3);
   $seccion->addText("                                DEPARTAMENTO DE RESIDENCIAS                                                           NO. CONTROL:".$row2['no_control']."", array('name' => 'Arial', 'size' =>8, 'bold' =>FALSE, 'lineHeight' => 1),array('align' => 'justified'));
   $seccion->addTextBreak(.3);
   $seccion->addText("                          PROFESIONALES Y SERVICIO SOCIAL DEL                                                 CARRERA: ".$row2['carrera']."", array('name' => 'Arial', 'size' =>8, 'bold' =>FALSE, 'lineHeight' => 1),array('align' => 'justified'));
   $seccion->addTextBreak(.3);
   $seccion->addText("                                                  I.T.S.C.S", array('name' => 'Arial', 'size' =>8, 'bold' =>FALSE, 'lineHeight' => 1),array('align' => 'justified'));
}
//   $idcarta = $_GET['id'];
//   $sql="SELECT  *  FROM tb_residentes where  no_control  = '$idcarta'";
//   $rec = $mysqli->query($sql);
//   while($row=mysqli_fetch_array($rec))
//   {
//    $seccion->addText("C) Brindar los primeros auxilios a (él o la practicante), en caso de algún accidente cuando se suscite en las instalaciones de la empresa y de ser necesario su traslado para la atención médica, la (el) estudiante cuenta con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social (NUMERO).", array('name' => 'Arial', 'size' =>10, 'bold' =>TRUE, 'lineHeight' => 0.8),array('align' => 'left'));

//   }


$seccion->addTextBreak(3.5);
$seccion->addText("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx", array('name' => 'Arial', 'size' =>7, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));


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