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
        <!--- <img src="../assets/img/loginFont3.jpg" alt="UserIcon"><br><br> -->
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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			 
			</div>
		
		</div>
		
					  
			<?php 

$no_control=$_GET['no_control'];

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

<?php 

$no_control=$_GET['no_control'];

//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
   
     //   $db->query('set name utf8');

            $sqlP = "SELECT  *  FROM  proyectos , asignacionproyecto
                WHERE proyectos.no_control= asignacionproyecto.no_controlp AND asignacionproyecto.no_control ='$no_control' 
                 ";
            $queryP = $db->execute($sqlP);
  

  

   // $count_results = mysqli_num_rows($query_searched);

    //Si ha resultados
    if( mysqli_num_rows($queryP)  > 0) {

       // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

       // echo '<ul>';
     // while($datos=$db->fetch_row($query))
         if($datosP=$db->fetch_row($queryP)){?>
           
           
       
<?php  }} ?>		  	
					  	

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
            
               <li> <a href="#listR2"   data-toggle="tab">Datos Proyecto</a></li>
                
              
                    
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
      

					   
					
 <?php 



//Si se ha pulsado el botón de buscar

  $id =$_GET['no_control']; 
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
          
           
       
<?php  }} ?>

<div class="tab-pane fade" id="listR2">
              <div class="table-responsive">
               <form  name="add_name2" id="add_name2" method="POST"   onSubmit='return validar(this)' name="form1">
    
          
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

           <input  id="idproyecto" name="idproyecto" type="hidden"  value="<?php echo $datos['idproyecto']; ?>" ></input> 
           <div class="form-group label-floating">
            
                        <label for="nombre">Nombre Proyecto:</label>
                <textarea cols="70" rows="2"  class="form-control" type="text" id="nombrep" name="nombrep"><?php echo $datos['nombrep']; ?></textarea>
                        </div>


      
