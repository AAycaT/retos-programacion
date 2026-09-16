<?php

$contrasenas = ['backend123'];
$contrasenaCorrecta = 'backend123';

$intentos = 3;
foreach ($contrasenas as $contrasena) {

    $intentos--;

    if ($contrasena === $contrasenaCorrecta) {
        echo 'Acceso concedido' . PHP_EOL;
        break;

    } else {
        echo 'Contraseña incorrecta' . PHP_EOL;
        echo 'Intentos restantes: ' . ($intentos) . PHP_EOL;
    }

    if ($intentos === 0) {
        echo 'Cuenta bloqueada' . PHP_EOL;
        exit;
    }

}