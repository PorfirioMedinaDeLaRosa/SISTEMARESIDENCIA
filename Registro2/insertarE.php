<?php

$no_control = $_POST['no_control'];	




include'../conexion.php';




$qq = $mysqli->query("SELECT * FROM empresa  WHERE no_control = '$no_control'");
		

			
			$nombree = $_POST['nombree'];
			$giroe = $_POST['giroe'];	
			$tipoe = $_POST['tipoe'];
			$actividadese = $_POST['actividadese'];
			$rfce = $_POST['rfce'];		
			$domicilioe = $_POST['domicilioe'];
            $coloniae= $_POST['coloniae'];
			$codigoe = $_POST['codigoe'];	
			$telefonoe = $_POST['telefonoe'];
			$ciudade = $_POST['ciudade'];
			$emaile = $_POST['emaile'];		
			$misione = $_POST['misione'];
			$titulare = $_POST['titulare'];
			$puestote = $_POST['puestote'];
			$asesore = $_POST['asesore'];		
			$pasesore = $_POST['pasesore'];
			$acuerdoe = $_POST['acuerdoe'];
			$pacuerdoe = $_POST['pacuerdoe'];
			$cartae = $_POST['cartae'];
			$pcartae = $_POST['pcartae'];
			
			$ubicacione = $_POST['ubicacione'];
			
if( mysqli_num_rows($qq) == 0 ){
		
			$sql = $mysqli->query("insert into empresa(NombreE, GiroE , TipoE,ActividadesE, RFCE , DomicilioE,ColoniaE,CPE,TelefonoE,CiudadE,EmailE,MisionE,NombreTE,PuestoTE,AsesorE,PuestoAE,PersonaAEE,PuestoAEE,PersonaCE,PuestoCE,ubicacion,no_control) values ( '$nombree','$giroe', 	'$tipoe','$actividadese','$rfce','$domicilioe','$coloniae',
                '$codigoe','$telefonoe','$ciudade','$emaile','$misione','$titulare','$puestote',
                '$asesore','$pasesore','$acuerdoe','$pacuerdoe','$cartae','$pcartae',
                '$ubicacione',       '$no_control') ");

			echo "Registro la empresa";  
  }



else{
//caso contario (else) es porque ese user ya esta registrado
 
echo "La empresa ya se encuentra registrada";  
}              				
	

			
			

	?>	
 

            