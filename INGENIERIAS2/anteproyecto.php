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





    $pdf->Output();
  
 ?>