<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
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
			<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  admin
                WHERE  idA ='$idA' 
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
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NCompletoA']."  ".$datos['CargoA']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
include'menuadmin.php';
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
			
			  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Respaldo De Base De Datos</h4>
             <form method="POST" action="backup.php">
					    
					        	<input type="hidden" class="form-control" value="localhost" id="server" name="server" placeholder="Ejemplo: 'localhost'" required>
					      	
					    
					        	<input type="hidden" class="form-control"  value="subacademica" id="username" name="username" placeholder="Ejemplo: 'subacademica'" required>
					      	
					        	<input type="hidden" class="form-control" id="password" value="Tecserd@n2020" name="password" placeholder="Tecserd@n2020">
					      
					      	
					        	<input type="hidden" value="residencia3" class="form-control" id="dbname" name="dbname" placeholder="Nombre de la base de datos 'residencia3'" required>
					      	
					    <button type="submit" class="boton_personalizado" name="backup">Descargar</button>
					</form>
        </div>
        


		<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Respaldo De Base De Datos</h4>
             <form method="POST" action="backup.php">
					    
					        	<input type="hidden" class="form-control" value="localhost" id="server" name="server" placeholder="Ejemplo: 'localhost'" required>
					      	
					    
					        	<input type="hidden" class="form-control"  value="serviciosocial" id="username" name="username" placeholder="Ejemplo: 'subacademica'" required>
					      	
					        	<input type="hidden" class="form-control" id="password" value="P@rfirio2022" name="password" placeholder="Tecserd@n2020">
					      
					      	
					        	<input type="hidden" value="serviciosocial" class="form-control" id="dbname" name="dbname" placeholder="Nombre de la base de datos 'residencia3'" required>
					      	
					    <button type="submit" class="boton_personalizado" name="backup">Descargar</button>
					</form>
        </div>
        
   
		  <style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
</style>
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