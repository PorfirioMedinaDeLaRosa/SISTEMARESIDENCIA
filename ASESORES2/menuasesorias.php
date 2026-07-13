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
			<!--		<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
        <h4>Asesorias por alumno</h4>
      
       
      </div>
      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Alumnos</a></li>
              <li> <a href="#list2" data-toggle="tab">Asesorias</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
	
		  <div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
	height: 300px;>
         
        <thead>
            <tr>
                <th class="text-center" >Departamento Académico </th>
                <th class="text-center" >Nombre </th>
                <th class="text-center" >No Control </th>
                
                <th class="text-center" >Nombre Proyecto</th>
                 <th width="80" class="text-center" >Periodo Proyecto</th>
                  <th class="text-center" >Empresa</th>
                   <th class="text-center" >Número Asesoria</th>
                    <th class="text-center" >Tipo de asesoria</th>
                     <th class="text-center" >Tema de asesoria</th>
                    
                 
                   <th class="text-center" >Eliminar</th>

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');


$sql = " SELECT * from asesoria WHERE IdAS='$idGT'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

                <td><?php echo $datos['departamento']; ?></td>
                 <td><?php echo $datos['nombrer']; ?></td>
                  <td><?php echo $datos['no_controlr']; ?></td>
                   <td><?php echo $datos['nombrep']; ?></td>
                    <td><?php echo $datos['periodop']; ?></td>
                      <td><?php echo $datos['empresa']; ?></td>
                      <td><?php echo $datos['numeroa']; ?></td>
                       <td><?php echo $datos['tipoa']; ?></td>
                     
                     
                       <td><?php 

              echo "<a class='btn btn-danger btn-raised btn-xs' href='registro.php?id=".$datos['id']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Descargar</a>";
?></td>
 <td><?php 



               echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaasesoria.php?id=".$datos['id']." '  ><span class='glyphicon glyphicon-actualizar'></span>Eliminar </a>";


                 echo "<a class='btn btn-danger btn-raised btn-xs' href='Aasesoria.php?id=".$datos['no_controlr']." '  ><span class='glyphicon glyphicon-actualizar'></span>Ver asesoria</a>";

                       


                
 

            ?></td>
               
               
                
            </tr>
       
<?php  }} ?>
  
</table>
                
              </div>
              </div>




                         <div class="tab-pane fade" id="list2">
  
      <div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
  height: 300px;>
         
        <thead>
            <tr>
               
                
                <th class="text-center" >No Control </th>
                <th class="text-center" >Nombre </th>
                
                <th class="text-center" >Formato</th>
                <th class="text-center" >Fecha</th>
                
                    
                 
                   <th class="text-center" >Eliminar</th>

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');


$sql = " SELECT * from aasesoria, tb_residentes  WHERE tb_residentes.no_control = aasesoria.no_control and  aasesoria.IdAS='$idGT'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
            <tr>
                <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                 
                   <td><a href="archivosreporteunoAA.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoR1']; ?></a></td>   


                      <td><?php echo $datos['fecha']; ?></td>
                     
                     
                      
 <td><?php 



               echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaaasesoria.php?id=".$datos['idasesoria']." '  ><span class='glyphicon glyphicon-actualizar'></span>Eliminar </a>";

                       


                
 

            ?></td>
               
               
                
            </tr>
       
<?php  }} ?>
  
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