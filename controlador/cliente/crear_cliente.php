<?php
include('../../modelo/conexion.php');

$estado = 1;

try {
    $db = conexion("root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO   
    cliente(id_cliente, nombre, rtn, descuento_credito, limite_credito, forma_pago, direccion, telefono, web, correo)
    VALUES (:id_cliente, :nombre, :rtn, :descuento_credito, :limite_credito, :forma_pago, :direccion, :telefono, :web, :correo)");
    $stmt->bindParam(":id_cliente", $_POST['id_cliente']);
    $stmt->bindParam(":nombre", $_POST['nombre']);
    $stmt->bindParam(":rtn", $_POST['rtn']);
    $stmt->bindParam(":descuento_credito", $_POST['decuento_credito']);
    $stmt->bindParam(":limite_credito", $_POST['limite_credito']);
    $stmt->bindParam(":forma_pago", $_POST['forma_pago']);
    $stmt->bindParam(":direccion", $_POST['direccion']);
    $stmt->bindParam(":telefono", $_POST['telefono']);
    $stmt->bindParam(":web", $_POST['web']);
    $stmt->bindParam(":correo", $_POST['correo']);
    $stmt->execute();
    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();

}

?>