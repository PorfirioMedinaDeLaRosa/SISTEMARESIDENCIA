<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



?>
<?php 

//Conectamos con la base de datos en la que vamos a buscar
include '../config.inc.php';
$db=new Conect_MySql();

$sqlP = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT' AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

     $queryP = $db->execute($sqlP);
 
 
   if( mysqli_num_rows($queryP)  > 0) {

      
        if($datosP=$db->fetch_row($queryP)){?>
       

      
       <?php  }} ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
    
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
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
        <!--  <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
          <figcaption class="text-center text-titles"><?php echo 
          $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
          $datos['carrera']; ?></figcaption>
        </figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
			<?php
$sql = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT'
   AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

                $query = $db->execute($sql);
  
    if( mysqli_num_rows($query)  > 0) {

        while($datos=$db->fetch_row($query)){?>

         <?php

        if ($datos['StatusGeneral']=='Aceptado' AND $datos['status']=='Aceptado') {

            include'menuA.php';
} else{
    include'menu.php';
}

?>

<?php  }} ?>



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


$idproyecto = $datosP['idproyecto'];
      

      
       $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idproyecto' ";
           $query = $db->execute($sql2);
            if($datos=$db->fetch_row($query)){?>
       

      <?php  } ?> 
     
    <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Formato de Carga Académica</h4>
            <h5>Subir un archivo PDF por nombre su número de control más la terminación ACADEMICA</h5>
            <h5>Ejemplo 20CS0001ACADEMICA</h5>
             <div class="modal-body">
            <form >
              <input  id="no_control" name="no_control" type="text"  value="<?php echo $_SESSION["no_control"]; ?>">
             
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

	<!-- Notifications area -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
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
					url: "FCargaAcademica2.php",        // Url to which the request is send
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


	
 </script>
</body>
</html>