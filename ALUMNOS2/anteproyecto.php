
<?php
 include'../conexion.php';
 include ('plantillaanteproyecto.php');

 $pdf = new  PDF('P','mm','A4');
 $pdf->SetMargins(15,20);
  $pdf->AddPage();

   //dddddddddddddddddddddddddddddddd
  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',12);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("SUBDIRECCIÓN ACADÉMICA Y"),0,1,'C');

  $pdf->SetXY(20, 35);
  $pdf->Cell(0,5, utf8_decode("JEFATURAS DE DIVISIÓN"),0,1,'C');

$no_control=$_GET['no_control'];
$periodo=$_GET['periodo'];
$semanas=$_GET['semanas'];

$str = strtoupper($periodo);

 $sql="SELECT proyectos.nombrep, proyectos.objectivo FROM proyectos, asignacionproyecto WHERE proyectos.no_control = asignacionproyecto.no_controlp AND asignacionproyecto.no_control = '$no_control'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->SetXY(20, 40);
  $pdf->Cell(0,5, utf8_decode($str),0,1,'C');

  $pdf->SetXY(20, 50);
  $pdf->Cell(0,5, utf8_decode("Anteproyecto de Residencia Profesional"),0,1,'C');
  $pdf->SetXY(20, 50.1);
  $pdf->Cell(0,5, utf8_decode("___________________________________"),0,1,'C');

  $pdf->SetFont('Arial','B',12);
  $pdf->Ln();
  $pdf->Cell(0,5, utf8_decode("1. Nombre del Proyecto: "),0,1,'la');

  $pdf->SetFont('Arial','',11);
 
  $pdf->MultiCell(185,5,utf8_decode($row['nombrep']));

  $pdf->SetFont('Arial','B',12);

  $pdf->Ln();
  $pdf->Cell(0,5, utf8_decode("2. Objetivo"),0,1,'la');

  $pdf->SetFont('Arial','',12);

  $pdf->Ln();
  $pdf->Cell(0,5, utf8_decode("General"),0,1,'la');

  $pdf->SetFont('Arial','',11);
  
  $pdf->MultiCell(185,6, utf8_decode($row['objectivo']));

}
 
 $q = $mysqli->query("SELECT objectivose.numeroo, objectivose.nombre FROM objectivose, asignacionempresa WHERE objectivose.no_control = asignacionempresa.no_controle AND asignacionempresa.no_control = '$no_control'");
 
$pdf->SetFont('Arial','',12); 
$pdf->Ln();
$pdf->Cell(0,5, utf8_decode("Específicos"),0,1,'la');
$valores=0;
  while($row = mysqli_fetch_array($q))
  {
                //Se crea un arreglo asociativo
             

                           //Se crea un arreglo asociativo
               
              $numero[] = $row;
                     $valores++;  
  
  $pdf->SetFont('Arial','',11);
  $pdf->MultiCell(180,6,  utf8_decode($valores.".-"."".$row['nombre'])); 

            }
        


 

$sql2="SELECT proyectos.nombrep, proyectos.semanas, proyectos.objectivo, proyectos.justificacion, proyectos.problematica FROM proyectos, asignacionproyecto WHERE proyectos.no_control = asignacionproyecto.no_controlp AND asignacionproyecto.no_control = '$no_control'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {



 
   
  $pdf->SetFont('Arial','B',12);
  $pdf->Ln(10);
  $pdf->Cell(0,5, utf8_decode("3. Justificación."),0,1,'la');
  $pdf->SetFont('Arial','',11);
  
  $pdf->MultiCell(180,6, utf8_decode($row2['justificacion']));


  $pdf->Ln(5);
  $pdf->SetFont('Arial','B',12);
 
  $pdf->Cell(0,5, utf8_decode("4. Problemas a Resolver."),0,1,'la');
  $pdf->SetFont('Arial','',11);
  
  $pdf->MultiCell(180,6, utf8_decode($row2['problematica']));


 



}

 
  
  


