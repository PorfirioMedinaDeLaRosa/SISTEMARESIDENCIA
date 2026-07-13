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
            $sql = "select * from tramitesgestion where no_control='$id'";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivoCA']==""){
                	?>
        <p>NO tiene archivos</p>
                <?php 
            }else{ 
            	
            	  $mi_pdf = '../ALUMNOS2/'.$id.'/'.$datos['nombre_archivoCA'];
                	header('Content-type: application/pdf'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  



  
                	}}
                 ?>


    </body>
</html>