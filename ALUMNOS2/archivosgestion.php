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
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
		<div class="container-fluid">
      <div class="page-header">
        <h4>DOCUMENTOS DE GESTIÓN TECNOLÓGICA</h4>
        <h4>Instrucciones</h4>
        <h5>Aviso: Cuando su proyecto ha sido aceptado, el alumno o alumna debe de esperar de dos a  cinco días hábiles para que el sistema les permita descargar los documentos tales como: acuerdo de trabajo y carta de presentación.</h5>
        <h5>1.- Dar clic en la línea verde de la ventana para mostrar los documentos.</h5>
        <h5>2.- Para descargar los documentos solo dar clic en el nombre del archivo que está abajo
          del título acuerdo y carta de presentación.
        </h5>
        <h5>3.-Cuando descargue los documentos la empresa debe de firmar y sellar los documentos para después subirlos al sistema.
</h5>
     
        <h5>4.- Verificar la fecha límite de entrega de los documentos, si usted aún no sube los documentos antes de la fecha límite,
          el sistema bloqueará su cuenta y tendrá que comunicarse con el departamento de gestión tecnológica.
        </h5>
           <h5>5.-Ya firmados y sellados los documentos dirigirse al paso 5 y 6 pasa subir los documentos</h5>
        
           <?php 

              //  $idproyecto = $_GET['idproyecto'];
                
                  //     echo "<a class='btn btn-warning' href='operaciones.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>REGRESAR</a>";

                      
 


            ?>                         
      </div>
		<!-- Content page -->
		 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Formatos </a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
               
              
                <th class="text-center" >Acuerdos</th>
                <th class="text-center" >Fecha límite de entrega acuerdos</th>
                <th class="text-center" >Carta de Presentacón</th>
                <th class="text-center" >Fecha límite de entrega Carta </th>
               

                      
                    </tr>
                  </thead>
                  
<?php




      
      
      
       $sql = "SELECT  *  FROM   documentosgestion
                WHERE  no_control = '$idGT' 
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
          
             <td><a href="../GESTION2/archivoacuerdo.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo']; ?></a></td>
                 
             <td><?php echo $datos['fechaacuerdos']; ?></td>

                  <td><a href="../GESTION2/archivocarta.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivo2']; ?></a></td>
                 
                 
                  <td><?php echo $datos['fechapresentacion']; ?></td>
                
              
                
     

            
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
