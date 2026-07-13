<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
$idA = $_POST['idA'];

include'../conexion.php';  

$q = $mysqli->query("SELECT * FROM manuales WHERE idA = '$idA'");

if( mysqli_num_rows($q) == 0){


if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../INGENIERIAS2/manuales/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();

$sql = "INSERT INTO manuales (tamanioMT,tipoMT,nombre_archivoMT,idA) VALUES('$tamanio','$tipo',
'$nombre', '$idA')";
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
    $destino = "../INGENIERIAS2/manuales/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
           $db=new Conect_MySql();


         
//caso contario (else) es porque ese user ya esta registrado
$sql = " UPDATE  manuales SET  tamanioMT=' $tamanio'  ,     tipoMT=' $tipo' ,  nombre_archivoMT = '$nombre'  where idA='$idA'";         

           
            $query = $db -> execute($sql); 

             if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}}


 header('location:../INGENIERIAS2/manuales.php');

?>