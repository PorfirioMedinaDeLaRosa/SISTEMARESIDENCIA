<?php
 include ('plantillareporte.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
 $pdf->AddPage();

 $pdf->Output();
  
 ?>