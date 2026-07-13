<?php
 include ('plantilla.php');
include'../conexion.php';
 $pdf = new  PDF();
 $pdf->SetMargins(15,20);
  $pdf->AddPage();
  
  $idcarta = $_GET['id'];


   $sql="SELECT  *  FROM  cartapresentacion
       where  id = '$idcarta'";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  

  

 $pdf->SetFont('Arial','',9);
   $pdf->SetXY(120, 32);
   $pdf->Cell(0,5, utf8_decode($row['oficio']),0,1,'la'); 
   $pdf->SetXY(120, 37);
   $pdf->Cell(0,5, utf8_decode("ASUNTO: Carta de presentación y agradecimiento "),0,1,'la');


   $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   //llllllllllllllll
   $pdf->SetXY(18, 22);
   $pdf->Cell(140,45 , utf8_decode("Ciudad Serdán, Puebla a "),0,0,'R'); 
   $pdf->SetXY(18, 34);
   $pdf->Cell(145,21,date('d'),0,1,'R');
   $pdf->SetXY(23, 22);
   $pdf->Cell(147,45 , utf8_decode("de "),0,0,'R'); 
   $pdf->SetXY(30, 22);
   $pdf->Cell(152,45 , $meses[date('n')-1],0,1,'R'); 
   $pdf->SetXY(38, 22);
   $pdf->Cell(150,45 , utf8_decode("de "),0,0,'R'); 
   $pdf->SetXY(48, 22);
   $pdf->Cell(150,45 , date('Y'),0,1,'R'); 


 $str = ($row['carta']);

 $str1 = ($row['cartapuesto']);

 $str2 = ($row['empresa']);

   $pdf->SetFont('Arial','B',11);
   $pdf->SetXY(20, 50);
   $pdf->Cell(0,5, utf8_decode(strtoupper($str)),0,1,'la'); 
   $pdf->SetXY(20, 55);
   $pdf->Cell(0,5, utf8_decode(strtoupper($str1)),0,1,'la');
   $pdf->SetXY(20, 60);
   $pdf->Cell(0,5, utf8_decode(strtoupper($str2)),0,1,'la');
   $pdf->SetFont('Arial','B',11);
   $pdf->SetXY(20, 67);
   $pdf->Cell(0,5, utf8_decode("P R E S E N T E"),0,1,'la');


$nombrealumno = trim($row['nombre']);


 $carrera2 = trim($row['carrera']);




 $no_control = strtoupper($row['no_control']);


 $proyecto = trim($row['proyecto']);


 $periodo = trim($row['periodo']);





