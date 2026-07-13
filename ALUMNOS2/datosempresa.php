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
	<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sqll = "SELECT  *  FROM  tb_residentes
                WHERE  no_control ='$idGT'
                 ";
            $queryy = $db->execute($sqll);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryy)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datoss=$db->fetch_row($queryy)){?>
          
       
<?php  }} ?>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ITSCS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<div align="center"><img  src="imagenperfil/<?php echo $datoss['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
				<figure class="full-box">
				<!--	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  empresa , asignacionempresa
                WHERE empresa.no_control= asignacionempresa.no_controle AND asignacionempresa.no_control ='$idGT' 
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
					<figcaption class="text-center text-titles" ><?php echo 
          $datoss['nombre']." ".$datoss['ap']." ".$datoss['am']; ?> <br><br> <?php echo 
          $datoss['carrera']; ?></figcaption>
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
			 
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  	
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form  name="add_name" id="add_name"  method="POST">
									    	
									    	<input  name="idempresa"  id="idempresa" value="<?php echo $datos['idempresa']; ?>" type="hidden">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre de la empresa:</label>
										<input class="form-control" maxlength="90" type="text" id="nombree" name="nombree"  >
											</div>

											<div class="form-group">
										      <label class="control-label">Giro de la empresa</label>
										     
										   <select class="form-control" id="giroe" name="giroe"> 

										          <option>Industrial</option>
										          <option>Servicios</option>
										          <option>Público</option>
										          <option>Privado</option>
										          <option>Otro</option>
										           
										        </select>
										    </div>
									<div class="form-group label-floating">
											  <label class="control-label">Tipo de empresa:</label>
							<input  maxlength="90" class="form-control" type="text" id="tipoe" name="tipoe"  >
											</div>
											<div class="form-group label-floating">
											  <label for="password">Actividades de la empresa:</label>
							
			<textarea  maxlength="90" cols="50" rows="4" class="form-control" type="text" id="actividadese" name="actividadese">
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">RFC:</label>
							<input maxlength="20" class="form-control" type="text" id="rfce" name="rfce" >
											</div>


											  <div class="form-group label-floating">
											  <label for="password">Domicilio:</label>
				<textarea  class="form-control" type="text" id="domicilioe" name="domicilioe">
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">Colonia:</label>
						<input maxlength="90" class="form-control" type="text" id="coloniae" name="coloniae"   >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Código Postal:</label>
						<input  maxlength="10" class="form-control" type="text" id="codigoe" name="codigoe"   >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Teléfono:</label>
					<input maxlength="20" class="form-control" type="text" id="telefonoe" name="telefonoe"  >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ciudad:</label>
						<input maxlength="90" class="form-control" type="text" id="ciudade" name="ciudade" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email:</label>
							<input  maxlength="90" class="form-control" type="Email" id="emaile" name="emaile" >
											</div>
											  <div class="form-group label-floating">
											  <label for="password">Misión de la empresa:</label>
					<textarea  maxlength="700" cols="50" rows="5" class="form-control" type="text" id="misione" name="misione">
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">Nombre del titular de la empresa:</label>
						<input maxlength="90" class="form-control" type="text" id="titulare" name="titulare"  >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto del titular:</label>
						<input maxlength="90" class="form-control" type="text" id="puestote" name="puestote" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre del asesor externo:</label>
						<input  maxlength="90" class="form-control" type="text" id="asesore" name="asesore" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto del asesor:</label>
						<input maxlength="90"  class="form-control" type="text" id="pasesore" name="pasesore" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre de la persona quien firmara el acuerdo Escuela-Empresa:</label>
						 <input maxlength="90" class="form-control" type="text" id="acuerdoe" name="acuerdoe" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto de la persona que firmara el acuerdo Escuela-Empresa:</label>
					<input  maxlength="90" class="form-control" type="text" id="pacuerdoe" name="pacuerdoe" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre de la persona a quien va dirigida la carta de presentación:</label>
						<input maxlength="90" class="form-control" type="text" id="cartae" name="cartae" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto de la persona a quien va dirigida la carta de presentación:</label>
						<input  maxlength="90" class="form-control" type="text" id="pcartae" name="pcartae" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Departamento en el cúal se desarrollara la residencia:</label>
						<input  maxlength="200" class="form-control" type="text" id="ubicacion" name="ubicacion" >
											</div>
											



											 
																				
											
											 
										    <p class="text-center">
										    	<input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
										    <p class="text-center">    
                                        
                                        <button class="btn btn-info btn-raised btn-sm" >
                                        <a href="datosproyecto.php"><i class=""></i>Paso 3</a>
                                        </button>
                                        </p>

										
									   
									</div>
								</div>
							</div>
						</div>

					    </form>	
					</div>
				</div>
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
<script type="text/javascript">
	$(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizaE.php",  
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
