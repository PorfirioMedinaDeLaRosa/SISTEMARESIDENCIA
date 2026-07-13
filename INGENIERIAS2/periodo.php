<?php
//require('../rsesiones.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.php';</script>";
}
$idA =$_SESSION["user_id"]
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
		<!-- Content page -->

		<div class="container-fluid">
			<div class="page-header">
				<div class="container-fluid">
			<h1 class="text-titles"><i class=""></i><small>Periodos de Residencia Profesional</small></h1>
			 
			</div>
			
		</div>


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
									    <form  name="add_name" id="add_name"  method="POST">
			  
			       <div class="form-group label-floating">
			      
											  <label for="nombre">Periodo:</label>
											  <input  class="form-control" maxlength="50" type="text" id="periodo" name="periodo"   >
					</div>
					<div class="form-group">
										      <label class="control-label">Status</label>
										        <select class="form-control" id="status" name="status">
										          <option>Activo</option>
										          <option>Disable</option>
										          
										        </select>
										    </div>
			  
		      	<p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Registar" />
										  </form>
									</div>
								</div>
							</div>
						</div>

			<div class="tab-pane fade" id="list">
 
			</div>

		

	</section>


	<!-- Notifications area -->
	

	<!-- Dialog help -->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
          <form  name="add_namea" id="add_namea"  method="POST">
      <div class="modal-body">
      		<input type="text"  id="idperiodo" name="">
        	<label>Periodo</label>
        	<input type="text" name="periodo" id="periodo" class="form-control ">
        	<select class="form-control " id="status" name="status">
										          <option>Activo</option>
										          <option>Disable</option>
										          
										        </select>
      </div>
      <p class="text-center">
										    	 <input type="button" name="submit" id="submit" class="btn btn-info btn-raised btn-sm" value="Actualizar" />
  </form>
    </div>
  </div>
</div>


	


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
      $('#modalEdicion').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient0 = button.data('idperiodo')
      var recipient1 = button.data('periodo')
       var recipient2 = button.data('status')
      
       
     
      var modal = $(this)    
      modal.find('.modal-body #idperiodo').val(recipient0)
      modal.find('.modal-body #periodo').val(recipient1)
        modal.find('.modal-body #status').val(recipient2)
         
    });


      $('#actualizadatos').click(function(){
          actualizaDatos();
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
      $('#list').load('listperiodo.php');
        
      $('#submit').click(function(){            
           $.ajax({  
                url:"../Registro2/registroperiodo.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                    alert(data);  
                     $("#list").load('listperiodo.php');
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
</html>
