<?php

include 'Produto.php';

$p2 = new Produto();

//echo $p2->teste('café'); //Chamando um método da classe produto

$p1 = new Produto();
$p1-> alterarNome('Tenis para corrida');
$p1-> alterarValor(299);

// $p2-> nome = 'Calça Jeans';
// $p2-> valor = -100;

 var_dump($p1);
// var_dump($p2); 