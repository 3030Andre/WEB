<?php

$numeros = array(10, 25, 8, 40, 15);

$soma = 0;
$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $numero) {
    $soma += $numero;

    if ($numero > $maior) {
        $maior = $numero;
    }

    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "Números: " . implode(", ", $numeros) . "<br>";
echo "Soma: " . $soma . "<br>";
echo "Maior número: " . $maior . "<br>";
echo "Menor número: " . $menor;

?>

Números: 10, 25, 8, 40, 15
Soma: 98
Maior número: 40
Menor número: 8