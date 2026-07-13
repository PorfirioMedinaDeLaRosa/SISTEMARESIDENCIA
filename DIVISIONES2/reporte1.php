<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["division_id"];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>

    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                ITSCS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <?php 



//Si se ha pulsado el botÃģn de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  divisiones
                WHERE  idD ='$idGT'               ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>


            <?php  }} ?>
            <div class="full-box dashboard-sideBar-UserInfo">
                <div align="center"><img src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" />
                </div><br><br>
                <figure class="full-box">
                    <!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
                    <figcaption class="text-center text-titles"><?php echo 
					$datos['NombreD']; ?> <br><br> <?php echo 
					$datos['CarreraD']; ?></figcaption>
                </figure>

            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <?php
 
  include 'menu.php';
?>


            </ul>
        </div>
    </section>
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <?php
include'navram.php';

		?>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">


            </div>
            <?php

$no_control = $_GET['no_control'];



     //   $db->query('set name utf8');

            $sql = "SELECT * FROM divisiones  where idD = 'idGT'  
                 ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>



            <?php  }} ?>
          
        <!-- Incluye en el <head> si aún no lo tienes -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

<style>
  .upload-container {
    max-width: 500px;
    margin: 40px auto;
    border: 2px solid #1804c1;
    border-radius: 12px;
    padding: 30px 25px;
    background: #f9f9ff;
    box-shadow: 0 6px 15px rgba(24, 4, 193, 0.2);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .upload-container h4 {
    color: #1804c1;
    margin-bottom: 12px;
    font-weight: 700;
    text-align: center;
  }

  .upload-container h5 {
    color: #333;
    font-weight: 500;
    margin: 6px 0 18px;
    text-align: center;
    font-size: 16px;
  }

  .upload-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .upload-container label {
    font-weight: 600;
    color: #1804c1;
    margin-bottom: 8px;
    font-size: 15px;
  }

  .upload-container input[type="file"] {
    border: 2px solid #1804c1;
    border-radius: 8px;
    padding: 10px 12px;
    cursor: pointer;
    font-size: 14px;
    background-color: #fff;
    transition: border-color 0.3s ease;
    width: 100%;
    max-width: 350px;
    text-align: center;
  }

  .upload-container input[type="file"]:hover {
    border-color: #120390;
  }

  .upload-container input[type="text"] {
    border: 2px solid #ccc;
    border-radius: 8px;
    padding: 8px 12px;
    width: 100%;
    max-width: 350px;
    margin-bottom: 15px;
    font-size: 14px;
  }

  .upload-container .help-block {
    font-size: 13px;
    color: #555;
    margin-top: 8px;
    text-align: center;
  }

  .upload-msg {
    margin-top: 20px;
    font-size: 14px;
    color: #1804c1;
    text-align: center;
    min-height: 24px;
  }
</style>

<!-- Contenedor -->
<div class="upload-container">
  <h4>Evaluación 1</h4>
  <h5>Sube un archivo PDF nombrado con tu número de control más la terminación <strong>E1</strong></h5>
  <h5>Ejemplo: <code>20CS0001E1.pdf</code></h5>

  <form id="uploadForm" enctype="multipart/form-data">

    <!-- Campo visible del número de control -->
    <input type="hidden" name="no_control" value="<?php echo strtoupper($no_control); ?>">
    <input type="hidden" name="IdAS" value="<?php echo strtoupper($idGT); ?>">
<input type="number" name="CR1" id="CR1" value="0">

    <label for="fileToUpload">Subir archivo PDF</label>
    <input type="file" id="fileToUpload" accept=".pdf" onchange="upload_image();">

    <p class="help-block">Selecciona un archivo PDF válido.</p>
    <div class="upload-msg"></div> <!-- Aquí se mostrará el mensaje AJAX -->
  </form>
</div>

     

    </section>

    <!-- Notifications area -->





    <!--====== Scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/material.min.js"></script>
    <script src="../js/ripples.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
    $.material.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).on("change", ".archivo-input", function() {
        let nombre = this.files[0]?.name || "Ningún archivo seleccionado";
        $(this).next(".archivo-nombre").text(nombre);
    });
    </script>

    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
function upload_image() {

    let form = document.getElementById("uploadForm");
    let data = new FormData(form);

    let fileInput = document.getElementById("fileToUpload");

    if (fileInput.files.length === 0) {
        $(".upload-msg").html("❌ No se seleccionó ningún archivo");
        return;
    }

    data.append("archivo", fileInput.files[0]);
   

    $.ajax({
        url: "../Registro2/reporteuno.php",
        type: "POST",
        data: data,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            $(".upload-msg").html("✅ " + respuesta);
        },
        error: function () {
            $(".upload-msg").html("❌ Error al subir el archivo");
        }
    });
}
</script>


</body>

</html>