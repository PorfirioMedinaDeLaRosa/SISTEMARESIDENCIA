<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["presidente_id"]) || $_SESSION["presidente_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idGT =$_SESSION["presidente_id"]



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

            $sql = "SELECT  *  FROM  presidente
                WHERE  idP =$idGT
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
          $datos['NombreP']; ?> <br><br> <?php echo 
          $datos['CarreraP']; ?></figcaption>
				</figure>
				
			</div>
			 <!-- SideBar Menu -->
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php

include'menu.php'
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



//Si se ha pulsado el botón de buscar

  $id =$_GET['id']; 
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$id' ";
            $query = $db->execute($sql);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos=$db->fetch_row($query)){?>
          
           
       
<?php  }}








$no_control = $_GET['id'];


$sqlR = "SELECT  *  FROM  tb_residentes where no_control='$no_control' ";
            $queryR = $db->execute($sqlR);
   

    if( mysqli_num_rows($queryR)  > 0) {

    
         if($datosR=$db->fetch_row($queryR)){?>
          
           
       
<?php  }}

$carrera = $_GET['carrera'];

$sqlD = "SELECT  *  FROM  divisiones WHERE CarreraD='$carrera' ";
            $queryD = $db->execute($sqlD);
   

    if( mysqli_num_rows($queryD)  > 0) {

    
         if($datosD=$db->fetch_row($queryD)){?>
          
           
       
<?php  }}


 ?>

<h4>Revisión de Proyecto por Alumno</h4>



			 <form  name="add_name" id="add_name" method="POST"   onSubmit='return validar(this)' name="form1">
       




		
          
 <script type="text/javascript">
            // Selecciono los elementos <input /> por su atributo "name"
            var tipo = document.getElementsByName('observacionn');
            var tipo2 = document.getElementsByName('observaciono');
            var tipo3 = document.getElementsByName('observacionp');
             var tipo4 = document.getElementsByName('observacionob');
             var tipo5 = document.getElementsByName('observacionoj');
               var tipo6 = document.getElementsByName('observacionopr');
          
           
            
            function habilitar() {
                // Habilito los elementos
                tipo[0].disabled = false;
                
            } 

            function deshabilitar() {
                // Deshabilito los elementos
                tipo[0].disabled = true;
               

              
                
            }
             function habilitar2() {
                // Habilito los elementos
                tipo2[0].disabled = false;
                
            } 

            function deshabilitar2() {
                // Deshabilito los elementos
                tipo2[0].disabled = true;
               

              
                
            }
            function habilitar3() {
                // Habilito los elementos
                tipo3[0].disabled = false;
                
            } 

            function deshabilitar3() {
                // Deshabilito los elementos
                tipo3[0].disabled = true;
               

              
                
            }
            function habilitar4() {
                // Habilito los elementos
                tipo4[0].disabled = false;
                
            } 

            function deshabilitar4() {
                // Deshabilito los elementos
                tipo4[0].disabled = true;
               

              
                
            }
             function habilitar5() {
                // Habilito los elementos
                tipo5[0].disabled = false;
                
            } 

            function deshabilitar5() {
                // Deshabilito los elementos
                tipo5[0].disabled = true;
               

              
                
            }
             function habilitar6() {
                // Habilito los elementos
                tipo6[0].disabled = false;
                
            } 

            function deshabilitar6() {
                // Deshabilito los elementos
                tipo6[0].disabled = true;
               

              
                
            }
           
             
          
        </script>
        <script type="text/javascript">
