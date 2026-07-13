<?php
 include ('plantilla.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

   //dddddddddddddddddddddddddddddddd
  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',12);
  $pdf->SetXY(20, 30);
   $pdf->Cell(0,5, utf8_decode("SUBDIRECCIÓN ACADÉMICA"),0,1,'C'); 
   $pdf->SetXY(20, 35);
   $pdf->Cell(0,5, utf8_decode("SOLICITUD DE RESIDENCIAS PROFESIONALES"),0,1,'C');


   

   //ññññññññññññññññññ
    //datos de conexion:
  

//mostramos tabla
  


  $pdf->Output();
  
 ?>

