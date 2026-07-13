<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["user_id"]



?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividades</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<!-- Notifications area -->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a href="#" class="Notification" id="notifation-unread-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>New User Registration</strong> 
	                    <br>
	                    <small>Just Now</small>
	                </p>
	            </div>
	        	<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
	        </a>
	        <a href="#" class="Notification" id="notifation-read-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>New Updates</strong> 
	                    <br>
	                    <small>30 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-unread-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Archive uploaded</strong> 
	                    <br>
	                    <small>31 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
	        </a> 
	        <a href="#" class="Notification" id="notifation-read-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>New Mail</strong> 
	                    <br>
	                    <small>37 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-read-3">
	            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Folder delete</strong> 
	                    <br>
	                    <small>1 hours Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
	        </a>  
	    </section>
	</section>
	<?php 
    include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  administrador
                WHERE  idAdministrador ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} ?>
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> SERVICIO SOCIAL
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>
					<span>
					<?php echo 
					$datos['NombreAdmin']."  ".$datos['ApellidosAdmin'] ?><br>
						<small>Gestión Tecnólogica </small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
			<?php

include'menu.php';

				?>
				
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
				<div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-Notification" id="notifications">
							<i class="zmdi zmdi-notifications"></i>
							<div class="mdl-tooltip" for="notifications">Notifications</div>
						</li>
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">LogOut</div>
						</li>
						<li class="text-condensedLight noLink" ><small><?php echo 
					$datos['NombreAdmin']."  ".$datos['ApellidosAdmin'] ?></small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="full-width header-well">
			
				
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				SEGUIMIENTO DE SERVICIO SOCIAL		</p>
               
			</div>
           
		</section>

<!-- FORMULARIO -->
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				<a href="#tabListProducts" class="mdl-tabs__tab">LISTA</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								SEGUIMIENTO
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                                    <?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM   asignacion
                WHERE  asignacion.NControl = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosAA=$db->fetch_row($query)){?>
      
<?php  }} ?>



<!-- SOLICITUD DE SERVIICO SOCIAL -->

<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;SOLICITUD DE SERVICIO SOCIAL</legend><br>
									    </div>
                                        
                                     
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                
                           
							</tr>
						</thead>
						<tbody>
                        <?php
     $ncontrol =   $_GET['id'];
     
	 $sql = "SELECT  *  FROM  alumnos
	 WHERE IDAlumno= $ncontrol     ";
$query = $db->execute($sql);
 while($datosA=$db->fetch_row($query)){?>
           <tr>
    
             <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

           
			 <td><a href="solicitudaceptada.php?id=<?php echo $datosA['IDAlumno']?>">DESCARGAR</a></td>   

                         
      
    <?php  } ?>
                   
						</tbody>
					</table>
				</div>

				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_nameSS" id="add_nameSS"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión solicitud de servicio social</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM solicituddeservicio 
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="Statuss" name="Statuss">
													<option  ><?php echo $datosEmpresa['StatusSS']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCA" name="NcontrolCA" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesSS" name="ObservacionesSS" ><?php echo $datosEmpresa['ObservacionesSS']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submitSS" id="submitSS" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>


<!-- CARTA DE ACEPTACION -->
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;CARTA ACEPTACIÓN</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
                           
							</tr>
						</thead>
						<tbody>
                        <?php
     $ncontrol =   $_GET['id'];
     
      $sql = "SELECT  *  FROM  alumnos, cartaaceptacion
               WHERE cartaaceptacion.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
          $query = $db->execute($sql);
           while($datosA=$db->fetch_row($query)){?>
           <tr>
    
             <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

           
			 <td><a href="archivocartaaceptacion.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivo']; ?></a></td>   

                    <td><?php echo $datosA['StatusCA']; ?></td>    
                    <td><?php echo $datosA['ObservacionesCA']; ?></td>     
      
    <?php  } ?>
                   
						</tbody>
					</table>
				</div>


		
<!--PARTE FORMULARIOS-->
<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name" id="add_name"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión de carta de aceptación</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  cartaaceptacion
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="Status" name="Status">
													<option  ><?php echo $datosEmpresa['StatusCA']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCA" name="NcontrolCA" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesP" name="ObservacionesP" ><?php echo $datosEmpresa['ObservacionesCA']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>

