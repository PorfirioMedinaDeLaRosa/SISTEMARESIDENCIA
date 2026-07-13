<?php

const HOST = "localhost";

const DB = "residencia3";

const USER = "subacademica";

const PASS = "Tecserd@n2020";

class conexion{

 private $db;

 public function conexion(){

  $this->db = new mysqli(HOST, USER, PASS, DB);

 }
 

 public function getConexion(){


 if($this->db->connect_errno){
  echo "Error en la Conexion con la base de datos";

 }

 else{

  return $this->db;

 }
 }

 

 public function closeConexion(){

  $this->db->close();

 }

}

?>
