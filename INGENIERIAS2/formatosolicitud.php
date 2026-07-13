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
  $pdf->Ln();
  $pdf->SetXY(20, 25);
$pdf->SetFont('Arial','',10);
  //se muestra la tbla

  $pdf->SetXY(20,50);
  $pdf->Cell(0,5, utf8_decode("Lugar:"),0,1,'la');
  $pdf->SetXY(33, 50);
  $pdf->Cell(65,5, utf8_decode("Ciudad Serdán Puebla"),0,1,'la');

  	 //ññññññññññññññññññññ
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  $pdf->SetXY(105,50);
  $pdf->Cell(0,5, utf8_decode("Fecha:"),0,1,'la');
      //llllllllllllllll
  $pdf->SetXY(50, 50);
  $pdf->Cell(0,5,date('d'),0,1,'C');
  $pdf->SetXY(10, 50);
  $pdf->Cell(120,5 , utf8_decode("de "),0,0,'R'); 
  $pdf->SetXY(32, 25);
  $pdf->Cell(117,55 , $meses[date('n')-1],0,1,'R'); 
  $pdf->SetXY(10, 50);
  $pdf->Cell(146,5 , utf8_decode("de "),0,0,'R');
  $pdf->SetXY(10, 25);
   $pdf->Cell(154,55 , date('Y'),0,1,'R');  

   //mmmmmmmmmmmmmmmmmmmmmmmm
  $pdf->SetXY(20,60);
  $pdf->Cell(0,5, utf8_decode("Administrador"),0,0,'la');
  $pdf->SetXY(20,65);
  $pdf->Cell(0,5, utf8_decode("Cargo"),0,0,'la');






 


  $pdf->SetXY(105,60);
  $pdf->Cell(0,5, utf8_decode("ATN: C."),0,0,'la');
  $pdf->SetXY(119, 60);
  $pdf->Cell(62,5,  utf8_decode("Jefe de división"),0,1,'la');

  $pdf->SetXY(105,65);
  $pdf->Cell(0,5, utf8_decode("Jefe(a) de División de la Carrera de"),0,0,'la');
  $pdf->SetXY(105, 69);
  $pdf->Cell(100,5,  utf8_decode("Carrera"),0,1,'la');










 


  	 //cuadros
  $pdf->SetXY(20,76);
  $pdf->Cell(50,10, utf8_decode("NOMBRE DEL PROYECTO:"),1,0,'la');
  $pdf->SetXY(72, 76);
  $pdf->Cell(121,10, "",1,1,'C');
  $pdf->SetXY(70, 77);
  $pdf->MultiCell(121,3, utf8_decode("Nombre del proyecto"));

  	 //nnnnnnnnnnnnnnnnnnnnnnn
  $pdf->SetXY(20,90);
  $pdf->Cell(40,5, utf8_decode("OPCIÓN ELEGIDA:"),1,0,'la');
  $pdf->SetXY(70,90);
 

  $pdf->Cell(35,5, utf8_decode("Banco de Proyectos"),1,0,'la');
  $pdf->SetXY(105,90);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');
 
   //otrocuadro
  
  $pdf->SetXY(70,95);
  $pdf->Cell(35,5, utf8_decode("Proyecto Integrador"),1,0,'la');
  $pdf->SetXY(105,95);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');


  $pdf->SetXY(117,90);
  $pdf->Cell(35,5, utf8_decode("Propuesta propia"),1,0,'la');
  $pdf->SetXY(152,90);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');


 

  $pdf->SetXY(117,95);
  $pdf->Cell(35,5, utf8_decode("Educación Dual"),1,0,'la');
  $pdf->SetXY(152,95);
  $pdf->Cell(7,5, utf8_decode(""),1,0,'la');

   

  $pdf->SetXY(163,90);
  $pdf->Cell(23,5, utf8_decode("Trabajador"),1,0,'la');
  $pdf->SetXY(186,90);
  $pdf->Cell(7,5, utf8_decode(""),1,0,'la');













   //cuadros
  $pdf->SetXY(20,107);
  $pdf->Cell(50,10, utf8_decode("PERIODO PROYECTADO:"),1,0,'la');
  $pdf->SetXY(70, 107);
  $pdf->Cell(75,10, "",1,1,'C');
  $pdf->SetXY(70, 109);
  $pdf->MultiCell(74,2, utf8_decode("Periodo"));
  
  $pdf->SetXY(145,107);
  $pdf->Cell(40,10, utf8_decode("Número de Residentes"),1,0,'la');
  $pdf->SetXY(185, 107);
  $pdf->Cell(7,10, utf8_decode(""),1,1,'C');


 






