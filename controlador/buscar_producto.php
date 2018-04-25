<?php
include "../modelo/conexion.php";
try {
$db = conexion("root", "K17OACX");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("select * from producto");
$stmt->execute();
$fila = $stmt->fetchAll();
echo json_encode($fila);

} catch (\Exception $e) {
echo $e->getMessage();
}
