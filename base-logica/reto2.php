<?php

// Un estacionamiento cobra según las horas:

// Hasta 2 horas: $1.500 por hora.
// Más de 2 y hasta 5 horas: $1.200 por hora.
// Más de 5 horas: $1.000 por hora.
// Si permanece más de 8 horas, se añade un recargo de $3.000.
// No se permiten 0 horas ni valores negativos.

// Tu programa debe recibir las horas e imprimir el total a pagar.

$horas = 20;
$valor_total = 0;

if ($horas === 0 || $horas < 0 || !is_int($horas)) {
    echo 'Por favor, ingrese un número válido, que sea mayor a 0';
    exit;
}


for ($i = 1; $i <= $horas; $i++) {
    if ($i > 0 && $i <= 2) {
        $valor_total += 1500;
    } elseif ($i > 2 && $i <= 5) {
        $valor_total += 1200;
    } elseif ($i > 5) {
        $valor_total += 1000;
    }
}

if ($horas > 8) {
    $valor_total += 3000;
}


print $valor_total;