<!--CARTA COMPROMISO DE SERVICIO SOCIAL -->

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							CARTA COMPROMISO DE SERVICIO SOCIAL 
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;CARTA COMPROMISO DE SERVICIO SOCIAL </legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	  
	   $sql = "SELECT  *  FROM  alumnos, cartacompromisosocial
				WHERE cartacompromisosocial.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
		   $query = $db->execute($sql);
			while($datosA=$db->fetch_row($query)){?>
			<tr>
	 
			  <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>
 
			
			  <td><a href="archivocartacompromiso.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoCC']; ?></a></td>   
 
					 <td><?php echo $datosA['StatusCC']; ?></td>    
					 <td><?php echo $datosA['ObservacionesCC']; ?></td>     
	   
	 <?php  } ?>
      
   
                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name2" id="add_name2"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta compromiso</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  cartacompromisosocial
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusCC" name="StatusCC">
													<option  ><?php echo $datosEmpresa['StatusCC']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCC" name="NcontrolCC" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesPC" name="ObservacionesPC" ><?php echo $datosEmpresa['ObservacionesCC']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit2" id="submit2" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			
			


<!--CARTA DE PRESENTACIÓN -->			
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							CARTA DE PRESENTACIÓN
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;CARTA DE PRESENTACIÓN </legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, cartapresentacion
	   WHERE cartapresentacion.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivocartapresentacion.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoCP']; ?></a></td>   

			<td><?php echo $datosA['StatusCP']; ?></td>    
			<td><?php echo $datosA['ObservacionesCP']; ?></td>     

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name3" id="add_name3"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  cartapresentacion
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusCP" name="StatusCP">
													<option  ><?php echo $datosEmpresa['StatusCP']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesCP" name="ObservacionesCP" ><?php echo $datosEmpresa['ObservacionesCP']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit3" id="submit3" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			
			</div>
				</div>
			</div>
			</div>
		     

<!--ACUERDO DE COLABORACIÓN  -->

             
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							ACUERDO DE COLABORACIÓN
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;ACUERDO DE COLABORACIÓN </legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, acuerdocolaboracion
	   WHERE acuerdocolaboracion.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoacuerdocolaboracion.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoAC']; ?></a></td>   

			<td><?php echo $datosA['StatusAC']; ?></td>    
			<td><?php echo $datosA['ObservacionesAC']; ?></td>     

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name4" id="add_name4"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  acuerdocolaboracion
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusAC" name="StatusAC">
													<option  ><?php echo $datosEmpresa['StatusAC']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesAC" name="ObservacionesAC" ><?php echo $datosEmpresa['ObservacionesAC']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit4" id="submit4" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			
			</div>
			</div>
			
			</div>
				</div>
			</div>
			</div>
		     
			
      <!--PLAN DE TRABAJO -->

             
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							PLAN DE TRABAJO
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;PLAN DE TRABAJO </legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, plantrabajo
	   WHERE plantrabajo.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoplantrabajo.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoPT']; ?></a></td>   

			<td><?php echo $datosA['StatusPT']; ?></td>    
			<td><?php echo $datosA['ObservacionesPT']; ?></td>     

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name5" id="add_name5"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  plantrabajo
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusPT" name="StatusPT">
													<option  ><?php echo $datosEmpresa['StatusPT']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesPT" name="ObservacionesPT" ><?php echo $datosEmpresa['ObservacionesPT']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit5" id="submit5" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			</div>
			</div>
				</div>
			</div>
			</div>
		     
		
			      
        <!--REPORTE UNO -->

             
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							REPORTE UNO
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;REPORTE UNO</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								<th class="">Cal. Asesor</th>
								<th class="">Cal. Alumno</th>
								<th class="">Cal. Final</th>
								<th class="">Nivel de desempeño</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, Reporte1EA
		WHERE Reporte1EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
 
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaR1E.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoRE1']; ?></a></td>   

	 <td><?php echo $datosA['StatusR1']; ?></td>    
					<td><?php echo $datosA['ObservacionesR1']; ?></td>    
					
		<td><?php echo ($datosA['CRP'] / 7)*.9; ?></td> 
		<td><?php echo ($datosA['AUTE'] / 7)*.1; ?></td> 
		<?php 
		$CALIFICACIONFINAL =  (($datosA['AUTE'] / 7)*.1) + (($datosA['CRP'] / 7)*.9);
		 ?>
		<td><?php  echo (($datosA['AUTE'] / 7)*.1) + (($datosA['CRP'] / 7)*.9); ?></td>  

		<td><?php if($CALIFICACIONFINAL >= 3.50 and $CALIFICACIONFINAL <=4.00){ echo 'Excelente';}
		          if($CALIFICACIONFINAL >= 2.50 and $CALIFICACIONFINAL <=3.49){ echo 'Notable';}
				  if($CALIFICACIONFINAL >= 1.50 and $CALIFICACIONFINAL <=2.49){ echo 'Bueno';}
				  if($CALIFICACIONFINAL >= 1.00 and $CALIFICACIONFINAL <=1.49){ echo 'Suficiente';}
				  if($CALIFICACIONFINAL >= 0.00 and $CALIFICACIONFINAL <=0.99){ echo 'Insuficiente';}?></td>  


