<?php
$nombreAlumno = "";

//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["user_id"];

include ('plantilla.php');
$pdf = new  PDF('P','mm','letter');
$pdf->SetMargins(20,20);
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(20, 32);


include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} 

$pdf->Cell(0,5, utf8_decode("PLAN DE TRABAJO REAL "),0,1,'C'); 
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 37);

include'conexion.php'; 

$no_control= $datos['Ncontrol'];

$sql="SELECT *  FROM  alumnos, carreras, semestre where Ncontrol = '$no_control'
and alumnos.IDCarrera = carreras.IDCarreras  and alumnos.IDSemestre = semestre.IDSemestre";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
$pdf->Cell(0,5, utf8_decode("DATOS DEL ALUMNO"),0,1,'LA'); 

$pdf->SetXY(15,43);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,43);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,7, utf8_decode("Nombre completo: ".$row['NombreAlumno'].'  '.$row['Apellido1Alumno'].'  '.$row['Apellido2Alumno']),0,0,'la');
$nombreAlumno= $row['NombreAlumno']." ".$row['Apellido1Alumno']."  ".$row['Apellido2Alumno'];
$pdf->SetXY(160,43);
$pdf->Cell(15,7, utf8_decode("Edad: ".$row['Edad']." años"),0,0,'la');


$pdf->SetXY(15,50);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,50);
$pdf->Cell(15,7, utf8_decode("Domicilo :  ".$row['CalleAlumno']. ' #'.$row['Noe']. ' '.$row['Colonia']),0,0,'la');

$pdf->SetXY(157,50);
$pdf->Cell(15,7, utf8_decode("Teléfono: ".$row['TelefonoAlumno']),0,0,'la');



$pdf->SetXY(15,57);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,57);
$pdf->Cell(15,7, utf8_decode("Municipio: ".$row['Municipio']),0,0,'la');
$pdf->SetXY(110,57);
$pdf->Cell(15,7, utf8_decode("Estado: ".$row['Estado']),0,0,'la');
$pdf->SetXY(155,57);
$pdf->Cell(15,7, utf8_decode("No. Control: ".$row['Ncontrol']),0,0,'la');


$pdf->SetXY(15,64);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,64);
$pdf->Cell(15,7, utf8_decode("Semestre: ".$row['SemestreAlumno']),0,0,'la');
$pdf->SetXY(90,64);
$pdf->Cell(15,7, utf8_decode("Facebook:".$row['Facebook']),0,0,'la');


$pdf->SetXY(15,71);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,71);
$pdf->Cell(15,7, utf8_decode("Carrera: ".$row['NombreCarrera']),0,0,'la');

 }

 
 $sql222="SELECT * FROM  empresa, asignacion, programa ,  peridosservicio  
 where asignacion.NControlAdmin = empresa.Ncontrol  AND 
  programa.NControl = asignacion.NControlAdmin AND  peridosservicio.idPeriodo = empresa.idPeriodo AND
   asignacion.NControl='$no_control'";
 $rec222 = $mysqli->query($sql222);
  while($rowe=mysqli_fetch_array($rec222))
  {
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 80);
$pdf->Cell(0,5, utf8_decode("DATOS DEL PROGRAMA"),0,1,'LA'); 
$pdf->SetFont('Arial','',8);
$pdf->SetXY(15, 85);
$pdf->MultiCell(185,4,  utf8_decode("Objetivo: ".$rowe['ObejtivoPrograma']),1,'J',0); 
$pdf->SetXY(15, 97);
$pdf->MultiCell(185,3,  utf8_decode("Alcances: ".$rowe['Alcances']),1,'J',0); 
$pdf->SetXY(15, 109);
$pdf->MultiCell(185,3,  utf8_decode("Limitaciones: ".$rowe['Limitaciones']),1,'J',0); 
}




    


 $consulta="SELECT   asignacion.NControlAdmin FROM  asignacion WHERE  asignacion.NControl ='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['NControlAdmin'];

}


  $sql3="SELECT * FROM objetivos , asignacion   where objetivos.NControl = '$numerototal'";
 $rec3 = $mysqli->query($sql3);
  while($rowo=mysqli_fetch_array($rec3))
  {

  }




$pdf->SetFont('Arial','B',10);

$pdf->SetXY(15, 123);
$pdf->Cell(0,5, utf8_decode("CRONOGRAMA DE ACTIVIDADES"),0,1,'LA');

