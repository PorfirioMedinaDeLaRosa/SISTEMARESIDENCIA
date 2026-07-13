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
                WHERE IdAS ='$idGT'               ";
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
				<!---	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> ---->
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
		</nav><br>
    <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Periodo de realización de residencia profesional</h4>
  
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onSubmit="return validarForm(this)"> 
       
     <script type="text/javascript">
function mostrar(id) {
    if (id == "0") {
        $("#search").hide();
        
    }

    else{
       $("#search").show();
    }
}
</script>
     

     <select name="periodo" id="periodo" onChange="mostrar(this.value);" >
        <option value="0">Opción</option>
        <?php
    include'../conexion.php';         
          $query = $mysqli -> query ("SELECT * FROM periodos  where status ='Activo'");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[periodo].'">'.$valores[periodo].'</option>';
            

                          
          }
        ?> </select><br><br>
  
<input type="submit" name="search" id="search" value="Buscar" hidden=""   >
</form>
      </div><br><br>
		<!-- Content page -->
		<div class="container-fluid">
     
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Alumnos</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
	
		  <div class="table-responsive">
        <table class="table table-hover text-center" width: 50%;
	height: 300px;>
         
        <thead>
          
            <tr> 
  <th class="text-center" >Operaciones</th>
              <th class="text-center" >Imagen de Perfil</th>
                <th class="text-center" >No Control</th>
                 <th class="text-center" >Nombre</th>
               
               
                  <th class="text-center" >Mensaje</th>
                   <th class="text-center" >Fecha</th>
                    <th class="text-center" >Proyecto</th>
                     <th class="text-center" >Periodo</th>
                    <th class="text-center" >Status</th>
                    
                     <th class="text-center" >Empresa</th>
            

               
               
            </tr>
            </thead>
 
<?php 



//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['periodo'];
   
    //Conectamos con la base de datos en la que vamos a buscar
   

  


$sql = " SELECT tb_residentes.no_control,tb_residentes.ruta_imagen, tb_residentes.periodo, tb_residentes.ap,  tb_residentes.am,  tb_residentes.nombre, tb_residentes.carrera, asignacionproyecto.mensaje, asignacionproyecto.no_controlp, asignacionproyecto.fecha, proyectos.nombrep,proyectos.periodop, proyectos.StatusGeneral,  asesor.IdAS, asesor.NombreAS, asignacionempresa.no_controle, empresa.NombreE , numerodeasesores.IdAS4, numerodeasesores.IdAS
FROM tb_residentes , asignacionproyecto , proyectos, asesor , numerodeasesores,  asignacionempresa, empresa
WHERE asignacionproyecto.no_controlp=proyectos.no_control AND asignacionempresa.no_controle=empresa.no_control AND asignacionempresa.no_control = tb_residentes.no_control
AND tb_residentes.no_control=asignacionproyecto.no_control  AND proyectos.idproyecto = numerodeasesores.IdAS4 AND numerodeasesores.IdAS = asesor.IdAS
    AND tb_residentes.periodo LIKE '%" . $keywords . "%' AND  asesor.IdAS='$idGT'";

     
         


            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         while($datos=$db->fetch_row($query)){?>
           

 
            <tr>
               <td><?php 

          //    echo "<a class='btn btn-danger btn-raised btn-xs' href='reporte1.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Evaluaciones</a>";


          //     echo "<a class='btn btn-danger btn-raised btn-xs' href='reportes.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Reportes</a>";


               echo "<a class='btn btn-danger btn-raised btn-xs' href='asesoria.php?no_control=".$datos['no_control']." & nombre=".$datos['nombre']." ".$datos['ap']." ".$datos['am']." & nombrep=".$datos['nombrep']." & periodop=".$datos['periodop']."   & carrera=".$datos['carrera']."  & empresa=".$datos['NombreE']." & asesor=".$datos['NombreAS']."'  ><span class='glyphicon glyphicon-actualizar'></span>Registro de asesoria</a>";

                       
echo "<a class='btn btn-danger btn-raised btn-xs' href='fasesoria.php?no_control=".$datos['no_control']."    '  ><span class='glyphicon glyphicon-actualizar'></span>Subir asesoria</a>";

                
 
      echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank' href='../ALUMNOS2/solicitud.php?no_control=" .$datos['no_control'] ." &carrera=" .$datos['carrera'] ." '><span class='glyphicon glyphicon-actualizar'></span>Generar Solicitud</a>";

      echo "<a class='btn btn-success btn-raised btn-xs '  href='formatosdeevaluacion.php?no_control=" .$datos['no_control'] ." & nombre=" .$datos['nombre'] ." & app= ".$datos['ap'] ." & apm= ".$datos['am'] ." & carrera=" .$datos['carrera'] ." '><span class='glyphicon glyphicon-actualizar'></span>Formatos de evaluación</a>";
  
    //  echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank' href='../ALUMNOS2/formatoreporte.php?no_control=" .$datos['no_control'] ." & nombre=" .$datos['nombre'] ." ".$datos['ap'] ." ".$datos['am'] ."& carrera=" .$datos['carrera'] ." '><span class='glyphicon glyphicon-actualizar'></span>Evaluación 1 y 2</a>";
    //  echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank'  href='../ALUMNOS2/documentoreportefinal.php?no_control=" .$datos['no_control'] ." & nombre=" .$datos['nombre'] ." ".$datos['ap'] ." ".$datos['am'] ." &  carrera=" .$datos['carrera'] ."  '><span class='glyphicon glyphicon-actualizar'></span> Reporte 3</a>"; 
    //  echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank' href='../ALUMNOS2/documentoreportecalificaciones.php?no_control=" .$datos['no_control'] ." & nombre=" .$datos['nombre'] ." ".$datos['ap'] ." ".$datos['am'] ." &  carrera=" .$datos['carrera'] ."  '><span class='glyphicon glyphicon-actualizar'></span>Reporte Calificaciones</a>"; 
            
            
 
 



    


            ?></td>
                <td><figure class="full-box"><img  src="../ALUMNOS2/imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="100" /></figure><br><br></td>
                <td><?php echo $datos['no_control']; ?></td>
                 <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
            
                      <td><?php echo $datos['mensaje']; ?></td>
                      <td><?php echo $datos['fecha']; ?></td>
                       <td><?php echo $datos['nombrep']; ?></td>
                       <td><?php echo $datos['periodop']; ?></td>
                       <td><?php echo $datos['StatusGeneral']; ?></td>
                     
                       <td><?php echo $datos['NombreE']; ?></td>
                       
                      
               
               
                
            </tr>
       
<?php  }}} ?>
  
</table>
                
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
</body>
</html>