<?php
$servidor   = 'localhost';
$usuario    = 'root';
$contrasena = '';
$bd = 'baseprueba';

$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {

    die('Hubo un fallo en la conexión ' . $conexion->connect_error);
};