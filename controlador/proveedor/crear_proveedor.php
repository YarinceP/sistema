<?php
include('../../modelo/conexion.php');

$estado = 1;

try {
    $db = conexion("root", "K17OACX");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO   
    proveedor(id_proveedor, nombre_proveedor, nombre_comercial, rtn, telefono, fax, correo, web, descuento_credito, limite_credito, direccion, contacto, estado)
    VALUES (:id_proveedor, :nombre_proveedor, :nombre_comercial, :rtn, :telefono, :fax, :correo, :web, :descuento_credito, :limite_credito, :direccion, :contacto, :estado)");
    $stmt->bindParam(":id_proveedor", $_POST['id_proveedor']);
    $stmt->bindParam(":nombre_proveedor", $_POST['nombre_proveedor']);
    $stmt->bindParam(":nombre_comercial", $_POST["nombre_comercial"]);
    $stmt->bindParam(":rtn", $_POST['rtn']);
    $stmt->bindParam(":telefono", $_POST['telefono']);
    $stmt->bindParam(":fax", $_POST['fax']);
    $stmt->bindParam(":correo", $_POST['correo']);
    $stmt->bindParam(":web", $_POST['web']);
    $stmt->bindParam(":descuento_credito", $_POST['descuento_credito']);
    $stmt->bindParam(":limite_credito", $_POST['limite_credito']);
    $stmt->bindParam(":direccion", $_POST['direccion']);
    $stmt->bindParam(":contacto", $_POST['contacto']);
    $stmt->bindParam(":estado", $estado);
    $stmt->execute();
    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();

}

?>