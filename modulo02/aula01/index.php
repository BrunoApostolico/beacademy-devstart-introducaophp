<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1-> nome = 'Bruno';
$p1-> cpf = '123.123.123-00';
$p1-> salario = 1000;

var_dump($p1);