<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name6" id="add_name6"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  Reporte1EA
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusR1']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesR1']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
											<h5>CUA. RESPONSABLE DEL PROGRAMA</h5>
											<input class="mdl-textfield__input" type="text"   id="CRP" name="CRP" value="<?php echo $datosEmpresa['CRP']; ?>"></input>
											<h5>AUT. ESTUDIANTE</h5>
											<input class="mdl-textfield__input" type="text"   id="AUTE" name="AUTE" value="<?php echo $datosEmpresa['AUTE']; ?>"></input>
												
												
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit6" id="submit6" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
					</div>
				</div>
			</div>
			</div>
			</div>
					</div>
				</div>
			</div>
			</div>
		     


			<!--  REPORTE DOS  
			--->
<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							REPORTE DOS 
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;REPORTE DOS</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								<th class="">Cal. Asesor</th>
								<th class="">Cal. Alumno</th>
								<th class="">Cal. Final</th>
								<th class="">Nivel de desempeño</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, Reporte2EA
		WHERE Reporte2EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaR2E.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoRE1']; ?></a></td>   

	 <td><?php echo $datosA['StatusR1']; ?></td>    
					<td><?php echo $datosA['ObservacionesR1']; ?></td> 

					<td><?php echo ($datosA['CRP2'] / 7)*.9; ?></td> 
		<td><?php echo ($datosA['AUTE2'] / 7)*.1; ?></td> 
		<?php 
		$CALIFICACIONFINAL =  (($datosA['AUTE2'] / 7)*.1) + (($datosA['CRP2'] / 7)*.9);
		 ?>
		<td><?php  echo (($datosA['AUTE2'] / 7)*.1) + (($datosA['CRP2'] / 7)*.9); ?></td>  

		<td><?php if($CALIFICACIONFINAL >= 3.50 and $CALIFICACIONFINAL <=4.00){ echo 'Excelente';}
		          if($CALIFICACIONFINAL >= 2.50 and $CALIFICACIONFINAL <=3.49){ echo 'Notable';}
				  if($CALIFICACIONFINAL >= 1.50 and $CALIFICACIONFINAL <=2.49){ echo 'Bueno';}
				  if($CALIFICACIONFINAL >= 1.00 and $CALIFICACIONFINAL <=1.49){ echo 'Suficiente';}
				  if($CALIFICACIONFINAL >= 0.00 and $CALIFICACIONFINAL <=0.99){ echo 'Insuficiente';}?></td>  

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name7" id="add_name7"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  Reporte2EA
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusR1']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesR1']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
												<h5>CUA. RESPONSABLE DEL PROGRAMA</h5>
											<input class="mdl-textfield__input" type="text"   id="CRP" name="CRP" value="<?php echo $datosEmpresa['CRP2']; ?>"></input>
											<h5>AUT. ESTUDIANTE</h5>
											<input class="mdl-textfield__input" type="text"   id="AUTE" name="AUTE" value="<?php echo $datosEmpresa['AUTE2']; ?>"></input>
												
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit7" id="submit7" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>
			<!--  REPORTE TRES
			--->
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							REPORTE TRES
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;REPORTE TRES</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								<th class="">Cal. Asesor</th>
								<th class="">Cal. Alumno</th>
								<th class="">Cal. Final</th>
								<th class="">Nivel de desempeño</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, Reporte3EA
		WHERE Reporte3EA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaR3E.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoRE1']; ?></a></td>   

	 <td><?php echo $datosA['StatusR1']; ?></td>    
					<td><?php echo $datosA['ObservacionesR1']; ?></td>  
					<td><?php echo ($datosA['CRP3'] / 7)*.9; ?></td> 
		<td><?php echo ($datosA['AUTE3'] / 7)*.1; ?></td> 
		<?php 
		$CALIFICACIONFINAL =  (($datosA['AUTE3'] / 7)*.1) + (($datosA['CRP3'] / 7)*.9);
		 ?>
		<td><?php  echo (($datosA['AUTE3'] / 7)*.1) + (($datosA['CRP3'] / 7)*.9); ?></td>  

		<td><?php if($CALIFICACIONFINAL >= 3.50 and $CALIFICACIONFINAL <=4.00){ echo 'Excelente';}
		          if($CALIFICACIONFINAL >= 2.50 and $CALIFICACIONFINAL <=3.49){ echo 'Notable';}
				  if($CALIFICACIONFINAL >= 1.50 and $CALIFICACIONFINAL <=2.49){ echo 'Bueno';}
				  if($CALIFICACIONFINAL >= 1.00 and $CALIFICACIONFINAL <=1.49){ echo 'Suficiente';}
				  if($CALIFICACIONFINAL >= 0.00 and $CALIFICACIONFINAL <=0.99){ echo 'Insuficiente';}?></td>  
   
	  

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name8" id="add_name8"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  Reporte3EA
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusR1']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesR1']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
												<h5>CUA. RESPONSABLE DEL PROGRAMA</h5>
											<input class="mdl-textfield__input" type="text"   id="CRP" name="CRP" value="<?php echo $datosEmpresa['CRP3']; ?>"></input>
											<h5>AUT. ESTUDIANTE</h5>
											<input class="mdl-textfield__input" type="text"   id="AUTE" name="AUTE" value="<?php echo $datosEmpresa['AUTE3']; ?>"></input>
											
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit8" id="submit8" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>

			

	<!--  REPORTE FINAL
			--->
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							REPORTE FINAL
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;REPORTE FINAL</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								<th class="">Cal. Asesor</th>
								<th class="">Cal. Alumno</th>
								<th class="">Cal. Final</th>
								<th class="">Nivel de desempeño</th>
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, ReporteFEA
		WHERE ReporteFEA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaRFE.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoRE1']; ?></a></td>   

	 <td><?php echo $datosA['StatusR1']; ?></td>    
					<td><?php echo $datosA['ObservacionesR1']; ?></td>  
					<td><?php echo ($datosA['CRP4'] / 7)*.9; ?></td> 
		<td><?php echo ($datosA['AUTE4'] / 7)*.1; ?></td> 
		<?php 
		$CALIFICACIONFINAL =  (($datosA['AUTE4'] / 7)*.1) + (($datosA['CRP4'] / 7)*.9);
		 ?>
		<td><?php  echo (($datosA['AUTE4'] / 7)*.1) + (($datosA['CRP4'] / 7)*.9); ?></td>  

		<td><?php if($CALIFICACIONFINAL >= 3.50 and $CALIFICACIONFINAL <=4.00){ echo 'Excelente';}
		          if($CALIFICACIONFINAL >= 2.50 and $CALIFICACIONFINAL <=3.49){ echo 'Notable';}
				  if($CALIFICACIONFINAL >= 1.50 and $CALIFICACIONFINAL <=2.49){ echo 'Bueno';}
				  if($CALIFICACIONFINAL >= 1.00 and $CALIFICACIONFINAL <=1.49){ echo 'Suficiente';}
				  if($CALIFICACIONFINAL >= 0.00 and $CALIFICACIONFINAL <=0.99){ echo 'Insuficiente';}?></td>  
   
	  

