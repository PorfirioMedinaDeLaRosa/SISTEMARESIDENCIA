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
    $destino = "../INGENIERIAS2/manuales/".$nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();
            $re1 = $mysqli->query("select nombre_archivoMU from manuales ");
    while ($nombre_archivoMU=mysqli_fetch_array($re1)) {
        $espera = unlink("../INGENIERIAS/manuales/".$nombre_archivoMU['nombre_archivoMU']);
    }

$sql = "INSERT INTO manuales (tamanioMU,tipoMU,nombre_archivoMU,idA) VALUES('$tamanio','$tipo',
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
    $destino = "../INGENIERIAS2/manuales/".$nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
           $db=new Conect_MySql();


         
//caso contario (else) es porque ese user ya esta registrado
$sql = " UPDATE  manuales SET  tamanioMU=' $tamanio'  ,     tipoMU=' $tipo' ,  nombre_archivoMU = '$nombre'  where idA='$idA'";         

           
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