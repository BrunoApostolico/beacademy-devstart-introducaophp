<?php
$frutas = [
    'laranja', //0
    'banana', //1
    'abacaxi' //2
];

//adicionando nova linha no array
$frutas[] = 'maça'; //3 (Se n definir a posição entra no ultimo)

$frutas[10] = 'melancia';//pode escolher a posição no array

$frutas[7] = 'morango';

$frutas[] = 'tangerina';

var_dump($frutas);
?>
<ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[2]; ?></li>
    <li><?php echo $frutas[3]; ?></li>
    <li><?php echo $frutas[7]; ?></li>
    <li><?php echo $frutas[10]; ?></li>
</ul>