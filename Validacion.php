<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" style="background-image: url(./assets/img/loginFont3.jpg);">
<center>

<?php
include "conexion.php";
require('rsesiones.php');




class Encrypter {
 
    private static $Key = "";
 
  public static function encrypt ($input) {
      $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
       return $output;
   }
 
    public static function decrypt ($input) {
        $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
        return $output;
    }
 
}

$nivelU = $_POST ['nivel'];

if($nivelU == "Administrador"){
$usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];
$texto_encriptado = Encrypter::encrypt($passwordU);

  $idA=null;
 $query = "SELECT EmailA,  PasswordA , idA FROM admin where EmailA='$usuarioU' and 
 passwordA ='$texto_encriptado'";
 $resultado = $mysqli -> query($query);
 while ($r=$resultado->fetch_array()) {
        $idA=$r["idA"];
        break;
      }



 if($idA==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["user_id"]=$idA;
      print "<script>window.location='INGENIERIAS/home.php';</script>";  
      }
}




if($nivelU == "Asesor"){
  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];
$texto_encriptado = Encrypter::encrypt($passwordU);

  $idA=null;
 $query = "SELECT EmailAS, PasswordAs, idAS FROM asesor where EmailAS='$usuarioU' and PasswordAs='$texto_encriptado'";
 $resultado = $mysqli -> query($query);
 while ($r=$resultado->fetch_array()) {
        $idAS=$r["idAS"];
        break;
      }



 if($idAS==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["asesor_id"]=$idAS;
      print "<script>window.location='ASESORES/Homeasesor.php';</script>";  
      }
}




if($nivelU == "Presidente de Academia"){
  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];
$texto_encriptado = Encrypter::encrypt($passwordU);
  $idP=null;
 $query = "SELECT  EmailP,  PasswordP,   idP FROM presidente where  EmailP = '$usuarioU' and PasswordP = '$texto_encriptado'";
 $resultado = $mysqli -> query($query);
 
 while ($r=$resultado->fetch_array()) {
        $idP=$r["idP"];
        break;
      }



 if($idP==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["presidente_id"]=$idP;
      print "<script>window.location='asesor/homeasesores.php';</script>";  
      }
}




if($nivelU == "Gestion Tecnologica"){
  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];

   $idGT=null;

 $query = "SELECT CorreoGT, PasswordGT, idGT FROM gestion where CorreoGT='$usuarioU' and CorreoGT='$passwordU'";
 $resultado =$mysqli -> query($query);
 while ($r=$resultado->fetch_array()) {
        $idGT=$r["idGT"];
        break;
      }
      if($idGT==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["gestion_id"]=$idGT;
      print "<script>window.location='GESTION/homegestion.php';</script>";  
      }

}









if($nivelU == "Jefe de División"){
  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];
$texto_encriptado = Encrypter::encrypt($passwordU);

   $idD=null;

 $query = "SELECT   EmailD, PasswordD, idD FROM divisiones where  EmailD ='$usuarioU' and PasswordD ='$texto_encriptado'";
 $resultado = $mysqli -> query($query);
 
 while ($r=$resultado->fetch_array()) {
        $idD=$r["idD"];
        break;
      }
      if($idD==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["division_id"]=$idD;
      print "<script>window.location='DIVISIONES/homedivisiones.php';</script>";  
      }
}






if($nivelU == "Residente"){
  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];


 $query = "SELECT * FROM asignacionproyecto where no_control ='$usuarioU'";
 $resultado = $mysqli -> query($query);


if ($resultado->num_rows > 0){




 $query = "SELECT no_control, curp FROM tb_residentes where no_control ='$usuarioU' and password ='$passwordU'";
 $resultado = $mysqli -> query($query);




 if ($resultado->num_rows > 0){

  $query2 = "SELECT no_control, creditosc FROM tb_residentes where no_control='$usuarioU' and creditosc >='5'";
  $resultado2 = $mysqli -> query($query2);
  if ($resultado2->num_rows > 0){
     session_start();
    $_SESSION['no_control'] = $usuarioU;
    print "<script>window.location='ALUMNOS/validacion.php';</script>"; 
  }else{
    
    $query3 = "SELECT no_control, status FROM tb_residentes where no_control='$usuarioU' and status ='Activo'";
    $resultado3 = $mysqli -> query($query3);
    if($resultado3->num_rows > 0){
       session_start();
      $_SESSION['no_control'] = $usuarioU;
      print "<script>window.location='ALUMNOS/validacion.php';</script>";
    }else{
      header("Location: errorCreditos.php"); 
    }
  }
 }else{
  header("Location: errorUsuario.php");
 }
}

else{
  header("Location: errorUsuario.php");
 }}





mysqli_close($mysqli);


?>
</center>
</body>
</html>