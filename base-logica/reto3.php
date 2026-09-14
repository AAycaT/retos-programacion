<?php

// Un cajero automático debe permitir retirar dinero.

// Reglas:
// El saldo inicial es $150.000.
$saldo_inicial = 150000;

// El usuario indica cuánto quiere retirar.
$monto = 200000;

if (!is_int($monto)){
    echo 'El monto debe ser un número válido';
    exit;
}

// El monto debe ser mayor que 0.
if ($monto > 0) {

    // Debe ser múltiplo de $10.000.
    if ($monto % 10000 === 0) {

        // No puede retirar más dinero que el saldo disponible.
        if ($monto > $saldo_inicial) {
            echo 'El monto no puede superar los $' . $saldo_inicial . PHP_EOL;
            exit;
        }

        $saldo_inicial -= $monto;

        // Si todo es válido, imprime:
        // monto retirado
        print 'Monto retirado: $' . $monto . PHP_EOL;
        // saldo restante
        print 'Saldo restante: $' . $saldo_inicial . PHP_EOL;
    } else {
        echo 'En este cajero solo hay billetes de 10.000 CLP';
    }
} elseif ($monto <= 0){
    echo 'El monto debe ser mayor a 0';
}