function validar()
  {
    document.getElementById("submit").disabled="disabled";
    for(var i=0;i<document.getElementsByTagName("select").length;i++)
    {
      if(document.getElementsByTagName("select")[i].value==0)
        return false;
    }
    document.getElementById("submit").disabled=false;
  }



  </script> 
       

			     <input  id="idproyecto" name="idproyecto" type="hidden"  value="<?php echo $datos['idproyecto']; ?>" ></input> 
            <input  id="emailgestion" name="emailgestion" type="hidden"  value="<?php echo $datosG['CorreoGT']; ?>" ></input> 

            <input  id="emailadmin" name="emailadmin" type="hidden"  value="<?php echo $datosA['EmailA']; ?>" ></input> 


             <input  id="emailresidente" name="emailresidente" type="hidden"  value="<?php echo $datosR['email']; ?>" ></input> 

             <input  id="emaildivisiones" name="emaildivisiones" type="hidden"  value="<?php echo $datosD['EmailD']; ?>" ></input> 


             <input  id="nombrer" name="nombrer" type="hidden"  value="<?php echo $datosR['nombre']; ?>" ></input> 


            <input  id="apr" name="apr" type="hidden"  value="<?php echo $datosR['ap']; ?>" ></input> 

            <input  id="apm" name="apm" type="hidden"  value="<?php echo $datosR['am']; ?>" ></input> 

            <input  id="carrerar" name="carrerar" type="hidden"  value="<?php echo $datosR['carrera']; ?>" ></input> 


       <input  id="nombrepr" name="nombrepr" type="hidden"  value="<?php echo $datos['nombrep']; ?>" ></input> 

        <input  id="no_control" name="no_control" type="hidden"  value="<?php echo $datos['no_control']; ?>" ></input> 

































			     <div class="form-group label-floating">
			      
											  <label  style="color:#9B0000" for="nombre">Nombre Proyecto:</label>
								<textarea cols="70" rows="4" disabled="" class="form-control" type="text" id="nombrep" name="nombrep"> <?php echo $datos['nombrep']; ?></textarea>
											  </div>


			
<label style="color:#9B0000"  for="">Opciones:</label>
<input type="radio" name="statusn"  class="form"    id="statusn"  value="si"<?php echo $datos['statusn'] == "Rechazar"  ? ' checked="checked"' : '';?> onclick="habilitar();"  >Rechazar






