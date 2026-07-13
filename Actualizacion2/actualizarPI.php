<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 </head>
 <body>
<?php
	include'../conexion.php';	

	        $ids = $_POST['no_control'];
            $status = $_POST['status'];
			 $modificaciones = $_POST['modificaciones'];

           $sql = $mysqli->query(" UPDATE  PlacticaInformatica SET 	StatusPI='$status', ModificacionesPI='$modificaciones' where ncontrol='$ids'");                             
  if($status =='Aceptado'){
    $sql = $mysqli->query("UPDATE tb_residentes SET  paso4='x' where no_control = '$ids'");                             

   
  }
         

	 header("Location: ../GESTION2/buscaralumnos.php");  
?>

 </body>
    </html>