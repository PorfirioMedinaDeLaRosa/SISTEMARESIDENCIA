<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["user_id"]

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<!-- Notifications area -->
	<section class="full-width container-notifications">
    <?php

include'notificaciones.php';

				?>
	</section>
	<!-- navLateral -->
    <?php 
    include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} ?>
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i>SERVICIO SOCIAL 
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
			<div>
					<img src="ALUMNO/ALUMNOSDOCUMENTOS/<?php echo $idA ?>/<?php echo $datos['imagenperfil']; ?>" alt="Avatar"  class="img-responsive">
				</div><br />
				<figcaption>
                <span>
					<?php echo 
					$datos['NombreAlumno']."  ".$datos['Apellido1Alumno']."  ".$datos['Apellido2Alumno'] ?><br>
						<small>Alumno</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
			<?php

include'menu.php';

				?>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-Notification" id="notifications">
							<i class="zmdi zmdi-notifications"></i>
							<div class="mdl-tooltip" for="notifications">Notifications</div>
						</li>
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">LogOut</div>
						</li>
						<li class="text-condensedLight noLink" ><small><?php echo 
					$datos['NombreAlumno']."  ".$datos['Apellido1Alumno']."  ".$datos['Apellido2Alumno'] ?></small></li>
						<li class="noLink">
							<figure>
								<img src="ALUMNO/ALUMNOSDOCUMENTOS/<?php echo $idA ?>/<?php echo $datos['imagenperfil']; ?>"  alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-washing-machine"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Carta de presentación
				</p>
			</div>
		</section>
	
		
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Carta de presentación</h4>
            <h5>Subir un archivo PDF por nombre su número de control más la terminación CP</h5>
            <h5>Ejemplo 20CS0001CP</h5>
             <div class="modal-body">
            <form >
            <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $_SESSION["user_id"] ?>">
             
             </input> 
      <div class="form-group">
			<label for="exampleInputFile">Subir archivo</label>
      
				<center><input type="file"  id="fileToUpload" onchange="upload_image();"></center>
			<p class="help-block">Seleccion un archivo.</p>
		  </div>
		  <div class="upload-msg"></div><!--Para mostrar la respuesta del archivo llamado via ajax -->
		 </form>
                
               
  </div>
  </div>
	
	</section>
    <script>
		$.material.init();
	</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
    <script src="js/ripples.min.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>


	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
	function upload_image(){//Funcion encargada de enviar el archivo via AJAX
				$(".upload-msg").text('Cargando...');
				var inputFileImage = document.getElementById("fileToUpload");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('fileToUpload',file);
				
				/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
					data.append('file'+i, file);
				});*/
							
				$.ajax({
					url: "registro/cartapresentacion.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						$(".upload-msg").html(data);
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
					}
				});
				
			}
</script>


</body>
</html>