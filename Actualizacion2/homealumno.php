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
} 
    include'menu.php';


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
			  <h4  align="center">BIENVENIDO AL SISTEMA DE RESIDENCIA PROFESIONAL</h4>
			  
			</div>
		</div>
		<div class="container-fluid">
                  <div class="page-header">
     
   <div class="table-responsive">
  
        <thead>
            <tr>
                     <th class="text-center" >Manual de Usuario: </th>

            </tr>
            </thead>
 
<?php 

$sql = " SELECT * FROM manuales   ";

            $query = $db->execute($sql);
  
    if( mysqli_num_rows($query)  > 0) {

       
         while($datos=$db->fetch_row($query)){?>
           
            <tr>

      
                 <td><a href="../INGENIERIAS2/archivomanualusuario.php?id=<?php echo $datos['idA']?>" ><?php echo $datos['nombre_archivoMU']; ?></a></td> 
      
            </tr>
       
<?php  }} ?>

                  </div>

<div class="table-responsive">
         
        <thead>
            <tr>
         
                <th class="text-center" >Portada Informe Técnico 1 Alumno: </th>

            </tr>
            </thead>

            <?php 

 {?>
    
            <tr>

                 <td><a href="Portada Residencia 1 estudiante.docx#PORTADA">Portada</a></td> 
           
            </tr>
      
<?php  } ?>

           </div>


<div class="table-responsive">
          <thead>
            <tr>
                         
                <th class="text-center" >Portada Informe Técnico  más de 1 Alumno: </th>
              
            </tr>
            </thead>
            <?php 

 {?>
       <tr>
                  <td><a href="Portada Residencia mas de 1 estudiante.docx#PORTADA">Portada</a></td> 
       
            </tr>
       
<?php  } ?>

                  </div>


<!--Proyecto Dual -->

<div class="table-responsive">
         
         <thead>
             <tr>
          
                 <th class="text-center" >Portada informe técnico educación Dual 1 Alumno: </th>
 
             </tr>
             </thead>
 
             <?php 
 
  {?>
     
             <tr>
 
                  <td><a href="Dual 1 alumno.docx#PORTADA">Portada</a></td> 
            
             </tr>
       
 <?php  } ?>
 
            </div>
 
 <!--- Proyecto Dual mas de una portada --->
 
 <div class="table-responsive">
           <thead>
             <tr>
                          
                 <th class="text-center" >Portada informe técnico educación Dual  más de 1 Alumno: </th>
               
             </tr>
             </thead>
             <?php 
 
  {?>
        <tr>
                   <td><a href="Portada Residencia mas de 1 estudiante - DUAL.docx#PORTADA">Portada</a></td> 
        
             </tr>
        
 <?php  } ?>
 
                   </div>


<div class="table-responsive">
      
         
        <thead>
            <tr>
               
             <!--  
                <th class="text-center" >Portada CD más de  1 Alumno: </th> -->
               
            </tr>
            </thead>

            <?php 

 {?>
       
            <tr>
            <!--
                 
                 <td><a href="MAS DE 1 ESTUDIANTE VER 2.0 PORTADAS DE CD´S INFORME TECNICO.pptx#PORTADA">Portada</a></td> 
                   
          
                -->
                   
                      
               
               
                
            </tr>
       

<?php  } ?>



  

                  </div>



<div class="table-responsive">
      
         
        <thead>
            <tr>
               <!--
               
                <th class="text-center" >Portada CD  1 Alumno: </th>

                
               -->
                   
             




               
               
            </tr>
            </thead>

            <?php 

 {?>
           

           
            <tr>

                <!-- 
              
             
                 
                 <td><a href="1 ESTUDIANTE VER 2.0 PORTADAS DE CD´S INFORME TECNICO.pptx#PORTADA">Portada</a></td> 
                   
          
                
                   
                  -->    
               
               
                
            </tr>
       

<?php  } ?>



  

                  </div>



<div class="table-responsive">
      
         
        <thead>
            <tr>
               
               
                <th class="text-center" >GUIA INFORME </th>

                
               
                   
             




               
               
            </tr>
            </thead>

            <?php 

 {?>
           

           
            <tr>

                 
              
             
                 
                 <td><a href="GUIA ELABORACIÓN DE INFORME TECNICO VER 1.0.pdf#PORTADA">GUIA</a></td> 
                   
          
                
                   
                      
               
               
                
            </tr>
       

<?php  } ?>



  

                  </div>














                  
            </div>


		</div>

		
			<div class="container-fluid">
                  <div class="page-header">
                    
<?php                   

include'dashboard.php';



			?>

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