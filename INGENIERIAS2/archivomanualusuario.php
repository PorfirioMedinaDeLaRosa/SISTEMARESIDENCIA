

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
            $sql = "select * from manuales ";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivoMU']==""){
                	?>
        <p>NO tiene archivos</p>
                <?php 
            }else{ 
            	
            	$mi_pdf = 'manuales/'.$datos['nombre_archivoMU'];
                	header('Content-type: application/pdf'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  



  
                	}}
                 ?>


    </body>
</html>

