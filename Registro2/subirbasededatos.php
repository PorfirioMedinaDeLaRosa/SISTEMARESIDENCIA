<?php

include'../conexion.php';

		$file = $_FILES['file']['tmp_name'];
             

		$handle = fopen($file, "r");


		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ";")) !== false)
		{
			$matricula = ($filesop[0]);
			$nombre = utf8_encode($filesop[1]);
			$ap = utf8_encode($filesop[2]);
			$am = utf8_encode($filesop[3]);
			$carrera = utf8_encode($filesop[4]);
			$curp = ($filesop[5]);
			$semestre = ($filesop[6]);
			$periodo = ($filesop[7]);
			$promedio = ($filesop[8]);
			$creditosc = ($filesop[9]);
			$creditosr = ($filesop[10]);
			$porcentaje = ($filesop[11]);
			$folioseguro = ($filesop[12]);
			$genero = ($filesop[13]);


			
 $sql = $mysqli->query("INSERT INTO  
 tb_residentes (no_control, nombre, ap, am, carrera, curp, semestre, periodo,	
 promedio, creditosc, creditosr, porcentaje,  folios, password,Genero ) VALUES 
 ('$matricula','$nombre','$ap',  '$am' , '$carrera' , '$curp', '$semestre' ,'$periodo' ,
 '$promedio', '$creditosc' , '$creditosr', '$porcentaje',  '$folioseguro','$curp','$genero')");


/*
       $sql = $mysqli->query(" UPDATE  tb_residentes SET nombre='$nombre' , ap='$ap' , am='$am' , carrera='$carrera' , curp='$curp' ,
     semestre='$semestre' , periodo='$periodo', promedio='$promedio', creditosc='$creditosc', creditosr='$creditosr', porcentaje='$porcentaje', folios='$folioseguro', password='$curp'
 where  no_control= '$matricula' ");                             

*/



			
			$c = $c + 1;
		


}

if($sql){

				echo "La BD ha sido importada con exito. Registros ". $c ." Alumnos";  
				
				
				
			}else{
				echo "Perdon ! Ocurrio un error al subir los registros." . $mysqli->error;;
				
			}
		
			














?>