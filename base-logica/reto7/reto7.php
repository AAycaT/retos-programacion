<?php

$stockInicial = 20;
$operaciones = [5, -8, -10, 6, -4];
$operacionesRealizadas = 0;
$operacionesRechazadas = 0;

foreach ($operaciones as $operacion) {

    if (-$operacion > $stockInicial) {
        echo 'Operación rechazada: Sin stock disponible' . ' | ';
        $operacionesRechazadas++;
        continue;
    }

    if ($operacion > 0) {
        $stockInicial += $operacion;
        $operacionesRealizadas++;


    } elseif ($operacion < 0) {
        $stockInicial += $operacion;
        $operacionesRealizadas++;


    } else {
        echo 'Operación rechazada: Una venta no puede ser igual a 0' . ' | ';
        $operacionesRechazadas++;
        continue;
    }

    echo 'Stock actual: ' . $stockInicial . ' | ';
}

// Detalles
echo 'Stock final: ' . $stockInicial . ' | ';
echo 'Operaciones realizadas: ' . $operacionesRealizadas . ' | ';
echo 'Operaciones rechazadas: ' . $operacionesRechazadas . ' | ';


