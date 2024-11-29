<?php
require("root.php");
echo"<h1>Práctica: INSERTANDO DATOS</h1><br><br>";
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$escuela=$_POST['escuela'];

$consulta = "INSERT INTO alumnos (nombre, carrera, escuela) VALUES  ('$nombre', '$carrera', '$escuela')";

if ($resultado=mysqli_query($conexion, $consulta))
{
    echo "se guardo el  registro";
}
else
{
    echo "no se  ha creador con exito";
}
mysqli_close($conexion);
?>