 <?php


 include ('plantilla.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',9);
  $pdf->SetXY(150, 25);


  //datos de conexion:
  include'../conexion.php';


$id = $_GET['id'];
//mostramos tabla
  $pdf->Ln(10);
  $pdf->SetXY(20, 30);


//se muestra la tbla
  $sql="SELECT  *  FROM  oficioasesor
       where  idoficio = '$id'";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
//variables del encabezado
   
//llllll

     $pdf->SetXY(20, 36);
     $pdf->Cell(125,5, utf8_decode(" No. De Oficio:"),0,0,'R'); 
     $pdf->Cell(0,5, $row['Numero'],0,0,'la');
    
 ///hjjjjj
     $pdf->SetXY(121, 42);
     $pdf->Cell(50,5, utf8_decode("ASUNTO: Asignación de Asesor(a) Interno(a) de"),0,1,'la'); 

//dfghjkl
     $pdf->SetXY(153, 45);
     $pdf->Cell(50,5, utf8_decode("Residencias Profesionales."),0,1,'la'); 

     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  $pdf->SetXY(22, 25);
   $pdf->Cell(105,55 , utf8_decode("Ciudad Serdán, Puebla a"),0,0,'R'); 
   $pdf->SetXY(24, 42);
   $pdf->Cell(165,21,utf8_decode($row['Fecha2']),0,1,'R');

   $pdf->SetXY(19, 30);
  

  
$nombreasesor = strtoupper($row['Asesor']);

     $pdf->SetXY(20, 70);
      $pdf->Cell(6,5, utf8_decode($nombreasesor),0,0,'la'); 
      


      //IIIIIIIIII
      $pdf->SetXY(20, 75);
      $pdf->Cell(6,5, utf8_decode("DOCENTE DE LA CARRERA DE "),0,0,'la');
        $pdf->SetXY(69, 76.5);

        $str = strtoupper($row['Carrera']);

        $pdf->MultiCell(100,2,  utf8_decode ($str)); 

        //llll
        $pdf->SetXY(20, 82);
        $pdf->Cell(6,5, utf8_decode("P R E S E N T  E."),0,0,'la');

         //aaaaaaaaaaa
        $pdf->SetXY(20, 90);

        $pdf->MultiCell(175,4, utf8_decode("Por este conducto informo a usted que ha sido asignado para fungir como Asesor(a) Interno de Proyecto de Residencias Profesionales que a continuación se describe:  "));
       
    
     
   
    $pdf->SetXY(20, 100);
    $pdf->Cell(60,9, utf8_decode("a) Nombre  del(os)/la(s)  Residente(s):"),1,0,'la');   
    $pdf->Cell(115,9, "" ,1,1,'la');
    $pdf->SetXY(80, 101);
    $pdf->MultiCell(100,3, utf8_decode($row['alumno']));

    $pdf->SetXY(20, 109);
    $pdf->Cell(60,9, utf8_decode("b) Carrera:"),1,0,'la');   
    $pdf->Cell(115,9, "" ,1,1,'la');
    $pdf->SetXY(80, 110);
    $pdf->MultiCell(115,2, utf8_decode($row['Carrera']));


    $pdf->SetXY(20, 118);
    $pdf->Cell(60,11, utf8_decode("c) Nombre del Proyecto:"),1,0,'la');   
    $pdf->Cell(115,11, "" ,1,1,'la');
    $pdf->SetXY(80, 118);
    $pdf->MultiCell(115,3, utf8_decode($row['Proyecto']));


    $pdf->SetXY(20, 129);
    $pdf->Cell(60,8, utf8_decode("d) Periodo de Realización:"),1,0,'la');   
    $pdf->Cell(115,8, "" ,1,1,'la');
    $pdf->SetXY(80, 130);
    $pdf->MultiCell(115,3, utf8_decode($row['Periodo']));


    $pdf->SetXY(20, 137);
    $pdf->Cell(60,7, utf8_decode("e) Empresa:"),1,0,'la');   
    $pdf->Cell(115,7, "" ,1,1,'la');
    $pdf->SetXY(80, 138);
    $pdf->MultiCell(115,2, utf8_decode($row['Empresa']));


    $pdf->SetXY(20, 144);
    $pdf->Cell(60,7, utf8_decode("f) Fecha de Asignación:"),1,0,'la');   
    $pdf->Cell(115,7, "" ,1,1,'la');
    $pdf->SetXY(80, 146);
    $pdf->MultiCell(115,1, utf8_decode($row['Fecha2']));



   
  


  $pdf->SetXY(20, 160);
  $pdf->MultiCell(175,4, utf8_decode("Así mismo, le solicito dar el seguimiento pertinente a la realización del proyecto aplicando el lineamiento establecido para ello, en el procedimiento del SGC para Residencias Profesionales.")); 
   
  $pdf->SetXY(20, 170);
  $pdf->MultiCell(175,4, utf8_decode("Agradezco de antemano su valioso apoyo en esta importante actividad para la formación profesional de nuestro estudiantado.")); 
   

    $pdf->Ln(18);
    $pdf->Cell(0,12, utf8_decode("A T E N T A M E N T E" ),0,1,'C'); 
    $pdf->Ln(-8);
    $pdf->Cell(0,12, utf8_decode("Tu Esfuerzo Es Gloria, Tu Desempeño Nuestra Victoria"),0,1,'C'); 
     $pdf->Ln(10);
     $pdf->Cell(0,12, utf8_decode("_________________________________________"),0,0,'C');
      $pdf->Ln(1); 
      $pdf->Cell(0,18, utf8_decode($row['Jefe']),0,1,'C');
       $pdf->Ln(-14);
       $pdf->Cell(0,18, utf8_decode($row['Cargo']),0,1,'C');
       $pdf->Ln(5);

        $pdf->Cell(0,12, utf8_decode("c.c.p. Expediente de Residencias Profesionales"),0,1,'la');

}
 $pdf->Output();
 ?>