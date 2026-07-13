<?php
$nombreAlumno = "";

//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["user_id"];

include ('plantilla.php');
$pdf = new  PDF('P','mm','letter');
$pdf->SetMargins(20,20);
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(20, 32);


include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} 

$pdf->Cell(0,5, utf8_decode("P L A N      D E    T R A B A J O"),0,1,'C'); 
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 37);

include'conexion.php'; 

$no_control= $datos['Ncontrol'];

$sql="SELECT *  FROM  alumnos, carreras, semestre where Ncontrol = '$no_control'
and alumnos.IDCarrera = carreras.IDCarreras  and alumnos.IDSemestre = semestre.IDSemestre";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
$pdf->Cell(0,5, utf8_decode("DATOS DEL ALUMNO"),0,1,'LA'); 

$pdf->SetXY(15,43);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,43);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,7, utf8_decode("Nombre completo: ".$row['NombreAlumno'].'  '.$row['Apellido1Alumno'].'  '.$row['Apellido2Alumno']),0,0,'la');
$nombreAlumno= $row['NombreAlumno']." ".$row['Apellido1Alumno']."  ".$row['Apellido2Alumno'];
$pdf->SetXY(160,43);
$pdf->Cell(15,7, utf8_decode("Edad: ".$row['Edad']." años"),0,0,'la');


$pdf->SetXY(15,50);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,50);
$pdf->Cell(15,7, utf8_decode("Domicilo :  ".$row['CalleAlumno']. ' #'.$row['Noe']. ' '.$row['Colonia']),0,0,'la');

$pdf->SetXY(157,50);
$pdf->Cell(15,7, utf8_decode("Teléfono: ".$row['TelefonoAlumno']),0,0,'la');



$pdf->SetXY(15,57);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,57);
$pdf->Cell(15,7, utf8_decode("Municipio: ".$row['Municipio']),0,0,'la');
$pdf->SetXY(110,57);
$pdf->Cell(15,7, utf8_decode("Estado: ".$row['Estado']),0,0,'la');
$pdf->SetXY(155,57);
$pdf->Cell(15,7, utf8_decode("No. Control: ".$row['Ncontrol']),0,0,'la');


$pdf->SetXY(15,64);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,64);
$pdf->Cell(15,7, utf8_decode("Semestre: ".$row['SemestreAlumno']),0,0,'la');
$pdf->SetXY(90,64);
$pdf->Cell(15,7, utf8_decode("Facebook:".$row['Facebook']),0,0,'la');


$pdf->SetXY(15,71);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,71);
$pdf->Cell(15,7, utf8_decode("Carrera: ".$row['NombreCarrera']),0,0,'la');

 }

 $pdf->SetXY(15, 81);
 $pdf->Cell(0,5, utf8_decode("DATOS DE LA DEPENDENCIA"),0,1,'LA'); 
 

 $sql222="SELECT * FROM  empresa, asignacion, programa ,  peridosservicio  
 where asignacion.NControlAdmin = empresa.Ncontrol  AND 
  programa.NControl = asignacion.NControlAdmin AND  peridosservicio.idPeriodo = empresa.idPeriodo AND
   asignacion.NControl='$no_control'";
 $rec222 = $mysqli->query($sql222);
  while($rowe=mysqli_fetch_array($rec222))
  {
    $pdf->SetFont('Arial','',9);
$pdf->SetXY(15,87);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,87);
$pdf->Cell(15,7, utf8_decode("Dependencia:  ".$rowe['Dependencia']),0,0,'la');


//$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,94);
$pdf->SetFont('Arial','',8.5);
$pdf->Cell(185,13, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,93);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(185,8,  utf8_decode("Nombre del programa: ".$rowe['NombrePrograma']),0,'J',0); 
///$pdf->MultiCell(185,5,  utf8_decode("Objetivo: ".$rowe['ObejtivoPrograma']),1,'J',0); 

//$pdf->Cell(15,7, utf8_decode("Nombre del programa:".$rowe['NombrePrograma']),0,0,'la');
$pdf->SetFont('Arial','',10);
$pdf->SetXY(15,107);
    $pdf->Cell(185,6, utf8_decode(""),1,0,'la');

   
        $pdf->SetXY(15,107);
        $pdf->Cell(15,6, utf8_decode("Fecha de inicio: ".$rowe['fechainicio']),0,0,'la');
        $pdf->SetXY(120,107);
        $pdf->Cell(15,6, utf8_decode("Fecha de término: ".$rowe['fechatermino']),0,0,'la');
     
   
       

$pdf->SetXY(15,113);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,113);
$pdf->Cell(15,7, utf8_decode("Teléfono: ".$rowe['TelefonoDependencia']),0,0,'la');
$pdf->SetXY(100,113);
$pdf->Cell(15,7, utf8_decode("Email: ".$rowe['EmailDependencia']),0,0,'la');

