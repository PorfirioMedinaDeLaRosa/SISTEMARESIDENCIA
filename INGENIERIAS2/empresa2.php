<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["user_id"]



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

            $sql = "SELECT  *  FROM  admin
                WHERE  idA ='$idGT'
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
				
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NCompletoA']; ?> <br><br> <?php echo 
					$datos['CargoA']; ?></figcaption>
				</figure>
			
			</div>
				<!-- SideBar Menu -->
			 <ul class="list-unstyled full-box dashboard-sideBar-Menu">
         <?php
       include'menuadmin.php'
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

       $sql = "SELECT * FROM admin where idA='$idGT'";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
           
           
       
<?php  }}






 ?>


 <?php 

$no_control=$_GET['id'];

//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sqlA = "SELECT  *  FROM  empresa , asignacionempresa
                WHERE empresa.no_control= asignacionempresa.no_controle AND asignacionempresa.no_control ='$no_control' 
                 ";
            $queryA = $db->execute($sqlA);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryA)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datosA=$db->fetch_row($queryA)){?>
           
           
       
<?php  }} ?>



		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li> <a href="#list" data-toggle="tab">Datos de la empresa</a></li>
					  
					  	
					  	
					   
					  	
					</ul>
					 <form  name="add_name" id="add_name"   method="POST">
			      <input  id="idA" name="idA" type="hidden"  value="<?php echo $datos['idA']; ?>"></input> 

			     <input  name="idempresa"  id="idempresa" value="<?php echo $datosA['idempresa']; ?>" type="hidden">
			     
			     <div class="form-group label-floating">
											  <label class="control-label">Nombre de la empresa:</label>
										<input disabled="" class="form-control" maxlength="90" type="text" id="nombree" name="nombree" value="<?php echo $datosA['NombreE']; ?>" >
											</div>

											<div class="form-group">
										      <label class="control-label">Giro de la empresa</label>
										      <input disabled="" class="form-control" type="" name=""   disabled="" value="<?php echo $datosA['GiroE']; ?>">
										  
										    </div>
									<div class="form-group label-floating">
											  <label class="control-label">Tipo de empresa:</label>
							<input  disabled=""  maxlength="90" class="form-control" type="text" id="tipoe" name="tipoe"  value="<?php echo $datosA['TipoE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label for="password">Actividades de la empresa:</label>
							
			<textarea disabled=""  maxlength="90" cols="50" rows="4" class="form-control" type="text" id="actividadese" name="actividadese"><?php echo $datosA['ActividadesE']; ?>
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">RFC:</label>
							<input disabled="" maxlength="20" class="form-control" type="text" id="rfce" name="rfce" value="<?php echo $datosA['RFCE']; ?>">
											</div>


											  <div class="form-group label-floating">
											  <label for="password">Domicilio:</label>
				<textarea  disabled="" class="form-control" type="text" id="domicilioe" name="domicilioe"><?php echo $datosA['DomicilioE']; ?>
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">Colonia:</label>
						<input disabled="" maxlength="90" class="form-control" type="text" id="coloniae" name="coloniae"  value="<?php echo $datosA['ColoniaE']; ?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Código Postal:</label>
						<input  disabled="" maxlength="10" class="form-control" type="text" id="codigoe" name="codigoe"  value="<?php echo $datosA['CPE']; ?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Teléfono:</label>
					<input  disabled="" maxlength="20" class="form-control" type="text" id="telefonoe" name="telefonoe" value="<?php echo $datosA['TelefonoE']; ?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ciudad:</label>
						<input disabled=""  maxlength="90" class="form-control" type="text" id="ciudade" name="ciudade" value="<?php echo $datosA['CiudadE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email:</label>
							<input disabled=""  maxlength="90" class="form-control" type="Email" id="emaile" name="emaile" value="<?php echo $datosA['EmailE']; ?>">
											</div>
											  <div class="form-group label-floating">
											  <label for="password">Misión de la empresa:</label>
					<textarea   disabled="" maxlength="190" cols="50" rows="5" class="form-control" type="text" id="misione" name="misione"><?php echo $datosA['MisionE']; ?>
											       </textarea>
											  </div>
											  <div class="form-group label-floating">
											  <label class="control-label">Nombre del titular de la empresa:</label>
						<input disabled=""  maxlength="90" class="form-control" type="text" id="titulare" name="titulare"  value="<?php echo $datosA['NombreTE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto del titular:</label>
						<input  disabled="" maxlength="90" class="form-control" type="text" id="puestote" name="puestote" value="<?php echo $datosA['PuestoTE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre del asesor externo:</label>
						<input disabled=""  maxlength="90" class="form-control" type="text" id="asesore" name="asesore" value="<?php echo $datosA['AsesorE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto del asesor:</label>
						<input  disabled="" maxlength="90"  class="form-control" type="text" id="pasesore" name="pasesore" value="<?php echo $datosA['PuestoAE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre de la persona quien firmara el acuerdo Escuela-Empresa:</label>
						 <input disabled=""  maxlength="90" class="form-control" type="text" id="acuerdoe" name="acuerdoe" value="<?php echo $datosA['PersonaAEE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto de la persona que firmara el acuerdo Escuela-Empresa:</label>
					<input disabled=""  maxlength="90" class="form-control" type="text" id="pacuerdoe" name="pacuerdoe" value="<?php echo $datosA['PuestoAEE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre de la persona a quien va dirigida la carta de presentación:</label>
						<input  disabled="" maxlength="90" class="form-control" type="text" id="cartae" name="cartae" value="<?php echo $datosA['PersonaCE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Puesto de la persona a quien va dirigida la carta de presentación:</label>
						<input disabled="" maxlength="90" class="form-control" type="text" id="pcartae" name="pcartae" value="<?php echo $datosA['PuestoCE']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ubicación donde se desarrollara el proyecto:</label>
						<input disabled=""   maxlength="90" class="form-control" type="text" id="ubicacion" name="ubicacion" value="<?php echo $datosA['ubicacion']; ?>">
											</div>


											<div class="form-group label-floating">
											  <label class="control-label">Observaciones Generales:</label>
						<textarea   maxlength="500" cols="50" rows="5" class="form-control" type="text" id="observacion" name="observacion"><?php echo $datosA['observacion']; ?>
											       </textarea>
											</div>


											


										<div class="form-group">
										      <label class="control-label">Status</label>
										     
										   <select  class="form-control" id="status" name="status"> 

										          <option>Aceptado</option>
										          <option>Rechazado</option>
										       
										        </select><br><br>
										        <input   disabled="" maxlength="90" class="form-control" type="text" id="ubicacion" name="ubicacion" value="<?php echo $datosA['status']; ?>">


										    </div>	 
													


		      	<p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
									    
		    </div>
	  	</div>
	</div>
</form>
						



					
						

					  	



	




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
                url:"../Actualizacion2/observacionempresa.php",  
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
