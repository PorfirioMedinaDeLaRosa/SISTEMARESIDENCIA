<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["division_id"]) || $_SESSION["division_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["division_id"]


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



//Si se ha pulsado el botÃģn de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
    include '../config.inc.php';
        $db=new Conect_MySql();
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  divisiones
                WHERE  idD ='$idGT'               ";
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
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
					<figcaption class="text-center text-titles"><?php echo 
					$datos['NombreD']; ?> <br><br> <?php echo 
					$datos['CarreraD']; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
 
  include 'menu.php';
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
		<div class="container-fluid" id="menu2" >
			<div class="page-header">
				<h1 class="text-titles"><i class=""></i> <small>Alumnos solicitantes de Residencia Profesional</small></h1>
			 
			 <div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
	height: 300px;>
         
        <thead>
            <tr>
                <th class="text-center" >Operaciones</th>
            	 <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre </th>
              
                
                  <th class="text-center" >Mensaje</th>
                  
                    <th class="text-center" >Proyecto</th>
                     <th class="text-center" >Periodo</th>
                      <th class="text-center" >Empresa</th>
                      
                         <th class="text-center" >Status Proyecto</th>
                         <th class="text-center" >Status Solicitud</th>
                 
                  
                 
                  

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botÃģn de buscar
if (isset($_POST['search'])) {

	$carrera = $_POST['carrera'];
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];
   
    //Conectamos con la base de datos en la que vamos a buscar
    
     //   $db->query('set name utf8');


$sql = " SELECT tb_residentes.no_control,tb_residentes.ruta_imagen, tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep,  proyectos.StatusGeneral ,   proyectos.periodop, proyectos.fecha, empresa.NombreE ,    empresa.status,   proyectos.idproyecto
FROM tb_residentes , asignacionproyecto , proyectos, empresa, asignacionempresa
WHERE asignacionproyecto.no_controlp=proyectos.no_control
AND  asignacionempresa.no_controle=empresa.no_control AND tb_residentes.no_control= asignacionempresa.no_control

AND tb_residentes.no_control=asignacionproyecto.no_control 

 AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  tb_residentes.carrera  LIKE '%" . $carrera . "%'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

  # code...

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           
           
            <tr>
            	 <td  ><?php echo "<a target='_blank' class='btn btn-danger btn-raised btn-xs' href='asignarasesor.php?no_control=".$datos['nombre']." ".$datos['ap']." ". $datos['am']."  & proyecto=".$datos['nombrep']." & periodo=".$datos['periodop']." & empresa=".$datos['NombreE']." 
                        & idproyecto=".$datos['idproyecto']." & fecha=".$datos['fecha']."  '  ><span class='glyphicon glyphicon-actualizar'></span>Asignar Asesor</a>";

       //               echo "<a class='btn btn-danger btn-raised btn-xs' href='seguimiento.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Revisar Residencia</a>";

                

            ?></td> 
               <td><figure class="full-box"><img  src="../ALUMNOS/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="100" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
                
                    <td><?php echo $datos['fecha']; ?></td>
                      <td><?php echo $datos['mensaje']; ?></td>
                    
                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['periodop']; ?></td>
                       <td><?php echo $datos['NombreE']; ?></td>

                    
                      

                     


                       <td><?php echo $datos['StatusGeneral']; ?></td>
                        <td><?php echo $datos['status']; ?></td>
                      
                     
     
                       
                       
               
                           
            </tr>
       
<?php  }}} ?>
  <button class="btn btn-warning" >
                                        <a href="alumnos.php"><i class=""></i>Nueva Consulta</a>
                                        </button>

                  </div>
			</div>
			</div>
				

		
		

	</section>


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

			