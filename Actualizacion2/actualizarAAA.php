<?php
	
	include'../conexion.php';

	        $idAS = $_POST['IdAS'];
	        $idD = $_POST['idD'];
            
	        $nombrea = $_POST['nombrea'];
			$carreraa = $_POST['carreraa'];
		
			$emaila = $_POST['emaila'];	
			$telefonoa = $_POST['telefonoa'];
			
			$passworda = $_POST['passworda'];	


			class Encrypter {
 
    private static $Key = "";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    
 
}



$texto_encriptado = Encrypter::encrypt($passworda);

if ($carreraa=='Opción') {
	
print "Verificar Datos";

}

else{

$sql = $mysqli->query(" UPDATE  asesor SET 	NombreAS='$nombrea',  CarreraAS='$carreraa' ,EmailAS='$emaila', TelefonoAS='$telefonoa', PasswordAs='$texto_encriptado', idD='$idD' where IdAS='$idAS'");                             


print "Datos Actualizados";

	 }
?>	 