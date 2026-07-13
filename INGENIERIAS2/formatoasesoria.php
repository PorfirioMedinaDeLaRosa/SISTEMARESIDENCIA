 
 <?php
 include ('plantillaasesoria.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

  //dddddddddddddddddddddddddddddddd
  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',12);
  $pdf->SetXY(20, 30);
   $pdf->Cell(0,5, utf8_decode("Formato de registro de Asesoría"),0,0,'C');



   //ññññññññññññññññññ
    //datos de conexion:
   

  	  
  	
  
 

 





 $pdf->Output();
 ?>