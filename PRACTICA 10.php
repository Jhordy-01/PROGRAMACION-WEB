<?php
require("root.php");
echo"<h1>Práctica: Creación de una base de datos</h1><br><br>";
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
$basededatos="progweb";

$consulta="SHOW databases";
$resultado=mysqli_query($conexion,$consulta);

echo "<table border=1>";
echo"<td aling=center>Listado de las bds</td>";

while ($row=mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo"</tr>";
}
echo "</table>";

echo"<br><br>";
mysqli_free_result($resultado);
mysqli_close($conexion);