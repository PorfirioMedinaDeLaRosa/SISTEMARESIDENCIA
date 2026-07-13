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



//Si se ha pulsado el botón de buscar

   
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
				<!----	<img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
		<?php 



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
  
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  divisiones
                WHERE  idD ='$idGT' 
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
		<div class="container-fluid" id="menu2" >
			<div class="page-header">
				<h1 class="text-titles"><i class=""></i> <small>Asignación de Asesor Interno</small></h1>
			 
			</div>
			</div>

<?php
$no_control=$_GET['no_control'];

$proyecto=$_GET['proyecto'];
$periodo=$_GET['periodo'];

$periodo2=$_GET['periodo2'];
$empresa=$_GET['empresa'];

$nombreproyecto=$_GET['nombreproyecto'];

$fecha=$_GET['fecha'];

$idproyecto=$_GET['idproyecto'];


 include'../conexion.php';

$consultaid = "SELECT  proyectos.no_control FROM  proyectos WHERE  proyectos.idproyecto ='$idproyecto'";

$consultaQ = $mysqli->query($consultaid);
  while($numero=mysqli_fetch_array($consultaQ))
  {

 $numerototal2=$numero['no_control'];

}



      $consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$numerototal2'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}



$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);


if ($total==1) {
	# code...


$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row2=$db->fetch_row($rec)){?>
           
           
       
<?php  }}}



if ($total==2) {
	# code...


$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row2=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row3=$db->fetch_row($rec)){?>
           
           
       
<?php  }}







}


if ($total==3) {
	# code...


$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];
$n_3 = $data[2]['no_control'];


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row2=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row3=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_3'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row4=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


}




if ($total==4) {
	# code...


$sql = $mysqli->query("SELECT asignacionproyecto.no_control from asignacionproyecto WHERE asignacionproyecto.no_controlp='$numerototal'");


while($d = mysqli_fetch_assoc($sql))  {$data[] = $d;}

$n_1 = $data[0]['no_control'];
$n_2 = $data[1]['no_control'];
$n_3 = $data[2]['no_control'];
$n_4 = $data[3]['no_control'];


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_1'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row2=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_2'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row3=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_3'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row4=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


$sql=" SELECT tb_residentes.no_control, tb_residentes.nombre, tb_residentes.ap, tb_residentes.am,  tb_residentes.carrera, tb_residentes.calle, tb_residentes.noe,tb_residentes.colonia, tb_residentes.municipio, tb_residentes.estado,  tb_residentes.email, tb_residentes.seguro, tb_residentes.folios, tb_residentes.telefono, empresa.AsesorE  FROM tb_residentes , empresa, asignacionempresa  WHERE asignacionempresa.no_controle = empresa.no_control  AND asignacionempresa.no_control = tb_residentes.no_control AND  tb_residentes.no_control='$n_4'";


$rec = $mysqli->query($sql);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row5=$db->fetch_row($rec)){?>
           
           
       
<?php  }}


}






$sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4  
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idproyecto' ";
$rec = $mysqli->query($sql2);
  if( mysqli_num_rows($rec)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($row=$db->fetch_row($rec)){?>
           
           
       
<?php  }}

