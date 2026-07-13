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
    "marginBottom" =>100,
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
    "height" => 65,
    "wrapDistanceTop" => 0,
   ]);



   $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   //llllllllllllllll
$seccion->addText("OFICIO: D.R.P.yS.S. (NÚMERO DE OFICIO) /2023", array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'right'));
$seccion->addText("ASUNTO: Carta de presentación y agradecimiento ", array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'right'));
$seccion->addText("Ciudad Serdán, Puebla a ".date('d')." de ".$meses[date('n')-1]." de ".date('Y')."", array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'right'));
include'../conexion.php';
$idcarta = $_GET['id'];
$sql="SELECT  *  FROM  empresa, asignacionempresa 
where empresa.no_control  = asignacionempresa.no_controle AND  asignacionempresa.no_control = '$idcarta'";
$rec = $mysqli->query($sql);
while($row=mysqli_fetch_array($rec))
{
$seccion->addText($row['PersonaCE'], array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'left'));
$seccion->addText($row['PuestoCE'], array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'left'));
$seccion->addText($row['NombreE'], array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'left'));
$seccion->addText("P R E S E N T E ", array('name' => 'Helvetica', 'size' =>10, 'bold' => TRUE, 'lineHeight' => 0.8),array('align' => 'left'));
$seccion->addTextBreak(1);
}
//$idcarta = $_GET['id'];
$sql2="SELECT  *  FROM tb_residentes,  asignacionproyecto , proyectos 
where  asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control = '$idcarta' AND  tb_residentes.no_control  = '$idcarta'";
$rec2 = $mysqli->query($sql2);
while($row2=mysqli_fetch_array($rec2))
{

if($row2['Genero']=='H'){

    $seccion->addText("El Instituto Tecnológico Superior de Ciudad Serdán, tiene a bien presentar a sus finas atenciones a él C. ".$row2['nombre']." ".$row2['ap']." ".$row2['am'].", con número de control ".$row2['no_control']." de la carrera de ".$row2['carrera'].", quien desea desarrollar en ese organismo el proyecto de Residencia Profesional, denominado: ".$row2['nombrep'].", cubriendo un total de 500 horas, en un período comprendido del ".$row2['DiaInicio']." de ".$row2['MesInicio']."  de ".$row2['AnoInicio']."  AL  ".$row2['DiaTermino']." de ".$row2['MesTermino']."  de ".$row2['AnoTermino']."", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));
 
}else{
    $seccion->addText("El Instituto Tecnológico Superior de Ciudad Serdán, tiene a bien presentar a sus finas atenciones a la C. ".$row2['nombre']." ".$row2['ap']." ".$row2['am'].", con número de control ".$row2['no_control']." de la carrera de ".$row2['carrera'].", quien desea desarrollar en ese organismo el proyecto de Residencia Profesional, denominado: ".$row2['nombrep'].", cubriendo un total de 500 horas, en un período comprendido del ".$row2['DiaInicio']." de ".$row2['MesInicio']."  de ".$row2['AnoInicio']."  AL  ".$row2['DiaTermino']." de ".$row2['MesTermino']."  de ".$row2['AnoTermino']."", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));
 
}


$seccion->addTextBreak(.8);
$seccion->addText("Es importante hacer de su conocimiento que todos los estudiantes que se encuentran inscritos en esta institución cuentan con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social ".$row2['folios'].".", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));
}
$seccion->addTextBreak(.8);
$seccion->addText("En caso de que el proyecto se desarrolle de manera presencial, se pide amablemente brinde a la estudiante las medidas de seguridad que salvaguarde su salud, ante la emergencia sanitaria provocada por el virus SARS-Cov. – 2 que prevale a nivel internacional.", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

$seccion->addTextBreak(.8);
$seccion->addText("Así mismo, hacemos patente nuestro sincero agradecimiento por su buena disposición y colaboración para que nuestros estudiantes, aun estando en proceso de formación, desarrollen un proyecto de trabajo profesional, donde puedan aplicar el conocimiento y el trabajo en el campo de acción en el que se desenvolverán como futuros profesionistas. ", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

$seccion->addTextBreak(.8);
$seccion->addText("Al vernos favorecidos con su participación en nuestro objetivo, sólo nos resta manifestarle la seguridad de nuestra más atenta y distinguida consideración. ", array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

$idp = $row2['idproyecto'];

$sql2="SELECT  *  FROM  asesor, numerodeasesores, proyectos
WHERE proyectos.idproyecto = numerodeasesores.IdAS4	 
AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idp' ";
$rec2 = $mysqli->query($sql2);
while($row222=mysqli_fetch_array($rec2))
{

    $seccion->addTextBreak(1);
    $seccion->addText("Nombre del asesor interno: ".$row222['NombreAS'], array('name' => 'Arial', 'size' =>11, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));
    
}

$seccion->addTextBreak(2);
$seccion->addText("A T E N T A M E N T E", array('name' => 'Arial', 'size' =>11, 'bold' => TRUE, 'lineHeight' => 1),array('align' => 'center'));


$seccion->addText("“Tu Esfuerzo Es Gloria, Tu Desempeño Nuestra Victoria'”", array('name' => 'Arial', 'size' =>11, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'center'));



   


$seccion->addTextBreak(2);
$seccion->addText("LIC. MARÍA DEL CARMEN MARTÍNEZ ESCOBAR", array('name' => 'Arial', 'size' =>11, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'center'));
$seccion->addText("ENCARGADA DEL DEPARTAMENTO DE", array('name' => 'Arial', 'size' =>11, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'center'));
$seccion->addText("RESIDENCIAS PROFESIONALES Y SERVICIO SOCIAL", array('name' => 'Arial', 'size' =>11, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'center'));

$seccion->addTextBreak(1);
$seccion->addText("C.c.p. Archivo. ", array('name' => 'Arial', 'size' =>8, 'bold' =>TRUE, 'lineHeight' => 1),array('align' => 'left'));
$seccion->addTextBreak(.5);

$seccion->addTextBreak(2);
$seccion->addText("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270 ", array('name' => 'Arial', 'size' =>8, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

$seccion->addTextBreak(.5);
$seccion->addText("www.tecnm.mx | www.itsciudadserdan.edu.mx", array('name' => 'Arial', 'size' =>8, 'bold' => FALSE, 'lineHeight' => 1),array('align' => 'justified'));

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