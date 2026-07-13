 <?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]

?>
 <?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  asesor
                WHERE IdAS ='$idGT'               ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
          
       
<?php  }} ?>


 
 <?php
 include ('plantilla.php');

 $pdf = new  PDF();
 $pdf->SetMargins(20,20);
  $pdf->AddPage();

  //dddddddddddddddddddddddddddddddd
  //se colocara las instrucciones para tamaño y forma de la letra
  $pdf->SetFont('Arial','B',12);
  $pdf->SetXY(20, 35);
   $pdf->Cell(0,5, utf8_decode("Formato de registro de Asesoría"),0,0,'C');

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   //llllllllllllllll
include'../conexion.php';

$id = $_GET['id'];

$sql="SELECT  *  FROM  asesoria
       where  id = '$id'";
 $rec = $mysqli->query($sql);
  while($row=mysqli_fetch_array($rec))
  {
   $pdf->SetXY(10, 25);
   $pdf->Cell(130,45 , utf8_decode("Ciudad Serdán, Puebla a "),0,0,'R'); 
   $pdf->SetXY(10, 37);
   $pdf->Cell(135,21,$row['fecha'],0,1,'R');
   $pdf->SetXY(15, 25);
   $pdf->Cell(137,45 , utf8_decode("de "),0,0,'R'); 
   $pdf->SetXY(25, 25);
   $pdf->Cell(153,45 , $row['fecha2'],0,1,'R'); 
   $pdf->SetXY(34, 25);
   $pdf->Cell(153,45 , utf8_decode("de "),0,0,'R'); 
   $pdf->SetXY(45, 25);
   $pdf->Cell(153,45 , $row['fecha3'],0,1,'R'); 

   //ññññññññññññññññññ
    //datos de conexion:
 
//mostramos tabla
  $pdf->Ln();
  $pdf->SetXY(20, 19);
$pdf->SetFont('Arial','',10);
  //se muestra la tbla
    	//variables despues del encabezado
  	$pdf->Cell(0,85, utf8_decode("Departamento Académico:"),0,0,'la'); 
  	$pdf->SetXY(62, 60);
  	$pdf->MultiCell(130,3, utf8_decode($row['departamento']));
    $pdf->SetXY(20, 27);
    $pdf->Cell(0,85, utf8_decode("Nombre del(os)/la(s)  Residente(s):"),0,0,'la'); 
    $pdf->SetXY(76, 68);
    $pdf->MultiCell(120,3, utf8_decode($row['nombrer']));



    $pdf->SetXY(20, 35);
    $pdf->Cell(0,85, utf8_decode("Número de control:"),0,0,'la'); 
    $pdf->SetXY(50, 76.5);
    $pdf->MultiCell(120,2, utf8_decode($row['no_controlr']));


    $pdf->SetXY(20, 42);
    $pdf->Cell(0,85, utf8_decode("Carrera:"),0,0,'la'); 
    $pdf->SetXY(35, 83);
    $pdf->MultiCell(160,2, utf8_decode($row['departamento']));



    $pdf->SetXY(20, 48);
    $pdf->Cell(0,85, utf8_decode("Nombre del proyecto:"),0,0,'la'); 
    $pdf->SetXY(56, 89);
    $pdf->MultiCell(140,3, utf8_decode($row['nombrep']));

    $pdf->SetXY(20, 65);
    $pdf->Cell(0,85, utf8_decode("Periodo de realización de la residencia profesional:"),0,0,'la'); 
    $pdf->SetXY(100, 106.5);
    $pdf->MultiCell(70,2.5, utf8_decode($row['periodop']));

    $pdf->SetXY(20, 71.5);
    $pdf->Cell(0,85, utf8_decode("Empresa:"),0,0,'la'); 
    $pdf->SetXY(35, 114);
    $pdf->MultiCell(150,1, utf8_decode($row['empresa']));

    $pdf->SetXY(20, 77);
    $pdf->Cell(0,85, utf8_decode("Asesoría número:"),0,0,'la'); 
    $pdf->SetXY(49, 119);
    $pdf->MultiCell(150,1, utf8_decode($row['numeroa']));


    $pdf->SetXY(120, 77);
    $pdf->Cell(0,85, utf8_decode("Tipo de asesoría:"),0,0,'la'); 
    $pdf->SetXY(149, 119);
    $pdf->MultiCell(150,1, utf8_decode($row['tipoa']));

  $pdf->SetFont('Arial','',12);

  $pdf->SetXY(20,127);
  $pdf->Cell(0,5, utf8_decode("Temas a asesorar:"),0,1,'la');
  $pdf->SetXY(20, 132);
  $pdf->Cell(0,28, "",1,1,'la');
  $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 131);
  $pdf->MultiCell(170,6, utf8_decode($row['temas']));

 $pdf->SetFont('Arial','',12);
  $pdf->SetXY(20,166);
  $pdf->Cell(0,5, utf8_decode("Solución recomendada:"),0,1,'la');
  $pdf->SetXY(20, 172);
  $pdf->Cell(0,30, "",1,1,'la');
   $pdf->SetFont('Arial','',10);
  $pdf->SetXY(20, 173);
  $pdf->MultiCell(170,5, utf8_decode($row['solucion']));
    

  



  $pdf->SetFont('Arial','',12);
  $pdf->SetXY(122,230);
  $pdf->Cell(0,5, utf8_decode("____________________________"),0,1,'la');
  $pdf->SetXY(129,235);
  $pdf->SetFont('Arial','',10);
  $pdf->MultiCell(58,3, utf8_decode($row['nombrer']));
  

  	 
  	}


   $sql2="SELECT asesor.NombreAS FROM asesor, asesoria
WHERE asesoria.IdAS = asesor.IdAS AND asesor.IdAS = '$idGT';";
 $rec2 = $mysqli->query($sql2);
  while($row2=mysqli_fetch_array($rec2))
  {  
  	   	  

  $pdf->SetFont('Arial','',12);
  $pdf->SetXY(20,230);
  $pdf->Cell(0,5, utf8_decode("____________________________"),0,1,'la');
  $pdf->SetXY(20,235);
  $pdf->SetFont('Arial','',10);
  $pdf->MultiCell(65,3, utf8_decode($row2['NombreAS']));  	  
      
  }	   
  	   

 $pdf->Output();
 ?>