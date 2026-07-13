
<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
?>




<!DOCTYPE html>
 <meta http-equiv="Content-Type" content="text/html; CHARSET=utf8mb4  " />


<html lang="es">
<head>
      <title>Admin</title>
      
      <link rel="stylesheet" href="../css/main.css">
</head>
<body >
      <!-- SideBar -->
      <section class="full-box cover dashboard-sideBar">
            <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
            <div class="full-box dashboard-sideBar-ct">
                  <!--SideBar Title -->

                  <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                        ITSCS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
                  </div>
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
                  <!-- SideBar User info -->
                  <div class="full-box dashboard-sideBar-UserInfo">
                    <div align="center"><img  src="imagenperfil/<?php echo $datos['ruta_imagen']; ?>" alt="" width="150" /></div><br><br>
                        <figure class="full-box">
                             
                              <figcaption class="text-center text-titles"><?php echo 
          $datos['NCompletoA']."  ".$datos['CargoA']; ?></figcaption>
                        </figure>
                        
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
     <?php
include'navram.php';

    ?>
    </nav>
    <!-- Content page -->
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class=""></i> <small>Documentos de Solicitud de Residencia Profesional por Alumno</small></h1>
       
        <button class="btn btn-warning" >
                                        <a href="proceso.php"><i class=""></i>Nueva Consulta</a>
                                        </button>
                                       
      </div>

      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li> <a href="#list" data-toggle="tab">Alumnos Residentes</a></li>
              
      <div class="tab-pane fade" id="solicitudresidencia">
 
      </div>              
             
              
          </ul>
          <div id="myTabContent" class="tab-content">
            
            


    
            

              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center" >No Control</th>
                <th class="text-center" >Nombre Completo</th>
                
              
               <th class="text-center" >Carta de liberación Social</th>
         <!--       <th class="text-center" >Solicitud de Residencia</th>
                <th class="text-center" >Anteproyecto</th> -->
                <th class="text-center" >Documentos</th>
               
                <th class="text-center" >Status</th>
                <th class="text-center" >Modificaciones</th>
                                <th class="text-center" >Operaciones</th>

                      
                    </tr>
                  </thead>
                  
<?php





//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {

  $carrera = $_POST['carrera'];
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];
      

      
       $sql = "SELECT  *  FROM  tb_residentes, solicitud , proyectos, asignacionproyecto
                WHERE  carrera LIKE '%" . $carrera . "%'   AND  periodo LIKE '%" . $keywords . "%'  AND tb_residentes.no_control=solicitud.no_control AND proyectos.no_control = asignacionproyecto.no_controlp AND tb_residentes.no_control = asignacionproyecto.no_control
                 ";
           $query = $db->execute($sql);

$count_results = mysqli_num_rows($query);


 if( mysqli_num_rows($query)  > 0) {

        echo '<h4>Alumnos '.$count_results.' resultados.</h4>';


            while($datos=$db->fetch_row($query)){

 


            	?>





            <tr>
     
            <td><?php echo $datos['no_control']; ?></td>
                <td><?php echo $datos['nombre']." ".$datos['ap']." ".$datos['am']; ?></td>
               
               
               
                <td><a   target="_blank" href="../ALUMNOS2/archivosservicio.php?id=<?php echo $datos['no_control']?>" ><?php echo $datos['nombre_archivoS']; ?></a></td>   
        


 <td><?php     echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank' href='../ALUMNOS2/anteproyecto.php?no_control=" .$datos['no_control'] ." & periodo=" .$datos['periodo'] ." & semanas=" .$datos['semanas'] ."'><span class='glyphicon glyphicon-actualizar'></span>Generar Anteproyecto</a>";
  echo "<a class='btn btn-success btn-raised btn-xs ' target='_blank' href='../ALUMNOS2/solicitud.php?no_control=" .$datos['no_control'] ." &carrera=" .$datos['carrera'] ." '><span class='glyphicon glyphicon-actualizar'></span>Generar Solicitud</a>";

 ?></td>
           


              <td>    <form  name="add_name" id="add_name"  method="POST">
			  
                   <input  id="no_control" name="no_control"  value="<?php echo $datos['no_control']; ?>" type="hidden"  ></input>  
                   
       <textarea    name="modificaciones"   id="modificaciones"><?php echo $datos['modificaciones']; ?></textarea>

         <select  id="status" name="status">
        <option><?php echo $datos['statuss']; ?></option>
              <option>Recibido</option>
              <option>Aceptado</option>
              <option>Rechazado</option>
              
            </select>
      

<p class="text-center">
  <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" 
           value="Registar" />
      </form></td>

           


                 

        

              
 

            
            </tr>

      <?php  }} }?>



                </table>

               
               
              </div>
              </div>
        



  




  </section>  


  <!-- Notifications area -->
  
 




     <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-A">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Status</h4>
          </div>
          <div class="modal-body">
           <form action="../Actualizacion2/actualizarsolicitud.php"  method="POST">
           <input  id="no_control" name="no_control" type="hidden" ></input>  
          
                      
                      <div class="form-group label-floating">
                        <label for="email">Status:</label>
                       <select  class="form-control" type="text" id="status" name="status">
                       <option>Recibido</option>
                       <option>Aceptado</option>
                        <option>Rechazado</option>

                             </select>
                      </div>

                      <div class="form-group label-floating">
                        <label  for="email">Modificaciones:</label>
                       <textarea   class="form-control"  name="modificaciones" id="modificaciones"></textarea>
                      </div>
                     
                      
                      
          </div>
            <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
                        </p>
                         
                      
       </div>
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
      $('#Dialog-A').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('no_control')
      var recipient1 = button.data('status')
       var recipient2 = button.data('modificaciones')
       
     
      var modal = $(this)    
      modal.find('.modal-body #no_control').val(recipient0)
      modal.find('.modal-body #status').val(recipient1)
      modal.find('.modal-body #modificaciones').val(recipient2)
         
    });
    
  </script>
 
    
 <script> 
	
	function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("form-control");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  document.getElementById("submit").disabled = false;
  
  }else{
     document.getElementById("submit").disabled = true;
  //Salta un alert cada vez que escribes y hay un campo vacio
  //alert("Hay campos vacios")   
  }
}  
 $(document).ready(function(){  
    
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Actualizacion2/actualizarsolicitud.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                    alert(data);  
                    
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


 
function eliminaperiodo(idperiodo){
   //donde se mostrará el resultado de la eliminacion
   
   $(document).ready(function() {
       
            // Recargo la página
            location.reload("listperiodo.php");
        
    });
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("De verdad desea eliminar este dato")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id del empleado
   ajax.open("GET", "../Eliminacion2/eliminaperiodo.php?id="+idperiodo);
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



 
  
</body>
</html>