<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name9" id="add_name9"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión carta de presentacion</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  ReporteFEA
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusR1']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesR1']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
												<h5>CUA. RESPONSABLE DEL PROGRAMA</h5>
											<input class="mdl-textfield__input" type="text"   id="CRP" name="CRP" value="<?php echo $datosEmpresa['CRP4']; ?>"></input>
											<h5>AUT. ESTUDIANTE</h5>
											<input class="mdl-textfield__input" type="text"   id="AUTE" name="AUTE" value="<?php echo $datosEmpresa['AUTE4']; ?>"></input>
											
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit9" id="submit9" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>

 </div>	


 <!--  REPORTE FINAL EXTENSO
			--->
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							REPORTE FINAL EXTENSO
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;REPORTE FINAL EXTENSO</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>

                              

								<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								
								
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, ReporteFEEA
		WHERE ReporteFEEA.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaRFEEE.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivoRE1']; ?></a></td>   

	 <td><?php echo $datosA['StatusR1']; ?></td>    
					<td><?php echo $datosA['ObservacionesR1']; ?></td>  
						
		 
<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name100" id="add_name100"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  ReporteFEEA
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusR1']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesR1']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
												
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit100" id="submit100" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>
 </div>	
		
		
	 <!--  CARTA DE TERMINACION DE SERVICIO SOCIAL
			--->
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							CARTA DE TERMINACIÓN DE SERVICIO SOCIAL
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;CARTA DE TERMINACIÓN DE SERVICIO SOCIAL</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										  
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>
                      			<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								
								
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, cartaterminacion
		WHERE cartaterminacion.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaCT.php?id=<?php echo $datosA['IDAlumno']?>"><?php echo $datosA['nombre_archivo']; ?></a></td>   

	 <td><?php echo $datosA['StatusCA']; ?></td>    
					<td><?php echo $datosA['ObservacionesCA']; ?></td>  
						
		 
