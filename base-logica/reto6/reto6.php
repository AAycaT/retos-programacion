<?php

$notas = [6.9, 4.1, 6.6 , 6.0, 1.0];

$cantidadAprobados = 0;
$cantidadReprobados = 0;

$notaBaja = 0;
$notaAlta = 0;

$sumaNotas = 0;

foreach ($notas as $nota) {

    if ($nota < 1.0 || $nota > 7.0) {
        echo 'Ingrese notas válidas';
        exit;
    }

    // Aprobados
    if ($nota >= 4.0) {
        $cantidadAprobados++;
    }
    // Reprobados
    if ($nota < 4.0) {
        $cantidadReprobados++;
    }

    // Nota mas baja
    if ($notaBaja === 0 || $nota < $notaBaja){
        $notaBaja = $nota;
    }

    // Nota mas alta
    if ($notaAlta === 0 || $nota > $notaAlta){
        $notaAlta = $nota;
    }

    $sumaNotas+= $nota;
}

$promedio = $sumaNotas / count($notas);

echo 'Cantidad de aprobados: ' . $cantidadAprobados . ' | ';
echo 'Cantidad de reprobados: ' . $cantidadReprobados . ' | ';

echo 'La nota mas baja es: ' . $notaBaja . ' | ';
echo 'La nota mas alta es: ' . $notaAlta . ' | ';

echo 'El promedio de notas es: ' . $promedio;