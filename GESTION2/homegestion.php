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
 include 'dashboar.php';
 
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
		</div>
		<?php
     include'menu.php'
		?>
		
           


		</div>
		<div class="container-fluid">
                  <div class="page-header">
                     <h1 class="text-titles"><i class=""></i> <small>Manuales</small></h1>
                   

   <div class="table-responsive">
        <table class="table table-hover text-center" width: 5000%;
	height: 3000px;>
         
        <thead>
            <tr>
               
               
                <th class="text-center" >Manual de Usuario</th>
               
                   
                

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');


$sql = " SELECT * FROM manuales   ";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

                 
              
             
                 
                 <td><a href="../INGENIERIAS2/archivomanualusuario.php?id=<?php echo $datos['idA']?>" ><?php echo $datos['nombre_archivoMU']; ?></a></td> 
                   
          
                    
                        
                      
               
               
                
            </tr>
       
<?php  }} ?>
  

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