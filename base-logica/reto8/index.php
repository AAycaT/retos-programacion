<?php

// Un sistema registra las ventas diarias de una tienda:

// 12000, 35000, 8000, 52000, 18000, 41000, 9500

// Debes obtener:

// Cantidad total de ventas. - OK
// Suma total vendida. - ok
// Venta más alta. - ok
// Venta más baja. - ok
// Cantidad de ventas superiores a $20.000. - ok
// Promedio de las ventas.
// Cuántas ventas estuvieron por encima del promedio.

// Reglas:

// Ninguna venta puede ser 0 o negativa.
// Si existe una venta inválida, el procesamiento debe detenerse.
// No puedes usar funciones que calculen directamente suma, promedio, máximo o mínimo.

$ventas = [1, 4, 5, 1, 2, 7, 2];
$cantidad_ventas = 0;
$suma_ventas = 0;
$venta_min = $ventas[0];
$venta_max = $ventas[0];
$ventas_sup_monto = 0;
$ventas_sup_promedio = 0;

foreach ($ventas as $venta) {

    if ($venta <= 0) {
        echo 'Ninguna venta puede ser 0 o negativa';
        exit;
    }

    $cantidad_ventas++;
    $suma_ventas += $venta;

    if ($venta > $venta_max) {
        $venta_max = $venta;
    }

    if ($venta < $venta_min) {
        $venta_min = $venta;
    }

    if ($venta > 20000) {
        $ventas_sup_monto++;
    }
}

$promedio_ventas = $suma_ventas / $cantidad_ventas;

foreach ($ventas as $venta) {
    if ($venta > $promedio_ventas) {
        $ventas_sup_promedio++;
    }
}

echo 'Cantidad total de ventas: ' . $cantidad_ventas . ' | ';
echo 'Suma total vendida: ' . $suma_ventas . ' | ';
echo 'Venta más alta: ' . $venta_max . ' | ';
echo 'Venta más baja: ' . $venta_min . ' | ';
echo 'Cantidad de ventas superiores a $20.000: ' . $ventas_sup_monto . ' | ';
echo 'Promedio de las ventas: ' . round($promedio_ventas, 2) . ' | ';
echo 'Cuántas ventas estuvieron por encima del promedio: ' . $ventas_sup_promedio . ' | ';