$pdf->SetFont('Arial','',9);
$pdf->SetXY(15,120);
$pdf->Cell(185,7, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,120);
$pdf->Cell(15,7, utf8_decode("Dirección: ".$rowe['DomicilioDependencia']),0,0,'la');
$pdf->SetXY(15,127);
$pdf->Cell(185,5, utf8_decode(""),1,0,'la');
$pdf->SetXY(15,127);
$pdf->Cell(15,5, utf8_decode("Coordinador del programa: ".$rowe['ResponsablePrograma']),0,0,'la');
  


$pdf->SetFont('Arial','B',10);

$pdf->SetXY(15, 134);
$pdf->Cell(0,5, utf8_decode("DATOS DEL PROGRAMA"),0,1,'LA'); 

$pdf->SetFont('Arial','',10);
$pdf->SetXY(15, 140);

//$ejemplo = strlen("Objetivo: ".$rowe['ObejtivoPrograma']) 202;
$ejemplo = strlen("Objetivo: ".$rowe['ObejtivoPrograma']);

if($ejemplo >0 and $ejemplo < 220){
    $pdf->MultiCell(185,5,  utf8_decode("Objetivo: ".$rowe['ObejtivoPrograma']),1,'J',0); 



    //$pdf->SetXY(20,225);
   // $pdf->Cell(15,6, utf8_decode("El programa de servicio social impacta en la inclusión e igualdad Si/No  (           )"),0,0,'la');
   // $pdf->SetXY(114,225);
   // $pdf->Cell(15,6, utf8_decode($rowe['Igualda'] ),0,0,'la');  
    }
    
     $consulta="SELECT   asignacion.NControlAdmin FROM  asignacion WHERE  asignacion.NControl ='$no_control'";
      $consulta2 = $mysqli->query($consulta);
      while($numero=mysqli_fetch_array($consulta2))
      {
    
     $numerototal=$numero['NControlAdmin'];
    
    }
    
    $sql3="SELECT * FROM objetivos , asignacion   where objetivos.NControl = '$numerototal'";
     $rec3 = $mysqli->query($sql3);
      while($rowo=mysqli_fetch_array($rec3))
      {
    
        if($rowo['Nombre']=="Reducción de las desigualdades"){
            $pdf->SetXY(187,155);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Fin de la pobreza"){
            $pdf->SetXY(95,161);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Ciudades y comunidades sostenibles"){
            $pdf->SetXY(187,161);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Hambre cero"){
            $pdf->SetXY(95,168);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Producción y consumo responsables"){
            $pdf->SetXY(187,168);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Salud y bienestar"){
            $pdf->SetXY(95,173);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Acción por el clima"){
            $pdf->SetXY(187,173);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        
        if($rowo['Nombre']=="Educación de calidad"){
            $pdf->SetXY(95,179);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Vida submarina"){
            $pdf->SetXY(187,179);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Igualdad de género"){
            $pdf->SetXY(95,185);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Vida de ecosistemas terrestres"){
            $pdf->SetXY(187,185);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Agua limpia y saneamiento"){
            $pdf->SetXY(95,191);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Paz, justicia e instituciones sólidas"){
            $pdf->SetXY(187,191);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        
        if($rowo['Nombre']=="Energía asequible y no contaminante"){
            $pdf->SetXY(95,197);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Alianzas para lograr los objetivos"){
            $pdf->SetXY(187,197);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
        if($rowo['Nombre']=="Trabajo decente y crecimiento económico"){
            $pdf->SetXY(95,203);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
        if($rowo['Nombre']=="Industria, innovación e infraestructuras"){
            $pdf->SetXY(187,203);
            $pdf->Cell(15,6, utf8_decode("X"),0,0,'la');   
        }
    
      }
    //TABLA FINAL
    $pdf->SetFont('Arial','',8);
    $pdf->SetXY(15,155);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,155);
    $pdf->Cell(15,6, utf8_decode("Objetivos:"),0,0,'la');
    
    $pdf->SetXY(87,155);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    
    $pdf->SetXY(107,155);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,155);
    $pdf->Cell(15,6, utf8_decode("Reducción de las desigualdades"),0,0,'la');
    $pdf->SetXY(179,155);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA DOS 
    $pdf->SetXY(15,161);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,161);
    $pdf->Cell(15,6, utf8_decode("Fin de la pobreza"),0,0,'la');
    $pdf->SetXY(87,161);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,161);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    
    $pdf->SetXY(107,161);
    $pdf->Cell(15,6, utf8_decode("Ciudades y comunidades sostenibles"),0,0,'la');
    $pdf->SetXY(179,161);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA TRES
    
    $pdf->SetXY(15,167);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,167);
    $pdf->Cell(15,6, utf8_decode("Hambre cero"),0,0,'la');
    $pdf->SetXY(87,167);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,167);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    
    $pdf->SetXY(107,167);
    $pdf->Cell(15,6, utf8_decode("Producción y consumo responsables"),0,0,'la');
    $pdf->SetXY(179,167);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA CUATRO
    $pdf->SetXY(15,173);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,173);
    $pdf->Cell(15,6, utf8_decode("Salud y bienestar"),0,0,'la');
    $pdf->SetXY(87,173);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,173);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    
    $pdf->SetXY(107,173);
    $pdf->Cell(15,6, utf8_decode("Acción por el clima"),0,0,'la');
    $pdf->SetXY(179,173);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    
    //FILA CINCO
    $pdf->SetXY(15,179);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,179);
    $pdf->Cell(15,6, utf8_decode("Educación de calidad"),0,0,'la');
    $pdf->SetXY(87,179);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,179);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,179);
    $pdf->Cell(15,6, utf8_decode("Vida submarina"),0,0,'la');
    $pdf->SetXY(179,179);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA SEIS
    $pdf->SetXY(15,185);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,185);
    $pdf->Cell(15,6, utf8_decode("Igualdad de género"),0,0,'la');
    $pdf->SetXY(87,185);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,185);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,185);
    $pdf->Cell(15,6, utf8_decode("Vida de ecosistemas terrestres"),0,0,'la');
    $pdf->SetXY(179,185);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA SIETE
    $pdf->SetXY(15,191);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,191);
    $pdf->Cell(15,6, utf8_decode("Agua limpia y saneamiento"),0,0,'la');
    $pdf->SetXY(87,191);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,191);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,191);
    $pdf->Cell(15,6, utf8_decode("Paz, justicia e instituciones sólidas"),0,0,'la');
    $pdf->SetXY(179,191);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA OCHO
    $pdf->SetXY(15,197);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,197);
    $pdf->Cell(15,6, utf8_decode("Energía asequible y no contaminante"),0,0,'la');
    $pdf->SetXY(87,197);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,197);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,197);
    $pdf->Cell(15,6, utf8_decode("Alianzas para lograr los objetivos"),0,0,'la');
    $pdf->SetXY(179,197);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');
    
    //FILA NUEVE
    $pdf->SetXY(15,203);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(15,203);
    $pdf->Cell(15,6, utf8_decode("Trabajo decente y crecimiento económico"),0,0,'la');
    $pdf->SetXY(87,203);
    $pdf->Cell(20,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,203);
    $pdf->Cell(72,6, utf8_decode(""),1,0,'la');
    $pdf->SetXY(107,203);
    $pdf->Cell(15,6, utf8_decode("Industria, innovación e infraestructuras"),0,0,'la');
    $pdf->SetXY(179,203);
    $pdf->Cell(21,6, utf8_decode(""),1,0,'la');


}

