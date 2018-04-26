<?php
  include('../../modelo/conexion.php');
  $id=$_POST["id"];
  $nombre=$_POST["nombre"];
  try {
    $db=conexion("root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $fecha=date('y-m-d H:i:s');
    $stmt = $db->prepare("update vendedor set nombre=:nombre where id_vendedor=:id");
    $stmt->bindParam(":nombre",$nombre);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    echo "Ok";
  } catch (\Exception $e) {
    echo $e->getMessage();
  }

 ?>
