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




  $usuarioU = $_POST['usuario'];
$passwordU = $_POST['password'];

  $idP=null;
 $query = "SELECT  EmailP,  PasswordP,   idP FROM presidente where  EmailP = '$usuarioU' and PasswordP = '$passwordU'";
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
      print "<script>window.location='asesor2/homeasesores.php';</script>";  
      }






















mysqli_close($mysqli);
?>
</center>
</body>
</html>