//DATOS EMPRESA
  	 //ccccccccccccccccccccc
  $pdf->SetXY(20,123);
  $pdf->Cell(40,5, utf8_decode("Datos de la empresa:"),0,0,'la');
  $pdf->SetXY(20,127);
  $pdf->Cell(25,10, utf8_decode("Nombre:"),1,0,'la');
  $pdf->SetXY(45, 127);
  $pdf->Cell(147,10, "",1,0,'C');
  $pdf->SetXY(45, 128);
  $pdf->MultiCell(74,2, utf8_decode(""));

  	 //zzzzzzzzzzzzzzzzzzzzzzz
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,137);
  $pdf->Cell(25,10, utf8_decode(""),1,1,'la');
  $pdf->SetXY(21,139);
  $pdf->MultiCell(23,3, utf8_decode("Giro , Ramo o Sector"));
  $pdf->SetXY(45, 138);
  $pdf->MultiCell(85,3, utf8_decode(""));

   //xxxxxxxxxxxxxxx
  $pdf->SetXY(45, 137);
  $pdf->Cell(85,10, utf8_decode(""),1,0,'la');
  $pdf->SetXY(130, 137);
  $pdf->Cell(15,10, utf8_decode("R.F.C."),1,0,'C');
  $pdf->SetXY(145, 137);
  $pdf->Cell(47,10, "",1,1,'C');
  $pdf->SetXY(145, 137);
  $pdf->Cell(47,10, utf8_decode(""));

  	 //ccccccccccccccccc
  $pdf->SetXY(20,147);
  $pdf->Cell(25,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(45,147);
  $pdf->Cell(147,10, "",1,1,'C');
  $pdf->SetXY(44,148);
  $pdf->MultiCell(110,3, utf8_decode(""));

   //vvvvvvvvvvvvvv
  $pdf->SetXY(20,157);
  $pdf->Cell(25,7, utf8_decode("Colonia:"),1,1,'la');
  $pdf->SetXY(45,157);
  $pdf->Cell(85,7, "",1,1,'C');
  $pdf->SetXY(45,158);
  $pdf->MultiCell(80,3, utf8_decode(""));


  $pdf->SetXY(130,157);
  $pdf->Cell(8,7, utf8_decode("C.P"),1,1,'la');
  $pdf->SetXY(138,157);
  $pdf->Cell(17,7, "",1,1,'C');
  $pdf->SetXY(138,157);
  $pdf->Cell(17,7, utf8_decode(""));

  $pdf->SetXY(155,157);
  $pdf->Cell(10,7, utf8_decode("Tel:"),1,1,'la');
  $pdf->SetXY(165,157);
  $pdf->Cell(27,7,"",1,1,'C');
  $pdf->SetXY(164.5,157);
  $pdf->CellFitSpace(28,7, utf8_decode(""));
//bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbn
  $pdf->SetXY(20,164);
  $pdf->Cell(25,10, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(45,164);
  $pdf->Cell(60,10,"",1,1,'C');

  $pdf->SetXY(45,166);
  $pdf->Cell(60,2,utf8_decode(""));

  $pdf->SetXY(105,164);
  $pdf->Cell(32,10, utf8_decode("Correo Electronico:"),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(137,164);
  $pdf->Cell(55,10, "",1,1,'C');
  $pdf->SetXY(137,165);
  $pdf->MultiCell(55,3, utf8_decode(""));

   //nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
   $pdf->SetFont('Arial','',8);
   $pdf->SetXY(20,174);
   $pdf->CellFitSpace(25,22, utf8_decode("Misión de la Empresa:"),1,1,'la');
   $pdf->SetXY(45,174);
   $pdf->Cell(147,22, "",1,1,'C');
   $pdf->SetXY(45,174);
   $pdf->MultiCell(145,5, utf8_decode(""));

   //mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
   $pdf->SetFont('Arial','',10);
   $pdf->SetXY(20,196);
   
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(21,197);
   $pdf->MultiCell(32,5, "Nombre del Titular de la empresa:");
   
   $pdf->SetXY(54,196);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,197);
   $pdf->MultiCell(63,3, utf8_decode("")); 

   $pdf->SetXY(118,196);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,196);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,197);
   $pdf->MultiCell(60,3, utf8_decode("")); 



   $pdf->SetXY(20,211);
   
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(21,212);
   $pdf->MultiCell(32,4, "Nombre del Asesor(a) Externo(a):");
   
   $pdf->SetXY(54,211);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,212);
   $pdf->MultiCell(63,3, utf8_decode("")); 

   $pdf->SetXY(118,211);
   $pdf->Cell(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,211);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,212);
   $pdf->MultiCell(60,3, utf8_decode("")); 




   $pdf->SetXY(20,226);
   
   $pdf->Cell(34,18, "",1,1,'la');
   $pdf->SetXY(20,227);
   $pdf->MultiCell(34,3, utf8_decode( "Nombre de la persona que firmará el acuerdo de trabajo. Alumno(a)- Escuela-Empresa"));
   
   
   $pdf->SetXY(54,226);
   $pdf->Cell(64,18, "",1,1,'C');
   $pdf->SetXY(54,227);
   $pdf->MultiCell(63,3, utf8_decode("")); 

   $pdf->SetXY(118,226);
   $pdf->CellFitSpace(12,18, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,226);
   $pdf->Cell(62,18, "",1,1,'C');
   $pdf->SetXY(130,227);
   $pdf->MultiCell(60,3, utf8_decode("")); 


 $pdf->SetXY(20,244);
   
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(20,245);
   $pdf->MultiCell(34,3, utf8_decode( "Nombre de la persona a quien se dirige la carta de presentación"));


   $pdf->SetXY(54,244);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,245);
   $pdf->MultiCell(63,3, utf8_decode("")); 


   $pdf->SetXY(118,244);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,244);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,245);
   $pdf->MultiCell(60,3, utf8_decode("")); 
   
   
   //aaaaaaaaaaaaaaaaaaaaaaaaaaa
   

  


