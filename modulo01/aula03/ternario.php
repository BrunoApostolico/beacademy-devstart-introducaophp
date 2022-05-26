<?php

$idade = 19;

echo $idade >= 18 ?  "de maior" : "de menor";
echo "<br>";

$nome = "Bruno";
echo isset($nome) ? $nome : "nome não definido";
echo "<br>";

echo $nome ?? 'nome não definido';