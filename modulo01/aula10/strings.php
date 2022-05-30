<?php

$nome = 'bruno'; //Bruno
$sobrenome = 'APOSTOLICO'; //Apostolico

$nome2 ='priscila barboza'; // Priscila Barboza

echo "Nome: " . ucfirst($nome) . PHP_EOL;
echo "Sobrenome: " . ucfirst(strtolower($sobrenome)). PHP_EOL;
echo "Nome 2: " . ucwords($nome2);