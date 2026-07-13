<?php

include'../conexion.php';


$LISTA=$_POST['LISTA'];

$statusproyecto=$_POST['aprovacion'];

if ($LISTA=='0' or $statusproyecto =='0') {
    print "Verificar datos, Debe Verificar El asesor o el status del proyecto";


}
else
{

if ($LISTA=='1') {
$Texto1=$_POST['Texto1'];

if ($Texto1=='0') {
   print "Verificar datos 2";
}
    
}


if ($LISTA=='2') {
$Texto1=$_POST['Texto1'];
$Texto2=$_POST['Texto2'];

if ($Texto1=='0' or $Texto2=='0' ) {
   print "Verificar datos 3 ";
}
    
}


if ($LISTA=='3') {
$Texto1=$_POST['Texto1'];
$Texto2=$_POST['Texto2'];
$Texto3=$_POST['Texto3'];

if ($Texto1=='0' or $Texto2=='0'  or $Texto3=='0' ) {
   print "Verificar datos 4 ";
}
    
}


if ($LISTA=='4') {
$Texto1=$_POST['Texto1'];
$Texto2=$_POST['Texto2'];
$Texto3=$_POST['Texto3'];
$Texto4=$_POST['Texto4'];

if ($Texto1=='0' or $Texto2=='0'  or $Texto3=='0' or $Texto4=='0' ) {
   print "Verificar datos 5 ";
}
    
}


if ($LISTA=='5') {
$Texto1=$_POST['Texto1'];
$Texto2=$_POST['Texto2'];
$Texto3=$_POST['Texto3'];
$Texto4=$_POST['Texto4'];
$Texto5=$_POST['Texto5'];

if ($Texto1=='0' or $Texto2=='0'  or $Texto3=='0' or $Texto4=='0'  or $Texto5=='0') {
   print "Verificar datos ";
}}
    




 
$emailgestion=$_POST['emailgestion'];

$emailadmin=$_POST['emailadmin'];

$emailresidente=$_POST['emailresidente'];

$emaildivision=$_POST['emaildivisiones'];



$estado=$_POST['statusn'];
$estado2=$_POST['statuso'];
$estado3=$_POST['statusp'];

$estado4=$_POST['statusob'];

$estado5=$_POST['statusj'];
$estado6=$_POST['statuspr'];

$objectivos=$_POST['objectivos'];


$actividades=$_POST['actividades'];



$statusproyecto=$_POST['aprovacion'];

$idproyecto=$_POST['idproyecto'];




    

if ($estado=="N" or $estado2=="N"or $estado3=="N" or $estado4=="N" or $estado5=="N"  or $estado6=="N") {
    print("Falta Selecionar un dato");
}

else {
    if($estado=='si'){
    $observacionn=$_POST['observacionn'];
$sql = $mysqli->query(" UPDATE  proyectos  SET statusn=\"Rechazar\" , observacionn='$observacionn' where idproyecto='$idproyecto'");   

 }

if($estado=='no'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statusn=\"Aceptar\" , observacionn=\"\" where idproyecto='$idproyecto'");    

}



if($estado2=='sii'){
    $observaciono=$_POST['observaciono'];
$sql = $mysqli->query(" UPDATE  proyectos  SET statuso=\"Rechazar\" , observaciono='$observaciono' where idproyecto='$idproyecto'");    

}

if($estado2=='noo'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statuso=\"Aceptar\" , observaciono=\"\" where idproyecto='$idproyecto'");   


 }



if($estado3=='si3'){


$observaciono=$_POST['observacionp'];

$sql = $mysqli->query(" UPDATE  proyectos  SET statusp=\"Rechazar\" , observacionp='$observaciono' where idproyecto='$idproyecto'");   
}


if($estado3=='no3'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statusp=\"Aceptar\" , observacionp=\"\" where idproyecto='$idproyecto'");   

 }







if($estado4=='si4'){

    $observacionob=$_POST['observacionob'];


$sql = $mysqli->query(" UPDATE  proyectos  SET statusob=\"Rechazar\" , observacionob='$observacionob' where idproyecto='$idproyecto'");   

 }

if($estado4=='no4'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statusob=\"Aceptar\" , observacionob=\"\" where idproyecto='$idproyecto'");    

}




if($estado5=='si5'){
    $observacionoj=$_POST['observacionoj'];
$sql = $mysqli->query(" UPDATE  proyectos  SET statusj=\"Rechazar\" , observacionoj='$observacionoj' where idproyecto='$idproyecto'");    

}

if($estado5=='no5'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statusj=\"Aceptar\" , observacionoj=\"\" where idproyecto='$idproyecto'");    
}





if($estado6=='si6'){
    $observacionopr=$_POST['observacionopr'];
$sql = $mysqli->query(" UPDATE  proyectos  SET statuspr=\"Rechazar\" , observacionopr='$observacionopr' where idproyecto='$idproyecto'");   
 }

