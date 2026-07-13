<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
$no_control = $_POST['id'];


include'../conexion.php';  
$q = $mysqli->query("SELECT * FROM  modifcarproyecto WHERE no_control = '$no_control'");

if( mysqli_num_rows($q) == 0){


if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../INGENIERIAS2/archivosmodificar/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();

   $sql = "INSERT INTO  modifcarproyecto(tamanio,tipo,nombre_archivo, no_control) VALUES('$tamanio','$tipo','$nombre', '$no_control')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}}
else{

    if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../INGENIERIAS2/archivosmodificar/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
           $db=new Conect_MySql();
//caso contario (else) es porque ese user ya esta registrado
$sql = " UPDATE   modifcarproyecto SET      tamanio=' $tamanio'  ,   tipo=' $tipo' ,  nombre_archivo = '$nombre'   where no_control='$no_control'";         

           
            $query = $db -> execute($sql); 

             if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}} 



header("Location:../INGENIERIAS2/IINPB.php");  

    

?>