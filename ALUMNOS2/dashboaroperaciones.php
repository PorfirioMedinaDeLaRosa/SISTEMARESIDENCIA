<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"];




include'../conexion.php';
$sql = "     SELECT  *  FROM  tb_residentes
WHERE no_control='$idGT'";

   
            $query = $db->execute($sql);
  

   
    if( mysqli_num_rows($query)  > 0) {

  
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

               

                       <td><?php


                     



            if ($datos['StatusInscripcion']=='Aceptado')  {

             	 include'dashboaroperaciones2.php';
             }else{
				include'dashboarinscripcion2.php';
			 }
			}
		}


?>

