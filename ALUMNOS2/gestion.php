<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"]



?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; CHARSET=utf8mb4  " />
<html lang="es">
<head>
	<title>Admin</title>
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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
		<div class="container-fluid">
  <div class="page-header">
      <h4 align="center">Seguimiento de Residencia Profesional</h4>
     
        
                                      
                                        <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='Solicitudes.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Solicitud</a>";

                      
 


            ?>


              <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='gestion.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Gestión Tecnólogica</a>";

                      
 


            ?>
 <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reporte1.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Evaluación 1</a>";

                      
 


            ?>
             <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reporte2.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Evaluación 2</a>";

                      
 


            ?>
  <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reportefinal.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Evaluación Final</a>";

                      
 


            ?>

            <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reportefinalfinal.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Formato Final</a>";

                      
 


            ?>


            <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reporte1A.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Reporte 1 </a>";

                      
 


            ?>


              <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reporte2A.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Reporte 2 </a>";

                      
 


            ?>


              <?php 

                $idproyecto = $_GET['idproyecto'];

                       echo "<a class='btn btn-info btn-raised btn-sm' href='reporte3A.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>Reporte Final</a>";

                      
 


            ?>
           
                                        
                                       
                                        
                                     
      </div>
		<!-- Content page -->
		 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Solicitud de residencia profesional</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                <th class="text-center" >No Control</th>
              
                <th class="text-center" >Acuerdos</th>
                <th class="text-center" >Carta de Presentacón</th>
                 <th class="text-center" >Carta de Aceptación</th>
                 <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                  <th class="text-center" >Carta de liberación</th>
                <th class="text-center" >Status CL</th>
                <th class="text-center" >Modificaciones CL</th>

                      
                    </tr>
                  </thead>
                  
<?php




      
      
      
       $sql = "SELECT  *  FROM    tramitesgestion
                WHERE  no_control = '$idGT' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
             <td><a href="../GESTION2/acuerdos.php?id=<?php echo strtoupper($datos['no_control'])?>" ><?php echo $datos['nombre_archivoAC']; ?></a></td>
                 <td><a href="../GESTION2/cpresentacion.php?id=<?php echo strtoupper($datos['no_control'])?>" ><?php echo $datos['nombre_archivoCP']; ?></a></td>
                 <td><a href="../GESTION2/caceptacion.php?id=<?php echo strtoupper($datos['no_control'])?>" ><?php echo $datos['nombre_archivoCA']; ?></a></td>
                   <td><?php echo $datos['status']; ?></td>
                <td><?php echo $datos['modificaciones']; ?></td>
                <td><a href="../GESTION2/cliberacion.php?id=<?php echo strtoupper($datos['no_control'])?>" ><?php echo $datos['nombre_archivoCL']; ?></a></td>
                <td><?php echo $datos['statusCL']; ?></td>
                <td><?php echo $datos['modificacionesCL']; ?></td>
                
              
                
     

            
            </tr>

      <?php  } ?>



                </table>
               
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
