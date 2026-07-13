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
            $sql = "select * from logos where idlogos='$id'";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){
                	?>
        <p>NO tiene archivos</p>
                <?php 
            }


            else{ 
            	
            	$mi_pdf = '../assets/img/'.$datos['nombre_archivo'];
                	header('Content-type: image/png'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  

                     echo "$mi_pdf";

  
                	}}
                 ?>


    </body>
</html>