<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						
							<div class="full-width panel-content">
								<form name="add_name1000" id="add_name1000"   method="POST">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;Revisión</legend><br>
									    </div>
										<?php 
										$ncontrol =   $_GET['id'];
            $sql = "SELECT  *  FROM  cartaterminacion
                WHERE no_control = '$ncontrol'  ";
            $query = $db->execute($sql);
  
   if( mysqli_num_rows($query)  > 0) {
      
         if($datosEmpresa=$db->fetch_row($query)){?>
      
<?php  }} ?>														
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield">
                                            <h6 class="">Seleccionar status</h6>
												<select class="mdl-textfield__input" id="StatusR1" name="StatusR1">
													<option  ><?php echo $datosEmpresa['StatusCA']; ?></option>
                                                    <option value="Aceptado" >Aceptado(a)</option>
													<option value="Rechazado"  >Rechazado(a)</option>
												</select>
											</div>
										</div>
			                                                                 
										<div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="hidden"   id="NcontrolCP" name="NcontrolCP" value="<?php echo  $ncontrol ?>">
												<Textarea class="mdl-textfield__input" type="text" id="ObservacionesR1" name="ObservacionesR1" ><?php echo $datosEmpresa['ObservacionesCA']; ?></Textarea>
												<label class="mdl-textfield__label" for="markProduct">Observaciones</label>
												<span class="mdl-textfield__error">Invalid </span>
												
											</div>
										</div>
									                                     									
									</div>
									<p class="text-center">
										    	 <input type="button" name="submit1000" id="submit1000" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
										    </p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>
 </div>	
        
			
	 <!--  CARTA DE LIBERACION DE SERVICIO SOCIAL
			--->
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							CARTA DE LIBERACION DE SERVICIO SOCIAL
							</div>
							<div class="full-width panel-content">
							
									<div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp;CARTA DE TERMINACIÓN DE SERVICIO SOCIAL</legend><br>
									    </div>
                                        
                                        <input class="mdl-textfield__input" type="hidden"   id="Ncontrol" name="Ncontrol" value="<?php echo $datosAA['NControlAdmin']; ?>">
										<input class="mdl-textfield__input" type="text"   id="NFolio" name="NFolio" value="">FOLIO </input>
                                        <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
						<thead>
							<tr>
								<th class="">Nombre del alumno(a)</th>
                      			<th class="">Descargar documento</th>
                                <th class="">Status</th>
                                <th class="">Observaciones</th>
								
								
							</tr>
						</thead>
						<tbody>
                        <?php
       $ncontrol =   $_GET['id'];
     
	   $sql = "SELECT  *  FROM  alumnos, cartaterminacion
		WHERE cartaterminacion.no_control = alumnos.IDAlumno  and alumnos.IDAlumno='$ncontrol'";
	   
  $query = $db->execute($sql);
   while($datosA=$db->fetch_row($query)){?>
   <tr>

	 <td><?php echo $datosA['NombreAlumno']." ".$datosA['Apellido1Alumno']." ".$datosA['Apellido2Alumno']; ?></td>

   
	 <td><a href="archivoaCL.php?id=<?php echo $datosA['IDAlumno']?>">DESCARGAR</a></td>   

	
						
		 
<?php  } ?>

                   
						</tbody>
					</table>
				</div>

                
               
				
			</div>
			</div>
		     
			</div>
				</div>
			</div>
			</div>
 </div>		
	</section>
    <script>
		$.material.init();
	</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
    <script src="js/ripples.min.js"></script>

    <script>
	 
 $(document).ready(function(){  
    $('#tabListProducts').load('listaobjetivos.php');
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"Registro/enviorevision.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $("#tabListProducts").load('listaobjetivos.php'); 
                }  
           });  
      });  
 }); 


      
 </script>
 <script type="text/javascript">
	
	function objetoAjax(){
 var xmlhttp=false;
 try {
 xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 } catch (e) {
 try {
 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 } catch (E) {
 xmlhttp = false;
 }
 }
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
   xmlhttp = new XMLHttpRequest();
   }
   return xmlhttp;
}


 
function eliminacarrera(idcarrera){
   //donde se mostrará el resultado de la eliminacion
   
   $(document).ready(function() {
       
            // Recargo la página
            location.reload("listactividades.php");
        
    });
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("De verdad desea eliminar este dato")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id del empleado
   ajax.open("GET", "Eliminacion/eliminaractividades.php?id="+idcarrera);
   ajax.onreadystatechange=function() {
   if (ajax.readyState==4) {
   //mostrar resultados en esta capa
   divResultado.innerHTML = ajax.responseText
   }
   }
   //como hacemos uso del metodo GET
   //colocamos null
   ajax.send(null)
   }
}
</script>

