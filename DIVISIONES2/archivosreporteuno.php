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
            $sql = "select * from reportesasesor where no_control='$id'";
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivoR1']==""){
                    ?>
        <p>NO tiene archivos</p>
                <?php 
            }


            else{ 
                
               $mi_pdf ='euno/'.$datos['nombre_archivoR1'];
                   header('Content-type: application/pdf'); 
                    header('Content-Disposition: attachment; filename="'.$mi_pdf.'"'); 
                    readfile($mi_pdf);  


  
                    }}
                 ?>


    </body>
</html>
