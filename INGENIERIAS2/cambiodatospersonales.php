<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
include'../conexion.php';
if (isset($_POST['subir'])) {
     $status= $_POST['status'];
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];




    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
  
    $destino = "../archivos/" . $nombre;

 

  
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
             $no_control = $_POST['no_control'];
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
           
            $db=new Conect_MySql();

            $re1 = $mysqli->query("select nombre_archivo from tb_residentes where no_control='$no_control'");
  while ($nombre_archivo=mysqli_fetch_array($re1)) {
    $espera = unlink("../archivos/".$nombre_archivo['nombre_archivo']);
  }

  $sql = " UPDATE  tb_residentes SET    titulo= '$titulo'  ,  descripcion='$descri'  , 
  tamanio=' $tamanio'  ,     tipo=' $tipo' ,  nombre_archivo= '$nombre',  status='$status'  where no_control='$no_control'";         

           
            $query = $db -> execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
       
    }

    if ($nombre == "") {
     
             $no_control = $_POST['no_control'];
         
           
          $db=new Conect_MySql(); 

   $sql = " UPDATE  tb_residentes SET   status='$status'  where no_control='$no_control'";                          
 

           
            $query = $db -> execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
         else {
            echo "Error";
        }
    }
}

header("Location:IINFBDE.php");  
?>











