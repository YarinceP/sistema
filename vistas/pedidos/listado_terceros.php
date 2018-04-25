<?php

include "../../modelo/conexion.php";

if ($_POST['tipo_transaccion'] == 1) {
    $tabla = "cliente";
} else {
    $tabla = "proveedor";
}

try {
    $db = conexion("root", "K17OACX");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("select * from terceros");
    $stmt->execute();
    $fila = $stmt->fetchAll();
    echo json_encode($fila);

} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
