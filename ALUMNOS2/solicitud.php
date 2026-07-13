 <?php
 include ('plantilla.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

   //dddddddddddddddddddddddddddddddd
  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',12);
  $pdf->SetXY(20, 32);
   $pdf->Cell(0,5, utf8_decode("SUBDIRECCIÓN ACADÉMICA"),0,1,'C'); 
   $pdf->SetXY(20, 37);
   $pdf->Cell(0,5, utf8_decode("SOLICITUD DE RESIDENCIAS PROFESIONALES"),0,1,'C');


   

   //ññññññññññññññññññ
    //datos de conexion:
 

//mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 25);
$pdf->SetFont('Arial','',10);
  //se muestra la tbla
 include'../conexion.php'; 

$no_control=$_GET['no_control'];
$carrera=$_GET['carrera'];
 
  $sql="SELECT admin.NCompletoA, admin.CargoA FROM admin where idA = '1'";

 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
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
  $pdf->SetXY(20,57);
  $pdf->Cell(0,5, utf8_decode($row['NCompletoA']),0,0,'la');
  $pdf->SetXY(25,62);
  $pdf->Cell(0,5, utf8_decode($row['CargoA']),0,0,'la');


}



 $sql2="SELECT divisiones.NombreD, divisiones.CarreraD,  divisiones.CargoD FROM divisiones WHERE divisiones.CarreraD='$carrera'";

 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {


  $pdf->SetXY(105,56);
  $pdf->Cell(0,5, utf8_decode("ATN: C."),0,0,'la');
  $pdf->SetXY(119, 56);
  $pdf->Cell(62,5,  utf8_decode($row2['NombreD']),0,1,'la');

  $pdf->SetXY(105,61);
  $pdf->Cell(0,5, utf8_decode("Jefe(a) de División de la Carrera de"),0,0,'la');
  $pdf->SetXY(105, 66);
  $pdf->Cell(100,5,  utf8_decode($row2['CarreraD']),0,1,'la');


}



$sql3="SELECT proyectos.nombrep, proyectos.opcion, proyectos.periodop , proyectos.fechatermino,  proyectos.DiaInicio, proyectos.MesInicio, proyectos.AnoTermino, proyectos.DiaTermino, proyectos.MesTermino, proyectos.AnoInicio FROM proyectos, asignacionproyecto 
WHERE proyectos.no_control = asignacionproyecto.no_controlp AND asignacionproyecto.no_control= 
'$no_control'";

 $consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);



if ($total==1) {
  

$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];






}



if ($total==2) {
  

$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];






}



if ($total==3) {
  

$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];

$n_3 = $data[2]['no_control'];




}


if ($total==4) {
  

$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];

$n_3 = $data[2]['no_control'];

$n_4 = $data[3]['no_control'];




}


if ($total==5) {
  

$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];

$n_2 = $data[1]['no_control'];

$n_3 = $data[2]['no_control'];

$n_4 = $data[3]['no_control'];

