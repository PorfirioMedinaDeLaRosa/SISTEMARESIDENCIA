<?php  
 
 include'../conexion.php';
  $id = $_POST['no_control'];
  $idproyecto = $_POST['idproyecto'];


$qq = $mysqli->query("SELECT * FROM proyectos  WHERE no_control = '$id'");

if( mysqli_num_rows($qq) == 1 ){


 $number = count($_POST["name"]);
 $nombrep =$_POST['nombrep'];
      $opcione = $_POST['opcione'];
     
      $objectivog = $_POST['objectivog'];  
      $justificacionp = $_POST['justificacionp'];
      $problemasp = $_POST['problemasp']; 

 
$sqll = $mysqli->query(" UPDATE  proyectos  SET nombrep='$nombrep', opcion='$opcione',  objectivo='$objectivog',  justificacion='$justificacionp',  problematica='$problemasp'   where   idproyecto='$idproyecto'");         


    mysqli_query($mysqli, $sqll);  

 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)   
      {  
        
           if(trim($_POST["name"][$i] != ''))  
           {  
                $count = $i+1;

                $sql = "INSERT INTO objectivose (numeroo, nombre,  no_control) VALUES('" .mysqli_real_escape_string($mysqli, $count).  "','"
                .mysqli_real_escape_string($mysqli,  $_POST["name"][$i]).  "', '$id' )";  
                mysqli_query($mysqli, $sql);  

                
           }  
      }  
      echo "Registro exitoso";  
     
 }  
 


}

 else{
//caso contario (else) es porque ese user ya esta registrado
 
echo "El proyecto no se encuentra registrado por favor verificar el asignacion de alumnos";  
}                     

 ?> 

