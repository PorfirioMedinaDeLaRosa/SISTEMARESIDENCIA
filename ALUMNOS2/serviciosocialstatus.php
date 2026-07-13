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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br>-->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['nombre']." ".$datos['ap']." ".$datos['am']; ?> <br><br> <?php echo 
					$datos['carrera']; ?></figcaption>
				</figure>
			
			</div>
				<!-- SideBar Menu -->
			 <ul class="list-unstyled full-box dashboard-sideBar-Menu">
         <?php
       include'menu.php'
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



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');

       $sql = "SELECT * FROM tb_residentes where no_control='$idGT'";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
           
           
       
<?php  }} ?>
		</div>
		<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Perfil Alumnos</a></li>
               <li> <a href="#list2" data-toggle="tab">Servicio Social</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre  Completo </th>
                
                <th class="text-center" >Carrera</th>
               <th class="text-center" >Perfil</th>
               

                      
                    </tr>
                  </thead>
                  
<?php





//Si se ha pulsado el botón de buscar

     
      
       $sql = "SELECT  *  FROM  tb_residentes where no_controladmin ='$idGT'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']." ".$datos['ap']." ". $datos['am']; ?></td>
              
                <td><?php echo $datos['carrera']; ?></td>
                <td><?php if ($datos['paso2']=='') echo "Incompleto"; else echo "Completo"; ?></td>
               

             
 

           
            </tr>

      <?php  } ?>



                </table>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
                </ul>
              </div>
              </div>
        



     <div class="tab-pane fade" id="list2">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre  Completo </th>
                
                <th class="text-center" >Carrera</th>
               <th class="text-center" >Formato</th>
                

                      
                    </tr>
                  </thead>
                  
<?php





//Si se ha pulsado el botón de buscar

      $sql = "SELECT  *  FROM  tb_residentes, solicitud where solicitud.no_controladmin ='$idGT' and tb_residentes.no_controladmin ='$idGT'
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']." ".$datos['ap']." ". $datos['am']; ?></td>
              
                <td><?php echo $datos['carrera']; ?></td>
                <td><?php if ($datos['paso4']=='') echo "Incompleto"; else echo "Completo"; ?></td>
      

           
            </tr>

      <?php  } ?>



                </table>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
                </ul>
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
