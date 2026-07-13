<?php
include "conexion.php";
//$usuarioU = $_POST['tipo_usuario'];
//$passwordU = $_POST['password'];


 $idA=null;
 $query = "SELECT nc, tipo_usuario,  password FROM usuario where tipo_usuario='alumno' and 
 password ='canico20'";

 $resultado = $mysqli -> query($query);
 while ($r=$resultado->fetch_array()) {
        $idA=$r["nc"];
        break;
      }



 if($idA==null){
         header("Location: errorUsuario.php");
      }else{
        session_start();
        $_SESSION["user_id"]=$idA;
      print "<script>window.location='INGENIERIAS2/home.php';</script>";  
      }
