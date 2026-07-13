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
  mysql_connect("localhost","root","");
  mysql_select_db("registrouno");


//mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
$pdf->SetFont('Arial','',10);
  //se muestra la tbla
  $sql="SELECT * FROM solicitud where id='3'";
  $rec=mysql_query($sql);
  while($row=mysql_fetch_array($rec))
  {
  	 $pdf->SetXY(20,50);
   $pdf->Cell(0,5, utf8_decode("Lugar:"),0,1,'la');
   $pdf->SetXY(30, 50);
  	 $pdf->Cell(65,5, $row['lugar'],1,1,'la');

  	 //ññññññññññññññññññññ
  	  $pdf->SetXY(105,50);
   $pdf->Cell(0,5, utf8_decode("Fecha:"),0,1,'la');
      //llllllllllllllll
   $pdf->SetXY(118, 50);
   $pdf->Cell(0,5,date('d/m/Y'),1,1,'C');

   //mmmmmmmmmmmmmmmmmmmmmmmm
   $pdf->SetXY(20,60);
   $pdf->Cell(0,5, utf8_decode("C. Mtro. Jesús Octavio Contreras Cruz"),0,0,'la');
    $pdf->SetXY(105,60);
   $pdf->Cell(0,5, utf8_decode("AT’N: C."),0,0,'la');
   $pdf->SetXY(121, 60);
  	 $pdf->Cell(65,5, $row['jefe'],1,1,'la');

  	 //zzzzzzzzzzzzzzzzzzzzz
  	 $pdf->SetXY(20,65);
   $pdf->Cell(0,5, utf8_decode("Subdirector Académico"),0,0,'la');
    $pdf->SetXY(80,65);
   $pdf->Cell(0,5, utf8_decode("Jefe(a) de División de la Carrera de:"),0,0,'la');
     $pdf->SetXY(138, 65);
  	 $pdf->Cell(53,5, $row['carrera'],1,1,'la');

  	 //cuadros
  	 $pdf->SetXY(20,75);
   $pdf->Cell(50,10, utf8_decode("NOMBRE DEL PROYECTO:"),1,0,'la');
    $pdf->SetXY(80, 75);
  	 $pdf->Cell(113,10, $row['nomPr'],1,1,'C');

  	 //nnnnnnnnnnnnnnnnnnnnnnn
  	  $pdf->SetXY(20,90);
   $pdf->Cell(40,5, utf8_decode("OPCIÓN ELEGIDA:"),1,0,'la');
    $pdf->SetXY(70,90);
   $pdf->Cell(35,5, utf8_decode("Banco de Proyectos"),1,0,'la');
   $pdf->SetXY(105,90);
   $pdf->Cell(7,5, utf8_decode(""),1,0,'la');
   //otrocuadro
    $pdf->SetXY(70,95);
   $pdf->Cell(35,5, utf8_decode("Proyecto Integrador"),1,0,'la');
   $pdf->SetXY(105,95);
   $pdf->Cell(7,5, utf8_decode(""),1,0,'la');
   //kkkkkkkkkkkkkkk
     $pdf->SetXY(117,90);
   $pdf->Cell(35,5, utf8_decode("Propuesta propia"),1,0,'la');
   $pdf->SetXY(152,90);
   $pdf->Cell(7,5, utf8_decode(""),1,0,'la');
   //bbbbbbbbbbbbbb
    $pdf->SetXY(117,95);
   $pdf->Cell(35,5, utf8_decode("Educación Dual"),1,0,'la');
   $pdf->SetXY(152,95);
   $pdf->Cell(7,5, utf8_decode(""),1,0,'la');
   //vvvvvvvvvvvvvvvvv
   $pdf->SetXY(163,90);
   $pdf->Cell(23,5, utf8_decode("Trabajador"),1,0,'la');
   $pdf->SetXY(186,90);
   $pdf->Cell(7,5, utf8_decode(""),1,0,'la');



   //cuadros
  	 $pdf->SetXY(20,107);
   $pdf->Cell(50,10, utf8_decode("PERIODO PROYECTADO:"),1,0,'la');
   $pdf->SetXY(75, 107);
  	 $pdf->Cell(70,10, $row['periodo'],1,1,'C');
  	  $pdf->SetXY(145,107);
   $pdf->Cell(40,10, utf8_decode("Número de Residentes"),1,0,'la');
   $pdf->SetXY(185, 107);
  	 $pdf->Cell(7,10, $row['nResi'],1,1,'C');

  	 //ccccccccccccccccccccc
  	 $pdf->SetXY(20,123);
   $pdf->Cell(40,5, utf8_decode("Datos de la empresa:"),0,0,'la');
   $pdf->SetXY(20,127);
   $pdf->Cell(25,10, utf8_decode("Nombre:"),1,0,'la');
   $pdf->SetXY(45, 127);
  	 $pdf->Cell(147,10, $row['nomE'],1,1,'C');

  	 //zzzzzzzzzzzzzzzzzzzzzzz
  	 $pdf->SetFont('Arial','',10);
  	  $pdf->SetXY(20,137);
   $pdf->Cell(25,10, utf8_decode("Giro, Ramo "),1,1,'la');
   $pdf->Cell(25,-3, utf8_decode("o Sector:"),0,0,'la');

   //xxxxxxxxxxxxxxx
    $pdf->SetXY(45, 137);
     $pdf->Cell(85,10, utf8_decode(""),1,0,'la');
     $pdf->SetXY(130, 137);
     $pdf->Cell(15,10, utf8_decode("R.F.C."),1,0,'C');
      $pdf->SetXY(145, 137);
  	 $pdf->Cell(47,10, $row['rfc'],1,1,'C');

  	 //ccccccccccccccccc
  	  $pdf->SetXY(20,147);
   $pdf->Cell(25,10, utf8_decode("Domicilio:"),1,1,'la');
   $pdf->SetXY(45,147);
   $pdf->Cell(147,10, $row['dom'],1,1,'C');

   //vvvvvvvvvvvvvv
     $pdf->SetXY(20,157);
   $pdf->Cell(25,7, utf8_decode("Colonia:"),1,1,'la');
   $pdf->SetXY(45,157);
   $pdf->CellFitSpace(85,7, $row['col'],1,1,'C');
   $pdf->SetXY(130,157);
   $pdf->Cell(10,7, utf8_decode("C. P"),1,1,'la');
   $pdf->SetXY(140,157);
   $pdf->CellFitSpace(15,7, $row['cp'],1,1,'C');
   $pdf->SetXY(155,157);
   $pdf->Cell(10,7, utf8_decode("Tel:"),1,1,'la');
   $pdf->SetXY(165,157);
   $pdf->CellFitSpace(27,7, $row['tel'],1,1,'C');
//bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbn
     $pdf->SetXY(20,164);
   $pdf->Cell(25,10, utf8_decode("Ciudad:"),1,1,'la');
   $pdf->SetXY(45,164);
   $pdf->CellFitSpace(70,10, $row['ciudad'],1,1,'C');
        $pdf->SetXY(115,164);
   $pdf->Cell(32,10, utf8_decode("Correo Electronico:"),1,1,'la');
    $pdf->SetFont('Arial','',8);
   $pdf->SetXY(147,164);
   $pdf->CellFitSpace(45,10, $row['correo'],1,1,'C');

   //nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
   $pdf->SetFont('Arial','',8);
   $pdf->SetXY(20,174);
   $pdf->CellFitSpace(25,22, utf8_decode("Misión de la Empresa:"),1,1,'la');
   $pdf->SetXY(45,174);
   $pdf->CellFitSpace(147,22, $row['miEm'],1,1,'C');

   //mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
   $pdf->SetFont('Arial','',8);
   $pdf->SetXY(20,196);
   $pdf->CellFitSpace(25,15, utf8_decode("Nombre del Titular "),1,1,'la');
   $pdf->CellFitSpace(25,-5, utf8_decode("de la empresa:"),0,1,'la');
   $pdf->SetXY(45,196);
   $pdf->CellFitSpace(73,15, $row['NomTituE'],1,1,'C');
   $pdf->SetXY(118,196);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,196);
   $pdf->CellFitSpace(62,15, $row['puestoT'],1,1,'C');

   //aaaaaaaaaaaaaaaaaaaaaaaaaaa
   $pdf->SetXY(20,211);
   $pdf->CellFitSpace(30,15, utf8_decode("Nombre del Asesor(a) "),1,1,'la');
   $pdf->CellFitSpace(30,-5, utf8_decode("Externo(a):"),0,1,'la');
   $pdf->SetXY(50,211);
   $pdf->CellFitSpace(68,15, $row['nomAseE'],1,1,'C');
   $pdf->SetXY(118,211);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,211);
   $pdf->CellFitSpace(62,15, $row['puestoE'],1,1,'C');

   //sssssssssssssssssssssssssss
   $pdf->SetXY(20,226);
   $pdf->CellFitSpace(35,17, utf8_decode("Nombre de la persona a quien"),1,1,'la');
   $pdf->SetXY(20,226);
   $pdf->CellFitSpace(35,24, utf8_decode("firmará el acuerdo de trabajo"),0,1,'la');
   $pdf->SetXY(20,226);
   $pdf->CellFitSpace(35,30, utf8_decode("Alumno(a)- Escuela-Empresa"),0,1,'la');


   $pdf->SetXY(55,226);
   $pdf->CellFitSpace(63,17, $row['NomperFiA'],1,1,'C');
   $pdf->SetXY(118,226);
   $pdf->CellFitSpace(12,17, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,226);
   $pdf->CellFitSpace(62,17, $row['puestoFiA'],1,1,'C');

   //ddddddddddddddddddddd
    $pdf->SetXY(20,243);
   $pdf->CellFitSpace(35,17, utf8_decode("Nombre de la persona a quien"),1,1,'la');
   $pdf->SetXY(20,243);
   $pdf->CellFitSpace(35,24, utf8_decode("se dirige la carta de"),0,1,'la');
   $pdf->SetXY(20,243);
   $pdf->CellFitSpace(35,30, utf8_decode("presentación"),0,1,'la');
   $pdf->SetXY(55,243);
   $pdf->CellFitSpace(63,17, $row['NomPersoDicarta'],1,1,'C');
   $pdf->SetXY(118,243);
   $pdf->CellFitSpace(12,17, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,243);
   $pdf->CellFitSpace(62,17, $row['puestoDicarta'],1,1,'C');

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
  $sql="SELECT * FROM datos where id='3'";
  $rec=mysql_query($sql);
  while($row=mysql_fetch_array($rec))
  {
  	$pdf->SetXY(20,35);
   $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
   $pdf->SetXY(40, 35);
  	 $pdf->CellFitSpace(0,10, $row['nombreR'],1,1,'la');

  	 //fffffffffff
  	 $pdf->SetXY(20,45);
   $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
    $pdf->SetXY(40, 45);
  	 $pdf->CellFitSpace(80,10, $row['carreraR'],1,1,'la');
  	 $pdf->SetXY(120,45);
   $pdf->CellFitSpace(20,10, utf8_decode("No. de control:"),1,1,'la');
   $pdf->SetXY(140, 45);
  	 $pdf->CellFitSpace(50,10, $row['numeroConRe'],1,1,'la');
  	  $pdf->SetXY(20,55);
   $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
   $pdf->SetXY(40, 55);
  	 $pdf->CellFitSpace(0,10, $row['domR'],1,1,'la');
  	 //ssssssssssssssssssssssssssssssssssssss
  	   $pdf->SetXY(20,65);
   $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
   $pdf->SetXY(40, 65);
  	 $pdf->CellFitSpace(60,20, $row['email'],1,1,'la');

  	 $pdf->SetFont('Arial','',8);
  	 $pdf->SetXY(100,65);
   $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
    $pdf->SetXY(100,65);
   $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
   $pdf->SetXY(120,65);
   $pdf->CellFitSpace(30,13, utf8_decode("IMSS (      )"),1,0,'la');
    $pdf->SetXY(150	,65);
   $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (     ) "),1,0,'la');
    $pdf->SetXY(150	,65);
   $pdf->CellFitSpace(40,20, utf8_decode("OTROS(     )"),0,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh
   $pdf->SetXY(120,78);
   $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
   $pdf->SetXY(150, 78);
  	 $pdf->CellFitSpace(40,7, $row['nSeguro'],1,1,'la');
  	 //jjjjjjjjjjjjjjjjjjjj
  	 $pdf->SetFont('Arial','',10);
  	  $pdf->SetXY(20,85);
   $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
    $pdf->SetXY(40, 85);
  	 $pdf->CellFitSpace(60,15, $row['ciudad'],1,1,'la');
  	 	 $pdf->SetFont('Arial','',8);
  	 $pdf->SetXY(100,85);
   $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
   $pdf->SetXY(120, 85);
  	 $pdf->CellFitSpace(70,15, $row['telR'],1,1,'la');

  	 //otro cuadro
  	  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 135);
   $pdf->Cell(0,5, utf8_decode("Datos del/la Residente:"),0,1,'la');
$pdf->SetFont('Arial','',10);
	$pdf->SetXY(20,140);
   $pdf->Cell(20,10, utf8_decode("Nombre:"),1,1,'la');
   $pdf->SetXY(40, 140);
  	 $pdf->CellFitSpace(0,10, $row['nombreR'],1,1,'la');
  	 //ññññññññññññññ
  	 $pdf->SetXY(20,150);
   $pdf->Cell(20,10, utf8_decode("Carrera:"),1,1,'la');
    $pdf->SetXY(40, 150);
  	 $pdf->CellFitSpace(80,10, $row['carreraR'],1,1,'la');
  	 $pdf->SetXY(120,150);
   $pdf->CellFitSpace(20,10, utf8_decode("No. de control:"),1,1,'la');
   $pdf->SetXY(140, 150);
  	 $pdf->CellFitSpace(50,10, $row['numeroConRe'],1,1,'la');
  	 //jjjjjjjjjjjjjj
  	 	  $pdf->SetXY(20,160);
   $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
   $pdf->SetXY(40, 160);
  	 $pdf->CellFitSpace(0,10, $row['domR'],1,1,'la');

  	  //ssssssssssssssssssssssssssssssssssssss
  	   $pdf->SetXY(20,170);
   $pdf->Cell(20,20, utf8_decode("E-mail:"),1,1,'la');
   $pdf->SetXY(40, 170);
  	 $pdf->CellFitSpace(60,20, $row['email'],1,1,'la');

  	 $pdf->SetFont('Arial','',8);
  	 $pdf->SetXY(100,170);
   $pdf->CellFitSpace(20,20, utf8_decode("Para Seguridad"),1,0,'la');
    $pdf->SetXY(100,170);
   $pdf->Cell(20,30, utf8_decode("Social acudir"),0,0,'la');
   //ppppppppppppppppppppppppppppppp
   $pdf->SetXY(120,170);
   $pdf->CellFitSpace(30,13, utf8_decode("IMSS (      )"),1,0,'la');
    $pdf->SetXY(150	,170);
   $pdf->CellFitSpace(40,13, utf8_decode("ISSSTE (     ) "),1,0,'la');
    $pdf->SetXY(150	,170);
   $pdf->CellFitSpace(40,20, utf8_decode("OTROS(     )"),0,0,'la');

   //hhhhhhhhhhhhhhhhhhhhhhhhhhhhh
   $pdf->SetXY(120,183);
   $pdf->CellFitSpace(30,7, utf8_decode("No.:"),1,0,'la');
   $pdf->SetXY(150, 183);
  	 $pdf->CellFitSpace(40,7, $row['nSeguro'],1,1,'la');

  	  	 //jjjjjjjjjjjjjjjjjjjj
  	 $pdf->SetFont('Arial','',10);
  	  $pdf->SetXY(20,190);
   $pdf->Cell(20,15, utf8_decode("Ciudad:"),1,1,'la');
    $pdf->SetXY(40, 190);
  	 $pdf->CellFitSpace(60,15, $row['ciudad'],1,1,'la');
  	 	 $pdf->SetFont('Arial','',8);
  	 $pdf->SetXY(100,190);
   $pdf->CellFitSpace(20,15, utf8_decode("Teléfono celular"),1,0,'la');
   $pdf->SetXY(120, 190);
  	 $pdf->CellFitSpace(70,15, $row['telR'],1,1,'la');




  }
$pdf->SetFont('Arial','',11);
   $pdf->SetXY(100,110);
   $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
   $pdf->SetXY(100,115);
   $pdf->Cell(20,15, utf8_decode("Firma del alumno(a)"),0,0,'C');


   $pdf->SetFont('Arial','',11);
   $pdf->SetXY(100,215);
   $pdf->Cell(20,15, utf8_decode("__________________________________"),0,0,'C');
   $pdf->SetXY(100,220);
   $pdf->Cell(20,15, utf8_decode("Firma del alumno(a)"),0,0,'C');

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


























  }

  $pdf->Output();
 ?>


