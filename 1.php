<?php

function evaluarNumero($number) {
    echo "El numero " . $number . " " . (esPrimo($number) ? "es primo" : 'no es primo') . "<br>";
    echo "El numero " . $number . " " . (esCapicula($number) ? "es capicula" : 'no es capicula') . "<br>";
    echo "Del numero " . $number . " " . (sumaEsPrimo($number) ? "la suma de sus digitos es par" : 'la suma de sus digitos es impar') . "<br>";
}

function esPrimo($number) {
    if($number <= 1) return false;
    if($number <= 3) return true;
    if($number % 2 === 0 || $number % 3 === 0) return false;
    for($i = 5; $i*$i <= $number; $i += 6)  {
        if($number % $i === 0 || $number % ($i +2) === 0) {
            return false;
        }
    }
    return true;
}

function esCapicula($number) {
    $enString = (string)$number;
    $invertido = strrev($enString);
    if ($enString === $invertido) {
        return true;
    }
    return false;
}

function sumaEsPrimo($number) {
    $enString = (string)$number;
    $enArray = str_split($enString);
    $suma = 0;
    foreach ($enArray as $key => $value) {
        $suma = $suma + $value;
    }
    if($suma % 2 === 0) return true;
    return false;
}

evaluarNumero(152);