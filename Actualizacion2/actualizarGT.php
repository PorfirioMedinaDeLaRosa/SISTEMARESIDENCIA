<?php
	
	include'../conexion.php';	

	$id = $_POST['idGT'];

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



	$sql = $mysqli->query(" UPDATE  gestion SET NombreGT='$nombregt', CargoGT='$cargogt', CorreoGT='$emailgt',  TelefonoGT='$telefonogt',  	PasswordGT='$texto_encriptado'  where idGT='$id'");                             

print "Datos Actualizados";

	 
?>	

	 