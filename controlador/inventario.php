<?php
include('./modelo/conexion.php');
include('./controlador/inventario.php');

function impuestolista(){
  try{
    $db=conexion();
    $db->query("Select * from table where id=".$mysecuredata);
  }catch(PDOException  $e ){
    echo "Error: ".$e;
  }
}
?>
