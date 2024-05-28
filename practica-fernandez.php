<?php

/**
 * Calcula el factorial de un número entero.
 *
 * @param int $numero El número del que se quiere calcular el factorial.
 * @return int El factorial del número especificado.
 * @throws Exception Si el número no es un entero no negativo.
 * @author Valentín Fernández Guijarro
 * @version 2.0
 * {@internal Para uso interno de la documentación.}
 */
function factorial($numero) {
    if ($numero < 0) {
        throw new Exception("El número debe ser un entero positivo.");
    }

    if ($numero == 0) {
        return 1;
    }

    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}


/**
 * Calcula los primeros $numero elementos de la serie de Fibonacci.
 *
 * @param int $numero El número de elementos que se quieren calcular de la serie.
 * @return array La serie de Fibonacci hasta el elemento $numero.
 * @throws Exception Si el número no es un entero positivo.
 * @author Valentín Fernández Guijarro
 * @version 2.0
 * {@internal Para uso interno de la documentación.}
 */
function fibonacci($numero) {
    if ($numero <= 0) {
        throw new Exception("El límite debe ser un entero positivo.");
    }

    $serie = []; // Array para almacenar la serie de Fibonacci

    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $serie[] = $a; // Se agrega el número actual a la serie
        $aux = $a;
        $a = $b;
        $b = $aux + $b;
    }

    return $serie; // Se devuelve el array con la serie de Fibonacci
}


$f=5;
$factorial = factorial($f);
echo "El factorial de $f es: $factorial" . "<br>";
$fs=10;
$serie = fibonacci($fs);
echo "<br>";
echo "Los primeros $fs elementos de la serie de Fibonacci son: " . implode("-", $serie);


