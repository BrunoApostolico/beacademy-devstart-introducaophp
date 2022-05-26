<?php

$nome = "Bruno";
$sobrenome = "Apostolico";
$idade = 36;
$cidade = "Rio de Janeiro";

$nome2 = "Priscila";
$nome2 .= "Barboza"; //Priscila Barboza

echo $nome. " " .$sobrenome;
echo "<br>";

echo "Eu me chamo ".$nome ." ".$sobrenome. " tenho ".$idade ." anos e moro no ".$cidade;
echo "<br>";

echo "Eu me chamo {$nome} $sobrenome tenho $idade anos e moro no ${cidade}";