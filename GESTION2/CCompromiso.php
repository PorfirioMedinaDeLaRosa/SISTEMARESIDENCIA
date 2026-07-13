<?php



include ('plantilla.php');
$pdf = new  PDF('P','mm','letter');
$pdf->SetMargins(20,20);
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(20, 32);
$pdf->Cell(0,5, utf8_decode("DEPARTAMENTO DE GESTIÓN TECNOLÓGICA Y VINCULACIÓN"),0,1,'C'); 
$pdf->SetXY(20, 37);
$pdf->Cell(0,5, utf8_decode("OFICINA DE SERVICIO SOCIAL"),0,1,'C');
$pdf->SetXY(20, 42);
$pdf->Cell(0,5, utf8_decode("ANEXO XX. CARTA COMPROMISO DE SERVICIO SOCIAL"),0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(20, 52);
$pdf->Cell(0,5, utf8_decode("Con el fin de dar cumplimiento a lo establecido en la Ley Reglamentaria del Artículo 5° "),0,1,'la');
$pdf->SetXY(20, 57);
$pdf->Cell(0,5, utf8_decode("Constitucional relativo al ejercicio de profesiones, el suscrito:
"),0,1,'la');

$idA =   $_GET['id'];

include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} 
$pdf->SetFont('Arial','',12);
  //se muestra la tbla
 include'conexion.php'; 

$no_control= $datos['Ncontrol'];

$sql="SELECT *  FROM  alumnos, carreras, semestre where Ncontrol = '$no_control'
and alumnos.IDCarrera = carreras.IDCarreras  and alumnos.IDSemestre = semestre.IDSemestre";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
  $pdf->SetXY(15,66);
  $pdf->Cell(0,5, utf8_decode("Nombre del prestante de Servicio Social:"),0,1,'la');
  $pdf->SetXY(94, 66);
  $pdf->Cell(0,5, utf8_decode($row['NombreAlumno'].'  '.$row['Apellido1Alumno'].'  '.$row['Apellido2Alumno']),0,0,'la');
  $pdf->SetXY(94, 66.5);
  $pdf->Cell(0,5, utf8_decode("______________________________________________"),0,1,'la');

  $pdf->SetXY(15, 73);
  $pdf->Cell(0,5, utf8_decode("No. de Control:"),0,1,'la');
  $pdf->SetXY(47, 73);
  $pdf->Cell(0,5, utf8_decode($row['Ncontrol']),0,0,'la');
  $pdf->SetXY(47, 73.5);
  $pdf->Cell(0,5, utf8_decode("______________________"),0,1,'la');


  $pdf->SetXY(15,80);
  $pdf->Cell(0,5, utf8_decode("Domicilio:"),0,1,'la');
  $pdf->SetXY(35, 80);
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(0,5, utf8_decode($row['CalleAlumno']. ' #'.$row['Noe']. ' '.$row['Colonia'].' '.$row['Municipio']. '.  '.$row['Estado']),0,0,'la');
  $pdf->SetXY(35, 80.5);
  $pdf->Cell(0,5, utf8_decode("_____________________________________________________________________________________"),0,1,'la');
  $pdf->SetFont('Arial','',12);
  $pdf->SetXY(15,87);
  $pdf->Cell(0,5, utf8_decode("Teléfono:"),0,1,'la');
  $pdf->SetXY(35, 87);
  $pdf->Cell(0,5, utf8_decode($row['TelefonoAlumno']),0,0,'la');
  $pdf->SetXY(35, 87.5);
  $pdf->Cell(0,5, utf8_decode("__________"),0,1,'la');


  $pdf->SetXY(60, 87);
  $pdf->Cell(0,5, utf8_decode("Carrera:"),0,1,'la');
  $pdf->SetXY(77, 87);
  $pdf->Cell(0,5, utf8_decode($row['NombreCarrera']),0,0,'la');
  $pdf->SetXY(77, 87.5);
  $pdf->Cell(0,5, utf8_decode("_____________________________________________________"),0,1,'la');

  $pdf->SetXY(150, 73);
  $pdf->Cell(0,5, utf8_decode("Semestre:"),0,1,'la');
  $pdf->SetXY(170, 73);
  $pdf->Cell(0,5, utf8_decode($row['SemestreAlumno']),0,0,'la');
  $pdf->SetXY(170, 73.5);
  $pdf->Cell(0,5, utf8_decode("____"),0,1,'la');


  $anio = date("Y");
$mes = date("m");
$dia = date("d");


  //if($mes ==01){
  //  $pdf->SetXY(100, 195);
  //  $pdf->Cell(0,5, utf8_decode("de   enero"),0,0,'la');
  //  $pdf->SetXY(123, 195);
 //   $pdf->Cell(0,5, utf8_decode('de       '.$anio),0,0,'la');
 // }

 // if($mes ==02){
//    $pdf->SetXY(100, 195);
//    $pdf->Cell(0,5, utf8_decode("de  febrero"),0,0,'la');
//    $pdf->SetXY(127, 195);
//    $pdf->Cell(0,5, utf8_decode('de    '.$anio),0,0,'la');
//  }

 
  
  


  $pdf->SetXY(60, 220);
  $pdf->Cell(0,5, utf8_decode("________________________________________"),0,1,'la');
  $pdf->SetXY(65, 225);
  $pdf->Cell(0,5, utf8_decode($row['NombreAlumno'].'  '.$row['Apellido1Alumno'].'  '.$row['Apellido2Alumno']),0,0,'la');

 if($row['Sexo']=='Masculino'){
  $pdf->SetXY(15, 135);
  $pdf->MultiCell(180,10,  utf8_decode("Me comprometo a realizar el Servicio Social acatando el reglamento emitido por el Tecnológico Nacional de México y llevarlo a cabo en el lugar y periodos manifestados, así como, a participar con mis conocimientos e iniciativa en las actividades que desempeñe, procurando dar una imagen positiva del Instituto en el Organismo o Dependencia oficial, de no hacerlo así, quedo enterado  de la cancelación respectiva, la cual procederá automáticamente.
  "),0,'J',0); 
 }

 if($row['Sexo']=='Femenino'){
    $pdf->SetXY(15, 135);
    $pdf->MultiCell(180,10,  utf8_decode("Me comprometo a realizar el Servicio Social acatando el reglamento emitido por el Tecnológico Nacional de México y llevarlo a cabo en el lugar y periodos manifestados, así como, a participar con mis conocimientos e iniciativa en las actividades que desempeñe, procurando dar una imagen positiva del Instituto en el Organismo o Dependencia oficial, de no hacerlo así, quedo enterada  de la cancelación respectiva, la cual procederá automáticamente.
    "),0,'J',0); 
   }


  }


  $sql2="SELECT * FROM empresa, programa, asignacion, peridosservicio  where asignacion.NControlAdmin = empresa.Ncontrol 
AND asignacion.NControlAdmin = programa.NControl AND peridosservicio.idPeriodo = empresa.idPeriodo AND asignacion.Ncontrol = '$no_control'";
 $rec2 = $mysqli->query($sql2);
  while($rowe=mysqli_fetch_array($rec2))
  {

    $pdf->SetFont('Arial','',12);
    $pdf->SetXY(15, 94);
    $pdf->Cell(0,5, utf8_decode("Dependencia u organismo:"),0,1,'la');
    $pdf->SetXY(66, 94);
    $pdf->Cell(0,5, utf8_decode($rowe['Dependencia']),0,0,'la');
    $pdf->SetXY(66, 94.5);
    $pdf->Cell(0,5, utf8_decode("__________________________________________________________"),0,1,'la');
  
    $pdf->SetXY(15, 100);
    $pdf->Cell(0,5, utf8_decode("Domicilio de la dependencia:"),0,1,'la');
    $pdf->SetXY(70, 101);
    $pdf->MultiCell(135,4,  utf8_decode($rowe['DomicilioDependencia']),0,'J',0); 
    $pdf->SetXY(70, 101.1);
    $pdf->Cell(0,5, utf8_decode("________________________________________________________"),0,1,'la');
  
    $pdf->SetXY(15, 105.5);
    $pdf->Cell(0,5, utf8_decode("_______________________________________________________________________________"),0,1,'la');
  
    //$pdf->Cell(0,5, utf8_decode($rowe['DomicilioDependencia']),0,0,'la');


    $pdf->SetXY(15, 110);
    $pdf->Cell(0,5, utf8_decode("Responsable del programa:"),0,1,'la');
    $pdf->SetXY(68, 110);
    $pdf->Cell(0,5, utf8_decode($rowe['ResponsablePrograma']),0,0,'la');
    $pdf->SetXY(68, 110.5);
    $pdf->Cell(0,5, utf8_decode("_________________________________________________________"),0,1,'la');
  

    $pdf->SetXY(15, 119);
    $pdf->Cell(0,5, utf8_decode("Fecha de inicio: ".$rowe['fechainicio']),0,1,'la');
    $pdf->SetXY(60, 110);
    $pdf->SetXY(45, 119.5);
    $pdf->Cell(0,5, utf8_decode("__________________________"),0,1,'la');
  
    //$pdf->Cell(0,5, utf8_decode(),0,0,'la');

    $pdf->SetXY(15, 128);
    $pdf->Cell(0,5, utf8_decode("Fecha de terminación: ".$rowe['fechatermino']),0,1,'la');
    $pdf->SetXY(90, 110);
    $pdf->SetXY(58, 128.5);
    $pdf->Cell(0,5, utf8_decode("__________________________"),0,1,'la');
  
   // $pdf->Cell(0,5, utf8_decode(),0,0,'la');


   $pdf->SetXY(15, 195);
   $pdf->Cell(0,5, utf8_decode("En Ciudad Serdán, Puebla; a ".$rowe['fechainicio']),0,1,'C');
   $pdf->SetXY(113, 195.5);
   $pdf->Cell(0,5, utf8_decode("__"),0,1,'la');

   $pdf->SetXY(125, 195.5);
   $pdf->Cell(0,5, utf8_decode("____"),0,1,'la');
 
   $pdf->SetXY(141, 195.5);
   $pdf->Cell(0,5, utf8_decode("____"),0,1,'la');
  
  
  }


 
  


  
 


$pdf->Output();
  
?>