$n_5 = $data[4]['no_control'];




}



 $rec3 = $mysqli->query($sql3);
  while($row3=mysqli_fetch_array($rec3))
  {


  	 //cuadros
  $pdf->SetXY(20,72);
  $pdf->Cell(50,10, utf8_decode("NOMBRE DEL PROYECTO:"),1,0,'la');
  $pdf->SetXY(72, 72);
  $pdf->Cell(121,17, "",1,1,'C');
  $pdf->SetXY(72, 73);
  $pdf->MultiCell(121,3, utf8_decode($row3['nombrep']));

  	 //nnnnnnnnnnnnnnnnnnnnnnn
  $pdf->SetXY(20,90);
  $pdf->Cell(40,5, utf8_decode("OPCIÓN ELEGIDA:"),1,0,'la');
  $pdf->SetXY(70,91);
 

  $pdf->Cell(35,5, utf8_decode("Banco de Proyectos"),1,0,'la');
  $pdf->SetXY(105,91);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');
 
   //otrocuadro
  
  $pdf->SetXY(70,96);
  $pdf->Cell(35,5, utf8_decode("Proyecto Integrador"),1,0,'la');
  $pdf->SetXY(105,96);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');


  $pdf->SetXY(117,91);
  $pdf->Cell(35,5, utf8_decode("Propuesta propia"),1,0,'la');
  $pdf->SetXY(152,91);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');


 

  $pdf->SetXY(117,96);
  $pdf->Cell(35,5, utf8_decode("Educación Dual"),1,0,'la');
  $pdf->SetXY(152,96);
  $pdf->Cell(7,5, utf8_decode(""),1,0,'la');

   

  $pdf->SetXY(163,91);
  $pdf->Cell(23,5, utf8_decode("Trabajador"),1,0,'la');
  $pdf->SetXY(186,91);
  $pdf->Cell(7,5, utf8_decode(""),1,0,'la');


  $pdf->SetXY(163,96);
  $pdf->Cell(23,5, utf8_decode("ENEIT"),1,0,'la');
  $pdf->SetXY(186,96);
  $pdf->Cell(7,5, utf8_decode(""),1,0,'la');

 $pdf->SetXY(70,101);
  $pdf->Cell(35,5, utf8_decode("Investigación"),1,0,'la');
  $pdf->SetXY(105,101);
  $pdf->Cell(7,5, utf8_decode(" "),1,0,'la');
 


if ($row3['opcion']=='Banco de Proyectos') {
  $pdf->SetXY(106,92);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}


if ($row3['opcion']=='Proyecto Integrador') {
  $pdf->SetXY(106,97);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}


if ($row3['opcion']=='Propuesta propia') {
  $pdf->SetXY(153,92);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}

if ($row3['opcion']=='Propuesta Propia') {
  $pdf->SetXY(153,92);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}


if ($row3['opcion']=='Proy. Educ. Dual') {
  $pdf->SetXY(153,97);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}

if ($row3['opcion']=='Trabajador') {
  $pdf->SetXY(187,92);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}

if ($row3['opcion']=='ENEIT') {
  $pdf->SetXY(187,97);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}

if ($row3['opcion']=='Investigación') {
  $pdf->SetXY(187,102);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}

if ($row3['opcion']=='investigación') {
  $pdf->SetXY(187,102);
  $pdf->MultiCell(7,1, utf8_decode("x"));
}









   //cuadros
  $pdf->SetXY(20,109);
  $pdf->Cell(50,10, utf8_decode("PERIODO PROYECTADO:"),1,0,'la');
  $pdf->SetXY(70, 109);
  $pdf->Cell(75,10, "",1,1,'C');
  $pdf->SetXY(70, 111);
  $pdf->MultiCell(74,3, utf8_decode($row3['DiaInicio']." de ".$row3['MesInicio']." de ".$row3['AnoInicio']. " al ".$row3['DiaTermino']." de ".$row3['MesTermino']." de ".$row3['AnoTermino'] ));
  
  $pdf->SetXY(145,109);
  $pdf->Cell(40,10, utf8_decode("Número de Residentes"),1,0,'la');
  $pdf->SetXY(185, 109);
  $pdf->Cell(7,10, utf8_decode($total),1,1,'C');


 

}


