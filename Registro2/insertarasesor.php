<?php
	

			include'../conexion.php';	
			
			$nombrea = $_POST['nombrea'];
			$carreraa = $_POST['carreraa'];
				
			$emaila = $_POST['emaila'];
			$telefonoa = $_POST['telefonoa'];
				
			$passworda = $_POST['passworda'];
			$idD = $_POST['idD'];


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

else{			$sql = $mysqli->query("insert into asesor (NombreAS , CarreraAS ,   EmailAS, TelefonoAS,  PasswordAs, idD) values ( '$nombrea', '$carreraa',   '$emaila', '$telefonoa' ,  '$texto_encriptado', '$idD') ");			
		print "Asesor Registrado";

	}
	 
	?>	
 
 