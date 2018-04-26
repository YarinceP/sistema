<?php
include '../../modelo/conexion.php';
$id = $_POST["id"];
try {
    $db = conexion("root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $fecha = date('y-m-d H:i:s');
    $stmt = $db->prepare("delete from  vendedor  where id_vendedor=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}
