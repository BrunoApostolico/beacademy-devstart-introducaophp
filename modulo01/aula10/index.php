<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.5,
    5,
    6,
];

function mediaDeNotas(array $notas): float 
{
  /*   $total = 0;
    $quantidade = 0;

    foreach ($notas as $cadaNota){
        $total += $cadaNota;
        $quantidade++;
    } 
    
    return $total / $quantidade;
    */

/*     $total = array_sum($notas); //soma os valores do array
    $quantidade = count($notas); //conta os valores do array */

    //return $total / $quantidade;
    return array_sum($notas) / count($notas);
}

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB).PHP_EOL;