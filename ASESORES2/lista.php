<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
      
            $sql = "select * from tb_documentos ";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){
                    ?>
        <p>NO tiene archivos</p>
                <?php 
            }


            else{ 
                
               $mi_pdf ='documentos/'.$datos['nombre_archivo'];
                   header('Content-type: application/pdf'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  


  
                    }}
                 ?>


    </body>
</html>