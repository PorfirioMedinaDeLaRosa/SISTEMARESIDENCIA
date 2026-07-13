<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
$no_control = $_POST['no_control'];
$IdAS = $_POST['IdAS'];
$CR1 = $_POST['CR1'];


include'../conexion.php';
$q = $mysqli->query("SELECT * FROM reportesasesor WHERE no_control = '$no_control'");

if( mysqli_num_rows($q) == 0){


if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../DIVISIONES2/efinalfinal/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();

   $sql = "INSERT INTO reportesasesor(tamanioRFF,tipoRFF,nombre_archivoRFF, calificacionRFF,  no_control, IdAS) VALUES('$tamanio','$tipo','$nombre','$CR1', '$no_control', '$IdAS')";
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
    $destino = "../DIVISIONES2/efinalfinal/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
           $db=new Conect_MySql();
//caso contario (else) es porque ese user ya esta registrado
$sql = " UPDATE  reportesasesor SET      tamanioRFF=' $tamanio'  ,   tipoRFF=' $tipo' ,  nombre_archivoRFF = '$nombre' ,   calificacionRFF = '$CR1', IdAS = '$IdAS'  where no_control='$no_control'";         

           
            $query = $db -> execute($sql); 

             if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}} 




   header("Location:../DIVISIONES2/reportesperiodo.php");  


?>