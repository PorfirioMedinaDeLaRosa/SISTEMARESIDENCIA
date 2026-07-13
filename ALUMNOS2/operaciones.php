<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
					$datos['carrera']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
include'menu.php';
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
			
			
		</div>
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#list" data-toggle="tab">Solicitar Residencia </a></li>
					  	</li>
					  	
					</ul>
					
								</div>
							</div>
						</div>

					  	<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="list">
							<div class="container-fluid">

<div class="row" style="width: 450px;margin: auto;border: 1px solid #3333ff;padding: 20px;">
								<?php 

								$idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='archivosgestion.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Documentos Gestión Tecnológica</a>";

                      
 


            ?>
								
							</div>

							
								<div class="row" style="width: 450px;margin: auto;border: 1px solid blue;padding: 20px;">
								<?php 

								$idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='documentoss.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Generar documentos</a>";

                      
 


            ?>
								
							</div>
							<div class="row" style="width: 450px;margin: auto;border: 1px solid blue;padding: 20px;">

								<?php 

								$idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reportesolicitud.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Subir Documentos</a>";

                      
 


            ?>


								
								
							</div>

							<div class="row" style="width: 450px;margin: auto;border: 1px solid blue;padding: 20px;">

								<?php 

								$idproyecto = $_GET['idproyecto'];

								$no_control =$_SESSION["no_control"];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reportes.php? idproyecto=" .$idproyecto." &   no_control =".$no_control."  '><span class='glyphicon glyphicon-actualizar'></span>Subir Reportes</a>";

                      
 


            ?>


								
								
							</div>
							<div class="row" style="width: 450px;margin: auto;border: 1px solid blue;padding: 20px;">
								<?php 

								$idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='Solicitudes.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Documentos</a>";

                      
 


            ?>

							</div>
					  	</div>
					</div>
				</div>
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

	
</body>
</html>
