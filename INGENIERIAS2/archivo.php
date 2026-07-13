


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        include '../config.inc.php';
        $db=new Conect_MySql();
       $id = $_GET['id'];
            $sql = "select * from tb_residentes where no_control='$id'";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){
                	?>
        <p>NO tiene archivos</p>
                <?php 
            }


            else{ 
            	
            	$mi_pdf = '../archivos/'.$datos['nombre_archivo'];
                	header('Content-type: application/pdf'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  



  
                	}}
                 ?>


    </body>
</html>









	

	

	