?>			




		
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  
					  	
					  	<li><a href="#list3" data-toggle="tab">List</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form name="add_name" id="add_name" method="POST">

									    	<input  id="idD" name="idD" type="hidden"  value="<?php echo $total; ?>"></input>

									    	<input  id="idD" name="idD" type="hidden"  value="<?php echo $datos['idD']; ?>"></input>  

									    	
											<div class="form-group">
										      <label class="control-label">Número de Oficio</label>
										        <input   type="text" maxlength="50"  class="form-control" id="numero" name="numero">
										          
										        </input>
										    </div>

										 

										    <div class="form-group">
										      <label class="control-label">Asesor</label>
										        <input maxlength="60"  class="form-control" id="asesor" name="asesor" value="<?php echo $row['NombreAS']; ?>" >
										       
										        </input>
										    </div>

										    
										    <div class="form-group">
										      <label class="control-label">Carrera</label>
									<input  onkeyup="validar()" maxlength="50" class="form-control" id="carrera" name="carrera" type="text" value="<?php echo $datos['CarreraD']; ?>">
										    </div>

											
											<div class="form-group label-floating">
											  <label class="control-label">Residente</label>
											  <input  onkeyup="validar()" maxlength="150" class="form-control" id="residente" name="residente" type="text" value="<?php if($total==1) {echo $row2['nombre']." ".$row2['ap']." ".$row2['am']; }

											  if($total==2) {echo $row2['nombre']." ".$row2['ap']." ".$row2['am']." , ".$row3['nombre']." ".$row3['ap']." ".$row3['am']; }


											  if($total==3) {echo $row2['nombre']." ".$row2['ap']." ".$row2['am']." , ".$row3['nombre']." ".$row3['ap']." ".$row3['am']." , ".$row4['nombre']." ".$row4['ap']." ".$row4['am']; }


											    if($total==4) {echo $row2['nombre']." ".$row2['ap']." ".$row2['am']." , ".$row3['nombre']." ".$row3['ap']." ".$row3['am']." , ".$row4['nombre']." ".$row4['ap']." ".$row4['am']." , ".$row5['nombre']." ".$row5['ap']." ".$row5['am']; }







											   ?>">
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Nombre Proyecto</label>
											  <input   class="form-control" type="text" id="nombre" name="nombre" 
											  value="<?php echo $nombreproyecto; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Periodo</label>
											  <input   class="form-control" maxlength="150" type="text" id="periodo" name="periodo" value="<?php echo $periodo; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Empresa</label>
											  <input   class="form-control" type="text" id="empresa" name="empresa"  maxlength="100" value="<?php echo $empresa; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Fecha de Asignación</label>
											  <input   class="form-control" maxlength="50"  id="fechaa" name="fechaa" type="text" value="<?php echo $fecha; ?>">
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">División</label>
											  <input   class="form-control"  id="jefe" name="jefe" type="text" maxlength="50" value="<?php echo $datos['NombreD']; ?>">
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Cargo</label>
											  <input   class="form-control"  id="cargo" name="cargo" type="text" maxlength="60" value="<?php echo $datos['CargoD']; ?>">
											</div>
											 
										    <p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>

			<div class="tab-pane fade" id="list3">
 
			</div>




<div class="tab-pane fade" id="new2">
 
                    
             
              
         
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Nombre del alumno</th>
                <th class="text-center" >Carrera</th>
               
                      
                    </tr>
                  </thead>
                  
<?php



      
      
       $sql3 = "SELECT  *  FROM  tb_residentes, asignacionproyecto, proyectos
                WHERE proyectos.no_control = asignacionproyecto.no_controlp	 
                AND tb_residentes.no_control = asignacionproyecto.no_control AND proyectos.idproyecto ='$idproyecto' ";
           $query = $db->execute($sql3);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['nombre']; ?></td>
                <td><?php echo $datos['ap']; ?></td>
                <td><?php echo $datos['am']; ?></td>
                <td><?php echo $datos['carrera']; ?></td>
                
                
             
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>



</div>

			<div class="tab-pane fade" id="list4">
 

    
            

             
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Nombre asesor</th>
                <th class="text-center" >Carrera</th>
               
                      
                    </tr>
                  </thead>
                  
<?php


$idproyecto = $_GET['idproyecto'];
      
      
       $sql2 = "SELECT  *  FROM  asesor, numerodeasesores, proyectos
                WHERE proyectos.idproyecto = numerodeasesores.IdAS4	 
                AND asesor.IdAS = numerodeasesores.IdAS AND proyectos.idproyecto ='$idproyecto' ";
           $query = $db->execute($sql2);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['NombreAS']; ?></td>
                <td><?php echo $datos['CarreraAS']; ?></td>
                
                
              
               
              
           
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>



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

	

	<script>
	
	
	
 $(document).ready(function(){  
     $('#list3').load('list3.php');
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Registro/oficioasesor.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $("#list3").load('list3.php');
                 
                      
                }  
           });  
      });  
 }); 





 </script>



</body>
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


 
function eliminaroficio(idoficio){
   //donde se mostrará el resultado de la eliminacion
   
   $(document).ready(function() {
       
            // Recargo la página
            location.reload("list3.php");
        
    });
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("DESEA ELIMINAR ESTE REGISTRO")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id del empleado
   ajax.open("GET", "../Eliminacion/eliminaoficio.php?id="+idoficio);
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

</html>

				