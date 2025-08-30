<?php

include_once('ConfDb.php');

$sql = "DELETE FROM personas WHERE id = 2";

if ($conexion->query($sql) === TRUE) {
    echo "Eliminación de registro exitosa";
} else {
    $conexion->error;
}

$conexion->close();