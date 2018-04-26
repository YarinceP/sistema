<?php
  include('../../modelo/conexion.php');
  $nombre=$_POST["nombre"];
  try {
    $db=conexion("root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $fecha=date('y-m-d H:i:s');
    $stmt = $db->prepare("INSERT INTO vendedor(nombre) VALUES(:nombre)");
    $stmt->bindParam(":nombre",$nombre);
    $stmt->execute();

    echo "Ok";
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
 ?>
