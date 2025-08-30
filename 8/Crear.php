<?php

include_once('ConfDb.php');

$sql = "insert into personas (nombre, apellido, ci, fecha_nacimiento) values ('Daniel', 'Rios', '1234567', '1996-03-01'),";

if ($conexion->query($sql) === TRUE) {
    echo "Registro ingresado correctamente.";
} else {
    echo $conexion->error;
}

$conexion->close();