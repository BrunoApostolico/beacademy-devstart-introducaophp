<?php

include 'Aluno.php';

$a1 = new Aluno(); //instanciando a classe
$a1-> nome = 'Bruno';
$a1-> cpf = '123.123.123-12';


$aluno = [
    'nome' => 'Bruno',
    'cpf' => '057.829.017-00',
];


$aluno2 = [
    'Nome' => 'Priscila',
    'cpf' => '057.829.017-00',
];


$aluno3 = [
    'NOME' => 'Eloah',
    'cpf' => '057.829.017-00',
];