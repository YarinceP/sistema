<?php
include '../../../modelo/conexion.php';

function categorialista()
{
    try {
        $db = conexion("root","");
        $query = ("Select * from categoria");
        $stmt = $db->prepare($query);
        $stmt->execute();

        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arreglo;

        
    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}

function marcalista()
{
    try {
        $db = conexion("root", "");
        $query = ("Select * from marca");
        $stmt = $db->prepare($query);
        $stmt->execute();

        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arreglo;

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}

function impuestolista()
{
    try {
        $db = conexion("root", "");
        $query = ("Select * from impuesto");
        $stmt = $db->prepare($query);
        $stmt->execute();

        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arreglo;

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}

function unidadeslista()
{
    try {
        $db = conexion("root", "");
        $query = ("Select * from unidades");
        $stmt = $db->prepare($query);
        $stmt->execute();

        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arreglo;

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}

function datosProductoEliminar()
{
    try {
        $db = conexion("root", "");
        $query = ("SELECT codigo_pk,codigo_barra,p.descripcion,sku_proveedor,costo_fijo,
                   costo_variable, utilidad, precio,u.nombre,p.estado,c.nombre,m.nombre,i.porcentaje
                   FROM producto as p,unidades as u,categoria as c,marca as m,impuesto as i
                   WHERE p.unidades_fk=u.id_unidades AND p.categoria_fk=c.id_categoria AND
                   p.impuesto_fk=i.id AND p.marca_fk=m.id_marca WHERE  ");
        $stmt = $db->prepare($query);
        $stmt->execute();

        $arreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $arreglo;

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}