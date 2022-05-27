<?php

$bandas = [
    'Oficina G3', //0
    'Novo Som', //1
    'Listen', //2
    'Catedral', //3
    'Diante do Trono' //4
];

$bandas[100] = 'Building 429';
$bandas[9] = 'Hillsong';

$bandas[2] = 'Jesus Culture';

echo '<ul>';

foreach($bandas as $banda){
    echo "<li>{$banda}</li>";
}

/* for ($i=0;$i<=3;$i++){
    echo '<li>'.$bandas[$i].'</li>';
} */

echo '</ul>';