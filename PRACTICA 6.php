<?php
require("root.php");
echo "<h1>Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";

if ($conexion = mysqli_connect($servidor, $usuario, $password, $bd)) {
    echo "Te has conectado con éxito a tu servidor: <a href='http://localhost/Programacion_Jhordy%20S%c3%a1nchez/' target='_blank'>$servidor</a><br>";
    echo "Y de igual forma a la base de datos: $bd<br>";
} else {
    echo "Error conectando con MYSQL<br>" . mysqli_connect_error();
}

echo "<br><br>";
mysqli_close($conexion);
?>