$sql4=" SELECT empresa.NombreE, empresa.GiroE, empresa.TipoE, empresa.ActividadesE, empresa.RFCE, empresa.DomicilioE,  empresa.ColoniaE, empresa.CPE, empresa.TelefonoE, empresa.CiudadE, empresa.EmailE, empresa.MisionE, empresa.NombreTE,  empresa.PuestoTE, empresa.AsesorE, empresa.PuestoAE, empresa.PersonaAEE, empresa.PuestoAEE, empresa.PersonaCE,  empresa.PuestoCE, asignacionempresa.no_controle 
FROM empresa, asignacionempresa 
WHERE empresa.no_control = asignacionempresa.no_controle 
AND asignacionempresa.no_control = '$no_control'";

 $rec4 = $mysqli->query($sql4);
  while($row4=mysqli_fetch_array($rec4))
  {
//DATOS EMPRESA
  	 //ccccccccccccccccccccc
  $pdf->SetXY(20,123);
  $pdf->Cell(40,5, utf8_decode("Datos de la empresa:"),0,0,'la');
  $pdf->SetXY(20,127);
  $pdf->Cell(25,10, utf8_decode("Nombre:"),1,0,'la');
  $pdf->SetXY(45, 127);
  $pdf->Cell(147,10, "",1,0,'C');
  $pdf->SetXY(45, 128);
  $pdf->MultiCell(74,3, utf8_decode($row4['NombreE']));

  	 //zzzzzzzzzzzzzzzzzzzzzzz
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,137);
  $pdf->Cell(25,10, utf8_decode(""),1,1,'la');
  $pdf->SetXY(21,139);
  $pdf->MultiCell(23,3, utf8_decode("Giro , Ramo o Sector"));
  $pdf->SetXY(45, 138);
  $pdf->MultiCell(85,3, utf8_decode($row4['GiroE']));

   //xxxxxxxxxxxxxxx
  $pdf->SetXY(45, 137);
  $pdf->Cell(85,10, utf8_decode(""),1,0,'la');
  $pdf->SetXY(130, 137);
  $pdf->Cell(15,10, utf8_decode("R.F.C."),1,0,'C');
  $pdf->SetXY(145, 137);
  $pdf->Cell(47,10, "",1,1,'C');
  $pdf->SetXY(145, 137);
  $pdf->Cell(47,10, utf8_decode($row4['RFCE']));

  	 //ccccccccccccccccc
  $pdf->SetXY(20,147);
  $pdf->Cell(25,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(45,147);
  $pdf->Cell(147,10, "",1,1,'C');
  $pdf->SetXY(45,148);
  $pdf->MultiCell(110,3, utf8_decode($row4['DomicilioE']));

   //vvvvvvvvvvvvvv
  $pdf->SetXY(20,157);
  $pdf->Cell(25,7, utf8_decode("Colonia:"),1,1,'la');
  $pdf->SetXY(45,157);
  $pdf->Cell(85,7, "",1,1,'C');
  $pdf->SetXY(45,158);
  $pdf->MultiCell(80,3, utf8_decode($row4['ColoniaE']));


  $pdf->SetXY(130,157);
  $pdf->Cell(8,7, utf8_decode("C.P"),1,1,'la');
  $pdf->SetXY(138,157);
  $pdf->Cell(17,7, "",1,1,'C');
  $pdf->SetXY(138,157);
  $pdf->Cell(17,7, utf8_decode($row4['CPE']));

  $pdf->SetXY(155,157);
  $pdf->Cell(10,7, utf8_decode("Tel:"),1,1,'la');
  $pdf->SetXY(165,157);
  $pdf->Cell(27,7,"",1,1,'C');
  $pdf->SetXY(164.5,157);
  $pdf->CellFitSpace(28,7, utf8_decode($row4['TelefonoE']));
//bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbn
  $pdf->SetXY(20,164);
  $pdf->Cell(25,10, utf8_decode("Ciudad:"),1,1,'la');
  $pdf->SetXY(45,164);
  $pdf->Cell(60,10,"",1,1,'C');

  $pdf->SetXY(45,166);
  $pdf->Cell(60,2,utf8_decode($row4['CiudadE']));

  $pdf->SetXY(105,164);
  $pdf->Cell(32,10, utf8_decode("Correo Electronico:"),1,1,'la');
  $pdf->SetFont('Arial','',8);
  $pdf->SetXY(137,164);
  $pdf->Cell(55,10, "",1,1,'C');
  $pdf->SetXY(137,165);
  $pdf->MultiCell(55,3, utf8_decode($row4['EmailE']));

   //nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
   $pdf->SetFont('Arial','',7);
   $pdf->SetXY(20,174);
   $pdf->CellFitSpace(25,22, utf8_decode("Misión de la Empresa:"),1,1,'la');
   $pdf->SetXY(45,174);
   $pdf->Cell(147,22, "",1,1,'C');
   $pdf->SetXY(45,174);
   $pdf->MultiCell(145,4.5, utf8_decode($row4['MisionE']));

   //mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
   $pdf->SetFont('Arial','',10);
   $pdf->SetXY(20,196);
   
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(21,197);
   $pdf->MultiCell(32,5, "Nombre del Titular de la empresa:");
   
   $pdf->SetXY(54,196);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,197);
   $pdf->MultiCell(63,3, utf8_decode($row4['NombreTE'])); 
$pdf->SetFont('Arial','',8);
   $pdf->SetXY(118,196);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,196);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,197);
   $pdf->MultiCell(60,3, utf8_decode($row4['PuestoTE'])); 



   $pdf->SetXY(20,211);
   $pdf->SetFont('Arial','',10);
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(21,212);
   $pdf->MultiCell(32,4, "Nombre del Asesor(a) Externo(a):");
   
   $pdf->SetXY(54,211);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,212);
   $pdf->MultiCell(63,3, utf8_decode($row4['AsesorE'])); 
$pdf->SetFont('Arial','',8);
   $pdf->SetXY(118,211);
   $pdf->Cell(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,211);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,212);
   $pdf->MultiCell(60,3, utf8_decode($row4['PuestoAE'])); 



