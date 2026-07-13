<?php
	
	include'../conexion.php';

	$idD = $_POST['idD'];

	        $nombre = $_POST['nombre'];
			$cargo = $_POST['cargo'];
			$carrera = $_POST['carrera'];	
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];


		
				$password = $_POST['password'];	


				class Encrypter {
 
    private static $Key = "";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    
 
}



$texto_encriptado = Encrypter::encrypt($password);


if ($carrera=='Opción') {
	
print "Verificar Datos";

}

else{

	$sql = $mysqli->query(" UPDATE divisiones SET NombreD='$nombre', CargoD='$cargo', CarreraD='$carrera',  EmailD='$email', TelefonoD='$telefono', PasswordD='$texto_encriptado'where idD=$idD");                             


print "Datos Actualizados";


}


	 
?>	

	 
