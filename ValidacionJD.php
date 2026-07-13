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
//require('rsesiones.php');

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


$usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];
//$texto_encriptado = Encrypter::encrypt($passwordU);

   $idD=null;

 $query = "SELECT   EmailD, PasswordD, idD FROM divisiones where  EmailD ='$usuarioU' and PasswordD ='$passwordU'";
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
      print "<script>window.location='DIVISIONES2/homedivisiones.php';</script>";  
      }

















mysqli_close($mysqli);
?>
</center>
</body>
</html>