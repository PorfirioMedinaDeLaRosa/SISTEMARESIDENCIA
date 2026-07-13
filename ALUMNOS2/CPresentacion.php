<?php

include_once '../config.inc.php';
include'../conexion.php'; 
$no_control = $_POST['no_control'];

 // Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"

 //echo $no_control;
 $q = $mysqli->query("SELECT * FROM tramitesgestion WHERE no_control = '$no_control'");

 if( mysqli_num_rows($q) == 0){
 
    
     $nombre = $_FILES['file']['name'];
     $tipo = $_FILES['file']['type'];
     $tamanio = $_FILES['file']['size'];
     $ruta = $_FILES['file']['tmp_name'];
     $destino = "../ALUMNOS2/".$no_control.'/'.$fichero["name"];
     move_uploaded_file($fichero["tmp_name"], "../ALUMNOS2/".$no_control.'/'.$fichero["name"]);
     if ($nombre != "") {
        
            $db=new Conect_MySql();
 
             $sql = "INSERT INTO tramitesgestion(  tamanioCP  ,  tipoCP,    nombre_archivoCP, no_control) VALUES('$tamanio','$tipo','$nombre', '$no_control')";
             $query = $db->execute($sql); 
 
             if($query){
                 echo "Se guardo correctamente";
             }
         
     }
 }
 else{
   
        $nombre = $_FILES['file']['name'];
        $tipo = $_FILES['file']['type'];
        $tamanio = $_FILES['file']['size'];
        $ruta = $_FILES['file']['tmp_name'];
        $destino = "../ALUMNOS2/".$no_control.'/'.$fichero["name"];
        move_uploaded_file($fichero["tmp_name"], "../ALUMNOS2/".$no_control.'/'.$fichero["name"]);
      if ($nombre != "") {
        
           
            $db=new Conect_MySql();
 //caso contario (else) es porque ese user ya esta registrado
 $sql = " UPDATE  tramitesgestion SET       nombre_archivoCP ='$nombre'  where no_control='$no_control'";         
 $query = $db -> execute($sql); 
 
              if($query){
                 echo "Se guardo correctamente";
             }
        
     }
 }
 

// Redirigiendo hacia atrás


header("Location: " . $_SERVER["HTTP_REFERER"]);
?>