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
        <!--  <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
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
      <div class="page-header">
      
        <?php 

                $idproyecto = $_GET['idproyecto'];
                
                       echo "<a class='btn btn-warning' href='operaciones.php? idproyecto=" .$idproyecto."    '><span class='glyphicon glyphicon-actualizar'></span>REGRESAR</a>";

                      
 


            ?>
      </div>
      <?php


$idproyecto = $_GET['idproyecto'];
      

      
       $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idproyecto' ";
           $query = $db->execute($sql2);
            if($datos=$db->fetch_row($query)){?>
       

      <?php  } ?> 
       <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Reporte 1</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/AreporteA.php"   enctype="multipart/form-data">
             <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $_SESSION["no_control"]; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['EmailAS']; ?>">
             </input>     
                <table>
                 <tr>
                         
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>

                    




                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
                 </form> 
  </div>
  </div>
  <br><br>
  <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Reporte  2</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/AreporteAA.php" enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['EmailAS']; ?>">
             </input> 
                <table>
                
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                    	
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
            <h4>Reporte Final</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/AreporteAAA.php" enctype="multipart/form-data">
              <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $no_control; ?>">
             <input  id="IdAS" name="IdAS" type="hidden"  value="<?php echo $datos['EmailAS']; ?>">
             </input> 
                <table>
                 
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                    
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