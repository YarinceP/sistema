<?php
include '../../modelo/conexion.php';

function vendedorlista()
{
    try {
        $db = conexion();
        $query = "Select * from vendedor";

        $stmt = $db->prepare($query);
        $stmt->execute();

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}
