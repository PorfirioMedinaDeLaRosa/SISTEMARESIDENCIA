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

  $idA=null;
 $query = "SELECT EmailAS, PasswordAs, idAS FROM asesor where EmailAS='$usuarioU' and PasswordAs='$passwordU'";
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
      print "<script>window.location='ASESORES2/Homeasesor.php';</script>";  
      }



















mysqli_close($mysqli);
?>
</center>
</body>
</html>