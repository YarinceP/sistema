<?php
include('../modelo/conexion.php');


function impuestolista(){
  try{
    $db=conexion();
    $query="Select * from impuesto";

    $stmt=$db->prepare($query);
    $stmt->execute();

  }catch(PDOException  $e ){
    echo "Error: ".$e;
  }
}
?>