//------------------------------------------------------Alumnos 1 ----------------------------

$total=='1';

if ($total=='1') {
  
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode(""));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode(""));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, "",1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode (""));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode(""));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   

  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, "",1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode(""),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, "",1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,3, utf8_decode(""));


}




//------------------------------------------------------Alumnos 2 ----------------------------






  if ($total==2) {
  $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";

 $rec5 = $mysqli->query($sql5);
  while($row5=mysqli_fetch_array($rec5))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row5['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row5['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row5['calle']." "."#".$row5['noe']." "."Col.".$row5['colonia']." ".",".$row5['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row5['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row5['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row5['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row5['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row5['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row5['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row5['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,3, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


}




$sql6=" SELECT tb_residentes.no_control, tb_residentes
.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  



  }



}


//------------------------------------------------------Alumnos 3 ----------------------------




if ($total==3) {
  $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";

 $rec5 = $mysqli->query($sql5);
  while($row5=mysqli_fetch_array($rec5))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
 $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row5['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row5['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row5['calle']." "."#".$row5['noe']." "."Col.".$row5['colonia']." ".",".$row5['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row5['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row5['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row5['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row5['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row5['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row5['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row5['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,3, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


}



$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  


  


}


$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_3'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
 $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(82,120);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));

}


  }



//------------------------------------------------------Alumnos 4 ----------------------------


if ($total==4) {
  $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";

 $rec5 = $mysqli->query($sql5);
  while($row5=mysqli_fetch_array($rec5))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row5['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row5['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row5['calle']." "."#".$row5['noe']." "."Col.".$row5['colonia']." ".",".$row5['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row5['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row5['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row5['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row5['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row5['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row5['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row5['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(80,120);
  $pdf->MultiCell(67,3, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


}



$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  
 $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  


}


$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_3'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(82,120);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));


}




$sql7=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_4'";

 $rec7 = $mysqli->query($sql7);
  while($row7=mysqli_fetch_array($rec7))
  {
//DATOS RESIDENTES
   //hojA 2
  
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row7['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row7['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row7['calle']." "."#".$row7['noe']." "."Col.".$row7['colonia']." ".",".$row7['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row7['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row7['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row7['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row7['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row7['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row7['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row7['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));



}


  }




//------------------------------------------------------Alumnos 5 ----------------------------





if ($total==5) {

  $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";

 $rec5 = $mysqli->query($sql5);
  while($row5=mysqli_fetch_array($rec5))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row5['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row5['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row5['calle']." "."#".$row5['noe']." "."Col.".$row5['colonia']." ".",".$row5['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row5['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row5['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row5['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row5['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row5['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row5['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row5['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(82,120);
  $pdf->MultiCell(67,3, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));



}



$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  
 $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));

}





$sql6=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_3'";

 $rec6 = $mysqli->query($sql6);
  while($row6=mysqli_fetch_array($rec6))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row6['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row6['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row6['calle']." "."#".$row6['noe']." "."Col.".$row6['colonia']." ".",".$row6['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row6['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row6['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row6['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row6['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row6['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row6['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row6['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(82,120);
  $pdf->MultiCell(67,3, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));


}




$sql7=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_4'";

 $rec7 = $mysqli->query($sql7);
  while($row7=mysqli_fetch_array($rec7))
  {
//DATOS RESIDENTES
   //hojA 2
  
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 130);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 132);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
 
  $pdf->SetXY(20,135);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 135);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 137);
  $pdf->MultiCell(100,2, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));




  $pdf->SetXY(20,145);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 145);
  $pdf->Cell(80,10,"",1,1,'la');
  $pdf->SetXY(40, 146);
  $pdf->MultiCell(75,3, utf8_decode($row7['carrera']));
  $pdf->SetXY(120,145);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 145);
  $pdf->CellFitSpace(50,10, $row7['no_control'],1,1,'la');




  $pdf->SetXY(20,155);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 155);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 156);

  $pdf->MultiCell(100,3, utf8_decode ($row7['calle']." "."#".$row7['noe']." "."Col.".$row7['colonia']." ".",".$row7['municipio']));


$pdf->SetXY(20,165);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 165);
  $pdf->MultiCell(55,4, utf8_decode($row7['email']));




  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,165);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,165);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,165);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,165);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row7['seguro']=='IMSS') {
    $pdf->SetXY(128.5,165);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row7['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,163);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row7['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,169);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,178);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 178);
  $pdf->CellFitSpace(40,7, $row7['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,185);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 185);
  $pdf->CellFitSpace(60,15, utf8_decode($row7['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,185);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 185);
  $pdf->CellFitSpace(70,15, $row7['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,210);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,215);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(84,220);
  $pdf->MultiCell(67,3, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));
}




$sql8=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_5'";

 $rec8 = $mysqli->query($sql8);
  while($row8=mysqli_fetch_array($rec8))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 30);
  $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la'); 

   //mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
  $pdf->SetFont('Arial','',10);
  //se muestra la tbla
  
  $pdf->SetXY(20,35);
  $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
  $pdf->SetXY(40, 35);
  $pdf->Cell(0,10, "", 1,1, 'la');
  $pdf->SetXY(40, 37);
  $pdf->MultiCell(100,2, utf8_decode($row8['nombre']." ".$row8['ap']." ".$row8['am']));
  

     //fffffffffff
  $pdf->SetXY(20,45);
  $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
  $pdf->SetXY(40, 45);
  $pdf->Cell(80,10,"",1,1,'la');

  $pdf->SetXY(40, 46);
  $pdf->MultiCell(75,3, utf8_decode($row8['carrera']));




  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row8['no_control'],1,1,'la');




  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row8['calle']." "."#".$row8['noe']." "."Col.".$row8['colonia']." ".",".$row8['municipio']));



     //ssssssssssssssssssssssssssssssssssssss
  $pdf->SetXY(20,65);
  $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->Cell(60,20, "",1,1,'la');
  $pdf->SetXY(40, 65);
  $pdf->MultiCell(55,4, utf8_decode($row8['email']));






  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,65);
  $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
  $pdf->SetXY(100,65);
  $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
  $pdf->SetXY(120,65);
  $pdf->CellFitSpace(30,13, utf8_decode("IMSS (  )"),1,0,'la');
  $pdf->SetXY(150 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (  ) "),0,0,'la');
  $pdf->SetXY(150 ,65);
  $pdf->CellFitSpace(40,20, utf8_decode("OTROS  (  )"),1,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh

   if ($row8['seguro']=='IMSS') {
    $pdf->SetXY(128.5,65);
  $pdf->CellFitSpace(30,13, utf8_decode("x"),0,0,'la');
   }



   if ($row8['seguro']=='ISSSTE') {
   $pdf->SetXY(162 ,63);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


   if ($row8['seguro']=='Otro') {
   $pdf->SetXY(162.7 ,69);
  $pdf->CellFitSpace(40,13, utf8_decode("x"),0,0,'la');
   }


  $pdf->SetXY(120,78);
  $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
  $pdf->SetXY(150, 78);
  $pdf->CellFitSpace(40,7, $row8['folios'],1,1,'la');
     //jjjjjjjjjjjjjjjjjjjj
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,85);
  $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(40, 85);
  $pdf->CellFitSpace(60,15, utf8_decode($row8['estado']),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(100,85);
  $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
  $pdf->SetXY(120, 85);
  $pdf->CellFitSpace(70,15, $row8['telefono'],1,1,'la');



  $pdf->SetFont('Arial','',11);
  $pdf->SetXY(100,110);
  $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
  $pdf->SetXY(100,115);
  $pdf->Cell(20,15, "",0,0,'C');
  $pdf->SetXY(82,120);
  $pdf->MultiCell(67,3, utf8_decode($row8['nombre']." ".$row8['ap']." ".$row8['am']));


}



  }






//hoja 3
    $pdf->SetMargins(20,20);
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);

    $pdf->SetXY(20,30);
   $pdf->Cell(0,5, utf8_decode("INSTRUCTIVO DE LLENADO"),0,1,'C');

   //comienzA CUADRO
    $pdf->SetXY(20,40);
   $pdf->Cell(35,5, utf8_decode("Número"),1,0,'C');
    $pdf->SetXY(55,40);
   $pdf->Cell(0,5, utf8_decode("Descripción"),1,1,'C');
   //fila 1
   $pdf->SetXY(20,45);
   $pdf->Cell(35,5, utf8_decode("1.-"),1,0,'C');
   $pdf->SetXY(55,45);
   $pdf->Cell(0,5, utf8_decode("Anotar la fecha en que se presenta la solicitud."),1,1,'la');
   //fila 2
   $pdf->SetXY(20,50);
   $pdf->Cell(35,10, utf8_decode("2.-"),1,0,'C');
      $pdf->SetXY(55,50);
   $pdf->Cell(0,10, utf8_decode("Anotar el nombre de Jefe (a) de división de carrera a la que pertenece el alumno(a) "),1,0,'la');
   $pdf->SetXY(55,50);
   $pdf->Cell(0,17, utf8_decode(" que solicita la Residencia Profesional."),0,1,'la');

   //fila 3
   $pdf->SetXY(20,60);
   $pdf->Cell(35,5, utf8_decode("3.-"),1,0,'C');
   $pdf->SetXY(55,60);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre de la carrera bajo la responsabilidad del Jefe (a) de división."),1,1,'la');
   //fila 4
    $pdf->SetXY(20,65);
   $pdf->Cell(35,5, utf8_decode("4.-"),1,0,'C');
   $pdf->SetXY(55,65);
   $pdf->Cell(0,5, utf8_decode("Anotar el  nombre del proyecto que se presenta."),1,1,'la');

   //fila5
   $pdf->SetXY(20,70);
   $pdf->Cell(35,5, utf8_decode("5.-"),1,0,'C');
   $pdf->SetXY(55,70);
   $pdf->Cell(0,5, utf8_decode("Marcar con una X según corresponda."),1,1,'la');
   //fila6

   $pdf->SetXY(20,75);
   $pdf->Cell(35,5, utf8_decode("6.-"),1,0,'C');
    $pdf->SetXY(55,75);
   $pdf->Cell(0,5, utf8_decode("Anotar el periodo en el que se desarrollará la residencia profesional."),1,1,'la');

   //fila7
    $pdf->SetXY(20,80);
   $pdf->Cell(35,5, utf8_decode("7.-"),1,0,'C');
    $pdf->SetXY(55,80);
   $pdf->Cell(0,5, utf8_decode("Anotar el número de residentes que se requieren para el desarrollo del proyecto."),1,1,'la');

   //fila 8
   $pdf->SetXY(20,85);
   $pdf->Cell(35,5, utf8_decode("8.-"),1,0,'C');
     $pdf->SetXY(55,85);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre completo de la empresa que recibirá al alumno(a) como residente."),1,1,'la');

   //fila 9
   $pdf->SetXY(20,90);
   $pdf->Cell(35,5, utf8_decode("9.-"),1,0,'C');
    $pdf->SetXY(55,90);
   $pdf->Cell(0,5, utf8_decode("Anotar el Giro ramo o sector de la empresa. "),1,1,'la');

   //fila 10
   $pdf->SetXY(20,95);
   $pdf->Cell(35,5, utf8_decode("10.-"),1,0,'C');
     $pdf->SetXY(55,95);
   $pdf->Cell(0,5, utf8_decode("Anotar el Registro Federal de Contribuyentes de la empresa."),1,1,'la');

   //fila 11
    $pdf->SetXY(20,100);
   $pdf->Cell(35,5, utf8_decode("11.-"),1,0,'C');
     $pdf->SetXY(55,100);
   $pdf->Cell(0,5, utf8_decode("Anotar el domicilio donde se encuentra ubicada la empresa."),1,1,'la');

   //fila 12
   $pdf->SetXY(20,105);
   $pdf->Cell(35,5, utf8_decode("12.-"),1,0,'C');
    $pdf->SetXY(55,105);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre de la colonia donde se localiza la empresa."),1,1,'la');

   //fila 13
   $pdf->SetXY(20,110);
   $pdf->Cell(35,10, utf8_decode("13.-"),1,0,'C');
    $pdf->SetXY(55,110);
   $pdf->Cell(0,10, utf8_decode("Anotar el número del código postal que pertenece a la colonia donde se localiza la"),1,0,'la');
   $pdf->SetXY(55,110);
   $pdf->Cell(0,17, utf8_decode("empresa."),0,1,'la');

   //fila 14
    $pdf->SetXY(20,120);
   $pdf->Cell(35,5, utf8_decode("14.-"),1,0,'C');
     $pdf->SetXY(55,120);
   $pdf->Cell(0,5, utf8_decode("Anotar el número de teléfono de la empresa, incluir el número de la lada."),1,1,'la');

   //fila 15
    $pdf->SetXY(20,125);
   $pdf->Cell(35,5, utf8_decode("15.-"),1,0,'C');
    $pdf->SetXY(55,125);
   $pdf->Cell(0,5, utf8_decode("Anotar la ciudad en la que se encuentra ubicada la empresa."),1,1,'la');

   //fila 16
    $pdf->SetXY(20,130);
   $pdf->Cell(35,5, utf8_decode("16.-"),1,0,'C');
    $pdf->SetXY(55,130);
   $pdf->Cell(0,5, utf8_decode("Anotar el correo electrónico de contacto de la empresa."),1,1,'la');

   //fila 17
    $pdf->SetXY(20,135);
   $pdf->Cell(35,5, utf8_decode("17.-"),1,0,'C');
   $pdf->SetXY(55,135);
   $pdf->Cell(0,5, utf8_decode("Anotar la misión de la empresa."),1,1,'la');

   //fila 18
   $pdf->SetXY(20,140);
   $pdf->Cell(35,5, utf8_decode("18.-"),1,0,'C');
