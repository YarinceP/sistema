<?php
include '../../modelo/conexion.php';

function marcalista()
{
    try {
        $db = conexion();
        $query = "Select * from marca";

        $stmt = $db->prepare($query);
        $stmt->execute();

    } catch (PDOException $e) {
        echo "Error: " . $e;
    }
}
