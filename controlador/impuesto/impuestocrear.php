<?php
  include('../modelo/conexion.php');
  $descripcion=$_POST["nombre"];
  $porcentaje=$_POST["porcentaje"];
  $estado=1;
  try {
    $db=conexion("root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $fecha=date('y-m-d H:i:s');
    $stmt = $db->prepare("INSERT INTO impuesto( descripcion, porcentaje,estado,fecha_creacion,fecha_modificacion) VALUES (:descripcion,:porcentaje,:estado,:fecha_creacion,:fecha_modificacion)");
    $stmt->bindParam(":descripcion",$descripcion);
    $stmt->bindParam(":porcentaje",$porcentaje);
    $stmt->bindParam(":estado",$estado);
    $stmt->bindParam(":estado",$estado);
    $stmt->bindParam(":fecha_creacion",$fecha);
    $stmt->bindParam(":fecha_modificacion",$fecha);
    $stmt->execute();

    echo "Ok";
  } catch (\Exception $e) {
    echo $e->getMessage();
  }

 ?>