$pdf->Ln(5);
$pdf->SetMargins(5,20);
$pdf->SetXY(5, 130);
$pdf->Cell(7,6,utf8_decode("No."),1,0,'L');
$pdf->Cell(153,6,utf8_decode("Descripción de la actividad"),1,0,'C');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(7,6,utf8_decode("1 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("2 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("3 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("4 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("5 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("6 mes"),1,0,'C');
 
$pdf->Ln();

$q2 = $mysqli->query("SELECT *  FROM actividades,  asignacion  WHERE actividades.NControl = asignacion.NControlAdmin  AND asignacion.NControl = '$no_control' ORDER BY actividades.IDActividad  ASC");
 
  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',7);

$pdf->Cell(7,8,utf8_decode($valores),1,0,'C');
$pdf->SetFont('Arial','',5);
$pdf->CellFitSpace(153,8,utf8_decode($row2['Actividad']),1);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(7,8,utf8_decode($row2['Mes1']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes2']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes3']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes4']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes5']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes6']),1,0,'C');

  $pdf->Ln();

}
$pdf->Ln(5);



$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 35);
$pdf->Cell(0,5, utf8_decode("CRONOGRAMA REAL DE ACTIVIDADES "),0,1,'LA');
$pdf->Ln(10);
$pdf->SetMargins(5,20);
$pdf->SetXY(5, 40);
$pdf->Cell(7,6,utf8_decode("No."),1,0,'L');
$pdf->Cell(153,6,utf8_decode("Descripción de la actividad"),1,0,'C');
$pdf->SetFont('Arial','B',6);
$pdf->Cell(7,6,utf8_decode("1 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("2 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("3 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("4 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("5 mes"),1,0,'C');
$pdf->Cell(7,6,utf8_decode("6 mes"),1,0,'C');
 
$pdf->Ln();
$q2 = $mysqli->query("SELECT *  FROM plantrabajoreal,  asignacion  WHERE plantrabajoreal.NControl = asignacion.NControlAdmin  AND asignacion.NControl = '$no_control' ORDER BY plantrabajoreal.IDActividad  ASC");
$valores=0;
  while($row2 = mysqli_fetch_array($q2))
  {
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',7);

$pdf->Cell(7,8,utf8_decode($valores),1,0,'C');
$pdf->SetFont('Arial','',5);
$pdf->CellFitSpace(153,8,utf8_decode($row2['Actividad']),1);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(7,8,utf8_decode($row2['Mes1']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes2']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes3']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes4']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes5']),1,0,'C');
$pdf->Cell(7,8,utf8_decode($row2['Mes6']),1,0,'C');

  $pdf->Ln();

}
$pdf->Ln(5);

$sql2="SELECT * FROM reporteFinalextenso   where NcontrolA = '$no_control' ";
 $rec2 = $mysqli->query($sql2);
  while($rowe=mysqli_fetch_array($rec2))
  {

    $array_cadenap = strlen($rowe['Conclusion']);

    if($array_cadenap>=0 and $array_cadenap<=399)
      {
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 35);
      $pdf->Cell(0,5, utf8_decode("CONCLUSIÓN: "),0,1,'LA'); 
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 40);
      $pdf->MultiCell(185,5,  utf8_decode($rowe['Conclusion']),0,'J',0);  
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 70);
      $pdf->Cell(0,5, utf8_decode("COMENTARIO:"),0,1,'LA');
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 75);
      $pdf->MultiCell(185,6,  utf8_decode($rowe['comentario']),0,'J',0);    
      }

    if($array_cadenap>=400 and $array_cadenap<=699)
      {
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 35);
      $pdf->Cell(0,5, utf8_decode("CONCLUSIÓN: "),0,1,'LA'); 
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 40);
      $pdf->MultiCell(185,5,  utf8_decode($rowe['Conclusion']),0,'J',0);  
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 100);
      $pdf->Cell(0,5, utf8_decode("COMENTARIO:"),0,1,'LA');
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 105);
      $pdf->MultiCell(185,6,  utf8_decode($rowe['comentario']),0,'J',0);    
      }
      if($array_cadenap>=700 and $array_cadenap<=3000)
      {
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 35);
      $pdf->Cell(0,5, utf8_decode("CONCLUSIÓN: "),0,1,'LA'); 
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 40);
      $pdf->MultiCell(185,5,  utf8_decode($rowe['Conclusion']),0,'J',0);  
      $pdf->SetFont('Arial','B',10);
      $pdf->SetXY(15, 135);
      $pdf->Cell(0,5, utf8_decode("COMENTARIO:"),0,1,'LA');
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(15, 140);
      $pdf->MultiCell(185,6,  utf8_decode($rowe['comentario']),0,'J',0);    
      }
    
   
  }




$pdf->Output();
  
?>