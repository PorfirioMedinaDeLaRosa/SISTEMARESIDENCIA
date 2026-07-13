<?php
	
	$mysqli = new mysqli("localhost", "root", "", "residenciafinal");	

	        $id = $_POST['id'];
            $controla = $_POST['controla'];
	        $nombrea = $_POST['nombrea'];
			$carreraa = $_POST['carreraa'];
			$emaila = $_POST['emaila'];	
			$telefonoa = $_POST['telefonoa'];
			$usuarioa = $_POST['usuarioa'];
			$passworda = $_POST['passworda'];

class Encrypter {
 
    private static $Key = "";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    
 
}



$texto_encriptado = Encrypter::encrypt($passworda);


	$sql = $mysqli->query(" UPDATE  alumnos SET NoControl='$controla', NCompletoA='$nombrea', CarreraA='$carreraa', EmailA='$emaila',  TelefonoA='$telefonoa', 	UsuarioA='$usuarioa', 	PassowordA='$texto_encriptado'  where idA=$id");                             


print "<script>window.location='../Alumnos.php';</script>";
	 
?>	

	 