<script>
	 
 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"Actualizacion/revicioncA.php",  
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

 $(document).ready(function(){  
     
        
	 $('#submit2').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionCC.php",  
			   method:"POST",  
			   data:$('#add_name2').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name2')[0].load();  
			   }  
		  });  
	 });  
});
  

$(document).ready(function(){  
     
        
	 $('#submit3').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionCP.php",  
			   method:"POST",  
			   data:$('#add_name3').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name3')[0].load();  
			   }  
		  });  
	 });  
});



$(document).ready(function(){  
     
        
	 $('#submit4').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionAC.php",  
			   method:"POST",  
			   data:$('#add_name4').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name4')[0].load();  
			   }  
		  });  
	 });  
});



$(document).ready(function(){  
     
        
	 $('#submit5').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionPT.php",  
			   method:"POST",  
			   data:$('#add_name5').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name5')[0].load();  
			   }  
		  });  
	 });  
});


$(document).ready(function(){  
     
        
	 $('#submitSS').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionSS.php",  
			   method:"POST",  
			   data:$('#add_nameSS').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_nameSS')[0].load();  
			   }  
		  });  
	 });  
});


$(document).ready(function(){  
     
        
	 $('#submit6').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionR1.php",  
			   method:"POST",  
			   data:$('#add_name6').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name6')[0].load();  
			   }  
		  });  
	 });  
});


$(document).ready(function(){  
     
        
	 $('#submit7').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionR2.php",  
			   method:"POST",  
			   data:$('#add_name7').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name7')[0].load();  
			   }  
		  });  
	 });  
});



$(document).ready(function(){  
           
	 $('#submit8').click(function(){            
		  $.ajax({  
			   url:"Actualizacion/revicionR3.php",  
			   method:"POST",  
			   data:$('#add_name8').serialize(),  
			   success:function(data)  
			   {  
					alert(data);  
					$('#add_name8')[0].load();  
			   }  
		  });  
	 }); 
	  
});

$(document).ready(function(){  
           
		   $('#submit9').click(function(){            
				$.ajax({  
					 url:"Actualizacion/revicionRFINAL.php",  
					 method:"POST",  
					 data:$('#add_name9').serialize(),  
					 success:function(data)  
					 {  
						  alert(data);  
						  $('#add_name9')[0].load();  
					 }  
				});  
		   }); 
			
	  });


	  $(document).ready(function(){  
           
		   $('#submit100').click(function(){            
				$.ajax({  
					 url:"Actualizacion/revicionRFINALEXTENSO.php",  
					 method:"POST",  
					 data:$('#add_name100').serialize(),  
					 success:function(data)  
					 {  
						  alert(data);  
						  $('#add_name100')[0].load();  
					 }  
				});  
		   }); 
			
	  });


	  $(document).ready(function(){  
           
		   $('#submit1000').click(function(){            
				$.ajax({  
					 url:"Actualizacion/revicioncartaterminacion.php",  
					 method:"POST",  
					 data:$('#add_name1000').serialize(),  
					 success:function(data)  
					 {  
						  alert(data);  
						  $('#add_name1000')[0].load();  
					 }  
				});  
		   }); 
			
	  });
 </script>
</body>
</html>