$q = $mysqli->query("SELECT actividades.actividad,  actividades.descripcion FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 
$pdf->SetFont('Arial','B',12); 
$pdf->Ln();
$pdf->Cell(0,5, utf8_decode("5. Descripción detallada y Cronograma preliminar de actividades"),0,1,'la');

$valores=0;

  while($row = mysqli_fetch_array($q))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row;
       $valores++;

  
  $pdf->SetFont('Arial','',11);
  $pdf->MultiCell(180,6,  utf8_decode($valores.".- ".$row['actividad'].":"." ".$row['descripcion'])); 

            }

$pdf->SetMargins(2,20);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("TABLA DE SECUENCIA DE ACTIVIDADES"),0,1,'C');
$pdf->Ln(10);








$pdf->SetFont('Arial','',11);


$pdf->Cell(5,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(170,6,utf8_decode("ACTIVIDAD A REALIZAR"),1,0,'C');

 $pdf->SetFont('Arial','',8);


$pdf->Cell(14,6,utf8_decode("F INICIO"),1,0,'C');

$pdf->Cell(16.5,6,utf8_decode("F TERMINO"),1,0,'C');
 
$pdf->Ln();


$q2 = $mysqli->query("SELECT actividades.actividad, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(5,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(170,8,utf8_decode($row2['actividad']),1);

$pdf->SetFont('Arial','',7);
$date=date_create($row2['fecha']);
 date_format($date,"d-m-Y ");


 $date2=date_create($row2['fecha_termino']);
 date_format($date2,"d-m-Y ");

$pdf->CellFitSpace(14,8,utf8_decode(date_format($date,"d-m-Y ")),1);

$pdf->CellFitSpace(16.5,8,utf8_decode(date_format($date2,"d-m-Y ")),1);

  $pdf->Ln();

            }


        



$pdf->Ln(10);


$sql2="SELECT proyectos.nombrep, proyectos.semanas, proyectos.fecha, proyectos.objectivo, proyectos.justificacion, proyectos.problematica FROM proyectos, asignacionproyecto WHERE proyectos.no_control = asignacionproyecto.no_controlp AND asignacionproyecto.no_control = '$no_control'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {



 
   $pdf->SetMargins(15,20);
  

 $pdf->Ln(5);
  $pdf->SetFont('Arial','B',12);
 
  $pdf->Cell(0,5, utf8_decode("Fecha De Aceptación"),0,1,'la');
  $pdf->Ln(5);

    $pdf->Cell(0,5, utf8_decode($row2['fecha']),0,1,'la');



}


