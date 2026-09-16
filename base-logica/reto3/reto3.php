<?php

$saldo_inicial = 150000;

$monto = 200000;

if (!is_int($monto)){
    echo 'El monto debe ser un número válido';
    exit;
}

if ($monto > 0) {

    if ($monto % 10000 === 0) {

        if ($monto > $saldo_inicial) {
            echo 'El monto no puede superar los $' . $saldo_inicial . PHP_EOL;
            exit;
        }

        $saldo_inicial -= $monto;

        print 'Monto retirado: $' . $monto . PHP_EOL;
        print 'Saldo restante: $' . $saldo_inicial . PHP_EOL;
    } else {
        echo 'En este cajero solo hay billetes de 10.000 CLP';
    }
} elseif ($monto <= 0){
    echo 'El monto debe ser mayor a 0';
}