<label for="">Opciones:</label>
<input type="radio" name="statusn"  id="statusn"  value="si"<?php echo $datos['statusn'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar();"  >Rechazar
        <input type="radio" name="statusn"  id="statusn" value="no"<?php echo $datos['statusn'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar();"  >Aceptar
        <br />
        <br />
<label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input  style="height:50" size="70" maxlength="70" type="text" name="observacionn" id="observacionn" <?php echo $datos['statusn'] == "Aceptar"  ||  $datos['statusn'] == "" ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionn']; ?>"   /><br />




             <div class="form-group label-floating">
            
                        <label for="nombre">Opción Elegida:</label>
                        <input   class="form-control" type="text" id="nombrea" name="nombrea" value="<?php echo $datos['opcion']; ?>">
          </div>


          




<label for="">Opciones:</label>
<input type="radio" name="statuso"  id="statuso"  value="sii"<?php echo $datos['statuso'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar2();">Rechazar
    <input type="radio" name="statuso"  id="statuso" value="noo"<?php echo $datos['statuso'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar2();">Aceptar
        <br />
        <br />
        <label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input   style="height:50" size="70" maxlength="70" type="text" name="observaciono" id="observaciono" <?php echo $datos['statuso'] == "Aceptar" ||  $datos['statuso'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observaciono']; ?>"  /><br />
            

          
          

          <div class="form-group label-floating">
            
                        <label for="nombre">Periodo de realización:</label>
                        <input   class="form-control" type="text" id="apa" name="apa" value="<?php echo $datos['periodop']; ?>">
          </div>
<label for="">Opciones:</label>
<input type="radio" name="statusp"  id="statusp"  value="si3"<?php echo $datos['statusp'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar3();">Rechazar
        <input type="radio" name="statusp"  id="statusp" value="no3"<?php echo $datos['statusp'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar3();">Aceptar
        <br />
        <br />
         <label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input   style="height:50" size="70" maxlength="70" type="text" name="observacionp" id="observacionp" <?php echo $datos['statusp'] == "Aceptar" ||  $datos['statusp'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionp']; ?>"  /><br />





          



          <div class="form-group label-floating">
            
                        <label for="nombre">Objetivo General:</label>
                        <textarea  cols="70" rows="3"   class="form-control" type="text" id="ama" name="ama" ><?php echo $datos['objectivo']; ?></textarea>
          </div>
<label for="">Opciones:</label>
<input type="radio" name="statusob"  id="statusob"  value="si4"<?php echo $datos['statusob'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar4();">Rechazar
        <input type="radio" name="statusob"  id="statusob" value="no4"<?php echo $datos['statusob'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar4();">Aceptar
        <br />
        <br />
         <label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input   style="height:50" size="70" maxlength="70" type="text" name="observacionob" id=" observacionob" <?php echo $datos['statusob'] == "Aceptar" ||  $datos['statusob'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionob']; ?>"  /><br />        

   
          





             
          <div class="form-group label-floating">
            
                        <label for="nombre">Justificación:</label>
                        <textarea cols="70" rows="4"   class="form-control" type="text" id="carreraa" name="carreraa"> <?php echo $datos['justificacion']; ?></textarea>
          </div>
<label for="">Opciones:</label>          
<input type="radio" name="statusj"  id="statusj"  value="si5"<?php echo $datos['statusj'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar5();">Rechazar
        <input type="radio" name="statusj"  id="statusj" value="no5"<?php echo $datos['statusj'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar5();">Aceptar
        <br />
        <br />
         <label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input   style="height:50" size="70" maxlength="70" type="text" name="observacionoj" id=" observacionoj" <?php echo $datos['statusj'] == "Aceptar" ||  $datos['statusj'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionoj']; ?>"  /><br />                       

          <div class="form-group label-floating">
            
                        <label for="nombre">Problemas a resolver:</label>
                        <textarea    cols="70" rows="4"  class="form-control" type="text-center"  id="curpa" name="curpa"> <?php echo $datos['problematica']; ?></textarea>
          </div>
<label for="">Opciones:</label>
<input type="radio" name="statuspr"  id="statuspr"  value="si6"<?php echo $datos['statuspr'] == "Rechazar" ? ' checked="checked"' : '';?> onclick="habilitar6();">Rechazar
 <input type="radio" name="statuspr"  id="statuspr" value="no6"<?php echo $datos['statuspr'] == "Aceptar" ? ' checked="checked"' : '';?> onclick="deshabilitar6();">Aceptar
        <br />
        <br />
         <label for="">Observación:</label><br>
        <?php // Si al cargar la página el alumno no tiene beca, entonces por defecto los campos están deshabilitados ?>
<input   style="height:50" size="70" maxlength="70" type="text" name="observacionopr" id=" observacionopr" <?php echo $datos['statuspr'] == "Aceptar" ||  $datos['statuspr'] == ""  ? ' disabled="disabled"' : '';?>   value="<?php echo $datos['observacionopr']; ?>"  /><br />            
    
 <div class="form-group label-floating">
            
                        <label for="nombre">Número de Semanas:</label>
                        <textarea   cols="20" rows="2"  class="form-control" type="text-center"  id="numeros" name="numeros"> <?php echo $datos['semanas']+2; ?></textarea>
          </div>         
  
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


$id =$_GET['no_control'];

      
      
       $sql = "SELECT  *  FROM  objectivose , asignacionobjectivos
                WHERE    objectivose.no_control= asignacionobjectivos.no_controlo AND asignacionobjectivos.no_control ='$id'  
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

  $id =$_GET['no_control']; 
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
<label>Observación Objectivos</label>
<textarea    type="text-center"  id="objectivos" name="objectivos"> <?php echo $datos2['objectivos']; ?></textarea>
  
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
        <!--        <th class="text-center" >Semana 1</th>
                <th class="text-center" >Semana 2</th>
                <th class="text-center" >Semana 3</th>
                <th class="text-center" >Semana 4</th>
                <th class="text-center" >Semana 5</th>
                <th class="text-center" >Semana 6</th>
                <th class="text-center" >Semana 7</th>
                <th class="text-center" >Semana 8</th>
                <th class="text-center" >Semana 9</th>
                <th class="text-center" >Semana 10</th>
                <th class="text-center" >Semana 11</th>
                <th class="text-center" >Semana 12</th>
                <th class="text-center" >Semana 13</th>
                <th class="text-center" >Semana 14</th>
                <th class="text-center" >Semana 15</th>
                <th class="text-center" >Semana 16</th>
                <th class="text-center" >Semana 17</th>
                <th class="text-center" >Semana 18</th>
                <th class="text-center" >Semana 19</th>
                <th class="text-center" >Semana 20</th>
                <th class="text-center" >Semana 21</th>
                <th class="text-center" >Semana 22</th>
                <th class="text-center" >Semana 23</th>
                <th class="text-center" >Semana 24</th>
                <th class="text-center" >Semana 25</th>
                <th class="text-center" >Semana 26</th>
                 
             -->    
                      
                    </tr>
                  </thead>
                  
<?php



$id =$_GET['no_control'];
      
      
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

  $id =$_GET['no_control']; 
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

<script type="text/javascript">
function validar()
  {
    document.getElementById("submitt").disabled="disabled";
    for(var i=0;i<document.getElementsByTagName("select").length;i++)
    {
      if(document.getElementsByTagName("select")[i].value==0)
        return false;
    }
    document.getElementById("submitt").disabled=false;
  }
  </script> 



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
              <li> <a href="#list5" data-toggle="tab">Alumnos involucrados en el proyecto</a></li>
              
                    
             
              
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
</div>
</div>
</div>
</div>
</div>

<br><br><br>

    



  
           
                                        

                      
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

<script> 
  
 $(document).ready(function(){  
     
        
      $('#submitt').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizarcalificacion2.php ",  
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
 </script>

			  	
					
</body>
</html>
