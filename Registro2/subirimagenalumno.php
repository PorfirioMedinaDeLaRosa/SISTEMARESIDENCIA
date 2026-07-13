<?php
// $db = new mysqli("localhost", "root", "", "bdejemplo");
include'../conexion.php';
$no_control = $_POST['no_control'];


 $re4 = $mysqli->query("select  ruta_imagen from tb_residentes where no_control='$no_control'");
  while ($ruta_imagen=mysqli_fetch_array($re4)) {
    $espera = unlink("../ALUMNOS2/imagenperfil/".$ruta_imagen['ruta_imagen']);


// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 2000000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio ='../ALUMNOS2/imagenperfil/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}
   

$sql = "UPDATE tb_residentes SET ruta_imagen = '$nombre_img', paso3='x' where no_control = '$no_control' ";
$result = $mysqli->query($sql);
 

}



$no_control = '../ALUMNOS2/'.$no_control;
if (!file_exists($no_control)) {
    mkdir($no_control, 0777, true);
}

header('Location:../ALUMNOS2/imagenperfil.php')
 
 







   




?>