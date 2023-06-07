<?php
$parrafo = "Variables a = 5 y b = 3.";
echo "<p>" . $parrafo . "</p>";

// Asignar valores a las variables $a y $b
$a = 5;
$b = 3;
// Operacion suma
$suma = $a + $b; 
// Operacion resta
$resta = $a - $b;
// Operacion multiplicacion
$multiplicacion = $a * $b;
// Operacion division
$division = $a / $b;

// Imprimir los resultados en pantalla
echo "Operaciones:\n";

echo "Suma: " . $suma . "\n";

echo "Resta: " . $resta . "\n";

echo "Multiplicación: " . $multiplicacion . "\n";

echo "División: " . $division . "\n";

$parrafo = "Saber cuánto
será su pago con el descuento del 10%.";
echo "<p>" . $parrafo . "</p>";

// Variables
$sueldoBase = 2500000;

$descuento = $sueldoBase * 0.1;
$pagoFinal = $sueldoBase - $descuento;

// Mostrar resultados
echo "Sueldo Base: $" . number_format($sueldoBase) . "\n";

echo "Descuento (10%): $" . number_format($descuento) . "\n";

echo "Pago Final: $" . number_format($pagoFinal) . "\n";

// Solicitar nombre y apellido al usuario
echo "Ingrese su nombre: "; 

$nombre = readline();
echo "Ingrese su apellido: ";

$apellido = readline();
// Imprimir mensaje de bienvenida
echo "BIENVENIDO " . $nombre . " " . $apellido;


// Variables
$sueldoBase = 3500000;

$aumento = $sueldoBase * 0.15;
$pagoFinal = $sueldoBase + $aumento;

// Mostrar resultados
echo "Sueldo Base: $" . number_format($sueldoBase) . "\n";

echo "Aumento (15%): $" . number_format($aumento) . "\n";

echo "Pago Final: $" . number_format($pagoFinal) . "\n";

?>
