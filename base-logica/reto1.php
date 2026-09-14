<?php

// Crea un programa en PHP que reciba un número entero y determine:
// Si es positivo, negativo o cero.
// Si es par o impar.
// Si es múltiplo de 3.
// Si está entre 10 y 100 inclusive.


$numero = 45;

if (is_int($numero)) {
    if ($numero > 0) {
        echo 'es positivo'. PHP_EOL;
    } elseif ($numero < 0) {
        echo 'es negativo'. PHP_EOL;
    } elseif ($numero === 0) {
        echo 'es cero'. PHP_EOL;
    }

    if ($numero % 2 === 0) {
        echo 'es par'. PHP_EOL;
    } else {
        echo 'es impar'. PHP_EOL;
    }

    if ($numero % 3 === 0) {
        echo 'es multiplo de 3'. PHP_EOL;
    }

    if ($numero >= 10 && $numero <= 100) {
        echo 'El número ' . $numero . ' está entre 10 y 100'. PHP_EOL;
    }
} else {
    echo 'Ingrese un numero válido';
}