/*
if ($semanas==16) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');






$pdf->SetFont('Arial','',8);


$pdf->Cell(4,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(120,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(81,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(4,6,utf8_decode(""),1,0,'L');



$pdf->Cell(120,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("18"),1);


$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.fecha,   actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(4,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(120,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana18']),1);








  $pdf->Ln();

            }
}




// DIAGRAMA DE GANT DE SEMANA 17


$pdf->Ln(10);


if ($semanas==17) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(105,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(86.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(105,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.5,6,utf8_decode("19"),1);


$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(105,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5.5,8,utf8_decode($row2['semana19']),1);








  $pdf->Ln();

            }
}




// SEMANAS 18


if ($semanas==18) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(105,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(86.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(105,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);



$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(105,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);








  $pdf->Ln();

            }
}



// SEMANA 19 



if ($semanas==19) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(100,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(91.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(100,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(100,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);








  $pdf->Ln();

            }
}






// SEMANA 20 



if ($semanas==20) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(95,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(96.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(95,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("22"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semana22,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(95,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana22']),1);








  $pdf->Ln();

            }
}




/// SEMANA 21 



if ($semanas==21) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(90,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(101.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(90,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("22"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("23"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semana22,actividades.semana23,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(90,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana22']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana23']),1);







  $pdf->Ln();

            }
}









/// SEMANA 22



if ($semanas==22) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(85,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(106.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(85,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("22"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("23"),1);
$pdf->CellFitSpace(5,6,utf8_decode("24"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semana22,actividades.semana23,actividades.semana24,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(85,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana22']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana23']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana24']),1);







  $pdf->Ln();

            }
}





// SEMANA 23 

if ($semanas==23) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(6,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(80,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(111.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(6,6,utf8_decode(""),1,0,'L');



$pdf->Cell(80,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("22"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("23"),1);
$pdf->CellFitSpace(5,6,utf8_decode("24"),1);
$pdf->CellFitSpace(5,6,utf8_decode("25"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semana22,actividades.semana23,actividades.semana24,actividades.semana25,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(6,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(80,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana22']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana23']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana24']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana25']),1);







  $pdf->Ln();

            }
}


// SEMANAS 24



if ($semanas==24) {
  $pdf->SetFont('Arial','B',12);
  
$pdf->Cell(0,5, utf8_decode("GRAFICA DE GANTT"),0,1,'C');


$pdf->Ln(10);



$pdf->SetFont('Arial','',8);


$pdf->Cell(5,6,utf8_decode("#"),1,0,'L');



$pdf->Cell(84,6,utf8_decode("ACTIVIDAD"),1,0,'C');

 

$pdf->Cell(116.5,6,utf8_decode("SEMANAS"),1,0,'C');


$pdf->Ln();
$pdf->Cell(5,6,utf8_decode(""),1,0,'L');



$pdf->Cell(84,6,utf8_decode(""),1,0,'C');

$pdf->CellFitSpace(3.5,6,utf8_decode("1"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("2"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("3"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("4"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("5"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("6"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("7"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("8"),1);
$pdf->CellFitSpace(3.5,6,utf8_decode("9"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("10"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("11"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("12"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("13"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("14"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("15"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("16"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("17"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("18"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("19"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("20"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("21"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("22"),1);
$pdf->CellFitSpace(5.,6,utf8_decode("23"),1);
$pdf->CellFitSpace(5,6,utf8_decode("24"),1);
$pdf->CellFitSpace(5,6,utf8_decode("25"),1);
$pdf->CellFitSpace(5,6,utf8_decode("26"),1);




$pdf->Ln();

$q2 = $mysqli->query("SELECT actividades.actividad, actividades.semana1,actividades.semana2,
actividades.semana3, actividades.semana4, actividades.semana5, actividades.semana6, actividades.semana7, actividades.semana8, actividades.semana9, actividades.semana10, actividades.semana11,actividades.semana12,actividades.semana13,actividades.semana14,actividades.semana15,actividades.semana16,actividades.semana17,actividades.semana18,actividades.semana19,actividades.semana20,actividades.semana21,actividades.semana22,actividades.semana23,actividades.semana24,actividades.semana25,actividades.semana26,actividades.semanas, actividades.fecha, actividades.fecha_termino FROM actividades, asignacionactividades WHERE actividades.no_control = asignacionactividades.no_controla AND asignacionactividades.no_control = '$no_control' ORDER BY actividades.fecha  ASC ");
 






  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
                //Se crea un arreglo asociativo
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',4);

  
$pdf->Cell(5,8,utf8_decode($valores),1,0,'C');


$pdf->CellFitSpace(84,8,utf8_decode($row2['actividad']),1);


$pdf->Cell(3.5,8,utf8_decode($row2['semana1']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana2']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana3']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana4']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana5']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana6']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana7']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana8']),1);
$pdf->Cell(3.5,8,utf8_decode($row2['semana9']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana10']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana11']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana12']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana13']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana14']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana15']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana16']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana17']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana18']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana19']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana20']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana21']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana22']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana23']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana24']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana25']),1);
$pdf->Cell(5,8,utf8_decode($row2['semana26']),1);







  $pdf->Ln();

            }
}










*/



$pdf->SetFont('Arial','',10);
   


  



$pdf->SetMargins(15,20);
 
            


$pdf->Ln();

