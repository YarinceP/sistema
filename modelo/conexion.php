<?php
$usuario="root";
$clave=" ";

function conexion($usuario,$clave){
  try{
    $db = new PDO("mysql:host=127.0.0.1;dbname=sistema", $usuario, $clave);
    return $db;
  }catch(PDOException  $e ){
    echo "Error: ".$e;
  }
}
?>
