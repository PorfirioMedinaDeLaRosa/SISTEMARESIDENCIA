<?php
	
	include'../conexion.php';

	        $idP = $_POST['idP'];


	        
            
	       $nombregt = $_POST['nombregt'];
			$cargogt = $_POST['cargogt'];
			$emailgt = $_POST['emailgt'];	
			$telefonogt = $_POST['telefonogt'];
			
			$passwordgt = $_POST['passwordgt'];


			class Encrypter {
 
    private static $Key = "";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    
 
}



$texto_encriptado = Encrypter::encrypt($passwordgt);



$sql = $mysqli->query(" UPDATE  presidente SET 	NombreP='$nombregt',  Cargo='$cargogt',EmailP='$emailgt', TelefonoP='$telefonogt',   PasswordP	='$texto_encriptado'  where idP='$idP'");                             


print "Datos Actualizados";

	 