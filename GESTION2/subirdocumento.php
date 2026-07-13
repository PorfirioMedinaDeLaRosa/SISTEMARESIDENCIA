<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["gestion_id"]) || $_SESSION["gestion_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["gestion_id"]



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  gestion
                WHERE  idGT ='$idGT'
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
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NombreGT']; ?> <br><br> <?php echo 
					$datos['CargoGT']; ?></figcaption>
				</figure>
			
			</div>
				<!-- SideBar Menu -->
			 <ul class="list-unstyled full-box dashboard-sideBar-Menu">
         <?php
       include'dashboar.php'
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
			  <h4>Envio de Formatos a residentes</h4>
			</div>
			<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

       $sql = "SELECT * FROM gestion where idGT='$idGT'";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
           
           
       
<?php  }}


$id = $_GET['id'];

 ?>
		</div>
						
				  	



					
    <div style="width: 500px; margin: auto; border: 1px solid blue; padding: 30px;">
    <h4>Formato de acuerdos</h4>
    <div class="modal-body">
        <form id="formAcuerdo" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">             
            <table>
                <tr>
                    <div class="form-group label-floating">
                        <label for="fechaacuerdo">Fecha Límite:</label>
                        <input class="form-control" type="date" id="fechaacuerdo" name="fechaacuerdo">
                    </div>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="file" name="archivo" id="archivo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Subir" name="subir">
                    </td>
                </tr>
            </table>
        </form> 
        <div id="resultado"></div> <!-- Aquí se mostrarán los mensajes -->
    </div>
</div>


  <br><br>


  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
    <h4>Formato carta de presentación</h4>
    <div class="modal-body">
        <form id="formCarta" method="post" enctype="multipart/form-data">
            <input type="text" name="id" id="id" value="<?php echo $id; ?>">             
            <table>
                <tr>
                    <div class="form-group label-floating">
                    </div>
                    <div class="form-group label-floating">
                        <label for="email">Fecha Límite:</label>
                        <input class="form-control" type="date" id="fechacarta" name="fechacarta">
                    </div>
                </tr>
                <tr>
                    <td colspan="2"><input type="file" name="archivo" id="archivo"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Subir" name="subir" onclick="subirDocumento()"></td>
                </tr>
            </table>
        </form>
    </div>
</div>



	</section>	


	<!-- Notifications area -->
	


	
			   
			    

	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#formAcuerdo").on("submit", function (e) {
        e.preventDefault(); // Evita que se recargue la página

        var formData = new FormData(this); // Captura el formulario
        $.ajax({
            url: "../Registro2/subiracuerdos.php", // Archivo PHP que recibe la petición
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#resultado").html("<p style='color:green;'>Archivo subido correctamente</p>");
            },
            error: function () {
                $("#resultado").html("<p style='color:red;'>Error al subir el archivo</p>");
            }
        });
    });
});

function subirDocumento() {
    var formData = new FormData(document.getElementById('formCarta'));
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../Registro2/subircarta.php', true);
    
    // Escuchar la respuesta del servidor
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                alert(response.message); // Mostrar el mensaje de éxito
            } else {
                alert(response.message); // Mostrar el mensaje de error
            }
        } else {
            alert('Hubo un error al enviar la solicitud.');
        }
    };

    // Enviar los datos del formulario (incluyendo el archivo) a través de AJAX
    xhr.send(formData);
}

</script>




</body>
</html>
