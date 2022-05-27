<?php
$frutas = [
    'laranja', //0
    'banana', //1
    'abacaxi' //2
];


echo '<ul>';

for ($i=0;$i<=2;$i++){
     
   echo '<li>'. $frutas[$i] . '</li>';
   }

   echo '</ul>';