<input type="radio" name="statusn"  class="form"   id="statusn" value="no"<?php echo $datos['statusn'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar();"  >Aceptar





<input type="radio" hidden="" name="statusn"  class="form"   id="statusn" value="N"<?php echo $datos['statusn'] == ""?   ' checked="checked"' : '';?>   >


        <br />
        <br />
<label style="color:#9B0000"  for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!-- <input  style="height:100" size="150" maxlength="300" type="text" name="observacionn" id="observacionn" <?php echo $datos['statusn'] == "Aceptar"  ||  $datos['statusn'] == "" ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionn']; ?>"   /><br /> -->

<textarea    type="text-center"  maxlength="500"  id="observacionn" name="observacionn"> <?php echo $datos['observacionn']; ?> </textarea > 



			       <div class="form-group label-floating">
			      
											  <label style="color:#9B0000"  for="nombre">Opción Elegida:</label>
											  <input  disabled="" class="form-control" type="text" id="nombrea" name="nombrea" value="<?php echo $datos['opcion']; ?>">
					</div>


					




<label style="color:#9B0000"  for="">Opciones:</label>
<input type="radio" name="statuso"  id="statuso"  value="sii"<?php echo $datos['statuso'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar2();">Rechazar





    <input type="radio" name="statuso"  id="statuso" value="noo"<?php echo $datos['statuso'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar2();">Aceptar


    


<input type="radio" hidden="" name="statuso"  class="form"   id="statuso" value="N"<?php echo $datos['statuso'] == ""?   ' checked="checked"' : '';?>  >

    

        <br />
        <br />
        <label style="color:#9B0000"  for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!--<input   style="height:50" size="150" maxlength="300" type="text" name="observaciono" id="observaciono" <?php echo $datos['statuso'] == "Aceptar" ||  $datos['statuso'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observaciono']; ?>"  /><br /> -->
						
<textarea    type="text-center"  maxlength="500"  id="observaciono" name="observaciono"> <?php echo $datos['observaciono']; ?> </textarea > 
					
					

					<div class="form-group label-floating">
			      
											  <label style="color:#9B0000"  for="nombre">Periodo de realización:</label>
											  <input  disabled="" class="form-control" type="text" id="apa" name="apa" value="<?php echo $datos['DiaInicio']."  de  ".$datos['MesInicio']."  de  ".$datos['AnoInicio']."  al  ".$datos['DiaTermino']."  de  ".$datos['MesTermino']."  de  ".$datos['AnoTermino']; ?>">



            
                        <label for="nombre">Número de Semanas:</label>
                       
             <input  disabled="" class="form-control" type="text" id="apa" name="apa" value="<?php echo $datos['semanas']+2; ?>">


<h3>Verificar que el periodo de residencia, cumpla con el número de semanas</h3>


					</div>
<label style="color:#9B0000"  for="">Opciones:</label>
<input type="radio" name="statusp"  id="statusp"  value="si3"<?php echo $datos['statusp'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar3();">Rechazar





        <input type="radio" name="statusp"  id="statusp" value="no3"<?php echo $datos['statusp'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar3();">Aceptar








        <input type="radio" hidden="" name="statusp"  class="form"   id="statusp" value="N"<?php echo $datos['statusp'] == ""?   ' checked="checked"' : '';?>  >

        <br />
        <br />
         <label  style="color:#9B0000" for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!--<input   style="height:50" size="150" maxlength="300" type="text" name="observacionp" id="observacionp" <?php echo $datos['statusp'] == "Aceptar" ||  $datos['statusp'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionp']; ?>"  /><br /> -->


<textarea    type="text-center"  maxlength="500"  id="observacionp" name="observacionp"> <?php echo $datos['observacionp']; ?> </textarea > 


					



					<div class="form-group label-floating">
			      
											  <label style="color:#9B0000"  for="nombre">Objetivo General:</label>
											  <textarea  cols="70" rows="5"   disabled="" class="form-control" type="text" id="ama" name="ama" ><?php echo $datos['objectivo']; ?></textarea>
					</div>
<label style="color:#9B0000"  for="">Opciones:</label>
<input type="radio" name="statusob"  id="statusob"  value="si4"<?php echo $datos['statusob'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar4();">Rechazar




        <input type="radio" name="statusob"  id="statusob" value="no4"<?php echo $datos['statusob'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar4();">Aceptar


       


          <input type="radio" hidden="" name="statusob"  class="form"   id="statusob" value="N"<?php echo $datos['statusob'] == ""?   ' checked="checked"' : '';?>  > 









        <br />
        <br />
         <label style="color:#9B0000"  for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!--<input   style="height:50" size="150" maxlength="300" type="text" name="observacionob" id=" observacionob" <?php echo $datos['statusob'] == "Aceptar" ||  $datos['statusob'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionob']; ?>"  /><br />		-->		 

   
 <textarea    type="text-center"  maxlength="500"  id="observacionob" name="observacionob"> <?php echo $datos['observacionob']; ?> </textarea > 

         





             
					<div class="form-group label-floating">
			      
											  <label style="color:#9B0000"  for="nombre">Justificación:</label>
											  <textarea cols="70" rows="7"  disabled="" class="form-control" type="text" id="carreraa" name="carreraa"> <?php echo $datos['justificacion']; ?></textarea>
					</div>
<label  style="color:#9B0000" for="">Opciones:</label>					 
<input type="radio" name="statusj"  id="statusj"  value="si5"<?php echo $datos['statusj'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar5();">Rechazar





 

        <input type="radio" name="statusj"  id="statusj" value="no5"<?php echo $datos['statusj'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar5();">Aceptar

        <input type="radio" hidden="" name="statusj"  class="form"   id="statusj" value="N"<?php echo $datos['statusj'] == ""?   ' checked="checked"' : '';?>  > 

        <br />
        <br />
         <label style="color:#9B0000"  for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!--<input   style="height:50" size="150" maxlength="500" type="text" name="observacionoj" id=" observacionoj" <?php echo $datos['statusj'] == "Aceptar" ||  $datos['statusj'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionoj']; ?>"  /><br />	-->										  

<textarea    type="text-center"  maxlength="500"  id="observacionoj" name="observacionoj"> <?php echo $datos['observacionoj']; ?> </textarea > 






					<div class="form-group label-floating">
			      
											  <label style="color:#9B0000"  for="nombre">Problemas a resolver:</label>
											  <textarea   disabled="" cols="70" rows="8"  class="form-control" type="text-center"  id="curpa" name="curpa"> <?php echo $datos['problematica']; ?></textarea>
					</div>
<label  style="color:#9B0000" for="">Opciones:</label>
<input type="radio" name="statuspr"  id="statuspr"  value="si6"<?php echo $datos['statuspr'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar6();">Rechazar




 
 <input type="radio" name="statuspr"  id="statuspr" value="no6"<?php echo $datos['statuspr'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar6();">Aceptar





  <input type="radio" hidden="" name="statuspr"  class="form"   id="statuspr" value="N"<?php echo $datos['statuspr'] == ""?   ' checked="checked"' : '';?> > 


        <br />
        <br />
         <label style="color:#9B0000" for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<!--<input   style="height:50" size="150" maxlength="500" type="text" name="observacionopr" id=" observacionopr" <?php echo $datos['statuspr'] == "Aceptar" ||  $datos['statuspr'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionopr']; ?>"  /><br /> -->						
<textarea    type="text-center"  maxlength="500"  id="observacionopr" name="observacionopr"> <?php echo $datos['observacionopr']; ?> </textarea > 
          
	
<br><br><br>



<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list2" data-toggle="tab">Objetivos Especificos</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list2">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Numero </th>
                <th class="text-center" >Objetivo</th>
               
                      
                    </tr>
                  </thead>
                  
<?php


$id =$_GET['id'];

      
      
       $sql = "SELECT  *  FROM  objectivose , asignacionempresa
                WHERE    objectivose.no_control= asignacionempresa.no_controle AND asignacionempresa.no_control ='$id'  
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['numeroo']; ?></td>
                <td><?php echo $datos['nombre']; ?></td>
                
                
               
               
              
           
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>
                <style type="text/css">
                textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}
</style>
 <?php 



//Si se ha pulsado el botón de buscar

  $id =$_GET['id']; 
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql2 = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$id' ";
            $query2 = $db->execute($sql2);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query2)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos2=$db->fetch_row($query2)){?>
          
           
       
<?php  }} ?>
<label>Observación Objetivos</label>
<textarea    type="text-center" maxlength="1000" id="objectivos" name="objectivos"> <?php echo $datos2['objectivos']; ?></textarea>
  
              </div>
              </div>
               </div>
              </div>
              </div>
              </div>
         
<br><br>









<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Actividades</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Actividad </th>
                <th class="text-center" >Descripción</th>
                <th class="text-center" >Fecha Inicio </th>
                <th class="text-center" >Fecha Termino </th>
                <th class="text-center" >Semanas</th>
                
                      
                    </tr>
                  </thead>
                  
<?php



$id =$_GET['id'];
      
      
       $sql = "SELECT  *  FROM  actividades , asignacionactividades
                WHERE actividades.no_control= asignacionactividades.no_controla AND    asignacionactividades.no_control ='$id' ORDER BY actividades.fecha  ASC
                 ";
           $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['actividad']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['fecha']; ?></td>
                <td><?php echo $datos['fecha_termino']; ?></td>
                 <td><?php echo $datos['semanas']; ?></td>
               
               
               
                
            </tr>

      <?php  } ?>



                </table>
                <?php 



//Si se ha pulsado el botón de buscar

  $id =$_GET['id']; 
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql2 = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$id' ";
            $query2 = $db->execute($sql2);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query2)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos2=$db->fetch_row($query2)){?>
          
           
       
<?php  }} ?>
<label>Observación Actividades</label>
<textarea    type="text-center"  id="actividades" name="actividades"> <?php echo $datos2['actividades']; ?></textarea>
                
              </div>
              </div>
               </div>
              </div>
              </div>
              </div>
         
<br><br><br>


<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list5" data-toggle="tab">Estudiantes involucrados en el proyecto</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list5">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                     
                <th class="text-center" >Nombre del alumno</th>
                <th class="text-center" >Carrera</th>
               
                      
                    </tr>
                  </thead>
                  
<?php



    $idproyecto = $_GET['idproyecto'];
      
       $sql3 = "SELECT  *  FROM  tb_residentes, asignacionproyecto, proyectos
                WHERE proyectos.no_control = asignacionproyecto.no_controlp  
                AND tb_residentes.no_control = asignacionproyecto.no_control AND proyectos.idproyecto ='$idproyecto' ";
           $query = $db->execute($sql3);
            while($datos=$db->fetch_row($query)){?>
            <tr>
     
            <td><?php echo $datos['nombre']." ".$datos['ap']. " ".$datos['am']; ?></td>
               
                <td><?php echo $datos['carrera']; ?></td>
                
                
             
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>



</div>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list3" data-toggle="tab">Asesores Internos</a></li>
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list3">
              <div class="table-responsive">
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
             <td><?php echo $datos['id']; ?></td>
               
                
                
             <td><?php 
                       echo "<a class='btn btn-danger btn-raised btn-xs' href='eliminaasesor.php? id=" .$datos['id'] ."    '><span class='glyphicon glyphicon-actualizar'></span>Eliminar Asesor</a>";

                      
 


            ?></td>    
               
              
           
                


               
          
            </tr>

      <?php  } ?>



                </table>
                <br>
                <br>



</div>
</div>
</div>
</div>
</div>
</div>

<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Asignación de Asesor</h4>
         
<h5>En caso de no asignar asesor debe poner número de asesor 1 y la opción sin asignar </h5>
<br><br>




 <div style="text-align:center;">
   <h4>Número de asesores en el proyecto</h4>
  
  <select name="LISTA" id="LISTA" onChange="CambiarFormulario()"    >
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      
    </select>
  </p>
</div>
<br><br>


<div>
  
<h5>Asesor Número 1</h5>
  
   <select     name="Texto1" id="Texto1"  disabled="" >
        <option value="0">Debe Eligir una Opción</option>
        <option value="1">Sin Asignar</option>
        <?php
   include'../conexion.php';     
          $query = $mysqli -> query ("SELECT * FROM asesor  ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[IdAS].'">'.$valores[NombreAS]."  ".$valores[ap]." ".$valores[am].'</option>';
            

                          
          }
        ?> </select>
    
    </div>





<div >
  
<br><br>
<h5>Asesor Número 2</h5>
   <select     name="Texto2" id="Texto2"  disabled="" >
       <option value="0">Debe Eligir una Opción</option>
        <?php
   include'../conexion.php';     
          $query = $mysqli -> query ("SELECT * FROM asesor  ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[IdAS].'">'.$valores[NombreAS]."  ".$valores[ap]." ".$valores[am].'</option>';
            

                          
          }
        ?> </select>
    
    </div>


<div >
  <br><br>

<h5>Asesor Número 3</h5>
   <select     name="Texto3" id="Texto3"  disabled="" >
       <option value="0">Debe Eligir una Opción</option>
        <?php
   include'../conexion.php';     
          $query = $mysqli -> query ("SELECT * FROM asesor  ");
                      
          while ($valores = mysqli_fetch_array($query)) {
                        
            echo '<option value="'.$valores[IdAS].'">'.$valores[NombreAS]."  ".$valores[ap]." ".$valores[am].'</option>';
            

                          
          }
        ?> </select>
    
    </div>
</div>












<br><br><br>

		

<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Status de Proyecto</h4><br><bR>


            <h5>Debe eligir la opción Aceptado o Rechazado</h5>
	  <?php 


//Si se ha pulsado el botón de buscar

  $id =$_GET['id']; 
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sql2 = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$id' ";
            $query2 = $db->execute($sql2);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($query2)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datos2=$db->fetch_row($query2)){?>
          
           
       
<?php  }} ?>
		 

     <select name="aprovacion" id="aprovacion"   >
        <option value="0" >Debe Eligir una Opción </option>
         <option>Aceptado</option>
          <option>Rechazado</option>

        </select><br><br>
<label>Status General</label>
  <input disabled=""  type="text-center" class="form-control" id="actividades" name="actividades" value="<?php echo $datos2['StatusGeneral']; ?>"></>


       
  

			</div>


       


 




	
		      	<p class="text-center">
                          <button href="#!"  type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
                        </p>
										    <br>
                                            <br>
                                        

									    
		    </div>
	  	</div>
	  	</div>





	  	
	
</form>

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

	


<script> 
  
 $(document).ready(function(){  
     
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizarcalificacion.php ",  
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

	 <script language="JavaScript">
function CambiarFormulario(){
  switch(document.forms[0].LISTA.selectedIndex){
    case 0: 
      document.forms[0].Texto1.disabled=true;
      document.forms[0].Texto2.disabled=true;  
      document.forms[0].Texto3.disabled=true;
      document.forms[0].Texto4.disabled=true;  
      document.forms[0].Texto5.disabled=true;
      document.forms[0].Texto1.value=""; 
      document.forms[0].Texto2.value="";  
      document.forms[0].Texto3.value="";
      document.forms[0].Texto4.value="";  
      document.forms[0].Texto5.value="";
      document.forms[0].submit.disabled=true;
      document.forms[0].submit2.disabled=true;

      break;
       case 1: 
      document.forms[0].Texto1.disabled=false;
      document.forms[0].Texto2.disabled=true;  
      document.forms[0].Texto3.disabled=true;
      document.forms[0].Texto4.disabled=true;  
      document.forms[0].Texto5.disabled=true;
      document.forms[0].Texto2.value="";  
      document.forms[0].Texto3.value="";
      document.forms[0].Texto4.value="";  
      document.forms[0].Texto5.value="";
      document.forms[0].submit.disabled=false;
      document.forms[0].submit2.disabled=false;
      break;





    case 2: 
      document.forms[0].Texto1.disabled=false;
      document.forms[0].Texto2.disabled=false; 
      document.forms[0].Texto3.disabled=true;
       document.forms[0].Texto4.disabled=true;  
      document.forms[0].Texto5.disabled=true;
      document.forms[0].Texto3.value="";
      document.forms[0].Texto4.value="";  
      document.forms[0].Texto5.value="";
      document.forms[0].submit.disabled=false;
      document.forms[0].submit2.disabled=false;
      break;
    case 3: 
      document.forms[0].Texto1.disabled=false;
      document.forms[0].Texto2.disabled=false;  
      document.forms[0].Texto3.disabled=false;
       document.forms[0].Texto4.disabled=true;  
      document.forms[0].Texto5.disabled=true;
       document.forms[0].Texto4.value="";  
      document.forms[0].Texto5.value="";
      document.forms[0].submit.disabled=false;
      document.forms[0].submit2.disabled=false;
      break;
      case 4: 
      document.forms[0].Texto1.disabled=false;
      document.forms[0].Texto2.disabled=false;  
      document.forms[0].Texto3.disabled=false;
       document.forms[0].Texto4.disabled=false;  
      document.forms[0].Texto5.disabled=true;
       document.forms[0].Texto5.value="";
       document.forms[0].submit.disabled=false;
        document.forms[0].submit2.disabled=false;
      break;
      case 5: 
      document.forms[0].Texto1.disabled=false;
      document.forms[0].Texto2.disabled=false;  
      document.forms[0].Texto3.disabled=false;
       document.forms[0].Texto4.disabled=false;  
      document.forms[0].Texto5.disabled=false;
      document.forms[0].submit.disabled=false;
        document.forms[0].submit2.disabled=false;
      break;
  }
}

 
</script>
</body>
</html>
