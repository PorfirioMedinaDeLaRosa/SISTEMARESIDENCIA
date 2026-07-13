<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
$no_control = $_POST['no_control'];
$IdAS = $_POST['IdAS'];

$dia = date("d");

$mes = date("m");


$año = date("Y");

$fecha = $dia." ".$mes." ".$año;


if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../ASESORES2/asesoria/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();

   $sql = "INSERT INTO aasesoria(tamanioR1,tipoR1,nombre_archivoR1,   no_control, IdAS, fecha) VALUES('$tamanio','$tipo','$nombre', '$no_control', '$IdAS', '$fecha')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}


header("Location:../ASESORES2/periodo.php");  

 