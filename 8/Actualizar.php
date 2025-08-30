<?php

include_once('ConfDb.php');

$sql = "UPDATE personas SET apellido = 'Britto' WHERE id = 1";

if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro actualizado correctamente";
} else {
    $conexion->error;
};

$conexion->close();