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
		
		             <div>
   



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
   	<?php

$id= $_GET['id'];

   	?>
         <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Formato de baja de proyecto</h4>
             <div class="modal-body">
            <form method="post" action="../Registro2/subirbaja.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo 
					$id; ?>">             
                <table>
                 <tr>
                         <div class="form-group label-floating">
                       
              <input  class="form-control" type="hidden" id="no_control" name="no_control">
                             </input>
                      </div>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                       
                    </tr>
                </table>
                 </form> 
                 </td>
                 <br><br>
                  <td><?php echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaproyecto.php? id=" .$id ."'><span class='glyphicon glyphicon-actualizar'></span>Baja Proyecto</a>";

            ?></td>
		
  </div>
  </div>	

  
   
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