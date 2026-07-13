<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["asesor_id"]) || $_SESSION["asesor_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["asesor_id"]



?>
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
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  asesor
                WHERE IdAS =$idGT               ";
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
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NombreAS']; ?> <br><br> <?php echo 
					$datos['CarreraAS']; ?></figcaption>
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
			<div class="page-header">
			  <h1 class="text-titles">Alumnos</h1>
			  
			</div>
		</div>
	
		<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Periodo de realización de residencia profesional</h4>
	
		 <form action="periodo.php" method="POST" onSubmit="return validarForm(this)"> 
			 
     <script type="text/javascript">
function mostrar(id) {
    if (id == "0") {
        $("#search").hide();
        
    }

    else{
    	 $("#search").show();
    }
}
</script>
     

     <select name="periodo" id="periodo" onChange="mostrar(this.value);" >
        <option value="0">Opción</option>
        <?php
		include'../conexion.php';					
          $query = $mysqli -> query ("SELECT * FROM periodos  where status ='Activo'");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.$valores[periodo].'">'.$valores[periodo].'</option>';
            

													
          }
        ?> </select><br><br>
  
<input type="submit" name="search" id="search" value="Buscar" hidden=""   >
</form>
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