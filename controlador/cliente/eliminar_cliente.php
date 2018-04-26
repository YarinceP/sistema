<?php
include '../../modelo/conexion.php';
$id = $_POST["id_cliente"];
try {
    $db = conexion("root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("delete from  cliente  where id_cliente =:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}