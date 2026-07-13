<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include_once '../config.inc.php';
$no_control = $_POST['no_control'];
include'../conexion.php'; 

//$q = $mysqli->query("SELECT * FROM solicitud WHERE no_control = '$no_control'");

$sql = "SELECT COUNT(*) total from solicitud WHERE no_control = '$no_control'";
$result = $mysqli->query($sql);
$fila = $result->fetch_assoc();

$consultap="SELECT  *  FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$no_control'";

$consultapp = $mysqli->query($consultap);
  while($numerop=mysqli_fetch_array($consultapp))
  {

 $numeroproyecto=$numerop['no_controlp'];

}





if( $fila['total'] == 0){




if (isset($_POST['subir'])) {
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
     $destino = "../ALUMNOS2/".$no_control.'/'.$nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
       
            $db=new Conect_MySql();

   $sql = "INSERT INTO solicitud(tamanioS,tipoS,nombre_archivoS, no_control, no_controladmin) VALUES('$tamanio','$tipo','$nombre', '$no_control', '$numeroproyecto')";
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
    $destino = "../ALUMNOS2/".$no_control.'/'.$nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          
           $db=new Conect_MySql();
//caso contario (else) es porque ese user ya esta registrado
$sql = " UPDATE  solicitud SET      tamanioS=' $tamanio'  ,     tipoS=' $tipo' ,  nombre_archivoS= '$nombre', no_controladmin = '$numeroproyecto'  where no_control='$no_control'";         

           
            $query = $db -> execute($sql); 

             if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}} 


$sql = $mysqli->query(" UPDATE  tb_residentes  SET  paso4='x' where no_control ='$no_control'");




    header('location:../ALUMNOS2/homealumno.php');

?>