/*

$consultap="SELECT  *  FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consultap = $mysqli->query($consultap);
  while($numerop=mysqli_fetch_array($consultap))
  {

 $numeroproyecto=$numerop['no_controlp'];

}




$consultap2="SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
  $consultap2 = $mysqli->query($consultap2);
  while($numerop2=mysqli_fetch_array($consultap2))
  {

 $numeroproyecto2=$numerop2['idproyecto'];

}






$consultap2="SELECT  *  FROM  proyectos WHERE  proyectos.no_control='$numeroproyecto'";
  $consultap2 = $mysqli->query($consultap2);
  while($numerop2=mysqli_fetch_array($consultap2))
  {

 $numeroproyecto2=$numerop2['idproyecto'];

}






$consultap3="SELECT  *  FROM  numerodeasesores WHERE  numerodeasesores.IdAS4='$numeroproyecto2'";
  $consultap3 = $mysqli->query($consultap3);
  while($numerop3=mysqli_fetch_array($consultap3))
  {

 $numeroproyecto3=$numerop3['IdAS4'];

}



$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}









  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];








$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 

  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}
  




$numero2="SELECT * from numerodeasesores  WHERE IdAS4 ='$numeroproyecto3' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);








if ($total == 1) {



  


$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



if ($total ==1) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];








$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}


 $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$numeroproyecto3' ";

$rec = $mysqli->query($sql2);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->CellFitSpace(60,20,utf8_decode($row['NombreAS']),1,0,'C');
 
  }

  $pdf->Ln(10);

}





if ($total ==2) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];








$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}


 $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$numeroproyecto3' ";

$rec = $mysqli->query($sql2);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->CellFitSpace(60,20,utf8_decode($row['NombreAS']),1,0,'C');
 
  }


  $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}}









if ($total ==3) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];


$n_3 = $data[2]['no_control'];





$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}


 $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$numeroproyecto3' ";

$rec = $mysqli->query($sql2);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->CellFitSpace(60,20,utf8_decode($row['NombreAS']),1,0,'C');
 
  }


  $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_3'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}}






if ($total ==4) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];


$n_3 = $data[2]['no_control'];

$n_4 = $data[3]['no_control'];





$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}


 $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$numeroproyecto3' ";

$rec = $mysqli->query($sql2);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->CellFitSpace(60,20,utf8_decode($row['NombreAS']),1,0,'C');
 
  }


  $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_3'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_4'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}}


if ($total ==5) {


  $numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];


$n_3 = $data[2]['no_control'];

$n_4 = $data[3]['no_control'];


$n_4 = $data[4]['no_control'];





$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 

$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  $pdf->CellFitSpace(60,20,utf8_decode($row['AsesorE']),1,0,'C');

}


 $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$numeroproyecto3' ";

$rec = $mysqli->query($sql2);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->CellFitSpace(60,20,utf8_decode($row['NombreAS']),1,0,'C');
 
  }


  $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_3'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_4'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_5'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
 
 $pdf->Ln();
$pdf->SetFont('Arial','B',8);
 
  $pdf->CellFitSpace(60,20,utf8_decode($row['nombre']." ".$row['ap']." ".$row['am']),1,0,'C');
  

}
}}

*/


























































$pdf->Ln(10);














$sql3="SELECT empresa.NombreE, empresa.ubicacion, empresa.CPE, empresa.TipoE, empresa.ActividadesE, empresa.DomicilioE, empresa.ColoniaE, empresa.CiudadE, empresa.EmailE, empresa.AsesorE FROM empresa , asignacionempresa WHERE empresa.no_control = asignacionempresa.no_controle AND asignacionempresa.no_control = '$no_control'";

 $rec3 = $mysqli->query($sql3);
  while($row3=mysqli_fetch_array($rec3))
  {


  $pdf->Ln(5);
  $pdf->SetFont('Arial','B',12);
 
  $pdf->Cell(0,5, utf8_decode("6. Ubicación del lugar donde se desarrollará el proyecto "),0,1,'la');
  $pdf->SetFont('Arial','',11);
   $pdf->Ln(5);
$pdf->MultiCell(180,6, utf8_decode("* ".$row3['ubicacion']));


$pdf->Ln(5);
  $pdf->SetFont('Arial','B',12);
 
  $pdf->Cell(0,5, utf8_decode("7. Información donde se realizará el proyecto."),0,1,'la');
  $pdf->SetFont('Arial','',11);
  $pdf->Ln(5);
  $pdf->MultiCell(180,6, utf8_decode("-Nombre:".""." ".$row3['NombreE']));
  $pdf->MultiCell(180,6, utf8_decode("-Tipo de empresa  o dependencia:  ".""." ".$row3['TipoE']));
  $pdf->MultiCell(180,6, utf8_decode("-Actividades principales: ".""." ".$row3['ActividadesE']));
  $pdf->MultiCell(180,6, utf8_decode("-Dirección:".$row3['DomicilioE']." "."Col.".$row3['ColoniaE'].", ".$row3['CiudadE']."  ". "CP.".$row3['CPE']));
  $pdf->MultiCell(180,6, utf8_decode("-Correo Electrónico, teléfono, Fax: ".""." ".$row3['EmailE']));
  $pdf->MultiCell(180,6, utf8_decode("-Nombre de Asesor Externo:".""." ".$row3['AsesorE'] ));
  
  


$pdf->Ln();






 
  

}


