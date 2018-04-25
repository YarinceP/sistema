<?php
include '../../modelo/conexion.php';
$id = $_POST["codigo_pk"];
try {
    $db = conexion("root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $fecha = date('y-m-d H:i:s');
    $stmt = $db->prepare("delete from  producto  where codigo_pk=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}