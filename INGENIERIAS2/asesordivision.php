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
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br>
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NCompletoA']."  ".$datos['CargoA']; ?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
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
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Users <small>Admin</small></h1>
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  	<li><a href="#list" data-toggle="tab">List</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="../Registro2/insertarAD.php">
									    	<div class="form-group label-floating">
											  <label class="control-label">Name</label>
											  <input class="form-control" type="text" id="nombrea" name="nombrea">
											</div>
											<div class="form-group">
										      <label class="control-label">Carrera</label>
										        <select class="form-control" id="carreraa" name="carreraa">
										          <option>Ingeniería Informática</option>
										          <option>Ingeniería En Innovacíón Agricola Sustentable</option>
										          <option>Ingeniería Mecánica</option>
										          <option>Ingeniería En Gestión Empresarial</option>
										          <option>Ingeniería En Industrias Alimentarias</option>
										           <option>Ingeniería Industrial</option>
										        </select>
										    </div>
											
											<div class="form-group label-floating">
											  <label class="control-label">Email</label>
											  <input class="form-control" id="emaila" name="emaila" type="Email">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Telefono</label>
											  <input class="form-control" type="text" id="telefonoa" name="telefonoa">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Usuario</label>
											  <input class="form-control" type="text" id="usuarioa" name="usuarioa">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Password</label>
											  <input class="form-control"  id="passworda" name="passworda" type="Password">
											</div>
											 
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>

					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Carera</th>
											<th class="text-center">Email</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Usuario</th>
											<th class="text-center">Operaciones</th>
											
										</tr>
									</thead>
									<?php
		include'../conexion.php';	
			

			$consulta= "SELECT * FROM asesor where 	CarreraAS= 'Ingeniería Informática'";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#Dialog-Actualizar' data-id='" .$fila[0] ."' data-nombrea='" .$fila[1] ."' data-carreraa='" .$fila[2] ."' data-emaila='" .$fila[3] ."' data-telefonoa='" .$fila[4] ."' data-usuarioa='" .$fila[5] ."' data-passworda='" .$fila[6] ."' 
				    class='btn btn-success btn-raised btn-xs '><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";	
					echo "<a class='btn btn-danger btn-raised btn-xs' href='../Eliminacion2/eliminaAD.php? id=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>



								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Notifications area -->
	


	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Actualizar">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Actualizar</h4>
			    </div>
			    <div class="modal-body">
			     <form action="../Actualizacion2/actualizaAD.php" method="POST">
			     <input  id="id" name="id" type="hidden" ></input>   
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Nombre:</label>
											  <input class="form-control" type="text" id="nombrea" name="nombrea">
					</div>
					<div class="form-group">
										      <label class="control-label">Carrera</label>
										        <select class="form-control" id="carreraa" name="carreraa">
										          <option>Ingeniería Informática</option>
										          <option>Ingeniería En Innovacíón Agricola Sustentable</option>
										          <option>Ingeniería Mecánica</option>
										          <option>Ingeniería En Gestión Empresarial</option>
										          <option>Ingeniería En Industrias Alimentarias</option>
										           <option>Ingeniería Industrial</option>
										        </select>
										    </div>
											<div class="form-group label-floating">
											  <label for="email">Email:</label>
											  <input class="form-control" id="emaila" name="emaila" type="Email">
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">Teléfono:</label>
											  <input class="form-control" type="text" id="telefonoa" name="telefonoa">
											</div>
											<div class="form-group label-floating">
											 <label for="usuario">Usuario:</label>
											  <input class="form-control" type="text" id="usuarioa" name="usuarioa">
											</div>
											<div class="form-group label-floating">
											  <label for="password">Password:</label>
											  <input class="form-control"  id="passworda" name="passworda" type="Password">
											</div>
			    </div>
		      	<p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
										    </p>
									    
		    </div>
	  	</div>
	</div>
</form>


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

	<script>			 
		  $('#Dialog-Actualizar').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('nombrea')
		  var recipient2 = button.data('carreraa')
		  var recipient3 = button.data('emaila')
		  var recipient4 = button.data('telefonoa')
		  var recipient5 = button.data('usuarioa')
		  var recipient6 = button.data('passworda')
		   
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #nombrea').val(recipient1)
		  modal.find('.modal-body #carreraa').val(recipient2)
		  modal.find('.modal-body #emaila').val(recipient3)	
		  modal.find('.modal-body #telefonoa').val(recipient4)
		  modal.find('.modal-body #usuarioa').val(recipient5)
		  modal.find('.modal-body #passworda').val(recipient6)		 
		});
		
	</script>

</body>
</html>