//$pdf->SetXY(15, 145);
//$pdf->MultiCell(185,3,  utf8_decode("Alcances: ".$rowe['Alcances']),1,'J',0); 
//$pdf->SetXY(15, 160);
//$pdf->MultiCell(185,3,  utf8_decode("Limitaciones: ".$rowe['Limitaciones']),1,'J',0); 


//$pdf->SetXY(20,226);
//$pdf->Cell(15,6, utf8_decode("Número de persona beneficiadas con el programa de servicio social (           )"),0,0,'la');
//$pdf->SetXY(110,226);
//$pdf->Cell(15,6, utf8_decode($rowe['Personas'] ),0,0,'la');


$pdf->SetFont('Arial', '', 8);
$pdf->SetXY(15, 239);
$pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270 "), 0, 1, 'la');
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetXY(15, 244);
$pdf->Cell(0, 5, utf8_decode("www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');

$pdf->AddPage('L');
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(15, 35);
$pdf->Cell(0,5, utf8_decode("CRONOGRAMA DE ACTIVIDADES"),0,1,'LA');
$pdf->Ln();
$pdf->SetMargins(5,20);
$pdf->SetXY(5, 45);
$pdf->Cell(7,4,utf8_decode("No."),1,0,'L');
$pdf->Cell(197,4,utf8_decode("Descripción de la actividad"),1,0,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,utf8_decode("1 mes"),1,0,'C');
$pdf->Cell(10,4,utf8_decode("2 mes"),1,0,'C');
$pdf->Cell(10,4,utf8_decode("3 mes"),1,0,'C');
$pdf->Cell(10,4,utf8_decode("4 mes"),1,0,'C');
$pdf->Cell(10,4,utf8_decode("5 mes"),1,0,'C');
$pdf->Cell(10,4,utf8_decode("6 mes"),1,0,'C');
 
$pdf->Ln();

$q2 = $mysqli->query("SELECT *  FROM actividades,  asignacion  WHERE actividades.NControl = asignacion.NControlAdmin  AND asignacion.NControl = '$no_control' ORDER BY actividades.IDActividad  ASC");
 
  $valores=0;

  while($row2 = mysqli_fetch_array($q2))
  {
 
$numero[] = $row2;
       $valores++;
$pdf->SetFont('Arial','',7);

$pdf->Cell(7,5,utf8_decode($valores),1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->CellFitSpace(197,5,utf8_decode($row2['Actividad']),1);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(10,5,utf8_decode($row2['Mes1']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($row2['Mes2']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($row2['Mes3']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($row2['Mes4']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($row2['Mes5']),1,0,'C');
$pdf->Cell(10,5,utf8_decode($row2['Mes6']),1,0,'C');

  $pdf->Ln();

}
$pdf->Ln(5);

$sql222="SELECT * FROM  empresa, asignacion, programa ,  peridosservicio  
where asignacion.NControlAdmin = empresa.Ncontrol  AND 
 programa.NControl = asignacion.NControlAdmin AND  peridosservicio.idPeriodo = empresa.idPeriodo AND
  asignacion.NControl='$no_control'";
$rec222 = $mysqli->query($sql222);
 while($rowe=mysqli_fetch_array($rec222))
 {

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(200,9, utf8_decode("                                                           Ciudad Serdán, Puebla;  a  ".$rowe['fechainicio'] ),0,0,'C');          

 }


$sql2="SELECT * FROM empresa, programa, asignacion, peridosservicio   where asignacion.NControlAdmin = empresa.Ncontrol 
AND asignacion.NControlAdmin = programa.NControl AND empresa.idPeriodo = peridosservicio.idPeriodo  AND asignacion.Ncontrol = '$no_control'";
 $rec2 = $mysqli->query($sql2);
  while($rowe=mysqli_fetch_array($rec2))
  {
    $pdf->Ln(15);

    /*
    $pdf->SetMargins(10,20);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(200,9, utf8_decode("                       ".$rowe['ResponsablePrograma']."                                                                      ".$nombreAlumno ),0,0,'C');          
    $pdf->Ln(2);
    $pdf->Cell(200,9, utf8_decode("             _____________________________________________"."                                         _______________________________________________" ),0,0,'la');          
    $pdf->Ln(5);
    $pdf->Cell(200,9, utf8_decode("  Nombre y firma del Responsable del programa de"."                            Nombre y firma del prestador o prestadora de" ),0,0,'la');          
    $pdf->Ln(4);
    $pdf->Cell(200,9, utf8_decode("                              S.S."."                                                                                                             S.S" ),0,0,'la');          
   */

   $pdf->SetMargins(60,20);
   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(90,9, utf8_decode($rowe['ResponsablePrograma']."                                                            ".$nombreAlumno ),0,0,'C');   
   $pdf->SetMargins(40,20);       
   $pdf->Ln(2);
   $pdf->Cell(30,9, utf8_decode("_____________________________________________" ),0,0,'C');          
   $pdf->SetMargins(30,20);
   $pdf->Ln(5);
   $pdf->Cell(50,9, utf8_decode("Nombre y firma del Responsable del programa de S.S" ),0,0,'C');          
  

   $pdf->SetMargins(200,20);
   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(400,9, utf8_decode($nombreAlumno ),0,0,'C'); 
   $pdf->SetMargins(150,20);         
   $pdf->Ln(2);
   $pdf->Cell(400,9, utf8_decode("_____________________________________________"),0,0,'la');          
   $pdf->SetMargins(150,20);
   $pdf->Ln(5);
   $pdf->Cell(400,9, utf8_decode("Nombre y firma del prestador o prestadora de S.S" ),0,0,'la');          
   
   
   $pdf->SetMargins(10,20);
    $pdf->SetFont('Arial','',10);
    $pdf->Ln(10);
    $pdf->Cell(200,9, utf8_decode("                                                                              Sello de la dependencia"),0,0,'la');          
    $pdf->Ln(15);
    $pdf->Cell(200,9, utf8_decode("Observaciones" ),0,0,'la');          
    
    $pdf->Ln(1);
    $pdf->Cell(200,9, utf8_decode("_____________________________________________________" ),0,0,'la');          

  }
  $pdf->SetFont('Arial', '', 8);
  $pdf->SetXY(15, 254);
  $pdf->Cell(0, 5, utf8_decode("Av. Instituto Tecnológico s/n, Col. La Gloria, Cd. Serdán, Puebla, C.P. 75520  Tel.: 01 800 841 9270, www.tecnm.mx | www.itsciudadserdan.edu.mx"), 0, 1, 'la');

  



$pdf->Output();
  
?>