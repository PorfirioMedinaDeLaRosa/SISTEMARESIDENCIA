<?php
	
	include'../conexion.php';

	

	

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

$qq = $mysqli->query("SELECT * FROM divisiones  WHERE CarreraD = '$carrera'");


if( mysqli_num_rows($qq) == 0 ){

if ($carrera=='Opción' ) {

	print "Verificar Datos";
}

else{
$texto_encriptado = Encrypter::encrypt($password);

	$sql = $mysqli->query("insert into divisiones (	NombreD , 	CargoD , CarreraD,  EmailD , TelefonoD,   PasswordD) values ('$nombre', '$cargo', '$carrera',  '$email', '$telefono'  , '$texto_encriptado') ");		                         

print "Registro Exitoso";

}}
else
{
print "La división ya se encuentra registrada";	
}
	 
?>	