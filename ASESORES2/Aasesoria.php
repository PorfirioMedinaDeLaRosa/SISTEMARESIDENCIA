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
		<div class="container-fluid">
      <div class="page-header">
     
       
                                        
      </div>


 <?php


$no_control = $_GET['id'];

     //   $db->query('set name utf8');

            $sql = "SELECT * FROM asesoria where  no_controlr = '$no_control'  
                 ";
            $queryy = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryy)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datoss=$db->fetch_row($queryy)){?>
           
           
       
<?php  }} ?> 



       <div style="width: 700px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4 >Asesoria</h4>
             <div class="modal-body">
            <form method="post" name="add_name" id="add_name"  enctype="multipart/form-data">
           
             </input>     
                <div class="form-group label-floating">
			      
											  <label for="nombre">Departamento Académico:</label>
											  <input   class="form-control" type="text" id="departamento" name="departamento"  maxlength="50" value="<?php echo $datoss['departamento']; ?>" >
					</div>
					 <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre del(os)/la(s)  Residente(s)</label>
											  <input   class="form-control" maxlength="200" type="text" id="nombreresidentes" name="nombreresidentes"  value="<?php echo $datoss['nombrer']; ?>"  >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Número de control:</label>
											  <input   class="form-control" type="text" id="controlresidentes" maxlength="100" name="controlresidentes"   value="<?php echo $datoss['no_controlr']; ?>" >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Nombre del proyecto:</label>
											  <input   class="form-control" type="text" id="nombreproyecto" maxlength="200" name="nombreproyecto"  value="<?php echo $datoss['nombrep']; ?>" >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Periodo de realización de la residencia profesional:</label>
											  <input   class="form-control" type="text" id="periodo" maxlength="100" name="periodo" value="<?php echo $datoss['periodop']; ?>"  >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Empresa, organismo o dependencia:</label>
											  <input   class="form-control" type="text" id="empresa" maxlength="150" name="empresa"  value="<?php echo $datoss['empresa']; ?>" >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Asesoría número:</label>
											  <input  maxlength="20"  class="form-control" type="number" id="numeroa" name="numeroa"  value="<?php echo $datoss['numeroa']; ?>" >
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Tipo de asesoría:</label>
							<select maxlength="50"  class="form-control" type="text" id="tipoa" name="tipoa" >
											  	<option ><?php echo $datoss['tipoa']; ?></option>
											  	<option>Individual</option>
											  	<option>Grupal</option>


											  </select>
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Temas a asesorar:</label>
											  <textarea maxlength="1000"  cols="10" rows="5"   class="form-control" type="text" id="temasa" name="temasa"  ><?php echo $datoss['temas']; ?></textarea>
					</div>
					<div class="form-group label-floating">
			      
											  <label for="nombre">Solución recomendada:</label>
											  <textarea maxlength="1000" cols="10" rows="5" class="form-control" type="text" id="solucion" name="solucion"  ><?php echo $datoss['solucion']; ?></textarea>
					</div>



                 </form> 
  </div>
  </div>
  <br><br>
  
  
  
  
    

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



 <script type="text/javascript">
 	 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Registro2/insertarasesoria.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].load();  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>