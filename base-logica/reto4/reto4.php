<?php

// Variables
$esMiembro = False;
$compra = 100000;
$total = 0;
$descuento = 0;

// Validaciones
if (!is_int($compra)) {
    echo 'La compra debe ser un número entero.' . PHP_EOL;
    exit;
}

if ($compra <= 0) {
    echo 'La compra no debe ser menor o igual a 0' . PHP_EOL;
    exit;
}

// Dcto: Miembro
if ($esMiembro) {
    $descuento += 0.05;
}

// Dcto + calculo compra
if ($compra < 20000) {
    $total = $compra - ($compra * $descuento);

} elseif ($compra >= 20000 && $compra < 50000) {
    $descuento += 0.05;
    $total = $compra - ($compra * $descuento);

} elseif ($compra >= 50000 && $compra < 100000) {
    $descuento += 0.1;
    $total = $compra - ($compra * $descuento);

} elseif ($compra >= 100000) {
    $descuento += 0.15;
    $total = $compra - ($compra * $descuento);
}

// Resumen
echo 'Total original: $' . $compra . ' | ';
echo 'Descuento total aplicado: %' . $descuento * 100 . ' | ';
echo 'Total final: $' . $total;