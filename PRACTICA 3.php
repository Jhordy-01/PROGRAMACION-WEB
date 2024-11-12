<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 3</title>
</head>
<body>

<?php
	echo "<h3>Operaciones Matemáticas</h3>";

	$num1 = 10;
	$num2 = 5;

	$suma = $num1 + $num2;
	echo "Suma \$num1 + \$num2: La suma de $num1 y $num2 es: $suma <br>"; 

	$resta = $num1 - $num2;
	echo "Resta \$num1 - \$num2: La resta de $num1 menos $num2 es $resta <br>"; 

	$multiplicacion = $num1 * $num2;
	echo "Multiplicación \$num1 * \$num2: La multiplicación de $num1 por $num2 es: $multiplicacion <br>"; 

	$división = $num1 / $num2;
	echo "División \$num1 / \$num2: La división de $num1 entre $num2 es: $división <br>"; 

	$modulo = $num1 % $num2;
	echo "Módulo \$num1 % \$num2: El módulo de $num1 dividido entre $num2 es: $modulo <br>"; 

	function incremento() {
    $num1 = 10;
    $num1++;
    echo "Incremento \$num1++: El valor de num1 después de incremento es: $num1";
	}

	incremento();

	echo "<h3> Condiciones Matemáticas</h3>";

	if ($num1 == $num2) {
    echo "Igualdad == :$num1 es igual a $num2 <br>"; 
	} else {
    echo "Igualdad == :$num1 no es igual a $num2 <br>";
	}

	if ($num1 === $num2) {
    echo "Identidad === :$num1 es idéntico a $num2 <br>";
	} else {
    echo "Identidad === :$num1 no es idéntico a $num2 <br>"; // Salida: 10 no es idéntico a 20
	}

	if ($num1 <> $num2){
    echo "Distinto <> :$num1 es diferente de $num2 <br>"; 
	} else {
    echo "Distinto  <> :$num1 es igual a $num2 <br>";
	}

	if ($num1 != $num2) {
    echo "Distinto != :$num1 no es igual a $num2 <br>"; 
	} else {
    echo "Distinto != :$num1 es igual a $num2 <br>";
	}

	if ($num1 !== $num2) {
    echo "No Idéntico !== :$num1 no es igual a $num2 <br>"; 
	} else {
    echo "No Idéntico !== :$num1 es  igual a $num2 <br>";
	}

	if ($num1 > $num2) {
    echo "Mayor que > :$num1 es mayor que $num2<br>";
	} else {
    echo "Mayor que > :$num1 no es mayor que $num2<br>";
	}

	if ($num1 < $num2) {
    echo "Menor que < :$num1 es menor que $num2<br>"; 
	} else {
    echo "Menor que < :$num1 no es menor que $num2<br>";
	}

	if ($num1 >= $num2) {
    echo "Mayor o Igual >= :$num1 es mayor o igual que $num2<br>";
	} else {
    echo "Mayor o Igual >= :$num1 no es mayor o igual que $num2<br>";
	}

	if ($num1 <= $num2) {
    echo "Menor o igual <= :$num1 es menor o igual que $num2<br>";
	} else {
    echo "Menor o igual <= :$num1 no es menor o igual que $num2<br>";
	}

	echo "<h3> Operadores de Asignación</h3>";

	$num1 = $num1;
	echo "Asignación simple: \$num1 = $num1<br>";

	$num1  += $num2;
	echo "Asignación de suma (+=): \$num1 = $num1<br>";

	$num1 -= $num2;
	echo "Asignación de resta (-=): \$num1 = $num1<br>";

	$num1 *= $num2; 
	echo "Asignación de multiplicación (*=): \$num1 = $num1<br>"; 

	function división2() {
	$num1 = 10;
	$num2 = 5;
	$num1 /= $num2;
	echo "Asignación de división (/=): \$num1 = $num1<br>";
	}

	división2();

	$num1 %= 5;
	echo "Asignación de módulo (%=): \$num1 = $num1<br>";

	echo "<h3>Ejemplo de Operadores Lógicos</h3>";

	$d = true;
	$e = false;
	$f = true;

	if ($d && $f) {
    echo "AND: \$d y \$f son verdaderos<br>";
	} else {
    echo "AND: Al menos uno es falso<br>";
	}

	if ($num1 || $num2) {
    echo "OR:\$d o \$e al menos uno es verdadero<br>";
	} else {
    echo "OR: Ambos son falsos<br>";
	}

	if (!$e) {
    echo "NOT: \$e es falso<br>";
	}
	

	echo "<h3>Ejemplo de Operadores de Cadena</h3>";

	$MUSICA = "LA MUSICA";
	$texto = "ES LO MEJOR<br>";

	$MUSICATexto = $MUSICA . " " . $texto;
	echo "Concatenación .: " . $MUSICATexto;; 

	$mensaje = "LA MUSICA ES LO MEJOR";
	$mensaje .= ", ES EL MEJOR REMEDIO PARA EL CORAZON <br>";
	echo "Concatenación con asignación .=: " . $mensaje; 


?>

</body>
</html>