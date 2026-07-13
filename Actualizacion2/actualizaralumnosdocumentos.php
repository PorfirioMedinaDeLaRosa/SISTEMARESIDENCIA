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

           $sql = $mysqli->query(" UPDATE  tramitesgestion SET 	status='$status', modificaciones='$modificaciones' where no_control='$ids'");                             

 

	 header("Location: ../GESTION2/buscardocumentos.php");  
?>

 </body>
    </html>