<?php
include '../../modelo/conexion.php';

function categorialista()
{
    try {
        $db = conexion();
        $query = "Select * from categoria";

        $stmt = $db->prepare($query);
        $stmt->execute();

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}
