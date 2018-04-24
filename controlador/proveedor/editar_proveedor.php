<?php
include('../../modelo/conexion.php');
$estado=$_POST["estado"];
try {
    $db=conexion("root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $fecha=date('y-m-d H:i:s');
    $stmt = $db->prepare("update impuesto set descripcion=:descripcion, porcentaje=:porcentaje, estado=:estado,fecha_modificacion=:fecha where id=:id");
    $stmt->bindParam(":descripcion",$descripcion);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>