if($estado6=='no6'){
$sql = $mysqli->query(" UPDATE  proyectos  SET statuspr=\"Aceptar\" , observacionopr=\"\" where idproyecto='$idproyecto'");    


}

if ($LISTA=='1') {

$asesor1=$_POST['Texto1'];

if ($asesor1 =='1'){

}

else
{
  $sql = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor1') ");
}

}



if ($LISTA=='2') {

$asesor1=$_POST['Texto1'];
$asesor2=$_POST['Texto2'];


  $sql = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor1') ");

  $sql2 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor2') ");
 

}


if ($LISTA=='3') {

$asesor1=$_POST['Texto1'];
$asesor2=$_POST['Texto2'];
$asesor3=$_POST['Texto3'];

$sql = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor1') ");

  $sql2 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor2') ");

  $sql3 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor3') ");
 

}


if ($LISTA=='4') {

$asesor1=$_POST['Texto1'];
$asesor2=$_POST['Texto2'];
$asesor3=$_POST['Texto3'];
$asesor4=$_POST['Texto4'];

 $sql = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor1') ");

  $sql2 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor2') ");

  $sql3 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor3') "); 


 $sql4 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor4') "); 

}


if ($LISTA=='5') {

$asesor1=$_POST['Texto1'];
$asesor2=$_POST['Texto2'];
$asesor3=$_POST['Texto3'];
$asesor4=$_POST['Texto4'];
$asesor5=$_POST['Texto5'];


  $sql = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor1') ");

  $sql2 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor2') ");

  $sql3 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor3') "); 


 $sql4 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor4') "); 

 $sql5 = $mysqli->query("insert into numerodeasesores(IdAS4,  IdAS) values ( '$idproyecto' ,'$asesor5') "); 


}



if ($statusproyecto=='Aceptado') {
  $hoy = date("g:i a"); 


$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$fecha= $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')." ".$hoy;




$sql = $mysqli->query(" UPDATE  proyectos  SET    actividades = '$actividades' , objectivos = '$objectivos',   StatusGeneral='$statusproyecto', fecha ='$fecha'  where idproyecto='$idproyecto'");  

}




$sql = $mysqli->query(" UPDATE  proyectos  SET    actividades = '$actividades' , objectivos = '$objectivos',   StatusGeneral='$statusproyecto'  where idproyecto='$idproyecto'");  

}


$nombrer=$_POST['nombrer'];
$apr=$_POST['apr'];
$amr=$_POST['apm'];
$carrerar=$_POST['carrerar'];
$nombrep=$_POST['nombrepr'];
$no_control=$_POST['no_control'];



//$cuerpo = "El Alumno"."\n".$nombrer." ".$apr." ".$amr."\n"."No Control"." ".$no_control."\n"."De la Carrera de"." ".$carrerar."\n"."Con Nombre de Proyecto ".$nombrep."\n"."Ha sido".$statusproyecto."\n"."Por favor de entrar al sistema de residencias profesionales para mayor información";

  require_once('../asesor/php/class.phpmailer.php');
    require_once('../asesor/php/class.smtp.php');

 $mail = new PHPMailer;
             $mail->IsSMTP(); // Usar SMTP para enviar
    $mail->SMTPDebug  = 0; // habilita información de depuración SMTP (para pruebas)
                           // 1 = errores y mensajes
                           // 2 = sólo mensajes
    $mail->SMTPAuth   = true; // habilitar autenticación SMTP
    $mail->Host       = "smtp.gmail.com"; // establece el servidor SMTP
    $mail->Port       = 465; // configura el puerto SMTP utilizado
    $mail->SMTPSecure = "ssl";
    $mail->Username   = "residenciaprofesional@tecserdan.edu.mx"; // nombre de usuario UGR
    $mail->Password   = "Residencia2018"; // contraseña del usuario UGR
 
    $mail->CharSet = 'UTF-8';


    

    $address = $emailgestion; // Dirección del destinatario
    $address2 = $emailadmin;
    $address3 = $emailresidente;
    $address4 = $emaildivision;
  
    $mail->AddAddress($address,$address2,$address3, $address4,  "Nombre del destinatario");

    $mail->SetFrom('residenciaprofesional@tecserdan.edu.mx');
    $mail->Subject    = "Asunto del mensaje";
    $mail->Body = "El Alumno"."\n".$nombrer." ".$apr." ".$amr."\n"."No Control"." ".$no_control."\n"."De la Carrera de"." ".$carrerar."\n"."Con Nombre de Proyecto ".$nombrep."\n"."Ha sido".$statusproyecto."\n"."Por favor de entrar al sistema de residencias profesionales para mayor información"; // Fija el cuerpo del mensaje

    $mail->isHTML(true);


  




 print "Datos Actualizados con exito";

}

?>