$pdf->SetXY(55,140);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre de la persona de mayor jerarquía en la empresa."),1,1,'la');

   //fila 19
    $pdf->SetXY(20,145);
   $pdf->Cell(35,5, utf8_decode("19.-"),1,0,'C');
   $pdf->SetXY(55,145);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre del puesto que ocupa la persona de mayor jerarquía."),1,1,'la');

   //fila 20
    $pdf->SetXY(20,150);
   $pdf->Cell(35,5, utf8_decode("20.-"),1,0,'C');
   $pdf->SetXY(55,150);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre de la persona que fungirá como asesor(a) externo."),1,1,'la');

   //fila 21
   $pdf->SetXY(20,155);
   $pdf->Cell(35,10, utf8_decode("21.-"),1,0,'C');
$pdf->SetXY(55,155);
   $pdf->Cell(0,10, utf8_decode("Anotar el nombre del puesto que ocupa la persona que fungirá como asesor(a) "),1,0,'la');
   $pdf->SetXY(55,155);
   $pdf->Cell(0,17, utf8_decode("externo."),0,1,'la');

   //filA  22
   $pdf->SetXY(20,165);
   $pdf->Cell(35,5, utf8_decode("22.-"),1,0,'C');
   $pdf->SetXY(55,165);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre de la persona que firmará el acuerdo de trabajo."),1,1,'la');

   //FILA 23
 $pdf->SetXY(20,170);
   $pdf->Cell(35,10, utf8_decode("23.-"),1,0,'C');
   $pdf->SetXY(55,170);
   $pdf->Cell(0,10, utf8_decode("Anotar el nombre del puesto de la persona que firmará el acuerdo de trabajo."),1,0,'la');
    $pdf->SetXY(55,170);
   $pdf->Cell(0,17, utf8_decode("Alumno(a)- Escuela-Empresa"),0,1,'la');

   //fila 24
   $pdf->SetXY(20,180);
   $pdf->Cell(35,10, utf8_decode("24.-"),1,0,'C');
   $pdf->SetXY(55,180);
   $pdf->Cell(0,10, utf8_decode("	Anotar el nombre de la persona a quien se dirigirá la carta de presentación y"),1,0,'la');
   $pdf->SetXY(55,180);
   $pdf->Cell(0,17, utf8_decode("agradecimiento"),0,1,'la');

   //fila 25
   $pdf->SetXY(20,190);
   $pdf->Cell(35,10, utf8_decode("25.-"),1,0,'C');
   $pdf->SetXY(55,190);
   $pdf->Cell(0,10, utf8_decode("Anotar el puesto de la persona a quien se dirige la carta de presentación y "),1,0,'la');
   $pdf->SetXY(55,190);
   $pdf->Cell(0,17, utf8_decode("agradecimiento"),0,1,'la');

   //fila 26
   $pdf->SetXY(20,200);
   $pdf->Cell(35,5, utf8_decode("26.-"),1,0,'C');
    $pdf->SetXY(55,200);
   $pdf->Cell(0,5, utf8_decode("Anotar el nombre del alumno que solicita la residencia profesional. "),1,1,'la');

   //fila 27
   $pdf->SetXY(20,205);
   $pdf->Cell(35,5, utf8_decode("27.-"),1,0,'C');
    $pdf->SetXY(55,205);
   $pdf->Cell(0,5, utf8_decode("Anotar la carrera que cursa el alumno que solicita la residencia profesional."),1,1,'la');

   //fila 28
   $pdf->SetXY(20,210);
   $pdf->Cell(35,5, utf8_decode("28.-"),1,0,'C');
    $pdf->SetXY(55,210);
   $pdf->Cell(0,5, utf8_decode("Anotar el número de control del alumno(a)."),1,1,'la');

   //fila29
   $pdf->SetXY(20,215);
   $pdf->Cell(35,5, utf8_decode("29.-"),1,0,'C');
    $pdf->SetXY(55,215);
   $pdf->Cell(0,5, utf8_decode("Anotar el domicilio del alumno(a)."),1,1,'la');

   // fila 30
     $pdf->SetXY(20,220);
   $pdf->Cell(35,5, utf8_decode("30.-"),1,0,'C');
    $pdf->SetXY(55,220);
   $pdf->Cell(0,5, utf8_decode("Anotar el correo electrónico del alumno(a)."),1,1,'la');

   // fila 31
   $pdf->SetXY(20,225);
   $pdf->Cell(35,10, utf8_decode("31.-"),1,0,'C');
   $pdf->SetXY(55,225);
   $pdf->Cell(0,10, utf8_decode("Marcar Institución de Seguridad Social bajo cuya cobertura se encuentra el "),1,0,'la');
   $pdf->SetXY(55,225);
   $pdf->Cell(0,17, utf8_decode("residente y número."),0,1,'la');

   //fila 32
     $pdf->SetXY(20,235);
   $pdf->Cell(35,5, utf8_decode("32.-"),1,0,'C');
    $pdf->SetXY(55,235);
   $pdf->Cell(0,5, utf8_decode("Anotar la ciudad donde radica el alumno(a)."),1,1,'la');

   //fila 33
    $pdf->SetXY(20,240);
   $pdf->Cell(35,5, utf8_decode("33.-"),1,0,'C');
    $pdf->SetXY(55,240);
   $pdf->Cell(0,5, utf8_decode("Anotar el número de teléfono del alumno(a)."),1,1,'la');

   //fila 34
   $pdf->SetXY(20,245);
   $pdf->Cell(35,5, utf8_decode("34.-"),1,0,'C');
    $pdf->SetXY(55,245);
   $pdf->Cell(0,5, utf8_decode("Anotar nombre, Firma del alumno(a)."),1,1,'la');

   //ultima lines
   $pdf->SetXY(20,250);
   $pdf->Cell(0,5, utf8_decode("En caso de que sea más de un residente repetir la tabla con los datos del residente tantas veces como "),0,1,'la');
    $pdf->SetXY(20,250);
   $pdf->Cell(0,15, utf8_decode("estudiantes estén realizando la residencia profesional (Se repite del punto 26 a 34)"),0,1,'la');




  $pdf->Output();
  
 ?>


