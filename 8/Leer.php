<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>CI</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
    <?php
    include_once('ConfDb.php');

    $sql = "SELECT id, nombre, apellido, ci, fecha_nacimiento FROM personas";

    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["ci"] . "</td><td>" . $row["fecha_nacimiento"] . "</td></tr>";
        }
    } else {
        echo "Sin información ingresada aún";
    }

    $conexion->close();

    ?>
        </tbody>
    </table>
</body>
</html>