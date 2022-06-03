<?php

include 'Produto.php';


//echo $p2->teste('café'); //Chamando um método da classe produto

$p1 = new Produto('Tênis para corrida',299);
$p1->setDescricao('Tenis para corrida profissional');
//$p1-> setNome('Tênis para corrida');
//$p1-> setValor(299);

$p2 = new Produto('Calça Jeans', 100);
//$p2-> setNome('Calça Jeans');
//$p2-> setValor(-100);

$p3 = new Produto('Calça Branca',99);
//$p3-> setNome('Calça Branca');

var_dump($p1);
var_dump($p2);
var_dump($p3);