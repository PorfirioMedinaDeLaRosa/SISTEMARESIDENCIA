<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["no_control"]) || $_SESSION["no_control"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["no_control"];



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
			<!--		<img src="../assets/img/loginFont3.jpg" alt="UserIcon"> ---->
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
include'../conexion.php';

$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$idGT'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}
$sql = "SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($sql);
$total = mysqli_num_rows($result);


if ($total==1) {
 $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
 while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
 $n_1 = $data[0]['no_control'];
}

if ($total==2) {
  $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
  $n_1 = $data[0]['no_control'];
  $n_2 = $data[1]['no_control'];
 }
 if ($total==3) {
  $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
  $n_1 = $data[0]['no_control'];
  $n_2 = $data[1]['no_control'];
  $n_3 = $data[2]['no_control'];
 }
 if ($total==4) {
  $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
  $n_1 = $data[0]['no_control'];
  $n_2 = $data[1]['no_control'];
  $n_3 = $data[2]['no_control'];
  $n_4 = $data[3]['no_control'];
 }
 if ($total==5) {
  $sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");
  while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}
  $n_1 = $data[0]['no_control'];
  $n_2 = $data[1]['no_control'];
  $n_3 = $data[2]['no_control'];
  $n_4 = $data[3]['no_control'];
  $n_5 = $data[4]['no_control'];
 }
 

      ?>
       
                                    
      </div>
      
      <form   action="registroalumnosa.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Nuevo Alumno" />
</div>
		</form>
    </div>
		 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li > <a href="#list" data-toggle="tab">Alumno Administrador</a></li>
                    
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
                <th class="text-center" >Apellido Paterno</th>
                <th class="text-center" >Apeliido Materno</th>
                <th class="text-center" >Tipo de Usuario</th>
                <th class="text-center" >Operacion</th>
                         
            
                      
                    </tr>
                  </thead>
                  
<?php

if($total ==1){

$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";
        $query = $db->execute($sql2);
        while($datos=$db->fetch_row($query)){?>
        <tr>
        <td><?php echo $datos['no_control']; ?></td>
            <td><?php echo $datos['nombre']; ?></td>
            <td><?php echo $datos['ap']; ?></td>
            <td><?php echo $datos['am']; ?></td>
            <td><?php echo 'Administrador'; ?></td>
                     
            </tr>

      <?php  } }



if($total ==2){

  $sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";
          $query = $db->execute($sql2);
          while($datos=$db->fetch_row($query)){?>
          <tr>
          <td><?php echo $datos['no_control']; ?></td>
              <td><?php echo $datos['nombre']; ?></td>
              <td><?php echo $datos['ap']; ?></td>
              <td><?php echo $datos['am']; ?></td>
              <td><?php echo 'Administrador'; ?></td>
                       
              </tr>
  
        <?php  } 



$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";
$query = $db->execute($sql2);
while($datos=$db->fetch_row($query)){?>
<tr>
<td><?php echo $datos['no_control']; ?></td>
    <td><?php echo $datos['nombre']; ?></td>
    <td><?php echo $datos['ap']; ?></td>
    <td><?php echo $datos['am']; ?></td>
    <td><?php echo 'Alumno 1'; ?></td>
    <td><?php 
                       echo "<a class='btn btn-danger btn-raised btn-xs' href='eliminaralumnoasignacion.php? id=" .$n_2."  '><span class='glyphicon glyphicon-actualizar'></span>Eliminar</a>";
                
    ?></td>        
    </tr>

<?php  } }  
      
      
      if($total ==3){

        $sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_1'";
                $query = $db->execute($sql2);
                while($datos=$db->fetch_row($query)){?>
                <tr>
                <td><?php echo $datos['no_control']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['ap']; ?></td>
                    <td><?php echo $datos['am']; ?></td>
                    <td><?php echo 'Administrador'; ?></td>
                             
                    </tr>
        
              <?php  } 
      
      
      
      $sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_2'";
      $query = $db->execute($sql2);
      while($datos=$db->fetch_row($query)){?>
      <tr>
      <td><?php echo $datos['no_control']; ?></td>
          <td><?php echo $datos['nombre']; ?></td>
          <td><?php echo $datos['ap']; ?></td>
          <td><?php echo $datos['am']; ?></td>
          <td><?php echo 'Alumno 1'; ?></td>
          <td><?php 
                       echo "<a class='btn btn-danger btn-raised btn-xs' href='eliminaralumnoasignacion.php? id=" .$n_2."  '><span class='glyphicon glyphicon-actualizar'></span>Eliminar</a>";
                
    ?></td>         
          </tr>
      
      <?php  } 


$sql2=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera FROM tb_residentes WHERE tb_residentes.no_control='$n_3'";
$query = $db->execute($sql2);
while($datos=$db->fetch_row($query)){?>
<tr>
<td><?php echo $datos['no_control']; ?></td>
    <td><?php echo $datos['nombre']; ?></td>
    <td><?php echo $datos['ap']; ?></td>
    <td><?php echo $datos['am']; ?></td>
    <td><?php echo 'Alumno 2'; ?></td>
    <td><?php 
                       echo "<a class='btn btn-danger btn-raised btn-xs' href='eliminaralumnoasignacion.php? id=" .$n_3."  '><span class='glyphicon glyphicon-actualizar'></span>Eliminar</a>";
                
    ?></td>        
    </tr>

<?php  } 
      
    
    
    
    
    
    }  
               
      
      
      
      ?>


                </table>
                
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
        

              <form   action="homealumno.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Anterior paso" />
</div>
		</form>
		<form   action="perfilalumno.php">
       <div style="text-align:center;">
<input type="submit"  name="submitt" id="submitt" class="btn btn-info btn-raised btn-sm" value="Siguiente paso" />
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

	
</body>
</html>
