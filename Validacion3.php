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

 $query = "SELECT no_control, curp FROM tb_residentes where no_control ='$usuarioU' and password ='$passwordU'";
 $resultado = $mysqli -> query($query);
 if ($resultado->num_rows > 0){

  $query2 = "SELECT no_control, creditosc FROM tb_residentes where no_control='$usuarioU' and creditosc >='5'";
  $resultado2 = $mysqli -> query($query2);
  if ($resultado2->num_rows > 0){
     session_start();
    $_SESSION['no_control'] = strtoupper($usuarioU);
    print "<script>window.location='ALUMNOS2/validacion.php';</script>"; 
  }else{
    
    $query3 = "SELECT no_control, status FROM tb_residentes where no_control='$usuarioU' and status ='Activo'";
    $resultado3 = $mysqli -> query($query3);
    if($resultado3->num_rows > 0){
       session_start();
      $_SESSION['no_control'] = strtoupper($usuarioU);
      print "<script>window.location='ALUMNOS2/validacion.php';</script>";
    }else{
      header("Location: errorCreditos.php"); 
    }
  }
 }else{
  header("Location: errorUsuario.php");
 }




mysqli_close($mysqli);
?>
</center>
</body>
</html>