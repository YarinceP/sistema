<?php
include('../../modelo/conexion.php');
$estado=$_POST["estado"];
try {
    $db=conexion("root","K17OACX");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $stmt = $db->prepare("update proveedor set 
      nombre_proveedor = :nombre_proveedor, nombre_comercial = :nombre_comercial, rtn = :rtn,
      fax = :fax, correo = :correo, web = :web, descuento_credito = :descuento_credito, limite_credito = :limite_credito, direccion = :direccion,
      contacto = :contacto, estado = :estado, forma_pago = :forma_pago
      where id_proveedor =:id_proveedor");
    $stmt->bindParam(":id_proveedor",$_POST['id_proveedor']);
    $stmt->bindParam(":nombre_proveedor",$_POST['nombre_proveedor']);
    $stmt->bindParam(":nombre_comercial",$_POST['nombre_comercial']);
    $stmt->bindParam(":rtn",$_POST['rtn']);
    $stmt->bindParam(":fax",$_POST['fax']);
    $stmt->bindParam(":correo",$_POST['correo']);
    $stmt->bindParam(":web",$_POST['web']);
    $stmt->bindParam(":descuento_credito",$_POST['descuento_credito']);
    $stmt->bindParam(":limite_credito",$_POST['limite_credito']);
    $stmt->bindParam(":direccion",$_POST['direccion']);
    $stmt->bindParam(":contacto",$_POST['contacto']);
    $stmt->bindParam(":forma_pago",$_POST['forma_pago']);
    $stmt->bindParam(":estado",$estado);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>
