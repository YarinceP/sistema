<?php
include('../../modelo/conexion.php');
$codigo_pk = $_POST["codigo_pk"];
$codigo_barra = $_POST["codigo_barra"];
$descripcion = $_POST["descripcion"];
$sku_proveedor = $_POST["sku_proveedor"];
$costo_fijo = $_POST["costo_fijo"];
$costo_variable = $_POST["costo_variable"];
$utilidad = $_POST["utilidad"];
$precio = $_POST["precio"];
$unidades_fk = $_POST["unidades_fk"];
$estado = 1;
$categoria_fk = $_POST["categoria_fk"];
$marca_fk = $_POST["marca_fk"];
$impuesto_fk = $_POST["impuesto_fk"];

try {
    $db = conexion("root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $fecha = date('y-m-d H:i:s');
    /*TODO* Terminar la consulta*/
    $stmt = $db->prepare("UPDATE producto SET 
                                    codigo_pk=:codigo_pk,
                                    codigo_barra=:codigo_barra,
                                    descripcion=:descripcion,
                                    sku_proveedor=:sku_proveedor,
                                    costo_fijo=:costo_fijo,
                                    costo_variable=:costo_variable,
                                    utilidad=:utilidad,
                                    precio=:precio,
                                    unidades_fk=:unidades_fk,
                                    categoria_fk=:categoria_fk,
                                    marca_fk=:marca_fk,
                                    impuesto_fk=:impuesto_fk
                                    WHERE codigo_pk=:codigo_pk");
    $stmt->bindParam(":codigo_pk", $codigo_pk);
    $stmt->bindParam(":codigo_barra", $codigo_barra);
    $stmt->bindParam(":descripcion", $descripcion);
    $stmt->bindParam(":sku_proveedor", $sku_proveedor);
    $stmt->bindParam(":costo_fijo", $costo_fijo);
    $stmt->bindParam(":costo_variable", $costo_variable);
    $stmt->bindParam(":utilidad", $utilidad);
    $stmt->bindParam(":precio", $precio);
    $stmt->bindParam(":unidades_fk", $unidades_fk);
    $stmt->bindParam(":estado", $estado);
    $stmt->bindParam(":categoria_fk", $categoria_fk);
    $stmt->bindParam(":marca_fk", $marca_fk);
    $stmt->bindParam(":impuesto_fk", $impuesto_fk);
    $stmt->execute();

    echo "Ok";
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>
