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
                WHERE IdAS ='$idGT'             ";
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
     
       
                                        <button class="btn btn-warning" >
                                        <a href="asesorados.php"><i class=""></i>Nueva Consulta</a>
                                        </button>
      </div>
      <?php

$no_control = $_GET['no_control'];



     //   $db->query('set name utf8');

            $sql = "SELECT * FROM asesor  where IdAS = 'idGT'  
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
       <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Evaluación 1</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/reporteuno.php"   enctype="multipart/form-data">
             <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['IdAS']; ?>">
             </input>     
                <table>
                 <tr>
                         
                    </tr>
                    
                    <tr>
                        <td colspan="2">Formato de Evaluación<input type="file" name="archivo"></td>
                    <tr>

                    

                    <h5>Calificación Parcial</h5><input  class="form" type="text" id="CR1" name="CR1" >
                             </input>
                             <br><br>



                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
                 </form> 
  </div>
  </div>
  <br><br>
  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Evaluación 2</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/reportedos.php" enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['IdAS']; ?>">
             </input> 
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
            
                      </div>
                    </tr>
                    
                    <tr>
                        <td colspan="2">Formato de Evaluación<input type="file" name="archivo"></td>
                    <tr>
                    	<h5>Calificación Parcial</h5><input  class="form" type="text" id="CR1" name="CR1" >
                             </input>
                             <br><br>
                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
                 </form> 
  </div>
  </div>
  <br>
  <br>
  
  <br>
  <br>
  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Evaluación Final</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/reportefinal.php" enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['IdAS']; ?>">
             </input> 
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
             
                      </div>
                    </tr>
                    
                    <tr>
                        <td colspan="2">Formato de evaluación<input type="file" name="archivo"></td>
                    <tr>
                    	<h5>Calificación Final</h5><input  class="form" type="text" id="CR1" name="CR1" >
                             </input>
                             <br><br>
                       
                       <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                  
                </table>
                 </form> 
  </div>
  </div>


<br><br>
  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Formato de Evaluación Final</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/reportefinalfinal.php" enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['IdAS']; ?>">
             </input> 
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
             
                      </div>
                    </tr>
                    
                    <tr>
                        <td colspan="2">Formato de evaluación<input type="file" name="archivo"></td>
                    <tr>
                    	<h5>Calificación Final</h5><input  class="form" type="text" id="CR1" name="CR1" >
                             </input>
                             <br><br>
                       
                       <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                  
                </table>
                 </form> 
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


	
 </script>
</body>
</html>