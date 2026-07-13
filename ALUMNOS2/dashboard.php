<?php

include'../conexion.php';

error_reporting(0);

$fecha = "1";



$consulta="SELECT   asignacionproyecto.no_controlp FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$idGT'";
  $consulta2 = $mysqli->query($consulta);
  while($numero=mysqli_fetch_array($consulta2))
  {

 $numerototal=$numero['no_controlp'];

}


$numero2="SELECT * from asignacionproyecto WHERE no_controlp='$numerototal' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);




if ($total > 0){



$sql = "     SELECT  *  FROM  proyectos , asignacionproyecto, tb_residentes, empresa, asignacionempresa
WHERE proyectos.no_control= asignacionproyecto.no_controlp  
AND empresa.no_control = asignacionempresa.no_controle
AND asignacionempresa.no_control = '$idGT'
  
 AND asignacionproyecto.no_control = '$idGT' AND tb_residentes.no_control='$idGT'";

     
         


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


                     



            if ($datos['StatusGeneral']=='Aceptado' AND $datos['status']=='Aceptado') {

             	 include'dashboaroperaciones2.php';
             }

             

             

                else{


                	
$consultap="SELECT  *  FROM  asignacionproyecto WHERE  asignacionproyecto.no_control='$idGT'";
  $consultap = $mysqli->query($consultap);
  while($numerop=mysqli_fetch_array($consultap))
  {

 $numeroproyecto=$numerop['no_controlp'];

}






$numero2="SELECT * from tb_residentes  WHERE no_controladmin ='$numeroproyecto' " ;
$result = $mysqli->query($numero2);
$total = mysqli_num_rows($result);




$numeros="SELECT * from solicitud  WHERE no_controladmin ='$numeroproyecto' " ;
$results = $mysqli->query($numeros);
$totals = mysqli_num_rows($results);



//Si se ha pulsado el botón de buscar

   
    //Conectamos con la base de datos en la que vamos a buscar
  
        
     //   $db->query('set name utf8');


$sql = "SELECT  *  FROM  tb_residentes where  tb_residentes.no_control='$idGT'";

     
         


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

            


              

             if ($datos['paso1']=='Administrador' AND $datos['paso2']=='') {

             	 include'dashboardperfil.php';
             }



             if ($datos['paso1']=='Alumno' AND $datos['paso2']=='') {

             	 include'dashboardperfil.php';
             }


             if ($datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='') {

             	 include'dashboardimagen.php';
             }



             if ($datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='') {

             	 include'dashboardimagen.php';
             }


             if ($datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='') {

             	 include'dashboardsolicitud.php';
             }



             if ($datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='' ) {

             	 include'dashboardsolicitud.php';
             }





if (  $total!=$totals and  $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='' and $datos['paso5']=='' ) {

                 include'ddashboardsolicitud.php';
             }


 if (  $total!=$totals and   $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='' and $datos['paso5']=='' ) {

                 include'ddashboardsolicitud.php';
             }



            

if ($total==$totals and  $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='' ) {

             	 include'dashboarddatosempresa.php';
             }



             if ($total==$totals and   $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='' ) {

             	 include'dashboarddatosempresa.php';
             }





             if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='' ) {

             	 include'dashboardobjectivosespecificos.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='' ) {

             	 include'dashboardobjectivosespecificos.php';
             }



 if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='' ) {

             	 include'dashboardsemanas.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='' ) {

             	 include'dashboardsemanas.php';
             }



if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x'  and $datos['paso8']=='' ) {

             	 include'dashboardactividades.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x' and $datos['paso8']=='' ) {

             	 include'dashboardactividades.php';
             }



if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x'  and $datos['paso8']=='x' and $datos['paso9']=='' ) {

             	 include'dashboardproyecto.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x' and $datos['paso8']=='x' and $datos['paso9']=='' ) {

             	 include'dashboarproyecto.php';
             }



             if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x'  and $datos['paso8']=='x' and $datos['paso9']=='x' and $datos['paso10']=='' ) {

             	 include'dashboardocumentos.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x' and $datos['paso8']=='x' and $datos['paso9']=='x' and $datos['paso10']=='' ) {

             	 include'dashboardocumentos.php';
             }



if ($total==$totals and    $datos['paso1']=='Administrador' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x'  and $datos['paso8']=='x' and $datos['paso9']=='x' and $datos['paso10']=='x' ) {

             	 include'dashboardocumentos2.php';
             }



             if ($total==$totals and    $datos['paso1']=='Alumno' AND $datos['paso2']=='x' and $datos['paso3']=='x' and $datos['paso4']=='x' and $datos['paso5']=='x' and $datos['paso6']=='x' and $datos['paso7']=='x' and $datos['paso8']=='x' and $datos['paso9']=='x' and $datos['paso10']=='x' ) {

             	 include'dashboardocumentos2.php';
             }





                        
                        } 

                        /*

                        elseif ($datos['StatusGeneral']=='Aceptado' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                        elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


 elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                        elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }


                         elseif ($datos['StatusGeneral']=='0' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }




                         elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        }

                        elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 

                        elseif ($datos['StatusGeneral']=='Rechazado' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='Aceptado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='Rechazado') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 


                        elseif ($datos['StatusGeneral']=='' AND $datos['status']  =='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 






                        elseif ($datos['StatusGeneral']=='') {
                	echo "<a class='btn btn-danger btn-raised btn-xs' href='periodoeditar.php? '><span class='glyphicon glyphicon-actualizar'></span>Actualizar Información</a>"; 
                        
                        } 



*/
             
                      
            
               
                 ?></td>
            </tr>
       
<?php  }} }} } 


include'dashboardasignaralumnos.php';

$fecha2= '2';

if ($total==0 and $fecha !=$fecha2)

{
 //include'dashboardasignaralumnos.php';

}


//if ($total==0  and $fecha = $fecha2 )

//{
 //include'dashboardfecha.php';

//}



 



?>