$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);




  $pdf->Ln(10);
  $pdf->SetFont('Arial','B',12);
 
  $pdf->Cell(0,5, utf8_decode("8. Datos completos del alumno"),0,1,'la');
  $pdf->SetFont('Arial','',11);

if ($total==1) {
  

$sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}

$nA_1 = $dataA[0]['no_control'];






}



if ($total==2) {
  

$sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}

$nA_1 = $dataA[0]['no_control'];

$nA_2 = $dataA[1]['no_control'];






}



if ($total==3) {
  

$sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}

$nA_1 = $dataA[0]['no_control'];

$nA_2 = $dataA[1]['no_control'];

$nA_3 = $dataA[2]['no_control'];




}


if ($total==4) {
  

$sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}

$nA_1 = $dataA[0]['no_control'];

$nA_2 = $dataA[1]['no_control'];

$nA_3 = $dataA[2]['no_control'];

$nA_4 = $dataA[3]['no_control'];




}


if ($total==5) {
  

$sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}

$nA_1 = $dataA[0]['no_control'];

$nA_2 = $dataA[1]['no_control'];

$nA_3 = $dataA[2]['no_control'];

$nA_4 = $dataA[3]['no_control'];

$nA_5 = $dataA[4]['no_control'];


}
if ($total==6) {
  

  $sqlA = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  
  
  while($dA = mysqli_fetch_assoc($sqlA))  {$dataA[] = $dA;}
  
  $nA_1 = $dataA[0]['no_control'];
  
  $nA_2 = $dataA[1]['no_control'];
  
  $nA_3 = $dataA[2]['no_control'];
  
  $nA_4 = $dataA[3]['no_control'];
  
  $nA_5 = $dataA[4]['no_control'];
  
  $nA_6 = $dataA[5]['no_control'];
  
  }


if ($total==1) {
  

 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {


 $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row['nombre']." ".$row['ap']." ".$row['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row['calle'].", "."#".$row['noe'].", ".$row['colonia'].", ".$row['municipio'].", ".$row['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row['email']));


  
}}

 
if ($total ==2) {
 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row['nombre']." ".$row['ap']." ".$row['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row['calle'].", "."#".$row['noe'].", ".$row['colonia'].", ".$row['municipio'].", ".$row['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row['email']));




}

$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_2'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row2['nombre']." ".$row2['ap']." ".$row2['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row2['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row2['calle'].", "."#".$row2['noe'].", ".$row2['colonia'].", ".$row2['municipio'].", ".$row2['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row2['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row2['email']));
}}






if ($total ==3) {
 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row['nombre']." ".$row['ap']." ".$row['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row['calle'].", "."#".$row['noe'].", ".$row['colonia'].", ".$row['municipio'].", ".$row['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row['email']));




}

$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_2'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row2['nombre']." ".$row2['ap']." ".$row2['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row2['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row2['calle'].", "."#".$row2['noe'].", ".$row2['colonia'].", ".$row2['municipio'].", ".$row2['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row2['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row2['email']));
}

$sql3=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_3'";

 $rec3 = $mysqli->query($sql3);
  while($row3=mysqli_fetch_array($rec3))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row3['nombre']." ".$row3['ap']." ".$row3['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row3['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row3['calle'].", "."#".$row3['noe'].", ".$row3['colonia'].", ".$row3['municipio'].", ".$row3['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row3['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row3['email']));
}




}




if ($total ==4) {
 $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row['nombre']." ".$row['ap']." ".$row['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row['calle'].", "."#".$row['noe'].", ".$row['colonia'].", ".$row['municipio'].", ".$row['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row['email']));




}

