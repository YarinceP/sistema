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
