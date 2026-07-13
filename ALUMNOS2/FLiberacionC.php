<?php
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["no_control"];

include '../config.inc.php';
$db=new Conect_MySql();



 include_once '../config.inc.php';
 include'../conexion.php';  
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["fileToUpload"]["type"])){
$target_dir = "../ALUMNOS2/".$idA.'/';
$carpeta=$target_dir;

$target_file = $carpeta . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $errors[]= "El archivo es un PDF - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errors[]= "El archivo no es PDF.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $errors[]="Lo sentimos, archivo ya existe.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 10.5 MB";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"  && $imageFileType != "pdf" && $imageFileType != "PDF" ) {
    $errors[]= "Lo sentimos, sólo archivos JPG, JPEG, PNG, GIF y PDF son permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $errors[]= "Lo sentimos, tu archivo no fue subido.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $messages[]= "El Archivo ha sido subido correctamente.";
    
$q = $mysqli->query("SELECT * FROM tramitesgestion   WHERE no_control = '$idA'");

if( mysqli_num_rows($q) == 0){




    $nombre = $_FILES['fileToUpload']['name'];
    $tipo = $_FILES['fileToUpload']['type'];
    $tamanio = $_FILES['fileToUpload']['size'];
                   
            $db=new Conect_MySql();
    
            $sql = "INSERT INTO  tramitesgestion(tamanioCL,tipoCL,nombre_archivoCL, no_control) VALUES('$tamanio','$tipo','$nombre', '$idA')";
            $query = $db->execute($sql);
               
        
    }
    if(mysqli_num_rows($q) > 0){  
        $nombre = $_FILES['fileToUpload']['name'];
        $tipo = $_FILES['fileToUpload']['type'];
        $tamanio = $_FILES['fileToUpload']['size'];
        $db=new Conect_MySql();
        $sql = " UPDATE tramitesgestion    SET      tamanioCL=' $tamanio'  ,    tipoCL=' $tipo' ,  nombre_archivoCL = '$nombre'  where no_control='$idA'";         
        $query = $db -> execute($sql); 
} 
	   
	   
    } else {
        $error_code = $_FILES["fileToUpload"]["error"];
        switch ($error_code) {
            case UPLOAD_ERR_INI_SIZE:
                $errors[] = "El archivo excede el tamaño máximo permitido por el servidor (php.ini).";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $errors[] = "El archivo excede el tamaño máximo permitido por el formulario HTML.";
                break;
            case UPLOAD_ERR_PARTIAL:
                $errors[] = "El archivo fue subido parcialmente.";
                break;
            case UPLOAD_ERR_NO_FILE:
                $errors[] = "No se subió ningún archivo.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $errors[] = "Falta la carpeta temporal en el servidor.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $errors[] = "No se pudo escribir el archivo en el disco.";
                break;
            case UPLOAD_ERR_EXTENSION:
                $errors[] = "Una extensión de PHP detuvo la subida del archivo.";
                break;
            default:
                $errors[] = "Lo sentimos, hubo un error subiendo el archivo. Código de error: $error_code.";
                break;
        }
        
    }
}
 
if (isset($errors)){
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Error!</strong> 
	  <?php
	  foreach ($errors as $error){
		  echo"<p>$error</p>";
	  }
	  ?>
	</div>
	<?php
}
 
if (isset($messages)){
	?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Aviso!</strong> 
	  <?php
	  foreach ($messages as $message){
		  echo"<p>$message</p>";
	  }
	  ?>
	</div>
	<?php
}
}
?>