$pdf->SetFont('Arial','',10);
$pdf->SetXY(20, 80);

 
$pdf->MultiCell(170,5, utf8_decode("El Instituto  Tecnológico Superior  de  Ciudad Serdán,  tiene a  bien  presentar  a  sus finas atenciones al 
C .".$nombrealumno.", con número de control ".trim($no_control)." de la carrera de ".$carrera2. ",  quien desea desarrollar en ese organismo el proyecto de Residencia Profesional, denominado: ".$proyecto. ",  cubriendo un total de 500 horas, en un período comprendido del ".$periodo."."),'la');


$seguro = trim($row['seguro']);

$segurof = trim($row['segurof']);

if ($seguro = "IMSS") {

   $pdf->SetXY(20, 113);
   $pdf->MultiCell(170,5, utf8_decode("Es importante hacer de su conocimiento que todos los alumnos que se encuentran inscritos en esta institución cuentan con un seguro contra accidentes personales con la empresa INSTITUTO MEXICANO DEL SEGURO SOCIAL, según número de seguridad social ".$segurof.". "),'la');
}


if ($seguro =="ISSSTE") {

   $pdf->SetXY(20, 113);
   $pdf->MultiCell(170,5, utf8_decode("Es importante hacer de su conocimiento que todos los alumnos que se encuentran inscritos en esta institución cuentan con un seguro contra accidentes personales con la empresa INSTITUTO DE SEGURIDAD Y SERVICIOS SOCIALES DE LOS TRABAJADORES DEL ESTADO, según número de seguridad social ".$segurof.". "),'la');

}


$pdf->SetXY(20, 132);
   $pdf->MultiCell(170,5, utf8_decode("En caso de que el proyecto se desarrolle de manera presencial, se pide amablemente brinde al (a la) estudiante las medidas de seguridad que salvaguarde su salud, ante la emergencia sanitaria provocada por el virus SARS-Cov. 2. que prevale a nivel internacional."),'la');



 $pdf->SetXY(20, 147.5);
   $pdf->MultiCell(170,5, utf8_decode("Así mismo, hacemos patente nuestro sincero agradecimiento por su buena disposición y colaboración para que nuestros estudiantes, aun estando en proceso de formación, desarrollen un proyecto de trabajo profesional, donde puedan aplicar el conocimiento y el trabajo en el campo de acción en el que se desenvolverán como futuros profesionistas. 
   "),'la');



 $pdf->SetXY(20, 170);
   $pdf->MultiCell(170,5, utf8_decode("Al vernos favorecidos con su participación en nuestro objetivo, sólo nos resta manifestarle la seguridad de nuestra más atenta y distinguida consideración. 

"),'la');

$idcarta = $_GET['id'];
$sql2="SELECT  *  FROM tb_residentes,  asignacionproyecto , proyectos 
where  asignacionproyecto.no_controlp = proyectos.no_control AND asignacionproyecto.no_control = ' $no_control' AND  tb_residentes.no_control  = '$no_control'";
$rec2 = $mysqli->query($sql2);
while($row2=mysqli_fetch_array($rec2))
{

   $idp = $row2['idproyecto'];
  


}

$sql2="SELECT  *  FROM  asesor, numerodeasesores, proyectos
WHERE proyectos.idproyecto = numerodeasesores.IdAS4	 
AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idcarta' ";
$rec2 = $mysqli->query($sql2);
while($row222=mysqli_fetch_array($rec2))
{

   $pdf->SetXY(20, 182);
   $pdf->Cell(0,5, utf8_decode("Nombre del asesor interno: ".ucwords($row222['NombreAS'])),0,1,'la');
   $pdf->SetXY(20, 189);
   $pdf->Cell(0,5, utf8_decode("Correo electrónico: ".$row222['EmailAS']),0,1,'la');

}


$pdf->SetFont('Arial','B',11);
$pdf->SetXY(20, 200);
   $pdf->Cell(0,5, utf8_decode("A T E N T A M E N T E"),0,1,'C');
   $pdf->SetXY(20, 205);
   $pdf->Cell(0,5, utf8_decode('"Tu Esfuerzo Es Gloria, Tu Desempeño Nuestra Victoria"'),0,1,'C');

   }
//$pdf->Image('firmabien.png',33,207,28);


//$pdf->Image('logobien.png',131,203,28);

 $sql2="SELECT  *  FROM  gestion
      ";
 $rec2= $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {
  


   $pdf->SetXY(20, 232);
   $pdf->Cell(0,5, utf8_decode($row2['NombreGT']),0,1,'C');



}




$pdf->SetXY(20, 237);

$pdf->Cell(0,5, utf8_decode("ENCARGADA DEL DEPARTAMENTO DE"),0,1,'C');
$pdf->SetXY(20, 242);


$pdf->Cell(0,5, utf8_decode("RESIDENCIAS PROFESIONALES Y SERVICIO SOCIAL"),0,1,'C');
   

$pdf->SetFont('Arial','',7);


$pdf->SetXY(20, 255);

$pdf->Cell(0,5, utf8_decode("C.c.p. Archivo."),0,1,'la');

$pdf->SetFont('Arial','',7);
$pdf->SetXY(20, 266);
$pdf->Cell(0,5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270 "),0,1,'la');
$pdf->SetXY(20, 270);
$pdf->Cell(0,5, utf8_decode("www.tecnm.mx | www.itsciudadserdan.edu.mx"),0,1,'la');



 $pdf->Output();
  
 ?>