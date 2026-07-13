<?php


 include ('plantillaasesor.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',9);
  $pdf->SetXY(150, 25);


 
 $pdf->Output();
 ?>