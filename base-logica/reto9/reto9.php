<?php
// Un hotel tiene 10 habitaciones disponibles, numeradas del 1 al 10.

// Debes procesar estas solicitudes en el orden recibido:

// Reservar habitación 3
// Reservar habitación 7
// Reservar habitación 3
// Cancelar habitación 3
// Reservar habitación 3
// Cancelar habitación 5
// Reservar habitación 10

// Reglas:

// Solo existen habitaciones del 1 al 10.
// No puedes reservar una habitación que ya está ocupada.
// No puedes cancelar una habitación que no está reservada.
// Una operación inválida se rechaza, pero el sistema continúa procesando las siguientes.
// Cada operación debe indicar si fue realizada o rechazada.

// Al finalizar debes mostrar:

// Habitaciones actualmente ocupadas.
// Cantidad de habitaciones disponibles.
// Operaciones realizadas correctamente.
// Operaciones rechazadas.

// Restricción: solo PHP. Puedes definir las operaciones directamente en el código.

$habitaciones = [
    ['numero' => 1, 'estado' => 'No reservado',],
    ['numero' => 2, 'estado' => 'No reservado',],
    ['numero' => 3, 'estado' => 'No reservado',],
    ['numero' => 4, 'estado' => 'No reservado',],
    ['numero' => 5, 'estado' => 'No reservado',],
    ['numero' => 6, 'estado' => 'No reservado',],
    ['numero' => 7, 'estado' => 'No reservado',],
    ['numero' => 8, 'estado' => 'No reservado',],
    ['numero' => 9, 'estado' => 'No reservado',],
    ['numero' => 10, 'estado' => 'No reservado',],

];

$solicitudes = [
    'Reservar habitación 3',
    'Reservar habitación 7',
    'Reservar habitación 3',
    'Cancelar habitación 3',
    'Reservar habitación 3',
    'Cancelar habitación 5',
    'Reservar habitación 10',
];

$cant_hab_disp = 0;
$op_realizadas = 0;
$op_rechazadas = 0;

/**
 * IDEAS
 * 
 * Etapa 1
 *      1. dividir texto en espacios e introducirlo en un array,
 *      2. rescatar del array el numero [2] y el estado [0]
 *      3. Asignar a cada habitacion, indicada por el numero cada estado correspondiente
 * 
 * Pregunta: Que recorrer, ¿habitaciones o solicitudes?
 *      Hipótesis: solicitudes, ya que una vez guardando los datos importantes los puedo ir comparando en cada habitacion.
 * ...
 */




foreach ($solicitudes as $solicitud) {
    $req = explode(' ', $solicitud);
    $nro_habitacion = intval($req[2]);
    $est_hab = $req[0];

    switch ($est_hab) {
        case 'Reservar':
            break;
        case 'Cancelar':
            break;
        default:
            echo 'Operación rechazada: Acción inválida.';
            $op_rechazadas++;
            continue;
    }

    if ($nro_habitacion > 10 || $nro_habitacion < 1) {
        echo 'Operación rechazada: Nro. de habitación inválido.';
        $op_rechazadas++;
        continue;
    }

    foreach ($habitaciones as $i => $habitacion) {

        if ($habitacion['numero'] !== $nro_habitacion) {
            continue;
        }

        if ($habitacion['estado'] === 'Reservado' && $est_hab === 'Reservar') {
            echo 'Operación rechazada: No se puede reservar una habitación ya reservada.';
            $op_rechazadas++;
            continue;
        }

        if ($habitacion['estado'] === 'No reservado' && $est_hab === 'Cancelar') {
            echo 'Operación rechazada: No se puede cancelar una habitación que no está reservada.';
            $op_rechazadas++;
            continue;
        }

        if ($habitacion['estado'] === 'No reservado' && $est_hab === 'Reservar') {
            echo 'Operación realizada: La habitación ha sido reservada.';
            $habitaciones[$i]['estado'] = 'Reservado';

            $op_realizadas++;
            continue;
        }

        if ($habitacion['estado'] === 'Reservado' && $est_hab === 'Cancelar') {
            echo 'Operación realizada: La reserva ha sido cancelada.';
            $habitaciones[$i]['estado'] = 'No reservado';

            $op_realizadas++;
            continue;
        }


    }
}

foreach ($habitaciones as $habitacion) {

    if ($habitacion['estado'] === 'Reservado') {
        echo 'La habitación Nº' . $habitacion['numero'] . ' está ' . $habitacion['estado'];
    }

    if ($habitacion['estado'] === 'No reservado') {
        $cant_hab_disp++;
    }
}

echo ' | Cantidad de habitaciones disponibles: ' . $cant_hab_disp;
echo ' | Operaciones realizadas correctamente: ' . $op_realizadas;
echo ' | Operaciones rechazadas: ' . $op_rechazadas;