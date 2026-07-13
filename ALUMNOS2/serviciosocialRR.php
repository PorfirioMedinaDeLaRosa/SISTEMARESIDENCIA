<?php
session_start();

if (!isset($_SESSION["no_control"]) || $_SESSION["no_control"] == null) {
    print "<script>window.location='../index.html';</script>";
}
$idA = $_SESSION["no_control"];

include '../config.inc.php';
$db = new Conect_MySql();



include_once '../config.inc.php';
include '../conexion.php';
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["fileToUpload"]["type"])) {
    $target_dir = "../ALUMNOS2/" . $idA . '/';
    $carpeta = $target_dir;

    $target_file = $carpeta . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $errors[] = "El archivo es un PDF - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $errors[] = "El archivo no es PDF.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $errors[] = "Lo sentimos, archivo ya existe.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 20000000) {
        $errors[] = "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 10.5 MB";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"  && $imageFileType != "pdf" && $imageFileType != "PDF"
    ) {
        $errors[] = "Lo sentimos, sólo archivos JPG, JPEG, PNG, GIF y PDF son permitidos.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errors[] = "Lo sentimos, tu archivo no fue subido.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $messages[] = "El Archivo ha sido subido correctamente.";

            $q = $mysqli->query("SELECT * FROM solicitud   WHERE no_control = '$idA'");

            if (mysqli_num_rows($q) == 0) {




                $nombre = $_FILES['fileToUpload']['name'];
                $tipo = $_FILES['fileToUpload']['type'];
                $tamanio = $_FILES['fileToUpload']['size'];

                $db = new Conect_MySql();

                $sql = "INSERT INTO  solicitud(tamanioS,tipoS,nombre_archivoS, no_control,no_controladmin) VALUES('$tamanio','$tipo','$nombre', '$idA', '$idA')";
                $sql1 = " UPDATE tb_residentes    SET     paso2='x', paso3='x', paso4='x', paso5='x'  where no_control='$idA'";         

                $query = $db->execute($sql);
                $query = $db->execute($sql1);

                if ($query) {
                    echo " Registro insertado correctamente en la tabla solicitud.";
                } else {
                    echo " Ocurrió un error: " . $db->error;
                }
            }
            if (mysqli_num_rows($q) > 0) {
                $nombre = $_FILES['fileToUpload']['name'];
                $tipo = $_FILES['fileToUpload']['type'];
                $tamanio = $_FILES['fileToUpload']['size'];
                $db = new Conect_MySql();
                $sql = " UPDATE solicitud    SET      tamanioS=' $tamanio'  ,    tipoS=' $tipo' ,  nombre_archivoS = '$nombre', no_controladmin='$idA' where no_control='$idA'";
                $sql = " UPDATE tb_residentes    SET     paso2='x', paso3='x', paso4='x', paso5='x'  where no_control='$idA'";

                $query = $db->execute($sql);
            }
        } else {
            $errors[] = "Lo sentimos, hubo un error subiendo el archivo.";
        }
    }

    if (isset($errors)) {
?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong>
            <?php
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            ?>
        </div>
    <?php
    }

    if (isset($messages)) {
    ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Aviso!</strong>
            <?php
            foreach ($messages as $message) {
                echo "<p>$message</p>";
            }
            ?>
        </div>
<?php
    }
}
?>