$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_2'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row2['nombre']." ".$row2['ap']." ".$row2['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row2['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row2['calle'].", "."#".$row2['noe'].", ".$row2['colonia'].", ".$row2['municipio'].", ".$row2['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row2['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row2['email']));
}

$sql3=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_3'";

 $rec3 = $mysqli->query($sql3);
  while($row3=mysqli_fetch_array($rec3))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row3['nombre']." ".$row3['ap']." ".$row3['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row3['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row3['calle'].", "."#".$row3['noe'].", ".$row3['colonia'].", ".$row3['municipio'].", ".$row3['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row3['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row3['email']));
}


$sql4=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_4'";

 $rec4 = $mysqli->query($sql4);
  while($row4=mysqli_fetch_array($rec4))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row4['nombre']." ".$row4['ap']." ".$row4['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row4['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row4['calle'].", "."#".$row4['noe'].", ".$row4['colonia'].", ".$row4['municipio'].", ".$row4['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row4['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row4['email']));
}}




if ($total ==6) {
  $sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_1'";
 
  $rec = $mysqli->query($sql);
   while($row=mysqli_fetch_array($rec))
   {
   $pdf->Ln(5);
 
   $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row['nombre']." ".$row['ap']." ".$row['am']));
   $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row['no_control']));
   $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row['calle'].", "."#".$row['noe'].", ".$row['colonia'].", ".$row['municipio'].", ".$row['estado']."."));
   $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row['telefono']));
   $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row['email']));
 
 
 
 
 }
 
 $sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_2'";
 
  $rec2 = $mysqli->query($sql2);
   while($row2=mysqli_fetch_array($rec2))
   {
 
   
   $pdf->Ln(5);
 
   $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row2['nombre']." ".$row2['ap']." ".$row2['am']));
   $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row2['no_control']));
   $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row2['calle'].", "."#".$row2['noe'].", ".$row2['colonia'].", ".$row2['municipio'].", ".$row2['estado']."."));
   $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row2['telefono']));
   $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row2['email']));
 }
 
 $sql3=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_3'";
 
  $rec3 = $mysqli->query($sql3);
   while($row3=mysqli_fetch_array($rec3))
   {
 
   
   $pdf->Ln(5);
 
   $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row3['nombre']." ".$row3['ap']." ".$row3['am']));
   $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row3['no_control']));
   $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row3['calle'].", "."#".$row3['noe'].", ".$row3['colonia'].", ".$row3['municipio'].", ".$row3['estado']."."));
   $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row3['telefono']));
   $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row3['email']));
 }
 
 
 $sql4=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_4'";
 
  $rec4 = $mysqli->query($sql4);
   while($row4=mysqli_fetch_array($rec4))
   {
 
   
   $pdf->Ln(5);
 
   $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row4['nombre']." ".$row4['ap']." ".$row4['am']));
   $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row4['no_control']));
   $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row4['calle'].", "."#".$row4['noe'].", ".$row4['colonia'].", ".$row4['municipio'].", ".$row4['estado']."."));
   $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row4['telefono']));
   $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row4['email']));
 }

 $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_5'";
 
 $rec5 = $mysqli->query($sql5);
  while($row4=mysqli_fetch_array($rec5))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row4['nombre']." ".$row4['ap']." ".$row4['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row4['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row4['calle'].", "."#".$row4['noe'].", ".$row4['colonia'].", ".$row4['municipio'].", ".$row4['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row4['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row4['email']));
}



$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$nA_6'";
 
 $rec6 = $mysqli->query($sql6);
  while($row4=mysqli_fetch_array($rec6))
  {

  
  $pdf->Ln(5);

  $pdf->MultiCell(180,6, utf8_decode("* Nombre: "."".$row4['nombre']." ".$row4['ap']." ".$row4['am']));
  $pdf->MultiCell(180,6, utf8_decode("* No control:"."".$row4['no_control']));
  $pdf->MultiCell(180,6, utf8_decode("* Dirección:"."".$row4['calle'].", "."#".$row4['noe'].", ".$row4['colonia'].", ".$row4['municipio'].", ".$row4['estado']."."));
  $pdf->MultiCell(180,6, utf8_decode("* Teléfono:"." ".$row4['telefono']));
  $pdf->MultiCell(180,6, utf8_decode("* Correo Electrónico: ".$row4['email']));
}



}
 


    $pdf->Output();
  
 ?>





















































































































































































































































































































































































































































































































































































































































































 