$pdf->SetFont('Arial','',10);
   $pdf->SetXY(20,226);
   
   $pdf->Cell(34,18, "",1,1,'la');
   $pdf->SetXY(20,227);
   $pdf->MultiCell(34,3, utf8_decode( "Nombre de la persona que firmará el acuerdo de trabajo. Alumno(a)- Escuela-Empresa"));
   
   
   $pdf->SetXY(54,226);
   $pdf->Cell(64,18, "",1,1,'C');
   $pdf->SetXY(54,227);
   $pdf->MultiCell(63,3, utf8_decode($row4['PersonaAEE'])); 
$pdf->SetFont('Arial','',8);
   $pdf->SetXY(118,226);
   $pdf->CellFitSpace(12,18, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,226);
   $pdf->Cell(62,18, "",1,1,'C');
   $pdf->SetXY(130,227);
   $pdf->MultiCell(60,3, utf8_decode($row4['PuestoAEE'])); 

$pdf->SetFont('Arial','',10);
 $pdf->SetXY(20,244);
   
   $pdf->Cell(34,15, "",1,1,'la');
   $pdf->SetXY(20,245);
   $pdf->MultiCell(34,3, utf8_decode( "Nombre de la persona a quien se dirige la carta de presentación"));


   $pdf->SetXY(54,244);
   $pdf->Cell(64,15, "",1,1,'C');
   $pdf->SetXY(54,245);
   $pdf->MultiCell(63,3, utf8_decode($row4['PersonaCE'])); 

$pdf->SetFont('Arial','',8);
   $pdf->SetXY(118,244);
   $pdf->CellFitSpace(12,15, utf8_decode("Puesto:"),1,1,'la');
   $pdf->SetXY(130,244);
   $pdf->Cell(62,15, "",1,1,'C');
   $pdf->SetXY(130,245);
   $pdf->MultiCell(60,3, utf8_decode($row4['PuestoCE'])); 
   
   
   //aaaaaaaaaaaaaaaaaaaaaaaaaaa
   

  
}

//------------------------------------------------------Alumnos 1 ----------------------------




if ($total=='1') {
  $sql5=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";

 $rec5 = $mysqli->query($sql5);
  while($row5=mysqli_fetch_array($rec5))
  {
//DATOS RESIDENTES
   //hojA 2
  $pdf->AddPage();
  $pdf->Ln();
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



$pdf->SetFont('Arial','',8);
  $pdf->SetXY(120,45);
  $pdf->CellFitSpace(20,10, utf8_decode("No. de control"),1,1,'la');
  $pdf->SetXY(140, 45);
  $pdf->CellFitSpace(50,10, $row5['no_control'],1,1,'la');



$pdf->SetFont('Arial','',10);
  $pdf->SetXY(20,55);
  $pdf->Cell(20,10, utf8_decode("Domicilio:"),1,1,'la');
  $pdf->SetXY(40, 55);
  $pdf->Cell(0,10, "",1,1,'la');
  $pdf->SetXY(40, 56);

  $pdf->MultiCell(100,3, utf8_decode ($row5['calle']." "."#".$row5['noe']." "."Col.".$row5['colonia']."".",".$row5['municipio']));



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
  $pdf->SetXY(73,120);
  $pdf->MultiCell(73,4, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']), 0, 'C');


}



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
  $pdf->MultiCell(67,4, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


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
  $pdf->SetXY(78,220);
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  



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
  $pdf->MultiCell(67,4, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


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
  $pdf->SetXY(78,220);
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  


  


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
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));

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
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,4, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));


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
  $pdf->SetXY(78,220);
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));
  


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
  $pdf->SetXY(78,120);
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));


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
  $pdf->SetXY(78,220);
  $pdf->MultiCell(67,4, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));



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
  $pdf->MultiCell(67,4, utf8_decode($row5['nombre']." ".$row5['ap']." ".$row5['am']));

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
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));

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
  $pdf->MultiCell(67,4, utf8_decode($row6['nombre']." ".$row6['ap']." ".$row6['am']));


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
  $pdf->MultiCell(67,4, utf8_decode($row7['nombre']." ".$row7['ap']." ".$row7['am']));
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
  $pdf->MultiCell(67,4, utf8_decode($row8['nombre']." ".$row8['ap']." ".$row8['am']),'C');


}



  }






//hoja 3
  


  $pdf->Output();
  
 ?>


