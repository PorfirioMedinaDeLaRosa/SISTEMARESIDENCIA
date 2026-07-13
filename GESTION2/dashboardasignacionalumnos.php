<?php
//require('../rsesiones.php');
session_start();

if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='../index.html';</script>";
}
$idA =$_SESSION["user_id"]

?>

<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						2<br>
						<small>Perfil</small>
					</span>
					<a style="color:#101c20;" href="perfil.php">Actualizar</a>
				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						3<br>
						<small>Imagen Perfil</small>
					</span>
					<a style="color:#101c20;" href="imagenperfil.php">Actualizar</a>
				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
			
		
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						4<br>
						<small>Constancia</small>
					</span>
					<a style="color:#101c20;" href="ConstanciaP.php">Generar</a>

				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
			
			<?php 
    include 'config.inc.php';
        $db=new Conect_MySql();
             $sql = "SELECT  *  FROM  alumnos
                WHERE  IDAlumno ='$idA'
                 ";
            $query = $db->execute($sql);
      if( mysqli_num_rows($query)  > 0) {
          if($datos=$db->fetch_row($query)){?>
       
<?php  }} ?>

 $ncontrolG = $datos['Ncontrol'];  
			<?php

			include'conexion.php';
$sql = " SELECT  *  FROM  ConstanciaParticipacion WHERE no_control='$ncontrolG'";
   

            $query = $db->execute($sql);
  
    if( mysqli_num_rows($query)  > 0) {
  
         while($datos=$db->fetch_row($query)){?>
           <tr>
                   <td><?php

            if ($datos['StatusCC']=='Aceptado') {

             	 include'dashboardconstania.php';
             }else{
				include'dashboardconstania.php';
			 }
		


			}
		}
		?>



